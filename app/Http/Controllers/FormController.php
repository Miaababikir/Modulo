<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{

    public function index()
    {
        $forms = auth()->user()->forms;

        return view('forms.index', ['forms' => $forms]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'forward_to' => 'sometimes',
        ]);

        auth()->user()->forms()->create($data);
    }

    public function update(Request $request, Form $form)
    {
        $data = $request->validate([
            'name' => 'sometimes',
            'forward_to' => 'sometimes',
        ]);

        $form->update($data);
    }

    public function destroy(Form $form)
    {
        $form->delete();
    }
}
