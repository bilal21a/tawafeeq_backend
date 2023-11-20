<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Traits\RegistersUsers;
use Carbon\Carbon;
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
        $customMessages = [
            'name.required' => 'حقل مطلوب',
            'email.required' => 'حقل مطلوب',
            'email.unique' => 'موجود أصلا',
            'phone.required' => 'حقل مطلوب',
            'phone.unique' => 'موجود أصلا',
            'password.required' => 'حقل مطلوب',
            'gender.required' => 'حقل مطلوب',
            'nationality.required' => 'حقل مطلوب',
            'country_of_residence.required' => 'حقل مطلوب',
            'city.required' => 'حقل مطلوب',
            'type_of_marriage.required' => 'حقل مطلوب',
            'marital_status.required' => 'حقل مطلوب',
            'age.required' => 'حقل مطلوب',
            'no_of_childs.required' =>'حقل مطلوب',
            'weight.required' => 'حقل مطلوب',
            'height.required' => 'حقل مطلوب',
            'skin_color.required' => 'حقل مطلوب',
            'physique.required' => 'حقل مطلوب',
            'job.required' => 'حقل مطلوب',
            'qualification.required' => 'حقل مطلوب',
            'financial_condition.required' => 'حقل مطلوب',
            'health_status.required' => 'حقل مطلوب',
            'religious_commitment.required' => 'حقل مطلوب',
            'about.required' => 'حقل مطلوب',
            'specification_of_partner.required' => 'حقل مطلوب',
        ];

        return Validator::make($data, [
            'name' => ['required'],
            'email' => ['required','unique:users,email'],
            'phone' => ['required','unique:users,phone'],
            'password' => ['required'],
            'gender' => ['required'],
            'nationality' => ['required'],
            'country_of_residence' => ['required'],
            'city' => ['required'],
            'type_of_marriage' => ['required'],
            'marital_status' => ['required'],
            'age' => ['required'],
            'no_of_childs' => ['required'],
            'weight' => ['required'],
            'height' => ['required'],
            'skin_color' => ['required'],
            'physique' => ['required'],
            'job' => ['required'],
            'qualification' => ['required'],
            'financial_condition' => ['required'],
            'health_status' => ['required'],
            'religious_commitment' => ['required'],
            'about' => ['required'],
            'specification_of_partner' => ['required'],
        ], $customMessages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $currentDate = Carbon::now();
        $newDate = $currentDate->addDays(365);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender'],
            'nationality' => $data['nationality'],
            'country_of_residence' => $data['country_of_residence'],
            'expired_at' => $newDate,
            'city' => $data['city'],
        ]);
        $user->profile()->create([
            'type_of_marriage' => $data['type_of_marriage'],
            'marital_status' => $data['marital_status'],
            'age' => $data['age'],
            'no_of_childs' => $data['no_of_childs'],
            'weight' => $data['weight'],
            'height' => $data['height'],
            'skin_color' => $data['skin_color'],
            'physique' => $data['physique'],
            'job' => $data['job'],
            'qualification' => $data['qualification'],
            'financial_condition' => $data['financial_condition'],
            'health_status' => $data['health_status'],
            'religious_commitment' => $data['religious_commitment'],
            'about' => $data['about'],
            'specification_of_partner' => $data['specification_of_partner'],
        ]);
        return $user;
    }
}
