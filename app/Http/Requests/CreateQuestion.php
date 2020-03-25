<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Question;

class CreateQuestion extends FormRequest
{
    private $title;
    private $purpose;



    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [

            'title' => ['required'],
            'purpose' => ['required'],

        ];

        // if($this->route('questions'))
        // {
        //     $rules['title'] = Rule::unique('questions')->ignore($this->route('question')->id);
        //     $rules['purpose'] = Rule::unique('questions')->ignore($this->route('question')->id);
        // }
        // else
        // {
        //     $rules['title'] = Rule::unique('questions');
        // }

        return $rules;
    }
}
