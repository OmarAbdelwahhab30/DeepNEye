<?php

namespace App\Http\Controllers;

use App\Http\Requests\SigninRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    public function index(){
        return view("signin");
    }

    public function CheckUser(SigninRequest $request){

        if (Auth::attempt(['email' => $request->email ,'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect()->route("home");
        }

        return redirect()->back()->with('failed','These credentials do not match our records.');
    }
}
