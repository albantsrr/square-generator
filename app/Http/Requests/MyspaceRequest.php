<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MyspaceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

                'name' => 'required|min:5|max:255',
                'url' => 'required|min:5|max:255'

        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Le champ "Name" est requis',
            'url.required' => 'Le champ "Url" est requis'
            /*'url.min'*/
        ];
    }
}
