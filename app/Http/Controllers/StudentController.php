<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
        function add(Request $request){
            $student= new Student();
            $student->name=$request->name;
            $student->email=$request->email;
            $student->phone=$request->phone;
            $student->save();
            if($student){
                return "Students added successfully";
            }else{
                return "not added";
            }
            // return "Add function called";
        }

        function list(){

            $studentData = Student::all();
            return view('list-student',['students'=>$studentData]);
        }

        function delete($id){
            $isDeleted= Student::destroy($id);
            if($isDeleted){
                return redirect('list');
            }
            }

            function edit($id){
                // return $id;

                $student  =Student::find($id);
                return view('edit-student',['data'=>$student]);
            }
}
