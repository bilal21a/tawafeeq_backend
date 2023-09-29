<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Favlist;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class UserController extends Controller
{
    public function index(Request $request)
    {
        //for favourite listing
        $page = $request->page;
        if ($page == 'starred') {
            $favs = Favlist::where('rater_id', auth()->id())->pluck('rated_to_id');
            $users = User::whereIn('id', $favs)->paginate(16);
            return view('members_list', compact('users', 'page'));
        }

        //for search engine
        $name_search = $request->name;
        $nationality_search = $request->nationality;
        $country_of_residence_search = $request->country_of_residence;
        $age_from_search = $request->age_from;
        $age_to_search = $request->age_to;
        $marital_status_search = $request->marital_status;
        $look_for = $request->look_for;
        $users = User::when(request('name'), function ($q) use ($request) {
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
        $countryNames = Country::select('country')->pluck('country')->toArray();
        $maritalStatusNames = [
            'أعزب',
            'متزوج',
            'مطلق',
            'أرمل',
            'مطلقة',
            'أرملة',
            'عزباء',
        ];

        return view('members_list', compact('maritalStatusNames', 'look_for', 'countryNames', 'users', 'name_search', 'nationality_search', 'country_of_residence_search', 'age_from_search', 'age_to_search', 'marital_status_search'));
    }

    public function home()
    {
        $countryNames = Country::select('country')->pluck('country')->toArray();
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
    public function home_members($type)
    {
        if ($type == 'online') {
            $thresholdInMinutes = 5; // Set your desired thresholds
            $users = User::where('id','!=',auth()->id())->where(function ($query) use ($thresholdInMinutes) {
                $query->where('last_seen_at', '>=', Carbon::now()->subMinutes($thresholdInMinutes));
            })->take(10)->get();
            // $users = User::with('profile')->latest()->take(10)->get();

            // dd($users);
        } else {
            $users = User::with('profile')->latest()->take(10)->get();
        }
        if ($users->count() > 0) {
            return view('home.common.memebers', compact('users','type'));
        } else {
            return false;
        }
    }
}
