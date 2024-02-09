<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    function employer(){
        return view('Employer.employer');
    }
    function employer_store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'experience'=>'required',
            'photo'=>'required',
            'salary'=>'required',
            'vacation'=>'required',
            'city'=>'required'

        ]);
        $photo=$request->photo;
        $extension=$photo->extension();
        $file_name=time().'.'.$extension;
        $photo->move(public_path('upload/employer'),$file_name);

        Employe::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'experience'=>$request->experience,
            'photo'=>$file_name,
            'salary'=>$request->salary,
            'vacation'=>$request->vacation,
            'city'=>$request->city,
        ]);
        return back()->with('employer_add','Employer Add Successful');
    }
    function all_employer(){
        $all_employer=Employe::all();
        return view('Employer.all_employer',[
            'all_employer'=>$all_employer,
        ]);
    }
    function all_employer_delete($id){
        Employe::find($id)->delete();
        return back()->with('delete','Employer delete successfully');
    }
    function all_employer_update($id){
        $all_employer=Employe::find($id);
        return view('Employer.all_employer_update',[
            'all_employer'=>$all_employer,
        ]);

    }
    function all_employer_update_store(Request $request,$id){
        $all_employer=Employe::find($id);
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'experience'=>'required',
            'photo'=>'required',
            'salary'=>'required',
            'vacation'=>'required',
            'city'=>'required'

        ]);
        if($all_employer->photo==''){

            $photo=$request->photo;
            $extension=$photo->extension();
            $file_name=time().'.'.$extension;
            $photo->move(public_path('upload/employer'),$file_name);

            Employe::find($id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'experience'=>$request->experience,
                'photo'=>$file_name,
                'salary'=>$request->salary,
                'vacation'=>$request->vacation,
                'city'=>$request->city,
            ]);
            return back()->with('employer_add','Employer Add Successful');

        }
        else{
            $current_image=public_path('upload/employer/'.$all_employer->photo);
            unlink($current_image);
            $photo=$request->photo;
            $extension=$photo->extension();
            $file_name=time().'.'.$extension;
            $photo->move(public_path('upload/employer'),$file_name);

            Employe::find($id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'experience'=>$request->experience,
                'photo'=>$file_name,
                'salary'=>$request->salary,
                'vacation'=>$request->vacation,
                'city'=>$request->city,
            ]);
            return back()->with('employer_add','Employer Update Successful');

        }
    }
    function all_employer_view($id){
        $all_employer=Employe::where('id',$id)->get();
        return view('Employer.single',[
            'all_employer'=>$all_employer,
        ]);
    }

}
