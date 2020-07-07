<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class targetRequest extends FormRequest
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
            'will' => 'required|max:100',
            'can' => 'required|max:100',
            'must' => 'required|max:100'    
        ];
    }

    public function attributers()
    {
        return [
            'will' => '目標',
            'can'  => 'できること',
            'must' => '必要条件'
        ];
    }
}
