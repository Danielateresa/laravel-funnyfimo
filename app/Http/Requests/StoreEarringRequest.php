<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEarringRequest extends FormRequest
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
           'name'=>'required|max:100',
           'code'=>'nullable',
           'price'=>'nullable|decimal:2',
           'description'=>'nullable',
           'img'=>'nullable',
        ];
    }
}
