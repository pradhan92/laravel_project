<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //show all students record
    public function index()
    {
        $students = Student::all();
        //return $students;
        return view('frontend.student.index',compact('students'));
    }
    // show students form
    public function create()
    {
        return view('frontend.student.create');
    }
    // save students record
    public function store(Request $request)
    {
        //return "your are here";
        $student = new Student();
        $student->name = $request->name;
        $student->address = $request->address;
        $student->contact = $request->contact;
        $student->course = $request->course;
        $student->email = $request->email;
        $student->remark = $request->remark;
        $student->status = $request->status;
        $student->save();
        return redirect('/student');

    }
    // edit students record
    public function edit($id)
    {
        $student =Student::find($id);
        return view('frontend.student.edit',compact('student'));
    }
    // update students record
    public function update(Request $request, $id)
    {
        # code...
        $student = Student::find($id);
        $student->name = $request->name;
        $student->address = $request->address;
        $student->contact = $request->contact;
        $student->course = $request->course;
        $student->email = $request->email;
        $student->remark = $request->remark;
        $student->status = $request->status;
        $student->update();
        return redirect()->back();
    }
    // single students record
    public function show($id)
    {
        # code...
    }
    // delete students record
    public function destroy($id)
    {
        # code...
        $student = Student::find($id);
        $student->delete();
        return redirect()->back();

    }

}
