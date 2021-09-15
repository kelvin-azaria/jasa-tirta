<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:15', 'unique:users'],
            'birth_date' => ['required', 'date'],
            'work_unit' => ['required', 'string', 'max:255'],
            'npp' => ['required', 'string', 'max:255', 'unique:users'],
            // 'jrku_image_path' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:5000'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        //VALIDATE IMAGE
        request()->validate([
            'jrku_image_path' => 'required|image|mimes:jpg,jpeg,png|max:5000'
        ]);

        //UPLOAD IMAGE
        $jrku_image_path = request()->file('jrku_image_path')->store('jrku/'.$data['npp'], 'public');
        
        //CREATE USER DATA
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'birth_date' => $data['birth_date'],
            'work_unit' => $data['work_unit'],
            'npp' => $data['npp'],
            'jrku_image_path' => $jrku_image_path,
            'password' => Hash::make($data['password']),
        ]);
        
    }
}
