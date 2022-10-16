<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index(){
        return view("signup");
    }
    public function StoreUser(SignupRequest $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password'  => Hash::make($request->password)
        ]);
        if ($user){
            Auth::login($user);
            return redirect()->route("home");
        }
        return redirect()->back();
    }
}
