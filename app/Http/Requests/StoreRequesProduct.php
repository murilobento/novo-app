<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequesProduct extends FormRequest
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
            'description' => "required|min:3|max:500",
            'price' => 'required|numeric',
            'qtd' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
            'status' => 'required'
        ];
    }
    public function messages()
    {
        return [
            //nome
            'name.required' => 'O nome é obrigatório!',
            'name.min' => 'O nome deve conter no mínimo 3 caracteres!',
            'name.max' => 'O nome deve conter no máximo 30 caracteres!',
            'name.unique' => 'Este nome já esta em uso.',
            //description
            'description.required' => 'A descrição é obrigatória!',
            'description.min' => 'A descrição deve conter no mínimo 3 caracteres!',
            'description.max' => 'A descrição deve conter no máximo 500 caracteres!',
            //price
            'price.required' => 'O preço é obrigatório!',
            'price.numeric' => 'O campo preço aceita somente números!',
            //price
            'qtd.required' => 'A quantidade é obrigatória!',
            'qtd.numeric' => 'O campo quantidade aceita somente números!',
        ];
    }
}
