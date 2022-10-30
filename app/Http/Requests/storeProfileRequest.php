<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeProfileRequest extends FormRequest
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
                'profileName' => 'required|string',
                'sports' => 'required|string',
                'team' => 'required|string',
                'number' => 'required|integer|min:0',
                'position' => 'required|string',
        ];
    }
    public function attributes()
    {
        return [
            'profileName' => '名前',
            'sports' => 'スポーツ',
            'team' => 'チーム',
            'number' => '背番号',
            'position' => 'ポジション',
        ];
    }
}
