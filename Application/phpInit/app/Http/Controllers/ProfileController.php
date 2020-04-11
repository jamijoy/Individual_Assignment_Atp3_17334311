<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Validator;


class ProfileController extends Controller
{
    public function index($id, Request $req){
		// $data = DB::table('users')->get();
		$data = DB::table('users')->where('userid', $id)->first();
		return view('Profile', ['data'=>$data]);
	}
	
	public function Edit($id, Request $req){
		// $data = DB::table('users')->get();
		$data = DB::table('users')->where('userid', $id)->first();
		return view('EditProfile', ['data'=>$data]);
	}
	
	public function EditSave($id, Request $req){
		
		$Validation = Validator::make($req->all(), [
			'name'    		 => 'required',
			'email'    		 => 'required',
			'password'		 => 'required',
			'ConfirmPassword'=> 'required'
		]);

		if($Validation->fails()){
			return back()
					->with('errors', $Validation->errors())
					->withInput();	
		}
		
		$status = DB::table('users')
				->where('userid', $id)
				->update([  'name'      => $req->name,
							'email' 	=> $req->email,
							'password'  => $req->password,
							'type'  => $req->type]);

		if(!$status){
			return redirect()->route('Profile.Edit',$id);
		}else{
			return redirect()->route('Profile.index',$id);
		}
	}
}
