<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;

class RegisteredUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }


    public function store(Request $request){

        $rules = [
            // User fields
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed'],
            'role' =>'required|in:jobSeeker,employer'

        ];

       if($request->role==='employer'){
       $rules = array_merge($rules, [
            // Company/Employer fields
            'company_name'=>['required', 'max:50'],
            'website'=>['required'],
            'description'=>['required'],
            'logo'=>['nullable',  File::types(['png', 'jpg', 'jpeg', 'webp'])]
        ]);
       }


       $attributes= $request->validate($rules);
      $user = User::create([
        'name'=>$attributes['name'],
        'email'=>$attributes['email'],
        'role'=>$attributes['role'],
        'password'=>$attributes['password'],
       ]);


       $user->assignRole($attributes['role']);

       if($attributes['role'] === 'employer'){
           if(!empty($attributes['logo'])){
               $logoPath = $attributes['logo']->store('logos');
           }

           $user->employer()->create([
               'name' => $request['employer'],
               'logo' => $logoPath
           ]);
       }
       Auth::login($user);
       return redirect('/');



    }
}
