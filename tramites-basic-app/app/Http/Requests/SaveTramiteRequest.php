<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveTramiteRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|max:100',
            'descripcion' => 'required|min:3',
            'tipo_id' => 'required|integer|min:0',
            'sector_id' => 'required|integer|min:0',
            'pdf_asociado' => 'nullable|min:0'
        ];
    }
}
