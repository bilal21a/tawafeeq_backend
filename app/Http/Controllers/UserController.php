<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $name_search = $request->name;
        $nationality_search = $request->nationality;
        $country_of_residence_search = $request->country_of_residence;
        $age_from_search = $request->age_from;
        $age_to_search = $request->age_to;
        $marital_status_search = $request->marital_status;
        $users = User::
            when(request('name'), function ($q) use($request) {
                return $q->where('name', 'LIKE', "%{$request->name}%");
            })
            ->when(request('nationality'), function ($q) {
                return $q->where('nationality', request('nationality'));
            })
            ->when(request('country_of_residence'), function ($q) {
                return $q->where('country_of_residence', request('country_of_residence'));
            })
            ->when(request('look_for'), function ($q) {
                return $q->where('gender', request('look_for'));
            })
            ->when(request('city'), function ($q) {
                return $q->where('city', request('city'));
            })
            ->whereHas('profile', function ($query) {
                $query->when(request('marital_status'), function ($q) {
                    return $q->where('marital_status', request('marital_status'));
                })
                    ->when(request('type_of_marriage'), function ($q) {
                        return $q->where('type_of_marriage', request('type_of_marriage'));
                    })
                    ->when(request('qualification'), function ($q) {
                        return $q->where('qualification', request('qualification'));
                    })
                    ->when(request('weight_from'), function ($q) {
                        return $q->whereBetween('weight', request(['weight_from', 'weight_to']));
                    })
                    ->when(request('height_from'), function ($q) {
                        return $q->whereBetween('height_from', request(['height_from', 'height_to']));
                    })
                    ->when(request('age_from'), function ($q) {
                        return $q->whereBetween('age', request(['age_from', 'age_to']));
                    });
            })->paginate(16);
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

        return view('members_list', compact('maritalStatusNames', 'countryNames', 'users', 'name_search', 'nationality_search', 'country_of_residence_search', 'age_from_search', 'age_to_search', 'marital_status_search'));
    }

    public function home()
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
        $users = User::with('profile')->latest()->take(10)->get();
        return view('home', compact('countryNames', 'maritalStatusNames', 'users'));
    }
}
