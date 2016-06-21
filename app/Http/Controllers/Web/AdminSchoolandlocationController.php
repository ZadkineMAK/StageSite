<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\school;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminSchoolandlocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($school)
    {
        return view('admin.schoolandlocation.create', compact('school'));

    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($location)
    {
        return view('admin.schoolandlocation.edit', compact('location'));

    }

}
