<?php

namespace Tests\Feature\API;

use App\Form;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Validation\ValidationException;
use Tests\TestCase;

class SubmissionTest extends TestCase
{
    use RefreshDatabase;

    /**
    * @test
    */
     public function can_submit_data_to_form()
    {
        $form = factory(Form::class)->create();

        $data = ['title' => 'This is title', 'body' => 'This is body'];

        $this->post("/api/forms/$form->token", $data);

        $this->assertDatabaseHas('submissions', [
            'form_id' => $form->id,
            'data' => json_encode($data)
        ]);
    }

    /**
    * @test
    */
     public function should_return_not_found_when_there_is_no_form_to_submit()
    {
        $this->withExceptionHandling();
        $this->post("/api/forms/wrong-token")->assertStatus(404);
    }

    /**
     * @test
     */
    public function should_throw_validation_exception_when_request_empty()
    {
        $form = factory(Form::class)->create();

        try {
            $this->post("/api/forms/$form->token");
        }
        catch (\Exception $exception) {
            $this->assertInstanceOf(ValidationException::class, $exception);
        }

        $this->assertDatabaseMissing('submissions', [
            'form_id' => $form->id,
        ]);
    }

    /**
    * TODO find way to not store empty values
    */
     public function should_not_store_empty_values()
    {
        $form = factory(Form::class)->create();

        $data = ['title' => 'This is title', 'body' => 'This is body', 'b'];

        $this->post("/api/forms/$form->token", $data);

        $this->assertDatabaseHas('submissions', [
            'form_id' => $form->id,
            'data' => json_encode($data)
        ]);
    }
}
