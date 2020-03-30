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

    public function create()
    {
        return view('forms.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'forward_to' => 'sometimes',
        ]);

        auth()->user()->forms()->create($data);

        return response()->json(['message' => 'Created']);
    }

    public function update(Request $request, Form $form)
    {
        $data = $request->validate([
            'name' => 'sometimes',
            'forward_to' => 'sometimes',
        ]);

        $form->update($data);

        return response()->json(['message' => 'Updated']);
    }

    public function show(Form $form)
    {
        return view('forms.show', ['form' => $form]);
    }

    public function destroy(Form $form)
    {
        $form->delete();

        return response()->json(['message' => 'Deleted']);
    }
}
