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
	
	public function Delete($id){
	
		$data = DB::table('busesschedule')
					->where('id', $id)
					->delete();
					
		return redirect()->route('BusesSchedule.index');
		// return view('welcome');
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
	public function add(){
	
		return view('AddSchedule');
	}
	
	public function insert(Request $req){
    	
		$Validation = Validator::make($req->all(), [
			'name'=>'required',
			'operator'=>'required',
			'manager'=>'required',
			'location'=>'required',
			'route'=>'required',
			'fare'=>'required',
			'departure'=>'required',
			'arrival'=>'required'
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
		
		$resp = DB::table('busesschedule')->insert([
		'id'      => null,
		'name'    => $req->name,
		'operator'=> $req->operator,
		'manager' => $req->manager,
		'location'=> $req->location,
		'route'   => $req->route,
		'fare'    => $req->fare,
		'departure'=>$req->departure,
		'arrival' => $req->arrival
		]);
		
		if(!$resp)
		{
			// $req->session()->flash('msg', 'Insertion Failed');
    		return redirect('/system/busesshedule/add');
		}
		else
		{
			// $req->session()->flash('msg', 'Registered Account');
    		return redirect('/system/BusSchedule');
		}
		
		
    }
}
