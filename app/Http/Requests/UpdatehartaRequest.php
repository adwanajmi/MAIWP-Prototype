<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatehartaRequest extends FormRequest
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
                'required',
            ],

            'jenisPendapatan' => [
                'string',
                'required',
            ],
            'totalPendapatan' => [
                'string',
                'required',
            ],

            'pendapatanTambahan' => [
                'string',
                'required',
            ],

            'kategori' => [
                'string',
                'required',
            ],

            'tanggungan' => [
                'string',
                'required',
            ],
            'tarikhDeclare' => [
                'string',
                'required',
            ],
        ];
    }
}
