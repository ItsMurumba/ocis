<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use App\Course;
use App\Student;
use Illuminate\Support\Facades\Input;
use Event;
use App\Events\RequestEvent;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses=Course::pluck('courseName','id')->toArray();
        return view('students', ['courses'=> $courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        //
        $student=new Student();
        $student->firstName=Input::get('fName');
        $student->lastName=Input::get('lName');
        $student->email=Input::get('email');
        $student->dob=Input::get('dob');
        $student->doa=Input::get('doa');
        $student->courseId=Input::get('courses');
        $student->save();

        if($student){
            Event::fire(new RequestEvent($student->id));
            \Session::flash('message', 'Successfully Registered!');
            return redirect()->action('StudentsController@index');
        }else{
            \Session::flash('message', 'Failed!');
            return redirect()->action('StudentsController@index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
