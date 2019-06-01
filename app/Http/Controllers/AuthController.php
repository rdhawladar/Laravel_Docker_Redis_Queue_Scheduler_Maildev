<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{
    public function index() {
    	if(Session::has('foo')) {
	    	return redirect('mailer');
    	}
    	return view('login');
    }

    public function login(Request $request) {
        if(!$request->username) {
            return redirect()->back()->withErrors(['You must set foo to continue.']);
        }
    	Session::put('foo', $request->username);
	    return redirect('mailer');
    }

    public function logout() {
    	Session::flush();
	    return redirect('/');
    } 
}
