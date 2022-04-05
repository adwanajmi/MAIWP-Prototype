<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateperkhidmatanRequest extends FormRequest
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
            'perkhidmatan_id' => [
                'string',
                'required',
            ],

            'kontrak' => [
                'string',
                'required',
            ],

            'pencen' => [
                'string',
                'required',
            ],

            'tarikhMula' => [
                'string',
                'required',
            ],

            'tempoh' => [
                'string',
                'required',
            ],

            'kursus' => [
                'string',
                'required',
            ],

            'tempohKursus' => [
                'string',
                'required',
            ],
        ];
    }
}
