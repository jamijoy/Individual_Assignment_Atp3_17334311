<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index($id, Request $req){
		// $data = DB::table('users')->get();
		$data = DB::table('users')->where('userid', $id)->first();
		return view('Profile', ['data'=>$data]);
	}
}
