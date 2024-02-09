<?php

namespace App\Http\Controllers;

use App\Models\Attendance as ModelsAttendance;
use App\Models\Employe;
use Illuminate\Http\Request;

class Attendance extends Controller
{
   function  attendance(){
    $employee=Employe::all();
    return view('attendance.attendance',[
        'employees'=>$employee,
    ]);
   }
   function attendance_store(Request $request){
    foreach($request->user_id as $id){
        ModelsAttendance::insert([
            'user_id'=>$id,
            'attendance'=>$request->attendance[$id],
            'att_date'=>$request->att_date,
            'att_year'=>$request->att_year,
            'edit_year'=>date('d_m_y'),

        ]);
    }

   }
}
