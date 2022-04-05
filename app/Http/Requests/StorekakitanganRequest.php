<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorekakitanganRequest extends FormRequest
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
            'pekerja_id' => [
                'string',
                'required',
            ],

            'namaPenuh' => [
                'string',
                'required',
            ],

            'icNo' => [
                'string',
                'required',
            ],

            'telNo' => [
                'string',
                'required',
            ],

            'email' => [
                'string',
                'required',
            ],

            'tarafPerkhidmatan' => [
                'string',
                'required',
            ],

            'jawatan' => [
                'string',
                'required',
            ],

            'cawangan' => [
                'string',
                'required',
            ],

        ];
    }
}
