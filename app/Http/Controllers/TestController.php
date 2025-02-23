<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Tests;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function view_tests()
    {
        return view('admin.tests',[
            'test_info' => Tests::all()
        ]);
    }   

    public function add_tests()
    {   
        return view('admin.add_tests',[
            'test_info' => Tests::all()
        ]);
    }

    public function add_tests_submit(Request $request)
    {
        $name = $request->input('test_name');

        $days = [];
        $time_from = [];
        $time_to = [];
        
        foreach ($request->day as $day => $value) {
            $days[] = $day;
            $time_from[] = $request->time_from[$day] ?? ''; 
            $time_to[] = $request->time_to[$day] ?? ''; 
        }

        $days_str = implode(',', $days);
        $time_from_str = implode(',', $time_from);
        $time_to_str = implode(',', $time_to);
        $fees = $request->input('price');
        $requirements = $request->input('requirements');
        
        $data = new Tests([
            'name' => $name,
            'Day' => $days_str,  
            'time_from' => $time_from_str,
            'time_to' => $time_to_str,
            'Fees' => $fees,
            'Requirements' => $requirements,
        ]);
        
        $data->save();

        Alert::success('Congrats','Test Added Successfully');
        return redirect('tests');
    }
}
