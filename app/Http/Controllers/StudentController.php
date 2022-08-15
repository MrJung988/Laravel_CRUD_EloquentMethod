<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student:: all();
        return view('home', ['students'=> $student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response $request
     * @return \Illuminate\Http\Response
     **/
    public function store(Request $request)
    { 
        $student= new Student;
            $student-> fname = $request->fname;
            $student-> lname = $request->lname;
            $student-> pname = $request->pname;
            $student-> contact = $request->contact;
            $student-> address = $request->address;
            $student-> save();

            return redirect(route('index'));
    }


   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student:: find($id);

        return view('editdata', ['students'=>$student]);
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
        $student = Student:: find($id);
            $student-> fname = $request->fname;
            $student-> lname = $request->lname;
            $student-> pname = $request->pname;
            $student-> contact = $request->contact;
            $student-> address = $request->address;
            $student-> save();

            return redirect(route('index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student:: destroy($id);
        return redirect(route('index'));  
    }
}
