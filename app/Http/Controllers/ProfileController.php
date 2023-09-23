<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function profile()
    {
        $user_id = Auth::id();
        $user = User::where('id', $user_id)
            ->first();
        return view('profile.index', compact('user', 'user_id'));
    }
<<<<<<< HEAD
    public function edit_profile()
=======

    public function members_profile($id)
    {
        $user_id = Auth::id();
        $user = User::where('id', $id)
            ->first();
        return view('members_profile', compact('user', 'user_id'));
    }
    public function edit_profile($id)
>>>>>>> 2ed4324 (edit)
    {
        $user = auth()->user();
        $nationality = [
            'أوكرانيا',
            'اخر',
            'الاردن',
            'الامارات',
            'البحرين',
            'الجزائر',
            'السعودية',
            'السودان',
            'الصومال',
            'العراق',
            'الكويت',
            'المغرب',
            'اليمن',
            'ایران',
            'باكستان',
            'تونس',
            'جزر القمر',
            'جيبوتي',
            'دول غربية',
            'سوريا',
            'عُمان',
            'فلسطين',
        ];
        $cities = [
            'أوبوك',
            'الدوادمي',
            'المجمعة',
            'تاجورة',
            'جازان',
            'صامطة',
            'صبيا',
            'علايلي دادا',
            'الحسيمة',
            'الفنيدق',
            'اليوسفية',
            'جرادة',
            'جرسيف',
            'سلا الجديدة',
            'سوق السبت أولاد النمة',
            'شفشاون',
            'صفرو',
            'انتر',
            'طانطان',
            'محافظة الأحمدي',
            'محافظة الجهراء',
            'نبجرير',
            'ورزازات',
            'وزان',
            'أسفي',
            'أبها',
            'أبو نصير',
            'أبوظبي',
            'أجد عبر بارزونن',
            'أجد عبرين',
        ];
        $type_of_marriages =
            [
                'الزواج الأول',
                'الزواج الثاني',
                'الزواج الثالث',
                'الزواج الرابع',
                'زوجة واحدة',
                'لا أمانع تعدد الزوجات',
            ];
        $maritalStatusNames = [
            'أرمل',
            'بكالوريوس',
            'متزوج',
            'مطلق',
            'أرملة',
            'أعزب',
            'مُطلّق',
        ];
        $sikinColors = [
            'القمح الأبيض',
            'حنطي',
            'أبيض',
            'القمح البني',
            'البني الفاتح',
            'بني غامق',
        ];
        $qualifications =
            [
                'دراسة متوسطة',
                'تعليم ثانوي',
                'دراسة جامعية',
                'دكتوراه',
                'السيرة الذاتية',
                'التعليم الابتدائي',
            ];
        $financial_conditions = [
            'دخل محدود',
            'أقل من المتوسط',
            'متوسط',
            'أكثر من المتوسط',
            'جيد',
            'ميسور',
            'غني',
        ];
        $religiousOptions = [
            "أفضل عدم الإفصاح",
            "متدين جداً",
            "متدين قليلاً",
            "لست متدينًا",
            "متدين",
        ];

        return view('profile.edit_profile', compact('user', 'id', 'nationality', 'cities', 'type_of_marriages', 'maritalStatusNames', 'sikinColors', 'qualifications', 'financial_conditions', 'religiousOptions'));
    }
    public function update_profile(Request $request)
    {
        $user_id =Auth::id();
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->gender = $request->gender;
        $user->nationality = $request->nationality;
        $user->country_of_residence = $request->country_of_residence;
        $user->city = $request->city;
        $user->save();
        $profile = Profile::find($user_id);
        $profile->type_of_marriage= $request->type_of_marriage;
        $profile->marital_status= $request->marital_status;
        $profile->age= $request->age;
        $profile->no_of_childs= $request->no_of_childs;
        $profile->phone= $request->phone;
        $profile->weight= $request->weight;
        $profile->height= $request->height;
        $profile->skin_color= $request->skin_color;
        $profile->physique= $request->physique;
        $profile->job= $request->job;
        $profile->qualification= $request->qualification;
        $profile->financial_condition= $request->financial_condition;
        $profile->health_status= $request->health_status;
        $profile->religious_commitment= $request->religious_commitment;
        $profile->about= $request->about;
        $profile->specification_of_partner= $request->specification_of_partner;
        return redirect()->back();
    }
}
