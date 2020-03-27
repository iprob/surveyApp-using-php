<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateResponseRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [

            'responses.*.answer_id' => ['required'],
            'responses.*.mcq_id' => ['required'],
            'survey.name' => ['required'],
            'survey.email' => ['required','email'],

        ];

        return $rules;
    }
}
