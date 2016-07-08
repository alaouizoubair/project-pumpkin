<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;


class UserController extends Controller
{
	/*
	* Navigate to home
	*
	*/
	public function home(){
		return view('home');
	}


    /*
    * Create new user 
    *
    * @param Form data
    * @return True if data valid and email unique
    * @return False otherwise :P
    */
    public function create(Request $request){
    	

    	$this->validate($request,[
    		'email' => 'required|max:255|email|unique:users',
    		'first_name' => 'required|min:2',
    		'last_name' => 'required|min:2'
    	]);

    	$user = new User;

    	$user->last_name = $request->last_name;
    	$user->first_name = $request->first_name;
    	$user->skill = $request->skill;
    	$user->email = $request->email;

    	$user->save();

    	return 1;
    }

}
