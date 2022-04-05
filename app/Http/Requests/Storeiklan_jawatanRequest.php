<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Storeiklan_jawatanRequest extends FormRequest
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
            'tarikhMula' => [
                'string',
                'required',
            ],

            'tarikhTutup' => [
                'string',
                'required',
            ],

            'jawatan' => [
                'string',
                'required',
            ],

            'penempatan' => [
                'string',
                'required',
            ],

            'kekosongan' => [
                'string',
                'required',
            ],

            'tarafJawatan' => [
                'string',
                'required',
            ],

        ];
    }
}
