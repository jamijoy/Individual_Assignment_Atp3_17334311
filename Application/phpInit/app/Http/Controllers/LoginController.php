<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;

use Illuminate\Support\Facades\DB;

use App\User;

use validator;

class LoginController extends Controller
{
    public function login(Request $req){
    	return view('login');
    }
	
	public function check(Request $req){
    	$user = DB::table('users')
                    ->where('email', $req->email)
                    ->where('password', $req->pass);

    	if($user != null){
            $req->session()->put('mail', $req->email);
    		return redirect()->route('home.index');

    	}else{
            $req->session()->flash('msg', 'invalid username/password');
    		return redirect('/login');
    	}
    }
	
	public function register(Request $req){
    	return view('register');
    }
	
	public function registerCheck(Request $req){
    	
		$validation = $this->validate($req, [
			'email'=>'bail|required|unique:users',
			'password'=>'required',
			'name'=>'required'
		]);
		
		// $validation->validate();

		if($validation->fails()){
			return back()
					->with('errors', $validation->errors())
					->withInput();

			return redirect()->route('login.registerCheck')
							->with('errors', $validation->errors())
							->withInput();		
		}

		$user 			= new User;
		$user->name 	= $req->name;
		$user->email    = $req->email;
		$user->password = $req->pass;
		$user->type 	= "manager";
		$user->userId 	= 3;
		
		if($user->save()){
			//return redirect()->route('home.list');
			return view('welcome');
		}else{
			return redirect()->route('login.register');
		}
    }
}