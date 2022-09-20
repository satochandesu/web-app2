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
                'pulse' => 'required|integer|min:2',
                'fatigue' => 'required|integer|min:1',
        ];
    }
        public function attributes()
    {
        return [
            'bt' => '体温(朝)',
            'pulse' => '心拍数',
            'Trb-bw' => '体重(Tr前)',
            'Tra-bw' => '体重(Tr後)',
            'fatigue' => '疲労度',
        ];
    }
}
