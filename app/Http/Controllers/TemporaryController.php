<?php

namespace App\Http\Controllers;
use App\Models\Temporary;
use Illuminate\Http\Request;
use Auth;
use DB;
class TemporaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {   
        $temporary = new Temporary();
        $temporary->user_id = Auth::user()->id;
        $temporary->country = $request->country;
        $temporary->site_id= $request->site;
        $temporary->date_and_time= $request->dateapp;
        $temporary->mobile_number= $request->mobnumber;
        $temporary->email= $request->email;
        $temporary->last_name= $request->lastname;
        $temporary->first_name= $request->firstname;
        $temporary->middle_name= $request->midname;
        $temporary->birth_day= $request->birthdate;
        $temporary->gender= $request->options;
        $temporary->civil_status= $request->civilstatus;
        $temporary->birth_legitimacy= $request->birthlegit;
        $temporary->birth_country= $request->birthcountry;
        $temporary->birth_province= $request->birthprovince;
        $temporary->birth_municipality= $request->birthmunicipality;
        $temporary->current_address= $request->currentaddress;
        $temporary->occupation= $request->occupation;
        $temporary->city_address= $request->addresscity;
        $temporary->province_address= $request->provandcountry;
        $temporary->father_name= $request->fathername;
        $temporary->father_lastname= $request->fatherlast;
        $temporary->father_middlename= $request->fathermid;
        $temporary->father_citizenship= $request->fathercitizen;
        $temporary->mother_name= $request->mothername;
        $temporary->mother_lastname= $request->motherlast;
        $temporary->mother_middlename= $request->mothermid;
        $temporary->mother_citizenship= $request->mothercitizen;
        $temporary->application_type= $request->applicationtype;
        $temporary->proof_type= $request->proofcitizen;
        $temporary->foreign_passport= $request->foreign;
        $temporary->contact_person= $request->contactperson;
        $temporary->contact_number= $request->contactnumber;

        $temporary->save();
        
        $users = DB::select('select * from temporaries');
        return view('dashboard.update',['users'=>$users]);
        
    }
}
