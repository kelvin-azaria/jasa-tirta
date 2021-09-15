<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
    
    public function messages()
    {
        return [
            'jrku_image_path.required' => 'Harap pilih file gambar bukti akun JRku anda',
            'jrku_image_path.mimes' => 'File gambar harus berupa JPG, JPEG, atau PNG',
            'jrku_image_path.max' => 'Ukuran file gambar maksimal 5 MB',
        ];
    }

    public function rules()
    {
        return [
            'name'              => 'required|string|max:255',
            'email'             => 'required|string|email|max:255|unique:users',
            'phone'             => 'required|string|max:15|unique:users',
            'birth_date'        => 'required|date',
            'work_unit'         => 'required|string|max:255',
            'npp'               => 'required|string|max:255|unique:users',
            'jrku_image_path'   => 'required|image|mimes:jpg,jpeg,png|max:5000',
            'password'          => 'required|string|min:8|confirmed',
        ];
    }
}
