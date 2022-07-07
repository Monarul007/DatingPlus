<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

class UsersController extends Controller
{
    public function index()
    {
        return Inertia::render('Users/Index', [
            'users' => User::query()
                ->when(Request::input('search'), function ($query, $search) {
                    $query->where('name', 'like', "%{$search}%");
                })
                ->paginate(10)
                ->withQueryString()
                ->through(fn($user) => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'created_at' => $user->created_at,
                    'active_status' => $user->active_status
                ]),

            'filters' => Request::only(['search'])
        ]);
    }

    public function create()
    {
        return Inertia::render('Users/Create');
    }

    public function store()
    {
        Request::validate([
            'name' => ['required', 'max:50'],
            // 'last_name' => ['required', 'max:50'],
            'email' => ['required', 'max:50', 'email', Rule::unique('users')],
            'password' => ['nullable'],
            // 'owner' => ['required', 'boolean'],
            'photo' => ['nullable', 'image'],
        ]);

        User::create([
            'name' => Request::get('name'),
            // 'last_name' => Request::get('last_name'),
            'email' => Request::get('email'),
            'password' => Hash::make(Request::get('password')),
            // 'owner' => Request::get('owner'),
            // 'photo_path' => Request::file('photo') ? Request::file('photo')->store('users') : null,
        ]);
        // https://hushcupid.com/api/user/login/?private_api_key=7f894bce14da9fb1c1f0bc10948273849c6807ae&url=hushcupid.com

        // $response = Http::get('http://hushcupid.com/api/user/user/220/?private_api_key=7f894bce14da9fb1c1f0bc10948273849c6807ae&url=hushcupid.com');

        // $data = array(
        //     'email' => 'myemail@hizup.uk',
        //     'password' => '123456pH7CMS89'  
        // );
        // $url = "https://development.hushcupid.com/api/user/login/?private_api_key=ef45e5cd5bcbdd3c4a1c9c55eaa86ff9f722b347&url=ph7cms.com";
        // $client = new \GuzzleHttp\Client();
        // $response = $client->post($url, [
        //     'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
        //     'body'    => json_encode($data)
        // ]);
         
        // // print_r(json_decode($response->getBody(), true));

        return Redirect::route('users')->with('success', 'User Created');
    }

    public function edit(User $user)
    {
        return Inertia::render('Users/Edit', [
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                // 'owner' => $user->owner,
                // 'photo' => $user->photo_path ? URL::route('image', ['path' => $user->photo_path, 'w' => 60, 'h' => 60, 'fit' => 'crop']) : null,
                // 'deleted_at' => $user->deleted_at,
            ],
        ]);
    }

    public function update(User $user)
    {
        if (App::environment('demo') && $user->isDemoUser()) {
            return Redirect::back()->with('error', 'Updating the demo user is not allowed.');
        }

        Request::validate([
            'first_name' => ['required', 'max:50'],
            'last_name' => ['required', 'max:50'],
            'email' => ['required', 'max:50', 'email', Rule::unique('users')->ignore($user->id)],
            'password' => ['nullable'],
            'owner' => ['required', 'boolean'],
            'photo' => ['nullable', 'image'],
        ]);

        $user->update(Request::only('first_name', 'last_name', 'email', 'owner'));

        if (Request::file('photo')) {
            $user->update(['photo_path' => Request::file('photo')->store('users')]);
        }

        if (Request::get('password')) {
            $user->update(['password' => Request::get('password')]);
        }

        return Redirect::back()->with('success', 'User updated.');
    }

    public function destroy(User $user)
    {
        if (App::environment('demo') && $user->isDemoUser()) {
            return Redirect::back()->with('error', 'Deleting the demo user is not allowed.');
        }

        $user->delete();

        return Redirect::back()->with('success', 'User deleted.');
    }

    public function restore(User $user)
    {
        $user->restore();

        return Redirect::back()->with('success', 'User restored.');
    }

    public function step1(UserInfo $user){
        Request::validate([
            'username' => ['required', 'string', 'max:255', Rule::unique('users_info')->ignore($user->username)],
            'dob' => ['required'],
            'sex' => ['required'],
            'matchSex' => ['required'],
            'bodyType' => ['required', 'array'],
            'height' => ['required'],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png,webp', 'max:1024']
        ]);

        $sVal = ''; // Default Value
        foreach (Request::get('bodyType') as $sValue) {
            $sVal .= $sValue . ',';
        }
        $bodyType = rtrim($sVal, ',');
        UserInfo::updateOrCreate([
            'user_id' => Auth::id(),
            'username' => Request::get('username'),
            'birthday' => Request::get('dob'),
            'sex' => Request::get('sex'),
            'matchSex' => Request::get('matchSex'),
            'bodyType' => $bodyType,
            'height' => Request::get('height')
            // 'photo_path' => Request::file('photo') ? Request::file('photo')->store('users') : null,
        ]);

        if (Request::file('photo')) {
            $user->update(['photo_path' => Request::file('photo')->store('profile-photos')]);
        }

        $user = User::find(Auth::id());
        $user->profile_completion = 'Step 1';
        $user->save();

        return Redirect::route('profile.step2')->with('success', 'Saved');
    }

    public function step2(User $user){
        Request::validate([
            'religion' => ['required'],
            'lookingFor' => ['required', 'array'],
            'lifeStyles' => ['required'],
            'drinking' => ['required'],
            'workout' => ['required']
        ]);

        $sVal = ''; // Default Value
        foreach (Request::get('lookingFor') as $sValue) {
            $sVal .= $sValue . ',';
        }
        $lookingFor = rtrim($sVal, ',');

        UserInfo::where('user_id', Auth::id())
                ->update([
                    'religion' => Request::get('religion'),
                    'lookingFor' => $lookingFor,
                    'lifeStyles' => Request::get('lifeStyles'),
                    'drinking' => Request::get('drinking'),
                    'workout' => Request::get('workout')
                ]);

        $user = User::find(Auth::id());
        $user->profile_completion = 'Step 2';
        $user->save();

        return Redirect::route('profile.step3')->with('success', 'Saved');
    }

    public function step3(UserInfo $user){
        Request::validate([
            'interests' => ['required']
        ]);

        $sVal = ''; // Default Value
        foreach (Request::get('interests') as $sValue) {
            $sVal .= $sValue . ',';
        }
        $interests = rtrim($sVal, ',');

        UserInfo::where('user_id', Auth::id())
                ->update([
                    'interests' => $interests
                ]);

        $user = User::find(Auth::id());
        $user->profile_completion = 'Step 3';
        $user->save();

        return Redirect::route('profile.step4')->with('success', 'Saved');
    }

    public function step4(HttpRequest $request){
        Request::validate([
            'added_media' => ['required']
        ]);

        // dd($request->added_media);
        
        if(isset($request->added_media)){
            foreach($request->added_media as $image){
            
                $from = public_path('storage/tmp/uploads/'.$image['name']);
                $to = public_path('storage/user_images/'.$image['name']);
                
                File::move($from, $to);

                $user = User::find(Auth::id());
                Photo::create([
                    'user_id' => Auth::id(),
                    'type' => $request->type,
                    'path' => $image['name'],
                    'alt_text' => 'A photo by '.$user->name,
                    'module' => 'public_photos'
                ]);
            }
        }
        
        if(isset($request->deleted_media)){
            foreach($request->deleted_media as $deleted_media){
                File::delete(public_path('user_images/'.$deleted_media));
                Photo::where('path', $deleted_media)->delete();
            }
        }

        $user = User::find(Auth::id());
        $user->profile_completion = 'Step 4';
        $user->save();

        return Redirect::route('profile.step4')->with('success', 'Saved');
    }
}
