<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatekenderaanRequest extends FormRequest
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

            'activity' => [
                'string',
                'required',
            ],

            'jenisHaluan' => [
                'string',
                'required',
            ],

            'destinasi' => [
                'string',
                'required',
            ],

            'tarikh' => [
                'string',
            ],

            'bilPenumpang' => [
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
