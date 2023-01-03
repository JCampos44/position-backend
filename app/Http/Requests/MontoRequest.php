<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MontoRequest extends FormRequest
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
            'fecha' => 'required|date',
            'monto' => 'required|integer|gt:0'
        ];
    }

    public function messages()
    {
        return [
            'fecha.required' => 'La fecha es requerida',
            'fecha.date' => 'La fecha debe tener un formato válido',
            'monto.required' => 'El monto es requerido',
            'monto.integer' => 'El monto debe ser un número entero',
            'monto.gt' => 'El monto debe ser mayor que 0'
        ];
    }
}
