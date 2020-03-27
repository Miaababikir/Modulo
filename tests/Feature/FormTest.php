<?php

namespace Tests\Feature;

use App\Form;
use App\Submission;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

class FormTest extends TestCase
{
    use RefreshDatabase;

    /**
    * @test
    */
     public function user_can_see_list_of_all_his_form()
    {
        $this->signIn();

        factory(Form::class, 5)->create();

        $this->get('/forms')->assertViewHas('forms');
    }


    /**
    * @test
    */
     public function auth_user_can_create_new_form()
    {
        $user = $this->signIn();

        $this->post('/forms', [
            'name' => 'New Form',
        ]);

        $this->assertDatabaseHas('forms', ['name' => 'New Form', 'user_id' => $user->id]);

    }

    /**
    * @test
    */
     public function auth_user_can_update_his_forms()
    {
        $form = factory(Form::class)->create();
        $this->signIn();

        $this->put("/forms/$form->id", [
            'name' => 'Updated name',
            'forward_to' => 'updated@test.test'
        ]);

        $this->assertDatabaseHas('forms', ['name' => 'Updated name', 'forward_to' => 'updated@test.test']);
    }

    /**
     * @test
     */
    public function auth_user_can_delete_form()
    {
        $form = factory(Form::class)->create();
        $this->signIn();

        $this->delete("/forms/$form->id");

        $this->assertDatabaseMissing('forms', ['name' => $form->name]);

    }

    /**
     * @test
     */
    public function auth_user_can_get_his_forms_submissions()
    {
        $user = $this->signIn();
        $form = factory(Form::class)->create(['user_id' => $user->id]);
        factory(Submission::class, 5)->create(['form_id' => $form->id]);

        $this->get("/forms/$form->id")->assertViewHas('form');
    }

    /**
    * @test
    */
     public function token_is_created_when_creating_new_form()
    {
        $form = factory(Form::class)->create();
        $this->assertNotEmpty($form->token);
    }
}
