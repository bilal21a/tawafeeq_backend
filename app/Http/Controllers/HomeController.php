<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function advance_search()
    {
        return view('advance_search');
    }
    public function tawafeeq()
    {
        $countryNames = [
            "أوكرانيا", "اخر", "الاردن", "الامارات", "البحرين", "الجزائر", "السعودية", "السودان", "الصومال", "العراق",
            "الكويت", "المغرب", "اليمن", "ايران", "باكستان", "تونس", "جزر القمر", "جيبوتي", "دول غربية", "سوريا", "عُمان", "فلسطين"
        ];
        $maritalStatusNames = [
            'أعزب',
            'متزوج',
            'مطلق',
            'أرمل',
            'مطلقة',
            'أرملة',
            'عزباء',
        ];
        $users = User::with('profile')->get();
        return view('tawafeeq', compact('countryNames', 'maritalStatusNames', 'users'));
    }
}
