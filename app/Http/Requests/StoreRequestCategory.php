<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequestCategory extends FormRequest
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
        $id = $this->segment(2);
        return [
            'name' => "required|min:3|max:30|unique:categories,name,{$id},id",
        ];
    }
    public function messages()
    {
        return [
            //nome
            'name.required' => 'O nome é obrigatório!',
            'name.min' => 'Nome deve conter no mínimo 3 caracteres!',
            'name.max' => 'Nome deve conter no máximo 30 caracteres!',
            'name.unique' => 'Este nome já esta em uso.',
        ];
    }
}
