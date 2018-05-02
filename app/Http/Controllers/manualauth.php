<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class manualauth extends Controller
{
    public function getLogin()
    {
    	return view('login');
    }

    public function postLogin(Request $request)
    {
    	dd('login ok');
    }

    public function getRegister()
    {
    	return view('register');
    }

    public function postRegister(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required|min:5',
    		'email' => 'required|email|unique:users',
    		'password' => 'required|min:6|confirmed' //field_confimation
    	]);

    	User::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => bcrypt($request->password)
    	]);
    	return redirect()->back();
    }
}
