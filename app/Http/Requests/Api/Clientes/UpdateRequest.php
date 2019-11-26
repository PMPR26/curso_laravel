<?php

namespace App\Http\Requests\Api\Clientes;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class UpdateRequest extends FormRequest
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
            'nombre' => 'required|min:5|max:20',
            'apellido' => 'required',
            'direccion' => 'required',
            'fecha_nacimiento' => 'required',
            'telefono' => 'required',
            'email' => 'required'
        ];
    }
    protected function failedValidation(Validator $validator)
    { 
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(response()->json(
            [
                'success'=>false,
                'data'=>$errors,
                'message'=> "Error al validar los campos"
            ],
            JsonResponse::HTTP_UNPROCESSABLE_ENTITY
        ));
    }
}
