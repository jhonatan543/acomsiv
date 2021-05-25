<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class RequestUpdateUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules($user)
    {
        $values = [
            'name'=> 'required|min:3|max:30|regex:/^[A-Z,a-z][A-Z,a-z, ]+$/',
            'lastname' => 'required|min:3|max:30|regex:/^[A-Z,a-z][A-Z,a-z, ]+$/',
            'email' => ['required','email',Rule::unique('users','email')->ignore($user)],
            'role'=>'required|in:admin,cliente',
            'profile_photo_path' => 'nullable|image|max:2048|mimes:jpeg,png,svg,jpg,gif,webp',
        ];
        if(!$user){
            $validation_password = [
                'password' => 'required|confirmed',
            ];
            $values = array_merge($values,$validation_password);
        }
        return $values;
    }

    public function messages()
    {
        return[
            //RESTRICCION NOMBRE
            'name.required' => 'El campo nombre es obligatorio.',
            'name.min' => 'El campo nombre debe contener al menos 3 caracteres',
            'name.regex' => 'El campo nombre solo acepta letras.',
            //RESTRICCION APELLIDO
            'lastname.required' => 'El campo apellido es obligatorio.',
            'lastname.min' => 'El campo apellido debe contener al menos 3 caracteres',
            'lastname.regex' => 'El campo apellido solo acepta letras.',
            //RESTRICCION ROL
            'role.required' => 'El campo rol es obligatorio.',

             //RETRISCCION IMAGEN
            'profile_photo_path.image' => 'El campo solo acepta imagenes.',
           'profile_photo_path.max' => 'El archivo imagen no debe pesar más de 2048 kilobytes.',
           'profile_photo_path.mimes' => 'El campo imagen soacepta estos tipos de formato:jpeg,png,svg,jpg,gif.',
        ];
    }
}
