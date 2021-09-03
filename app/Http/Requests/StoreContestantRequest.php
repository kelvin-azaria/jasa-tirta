<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContestantRequest extends FormRequest
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

    public function messages()
    {
        return [
            'ktm_image_path.required' => 'Harap pilih file gambar KTM anda',
            'ktm_image_path.mimes' => 'File gambar harus berupa JPG atau JPEG',
            'ktm_image_path.max' => 'Ukuran file gambar maksimal 5 MB',
        ];
    }

    public function rules()
    {
        return [
            'name'               => 'required|max:50',
            'ktm_image_path'     => 'required|image|mimes:jpg,jpeg|max:5000',
            'campus_name'        => 'required|max:50',
            'campus_province'    => 'required|max:50',
            'campus_city'        => 'required|max:50',
            'id_card_address'    => 'required|max:255',
            'residence_address'  => 'required|max:255',
            'phone'              => 'required|unique:contestants|max:13',
            'birth_date'         => 'required|date|before: 18 years ago',
            'instagram_video_url'=> 'required',
            'tiktok_url'         => 'required',
            'description'        => 'string|nullable',
        ];
    }
}
