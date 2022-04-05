<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorebilikRequest extends FormRequest
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
        return [
            'user_id' => [
                'string',
            ],

            'namaMesyuarat' => [
                'string',
                'required',
            ],

            'pengerusi' => [
                'string',
                'required',
            ],

            'maklumat' => [
                'string',
                'required',
            ],

            'jenisBilik' => [
                'string',
                'required',
            ],

            'tarikh' => [
                'string',
            ],

            'bilAhli' => [
                'string',
                'required',
            ],

            'desc' => [
                'string',
                'required',
            ],
        ];
    }
}
