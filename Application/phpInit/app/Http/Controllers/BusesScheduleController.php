<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class BusesScheduleController extends Controller
{
	public function index(Request $req){
		// $schedules = DB::table('busesschedule')->get();
		$schedules = DB::table('busesschedule')->get();
		return view('ScheduleList', ['schedules'=>$schedules]);
		// return view('ScheduleList', $Schedules);
		// return view('welcome');
	}
	
}
