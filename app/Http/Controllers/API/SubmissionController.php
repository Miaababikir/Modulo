<?php

namespace App\Http\Controllers\API;

use App\Form;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SubmissionController extends Controller
{
    public function store($token)
    {
        $form = Form::whereToken($token)->firstOrFail();

        if (count(\request()->all()) == 0) {
            throw ValidationException::withMessages(['error' => 'The request is empty']);
        }

        $form->submissions()->create(['data' => json_encode(\request()->all())]);

        return response()->json(['message' => 'Created']);

    }
}
