<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComentarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'texto' => 'required|min:1|max:255',
            'imagem' => 'min:3|max:255',
            'like' => 'min:0',
            'post_fk' => 'required|min:1|max:255',
            'user_fk' => 'required|min:1|max:255',
        ];

        return $rules;
    }
}
