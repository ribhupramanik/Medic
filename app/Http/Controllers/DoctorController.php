<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function view_doctors()
    {   
        $doctors = DB::table('doctors')->get();
        return view('admin.doctors')->with(['allInfo'=>$doctors]);
    
    }
    public function add_doctor()
    {
        return view('admin.add_doctors');
    }
    public function add_doctor_submit(Request $request){
        $name = $request->input('name');
        $phone = $request->input('contact');
        $speciality = $request->input('specialization');
        $fees = $request->input('fees');
        $degree = $request->input('degree');
        $data = array(
            'name'=>$name,
            'phone'=>$phone,
            'speciality'=>$speciality,
            'fees'=>$fees,
            'degree'=>$degree
        );
        DB::table('doctors')->insert($data);
        Alert::success('Congrats','Doctor Added Successfully');
        return redirect('doctors');
    }
}
