<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the schools from database
        $schools = School::all();


        // call view by passing in all the schools as a variable call
        return view('schools.schoolshome', ['schools' => $schools]);
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






}
