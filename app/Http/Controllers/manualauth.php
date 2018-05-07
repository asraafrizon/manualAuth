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
    	if (!auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->back();
        }
        return redirect()->route('home');
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

    	$user = User::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => bcrypt($request->password)
    	]);


        auth()->LoginUsingId($user->id);
    	return redirect()->route('home');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }
}
