<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{

	public function create()
    {
    	return view('registration.registration');
    }

    public function store()
    {
    	//	validate user input
    	$this->validate(request(),[
    		'firstname'=>'required',
    		'lastname'=>'required',
    		'username'=>'required',
    		'password'=>'required|confirmed'
    	]);

    	//	Create and save user
    	$user = User::create(request(['firstname','lastname','username']));
    	$user->password = bcrypt(request('password'));

    	$user->save();

    	return view('login.master');
    }
}
