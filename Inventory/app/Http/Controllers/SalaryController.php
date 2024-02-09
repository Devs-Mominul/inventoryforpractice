<?php

namespace App\Http\Controllers;

use App\Models\Advance_Salary;
use App\Models\Employe;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    function advance_salary(){
        $all_employer=Employe::all();
        return view('Salary.advance_salary',[
            'all_employer'=>$all_employer
        ]);
    }
    function advance_salary_store(Request $request){
        $emp_id=$request->emp_id;
        $month=$request->month;
        $request->validate([
            'emp_id'=>'required',
            'month'=>'required',
            'advance_salary'=>'required',
            'year'=>'required',


        ]);

        if(Advance_Salary::where('emp_id',$request->emp_id)->where('month',$request->month)->exists()){
            return back()->with('success','Oops!You can not Accept Advance Salary');




        }
        else{

            Advance_Salary::insert([
                'emp_id'=>$request->emp_id,
                'month'=>$request->month,
                'advance_salary'=>$request->advance_salary,
                'year'=>$request->year,

            ]);
            return back()->with('success','No Problem!You can Accept Advance Salary');


        }


    }
    function pay_salary(){
        $month=date("F",strtotime('-1,months'));
        
        $pay_salary=Advance_Salary::where('month',$month)->get();
        return view('Salary.pay_salary',[
            'pay_salary'=>$pay_salary,
        ]);
    }
}
