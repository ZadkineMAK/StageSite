<?php

namespace App\Http\Controllers\Api;

use App\course;
use App\crebo;
use App\internship;
use App\location;
use App\contact;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StageController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {
        $input = $request->all();
//        dd($input['contact_id']);
        $input['status_id'] = 1;
        internship::create($input);

        dd(' success you add a new intership in');
    }

    public function edit($id)
    {
        $stage = internship::all()->pluck('full_name','id');

        return view('stage.edit',compact('stage'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stage = internship::find($id)->delete();

    }
}
