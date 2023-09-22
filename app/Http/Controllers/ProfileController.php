<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        $user_id = Auth::id();
        $user = User::where('id', $user_id)
            ->first();
        return view('profile.profile_new', compact('user', 'user_id'));
    }
    public function edit_profile($id)
    {
        $user = User::where('id', $id)
            ->first();
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
        $cities=[
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
        $type_of_marriages=
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
        return view('profile.edit_profile', compact('user', 'id', 'nationality','cities','type_of_marriages','maritalStatusNames'));
    }
    public function update_profile(Request $request, $id)
    {
        dd($id);
    }
    public function members_profile($id)
    {
        $user_id = Auth::id();
        $user = User::where('id', $id)
            ->first();
        return view('members_profile', compact('user', 'user_id'));
    }
}
