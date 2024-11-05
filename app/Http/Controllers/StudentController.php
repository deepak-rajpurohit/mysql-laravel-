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

            function editStudent(Request $request, $id){
                $student = Student::find($id);
                $student->name=$request->name;
                $student->email=$request->email;
                $student->phone=$request->phone;

                // return $id;
                if($student->save()){
                    return redirect('list');
                }else{
                    return "update not successful";
                }

            }

            function search(Request $request){
                $studentData = Student::where('name','like',"%$request->search%")->get();
                return view('list-student',['students'=>$studentData,'search'=>$request->search]);
                // return $request->search;
            }
}
