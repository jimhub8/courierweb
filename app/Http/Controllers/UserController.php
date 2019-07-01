<?php

namespace App\Http\Controllers;

use App\Notifications\SignupActivate;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function getUsers(Request $request)
    {
        try {
            $client = new Client;
            $request = $client->request('GET', 'https://web.boxleo.co.ke/api/getUsers/', [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImFkMzVjYTU4ZDZlOWYwOTRjOWQyOGY5NTEwZGQyMWQxMWQ5YTc5ZTA4YWExNTViYTNmMjA0OTM3ZDc1NTczY2FkYzJjZTM3MTllZGUzZjQ3In0.eyJhdWQiOiI1IiwianRpIjoiYWQzNWNhNThkNmU5ZjA5NGM5ZDI4Zjk1MTBkZDIxZDExZDlhNzllMDhhYTE1NWJhM2YyMDQ5MzdkNzU1NzNjYWRjMmNlMzcxOWVkZTNmNDciLCJpYXQiOjE1NTc3MzE5MjQsIm5iZiI6MTU1NzczMTkyNCwiZXhwIjoxNTg5MzU0MzI0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.qJzImZO-rnq6UlBfr77k-5CqZkOGTttA-QviqwSLb4_PHaLpJVZzqnRgnBGfPkU97peajZbYG0tN7LiiFp9VvEcwrW6nedFvvDDRN9ZEC70Wx1FrBVP0sa5PSS_5knTprydh66IbE-fcsFTFID9N4SbFqW8TpXJ4fiR6hk9f2WyaTBOtUQ6-gmIDwmDPl5DCAE2Kf-5mhxP3BRMuSSU_zvGAhhvG7_wezs4DGl3OhOm6s3C9nGtNGBGUTSb745Up7Yn6g4tNELTRZNYSuftN9z7k_OqW4kSh1n74mekDWYDREsHzQwwZHq8mD96VQ0cakSPXO1bMZB-_wMuLZcAKD3R--xKyLEf5Z3pxHMUx0695rlhZxJFO8CGbgsKUf5DOitbWD9bwvQqCj8dVhuHqCh7DGvxCf46tY6lBb4Ra5rsb4F-aSqmkUcBkbmJysU1DTEn6jrd5yFSvhCi5ACpMfFUR3oBDtwhtMEprDrfVtAQ6optLYV4TQPbvy_VgsXGMQmtnLHcbYdp5QzoB8NV-5a5c-NBptfD8s9gpTY0BCRbFhsd_R_PU-PKcnChLOhwNk_bHcPgMHdBxLS9S9eblM4xowQ6l23O-5XehxMyLZ0avsEdsKbYt2w08Ncv2JOEd_QswInlGjtfWa2gLCM-DBoVRaOC8Uih2i861-Ik1sGk',
                ],
            ]);
            // $response = $http->get(env('API_URL').'/api/getUsers');
            return $response = $request->getBody()->getContents();
        } catch (\Exception $e) {

            \Log::error($e->getMessage() . ' ' . $e->getLine() . ' ' . $e->getFile());
            return $e->getMessage() . ' ' . $e->getLine() . ' ' . $e->getFile();
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $this->generateRandomString();
        // return $request->all();
        $this->Validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'branch_id' => 'required',
            'countryList' => 'required',
            'role_id' => 'required',
        ]);
        // return $request->all();
        $user = new User;
        $password = $this->generateRandomString();
        $password_hash = Hash::make($password);
        $user->password = $password_hash;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->branch_id = $request->branch_id;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->country_id = $request->countryList;
        $user->activation_token = str_random(60);
        $user->save();
        $user->assignRole($request->role_id);
        $user->givePermissionTo($request->selected);
        $user->notify(new SignupActivate($user, $password));
        return $user;
    }
    public function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // return $request->all();
        // return $request->selected;
        $this->Validate($request, [
            'form.name' => 'required',
            'form.email' => 'required|email',
            'form.phone' => 'required|numeric',
            // 'form.branch_id' => 'required',
            // 'form.address' => 'required',
            // 'form.city' => 'required',
            // 'form.country' => 'required',
            // 'form.role_id' => 'required'
        ]);
        $user = User::find($request->form['id']);
        $user->name = $request->form['name'];
        $user->email = $request->form['email'];
        $user->phone = $request->form['phone'];
        $user->branch_id = $request->form['branch_id'];
        $user->address = $request->form['address'];
        $user->city = $request->form['city'];
        $user->country = $request->form['country'];
        $user->country_id = $request->form['country_id'];
        $user->save();
        foreach ($request->form['roles'] as $role) {
            $role_name = $role['name'];
        }
        $user->syncRoles($role_name);

        // $p_all = Permission::all();//Get all permissions

        // foreach ($p_all as $p) {
        //     $user->revokePermissionTo($p); //Remove all permissions associated with role
        // }

        // $user->givePermissionTo($request->selected);
        // foreach ($permissions as $permission) {
        //     $p = Permission::where('id', '=', $permission)->firstOrFail(); //Get corresponding form //permission in db
        //     $role->givePermissionTo($p);  //Assign permission to role
        // }

        return $user;
    }

    public function AuthUserUp(Request $request)
    {
        $user = User::find(Auth::id());
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->branch_id = $request->branch_id;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::find($user->id)->delete();
    }

    public function getLogedinUsers()
    {
        return Auth::user();
    }

    // public function profile(Request $request, $id)
    // {
    //     $upload = User::find($request->id);
    //     if ($request->hasFile('image')) {
    //         // return('test');
    //         // $imagename = time() . $request->image->getClientOriginalName();
    //         // $request->image->storeAs('public/test', $imagename);
    //         $img = $request->profile;
    //         // $image_path = ;
    //         if (!empty($upload->profile)) {
    //             $image_file_arr = explode('/', $upload->profile);
    //             $image_file = $image_file_arr[3];

    //             if (File::exists('storage/profile/' . $image_file)) {
    //                 $image_path = 'storage/profile/' . $image_file;
    //                 File::delete($image_path);
    //             }
    //             // return('image_filtgtre_arr');

    //             $imagename = Storage::disk('uploads')->put('profile', $img);
    //                 // return 'ppp';
    //         } else {
    //             $imagename = Storage::disk('uploads')->put('profile', $img);
    //         }
    //         return $imagename;
    //         $imgArr = explode('/', $imagename);
    //         $image_name = $imgArr[1];
    //         $upload->profile = '/storage/profile/' . $image_name;
    //         // $upload->image = '/storage/profile/'.$image_name;
    //         $upload->save();
    //         return $upload;
    //         // $imagename =  Storage::disk('uploads')->put('profile', $img);
    //     }
    //     return;

    // }

    public function profile(Request $request, $id)
    {
        $upload = User::find($request->id);
        if ($request->hasFile('image')) {
            // return('test');
            // $imagename = time() . $request->image->getClientOriginalName();
            // $request->image->storeAs('public/test', $imagename);
            $img = $request->image;
            // $image_path = ;

            if (File::exists('storage/profile/' . $upload->image)) {

                // return('test');
                $image_path = 'storage/profile/' . $upload->image;

                File::delete($image_path);
                // return $image_path;
            }
            // $imagename =  Storage::disk('uploads')->put('profile', $img);
            $imagename = Storage::disk('public')->put('profile', $img);
        }

        // return('noop');
        $imgArr = explode('/', $imagename);
        $image_name = $imgArr[1];
        $upload->profile = '/storage/profile/' . $image_name;
        // $upload->profile = '/healthwise/products/'.$image_name;
        $upload->save();
        return $upload;
    }

    public function getDrivers()
    {
        $users = User::all();
        $userArr = [];
        foreach ($users as $user) {
            if ($user->hasRole('Rider')) {
                $userArr[] = $user;
            }
        }
        return $userArr;
    }

    public function getCustomer()
    {
        $users = User::all();
        $userArr = [];
        foreach ($users as $user) {
            if ($user->hasRole('Client')) {
                $userArr[] = $user;
            }
        }
        return $userArr;
    }

    public function getSorted(Request $request)
    {
        // return $request->all();
        $roles = User::all();
        $users_id = [];
        $users = User::all();
        $userArr = [];
        foreach ($users as $user) {
            if ($user->hasRole($request->name)) {
                $userArr[] = $user;
            }
        }
        return $userArr;
    }

    public function getUserPro(Request $request, $id)
    {
        return Shipment::where('client_id', $id)->paginate(10);
    }

    public function getUserPerm(Request $request, $id)
    {
        $user = User::find($id);
        $permissions = $user->getAllPermissions();
        $can = [];
        foreach ($permissions as $perm) {
            $can[] = $perm->name;
        }
        return $can;
    }

    public function password(Request $request)
    {
        $this->Validate($request, [
            'password' => 'required|string|min:6',
            // 'password' => 'required|string|min:6|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->password);
        $user->save();
        return $user;
    }

    public function logoutOther()
    {
        return view('auth.Logout');
    }

    public function logOtherDevices(Request $request)
    {
        Auth::logoutOtherDevices($request->password);
        return redirect('/');
    }

    public function permisions(Request $request, $id)
    {
        // return $request->all();
        $user = User::find($id);
        $user->syncPermissions($request->selected);
        return $user;
    }


    public function undeletedUser($id)
    {
        return User::where('id', $id)->restore();
    }

    public function deletedUsers()
    {
        $users = User::onlyTrashed()->get();
        $users->transform(function ($user, $key) {
            $branch_name = Branch::find($user->branch_id);
            $country_name = Country::find($user->country_id);
            $user->branch = $branch_name->branch_name;
            $user->country = $country_name->country_name;
            $user->status = 'active';
            return $user;
        });
        return $users;
    }
}
