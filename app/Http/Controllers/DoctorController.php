<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Doctor_Timings;
use PhpParser\Comment\Doc;

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

    public function view_doctor_timing()
    {
        return view('admin.doctor_timing',[
            'doctor_time' => Doctor_Timings::all()
        ]);
    }

    public function add_doctor_timing()
    {
        $doctors = DB::table('doctors')->get();
        return view('admin.add_doctor_timing')->with(['allInfo'=>$doctors]);
    }

    public function add_doctor_timing_submit(Request $request)
    {
        $doctor_name = $request->input('doctor_name');
        $timing = implode(', ', array_filter($request->input('time')));
        $day = implode(', ', array_filter($request->input('day')));
        $doctor_time = new Doctor_Timings([
            'doctor_name' => $doctor_name,
            'timing' => $timing,
            'day' => $day
        ]);
        $doctor_time->save();
        Alert::success('Congrats','Doctor Timing Added Successfully');
        return redirect('doctor_timing');
    }
}
