<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;

use Illuminate\Support\Facades\DB;

use App\User;

use Validator;

class LoginController extends Controller
{
    public function login(Request $req){
    	return view('login');
    }
	
	public function check(Request $req){
    	$user = DB::table('users')
                    ->where('email', $req->email)
                    ->where('password', $req->pass)
                    ->first();
                    // ->value('userid');
		$data = DB::table('users')
                    ->where('email', $req->email)
                    ->value('userid');
    	if($user != null){
            $req->session()->put('mail', $req->email);
            
			$req->session()->put('id', $data);
    		return redirect()->route('home.index');

    	}else{
            $req->session()->flash('msg', 'invalid username/password');
    		return redirect('/system/supportstaff/login');
    	}
    }
	
	public function register(Request $req){
    	return view('register');
    }
	
	public function registerCheck(Request $req){
    	
		// $validation = $this->validate($req, [
			// 'email'=>'required|unique:users',
			// 'password'=>'required',
			// 'name'=>'required'
		// ]);
		
		$Validation = Validator::make($req->all(), [
			'email'=>'required|unique:users',
			'password'=>'required',
			'name'=>'required'
		]);
		
		// $validation->validate();

		if($Validation->fails()){
			return back()
					->with('errors', $Validation->errors())
					->withInput();

			// return redirect()->route('login.registerCheck')
							// ->with('errors', $validation->errors())
							// ->withInput();		
		}

		// $user 			= new User;
		// $user->name 	= $req->name;
		// $user->email    = $req->email;
		// $user->password = $req->pass;
		// $user->type 	= "manager";
		// $user->userId 	= 3;
		
		$resp = DB::table('users')->insert([
		'name'     => $req->name,
		'email'    => $req->email,
		'password' => $req->password,
		'type' 	   => "manager",
		'userId'   => null
		]);
		
		if(!$resp)
		{
			$req->session()->flash('msg', 'Registration Failed');
    		return redirect('/system/register');
		}
		else
		{
			$req->session()->flash('msg', 'Registered Account');
    		return redirect('/system/supportstaff/login');
    		// return redirect()->route('Login.login')->withInput();
    		// return redirect->to('Login.login')->withInput();
		}
		
		
    }
}
