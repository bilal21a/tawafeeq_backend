<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'gender' => ['required'],
            'nationality' => ['required'],
            'country_of_residence' => ['required'],
            'city' => ['required'],
            'type_of_marraige' => ['required'],
            'matarial_status' => ['required'],
            'age' => ['required'],
            'no_of_childs' => ['required'],
            'phone' => ['required'],
            'weight' => ['required'],
            'height' => ['required'],
            'skin_color' => ['required'],
            'physique' => ['required'],
            'job' => ['required'],
            'qulification' => ['required'],
            'financial_condition' => ['required'],
            'health_status' => ['required'],
            'religious_commitment' => ['required'],
            'about' => ['required'],
            'specification_of_partner' => ['required'],
        ]);
        dd($data);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // dd($data);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender'],
            'nationality' => $data['nationality'],
            'country_of_residence' => $data['country_of_residence'],
            'city' => $data['city'],
        ]);
        $user->profile()->create([
            'type_of_marraige' => $data['type_of_marriage'],
            'matarial_status' => $data['marital_status'],
            'age' => $data['age'],
            'no_of_childs' => $data['no_of_childs'],
            'phone' => $data['phone'],
            'weight' => $data['weight'],
            'height' => $data['height'],
            'skin_color' => $data['skin_color'],
            'physique' => $data['physique'],
            'job' => $data['job'],
            'qulification' => $data['qulification'],
            'financial_condition' => $data['financial_condition'],
            'health_status' => $data['health_status'],
            'religious_commitment' => $data['religious_commitment'],
            'about' => $data['about'],
            'specification_of_partner' => $data['specification_of_partner'],
        ]);
    // dd($user);
        return $user;
    }
}
