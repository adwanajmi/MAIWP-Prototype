<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatepermohonanRequest extends FormRequest
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
            'pemohon_id' => [
                'string',
                'required',
            ],

            'nama' => [
                'string',
                'required',
            ],

            'alamat' => [
                'string',
                'required',
            ],

            'icNo' => [
                'string',
                'required',
            ],

            'jantina' => [
                'string',
                'required',
            ],

            'negeriAsal' => [
                'string',
                'required',
            ],

            'warganegara' => [
                'string',
                'required',
            ],

            'status' => [
                'string',
                'required',
            ],

            'akademik' => [
                'string',
                'required',
            ],

            'pengalamanKerja' => [
                'string',
                'required',
            ],

            'jawatan_id' => [
                'string',
                'required',
            ],
        ];
    }
}
