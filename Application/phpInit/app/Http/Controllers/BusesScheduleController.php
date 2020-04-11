<?php

namespace App\Http\Controllers;
use Validator;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class BusesScheduleController extends Controller
{
	public function index(Request $req){
		$schedules = DB::table('busesschedule')->get();
		return view('ScheduleList', ['schedules'=>$schedules]);
	}
	
	public function Edit($id){
	
		$data = DB::table('busesschedule')->where('id', $id)->first();
		return view('EditSchedule', ['data'=>$data]);
	}
	
	public function EditSave($id, Request $req){
		
		$Validation = Validator::make($req->all(), [
			'name'     => 'required',
			'route'    => 'required',
			'fare'     => 'required',
			'departure'=> 'required',
			'arrival'  => 'required'
		]);

		if($Validation->fails()){
			return back()
					->with('errors', $Validation->errors())
					->withInput();	
		}
		
		$status = DB::table('busesschedule')
				->where('id', $id)
				->update([  'name'     => $req->name,
							'operator' => $req->operator,
							'manager'  => $req->manager,
							'location' => $req->location,
							'route'    => $req->route,
							'fare'     => $req->fare,
							'departure'=> $req->departure,
							'arrival'  => $req->arrival]);

		if(!$status){
			return redirect()->route('BusesSchedule.Edit',$id);
		}else{
			return redirect()->route('BusesSchedule.index');
		}
	}
	
}
