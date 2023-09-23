<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
    public function rules()
    {
        // dd('hello');
        return [
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'gender' => ['required'],
            'nationality' => ['required'],
            'country_of_residence' => ['required'],
            'city' => ['required'],
            'type_of_marriage' => ['required'],
            'marital_status' => ['required'],
            'age' => ['required'],
            'no_of_childs' => ['required'],
            'phone' => ['required'],
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
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'حقل مطلوب',
            'email.required' => 'حقل مطلوب',
            'password.required' => 'حقل مطلوب',
            'gender.required' => 'حقل مطلوب',
            'nationality.required' => 'حقل مطلوب',
            'country_of_residence.required' => 'حقل مطلوب',
            'city.required' => 'حقل مطلوب',
            'type_of_marriage.required' => 'حقل مطلوب',
            'marital_status.required' => 'حقل مطلوب',
            'age.required' => 'حقل مطلوب',
            'no_of_childs.required' => 'حقل مطلوب',
            'phone.required' => 'حقل مطلوب',
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
    }
}
