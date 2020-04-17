<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Validator;

class HomeController extends Controller
{
    public function index(Request $req){
		$getBus = DB::table('busesschedule')->get();
    	return view('home',['BusData'=>$getBus]);
    }
	
	public function book(Request $req){
		$Validation = Validator::make($req->all(), [
			'ticketNo'=>'required',
			'fare'=>'required'
		]);
		
		if($Validation->fails()){
			return back()
					->with('errors', $Validation->errors())
					->withInput();
		}
		
		$resp = DB::table('booking')->insert([
		'id'      => null,
		'busid'   => $req->busid,
		'ticketno'=> $req->ticketNo,
		'fare'    => $req->fare,
		'time'    => $req->mon
		]);
		
		if(!$resp)
		{
			return redirect('/home');
		}
		else
		{
			return redirect('/system/bussummary/Search/'.$req->mon);
		}
    }
}
