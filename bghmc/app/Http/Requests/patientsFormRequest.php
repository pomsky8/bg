<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class patientsFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'Fname' =>[
                'required',
                'max:255'
            ],
            'Lname' =>[
                'required',
                'max:255'
            ],
            'Address' =>[
                'required',
                'max:255'
            ],
            'Birthdate' =>[
                'required',
                'max:255' ,
                'date'
            ],
            'Admission' =>[
                'required',
                'max:15'
            ]



        ];
    }
}
