<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisitFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;  //first run autorize() false - deny form sending , true - allow form sending
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()  //check the form field
    {
        return [
            'name' => 'required|string|max:10',
            'message' => 'required|string|min:10'
        ];
    }

    public function messages()  //custom error messeges
    {
        return [
            'name.required' => "Скажи своє ім'я"
        ];
    }
}
