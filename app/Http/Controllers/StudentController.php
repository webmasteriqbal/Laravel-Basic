<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students=Student::all();
        return view('StudentsInfo',['students'=>$students]);
        // return view('StudentsInfo',compact('students'));
        // return view('StudentsInfo')->with('students',$students);
    }

    public function store(Request $request)
    {
        Student::create([
            'name'=>$request->stuName,
            'roll'=>$request->roll,
            'semester'=>$request->semester,
            'shift'=>$request->shift,
        ]);
        return redirect()->route('student.index');
    }



    public function edit($id)
    {
        $student=Student::where('id',$id)->first();

        return view('EditStudent')->with('student',$student);
    }

    public function update(Request $request,$id)
    {

        $student=Student::where('id',$id)->update([
            'name'=>$request->name,
            'roll'=>$request->roll,
            'semester'=>$request->semester,
            'shift'=>$request->shift,
        ]);



        return redirect()->route('student.index');
    }


    public function destroy($id)
    {
        Student::where('id',$id)->delete();
        return redirect()->route('student.index');
    }
}
