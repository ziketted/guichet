<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnrolementRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return  [
            'lettre'=>'required|mimes:pdf',
            'validite',
            'autre_document'=>'required|mimes:pdf',
            'commentaires',
        ];
    }

    public function messages()
    {
        return [
            'lettre.required' => 'Veuillez charger une lettre en format PDF',
            'lettre.mimes' => 'Veuillez charger une lettre en format PDF',
            'autre_document.required' => 'Veuillez charger un document en format PDF',
        ];
    }
}
