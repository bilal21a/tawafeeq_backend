<?php

namespace App\Http\Controllers;

use App\Models\Chats;
use App\Models\Country;
use App\Models\Payment;
use App\Models\Profile;
use App\Models\ProfileVistors;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function profile(Request $request)
    {
        $user_id = Auth::id();
        $user = User::where('id', $user_id)->first();
        $chat_id = $request->chat_id;
        $partner_id = null;
        $profilevistors = ProfileVistors::where('visited_to_id', Auth::id())->with('user')->latest()->get();
        $payment=Payment::with('plan')->where('user_id',auth()->id())->first();
        if ($request->chat_id != null) {
            $chat = Chats::find($chat_id);
            if (!$chat) {
                return redirect()->route('something_went_wrong');
            }
            if ($chat->initiator_id != auth()->id() && $chat->partner_id != auth()->id()) {
                return redirect()->route('something_went_wrong');
            }
            $partner_id = $chat->initiator_id == auth()->id() ? $chat->partner_id : $chat->initiator_id;
        }
        $page=$request->page;
        return view('profile.index', compact('user','payment', 'user_id', 'chat_id', 'partner_id', 'profilevistors','page'));
    }

    public function members_profile($id)
    {
        $user_id = Auth::id();
        $profilevistors = new ProfileVistors();
        $profilevistors->visited_to_id = $id;
        $profilevistors->user_id= $user_id;
        $profilevistors->save();

        $user = User::where('id', $id)->first();
        return view('members_profile', compact('user', 'user_id'));
    }
    public function edit_profile()
    {
        $data = $this->data_list();
        $data['user'] = auth()->user();
        $data['countries'] = Country::get();

        return view('profile.edit_profile', $data);
    }
    public function update_profile(Request $request)
    {
        $customMessages = [
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
            // 'phone.required' => 'حقل مطلوب',
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

        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'gender' => ['required'],
            'nationality' => ['required'],
            'country_of_residence' => ['required'],
            'city' => ['required'],
            'type_of_marriage' => ['required'],
            'marital_status' => ['required'],
            'age' => ['required'],
            'no_of_childs' => ['required'],
            // 'phone' => ['required'],
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

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }


        $user = User::find(Auth::id());
        $user->name = $request->name;
        if ($request->password!=null) {
            $user->password = Hash::make($request->password);
        }
        $user->gender = $request->gender;
        $user->nationality = $request->nationality;
        $user->country_of_residence = $request->country_of_residence;
        $user->city = $request->city;
        // $user->phone = $request->phone;
        $user->save();
        $profile = $user->profile;
        $profile->type_of_marriage = $request->type_of_marriage;
        $profile->marital_status = $request->marital_status;
        $profile->age = $request->age;
        $profile->no_of_childs = $request->no_of_childs;
        $profile->weight = $request->weight;
        $profile->height = $request->height;
        $profile->skin_color = $request->skin_color;
        $profile->physique = $request->physique;
        $profile->job = $request->job;
        $profile->qualification = $request->qualification;
        $profile->financial_condition = $request->financial_condition;
        $profile->health_status = $request->health_status;
        $profile->religious_commitment = $request->religious_commitment;
        $profile->about = $request->about;
        $profile->specification_of_partner = $request->specification_of_partner;
        $profile->save();
        return redirect()->back()->with('success', 'hi');
    }

    public function save_rating(Request $request)
    {
        $rating_to = Rating::where('rated_to_id', $request->profile_id)->get();
        $sum = $rating_to->sum('ratings');
        $count = $rating_to->count();

        $new_rating = ($sum + $request->stars) / ($count + 1);

        $rating = new Rating();
        $rating->rated_to_id = $request->profile_id;
        $rating->rater_id = auth()->id();
        $rating->ratings = $request->stars;
        $rating->save();

        $user = User::find($request->profile_id);
        $user->rating = $new_rating;
        $user->save();
        return "success";
    }
    public function delete_profile() {
        $user = User::find(auth()->id());
        $profile = Profile::where('user_id',$user->id)->first();
        $chats = Chats::where('initiator_id',$user->id)->orWhere('partner_id',$user->id)->get();
        foreach ($chats as  $chat) {
            $chat->delete();
        }
        $profile->delete();
        $user->delete();
        return redirect()->route('logout');
    }
}
