<?php

namespace App\Http\Controllers;

use App\Models\pH7CMS;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\Rule;
use Inertia\Inertia;
use Illuminate\Support\Facades\Http;

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

    public function step1(User $user){
        Request::validate([
            'username' => ['required', 'string', 'max:255', Rule::unique('users_info')],
            'dob' => ['required'],
            'sex' => ['required'],
            'matchSex' => ['required'],
            'bodyType' => ['required', 'array'],
            'height' => ['required'],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024']
        ]);

        $bodyType = implode(Request::get('bodyType'));
        // UserInfo::create([
        //     'username' => Request::get('username'),
        //     'birthday' => Request::get('dob'),
        //     'sex' => Request::get('sex'),
        //     'matchSex' => Request::get('matchSex'),
        //     'bodyType' => Request::get('bodyType'),
        //     'height' => Request::get('height')
        //     // 'photo_path' => Request::file('photo') ? Request::file('photo')->store('users') : null,
        // ]);

        // if (Request::file('photo')) {
        //     $user->update(['photo_path' => Request::file('photo')->store('profile-photos')]);
        // }

        // return Redirect::route('users')->with('success', 'Saved');
        dd($bodyType);
    }
}
