<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        'name'              => 'required|string|max:255',
        'email'             => 'required|string|email|max:255|unique:users'.$this->id,
        'phone'             => 'required|string|max:15|unique:users'.$this->id,
        'birth_date'        => 'required|date',
        'work_unit'         => 'required|string|max:255',
        'npp'               => 'required|string|max:255|unique:users'.$this->id,
      ];
    }
}
