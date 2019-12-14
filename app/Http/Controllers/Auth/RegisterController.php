<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'age' =>['required', 'integer', 'max:150'],
            'name_kana' =>['required', 'string', 'max:255'],
            'postal_code' =>['required', 'string', 'max:21'],
            'address' =>['required', 'string', 'max:255'],
            'address_kana'=>['required', 'string', 'max:255'],
            'tel_number' =>['required', 'string', 'max:50'],
            'gender' =>['required', 'string', 'max:10'],
            'nickname'=>['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'birthday' =>['required', 'date', 'max:15'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'age' => $data['age'],
            'name_kana' => $data['name_kana'],
            'postal_code' => $data['postal_code'],
            'address' => $data['address'],
            'address_kana'=> $data['address_kana'],
            'tel_number' => $data['tel_number'],
            'gender' => $data['gender'],
            'nickname'=> $data['nickname'],
            'email' => $data['email'],
            'birthday' =>$data['birthday'],
            'password' => Hash::make($data['password']),
            
        ]);
    }
}
