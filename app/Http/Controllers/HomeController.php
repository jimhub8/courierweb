<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function boxleo()
    {
        if (Auth::check()) {
            $permissions = [];
            foreach (Permission::all() as $permission) {
                if (Auth::user()->can($permission->name)) {
                    $permissions[$permission->name] = true;
                } else {
                    $permissions[$permission->name] = false;
                }
            }
            $user = Auth::user();

            $auth_user = array_prepend($user->toArray(), $permissions, 'can');
            $user = Auth::user();
            return view('welcome', compact('auth_user'));
        } else {
            return view('welcome');
        }

        // return view('welcome');
    }

    public function admin()
    {
        $permissions = [];
        foreach (Permission::all() as $permission) {
            if (Auth::user()->can($permission->name)) {
                $permissions[$permission->name] = true;
            } else {
                $permissions[$permission->name] = false;
            }
        }
        $user = Auth::user();
        // dd($country);
        // $users->transform(function ($user, $key) {
        //     $country = Country::find($user->country_id);
        //     $user->country_name = $country->name;
		// 	return $user;
        // });
        // dd(json_decode(json_encode((Auth::user()), false)));
        $auth_user = array_prepend($user->toArray(), $permissions, 'can');
        // dd($auth_user);
        return view('admin.admin', compact('auth_user'));
    }


    public function home()
    {
        // return view('home');
        return redirect('/');
    }
}
