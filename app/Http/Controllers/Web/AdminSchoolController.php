<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\school;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminSchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = school::all();
        return view('admin.school.index', compact('schools'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.school.create');

    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($school)
    {
        return view('admin.school.show', compact('school'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($school)
    {
        return view('admin.school.edit', compact('school'));
    }
    
}
