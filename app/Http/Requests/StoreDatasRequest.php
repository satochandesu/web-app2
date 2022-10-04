<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDatasRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
                'bt' => 'required|numeric|between:35.0,41.0',
                'pulse' => 'required|integer|min:0',
                'Trb_bw' => 'required|numeric|min:0',
                'Tra_bw' => 'required|numeric|between:10,100',
                'fatigue' => 'required|integer|between:0,10',
        ];
    }
        public function attributes()
    {
        return [
            'bt' => '体温(朝)',
            'pulse' => '心拍数',
            'Trb_bw' => '体重(Tr前)',
            'Tra_bw' => '体重(Tr後)',
            'fatigue' => '疲労度',
        ];
    }
}
