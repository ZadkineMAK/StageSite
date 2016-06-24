<?php

namespace App\Http\Controllers\Web;

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stages = internship::all();
        $steden = location::all()->pluck('city', 'id');
        $crebo = crebo::all()->pluck('name', 'id');

        return view('stage.index', compact('stages', 'steden', 'crebo'));

    }

    public function search(Request $request){

        /**
         * Stage where cohort id = 1
         * Stage where locatie id = 1
         */
        $input = $request->all();

        $stages = internship::whereHas('course', function($query) use ($input) {
            $query->where('location_id', $input['city'])->whereHas('crebo', function($q) use ($input) {
                $q->where('crebo_id', $input['crebo']);
            });
        })->get();
        return view('stage.search', compact('stages'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacts = contact::all()->pluck('id');
        $courses = course::all()->pluck('full_name', 'id');
        $stage = internship::all();
        $location  = location::all()->pluck('address');

        return view('stage.create', compact('contacts', 'courses','stage','location'));
    }



    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($stage)
    {
        $stage = internship::findorfail($stage);
        return view('stage.show', compact('stage', 'location'));

//        $stage = $stage::find($stage);
//        return $stage;


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = course::all()->pluck('full_name', 'id');

        $stage = internship::find($id);
        return view('stage.edit',compact('stage', 'courses'));

    }


}
