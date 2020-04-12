<?php

namespace App\Http\Controllers;

use Validator;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SummaryController extends Controller
{
	public function index(Request $req){
		$schedules = DB::table('busesschedule')->get();
		$data = DB::table('booking')
				-> select(DB::raw('count(*) as nums, busid'))
				-> groupBy('busid')
				-> get();
		
		return view('summary', ['schedules'=>$schedules,'data'=>$data]);
	}
	
	public function Search($mon, Request $req){
		$schedules = DB::table('busesschedule')->get();
		$data = DB::table('booking')
				-> select(DB::raw('count(*) as nums, busid'))
				-> where('time',$mon)
				-> groupBy('busid')
				-> get();
		
		return view('summary', ['schedules'=>$schedules,'data'=>$data]);
	}
	
}
