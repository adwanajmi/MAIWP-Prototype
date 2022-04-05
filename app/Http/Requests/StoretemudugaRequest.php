<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoretemudugaRequest extends FormRequest
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

            'panel_id' => [
                'string',
                'required',
            ],

            'tarikhTemuduga' => [
                'string',
                'required',
            ],

            'lokasi' => [
                'string',
                'required',
            ],

            'markahPenilaian' => [
                'string',
                'required',
            ],

            'status' => [
                'string',
                'required',
            ],

        ];
    }
}
