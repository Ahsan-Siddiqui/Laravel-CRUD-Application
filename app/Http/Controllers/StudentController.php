<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student; 

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // all() this is use to get all data from database and compact show your data after taking your database name
        $students = Student::all();
        return view('welcome',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate is use to define condition that if some the 
        // input field is empty then validate function show an error
      $this->validate($request,[
          'fname' => 'required',
          'lname' => 'required',
          'email' => 'required',
          'phone' => 'required'
      ]);
    //   SAVE DATA FROM CREATE PAGE TO DATABASE
      $student = new Student;
    //   student-> name is our database field name 
    //   and request-> name is our form field name
      $student->first_name = $request->fname;
      $student->last_name  = $request->lname;
      $student->email      = $request->email;
      $student->phone      = $request->phone;
      $student->save();
      return redirect(route('home'))->with('successMsg','Stundent Add Successfully');
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
        $student = Student::find($id);
        return view('edit',compact('student'));
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
         // Validate is use to define condition that if some the 
        // input field is empty then validate function show an error
      $this->validate($request,[
          'fname' => 'required',
          'lname' => 'required',
          'email' => 'required',
          'phone' => 'required'
      ]);
    //   SAVE DATA FROM CREATE PAGE TO DATABASE
      $student = Student::find($id);
    //   student-> name is our database field name 
    //   and request-> name is our form field name
      $student->first_name = $request->fname;
      $student->last_name  = $request->lname;
      $student->email      = $request->email;
      $student->phone      = $request->phone;
      $student->save();
      return redirect(route('home'))->with('successUpdateMsg','Stundent Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
       Student::find($id)->delete();
       return redirect(route('home'))->with('successDeleteMsg','Stundent Delete Successfully');
    }
}
