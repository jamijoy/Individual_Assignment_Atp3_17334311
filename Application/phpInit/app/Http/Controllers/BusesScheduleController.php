<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusesScheduleController extends Controller
{
	public function index(Request $req){
		$schedules = DB::table('busesschedule')->get();
		return view('ScheduleList', ['schedules'=>$schedules]);
	}
	
}
