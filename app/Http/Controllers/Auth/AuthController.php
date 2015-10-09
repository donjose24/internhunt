<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Auth;
use Session;

class AuthController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);

    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }
    
	public function getLogin()
	{
		return view('login');
	}

	public function getLogout()
	{
		Auth::logout();
		Session::flash('notification','User Successfuly Logged Out ');
		return redirect('auth/login');
	}

    public function getRegister()
    {
        return view('register');
    }

}
