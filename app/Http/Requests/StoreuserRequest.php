<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreuserRequest extends FormRequest
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

        'name' => [
            'string',
            'required',
        ],

        'email' => [
            'string',
            'required',
        ],

        'role' => [
            'string',
            'required',
        ],

        'password' => [
            'string',
            'required',
        ],

        'namaPenuh' => [
            'string',
            'required',
        ],

        'telNo' => [
            'string',
            'required',
        ],

        'icNo' => [
            'string',
            'required',
        ],

        'alamat' => [
            'string',
            'required',
        ],

        'jantina' => [
            'string',
            'required',
        ],

        'status' => [
            'string',
            'required',
        ],

        'levelAkademik' => [
            'string',
            'required',
        ],

        'tanggungan' => [
            'string',
            'required',
        ],


        ];
    }
}
