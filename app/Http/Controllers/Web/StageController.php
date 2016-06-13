<?php

namespace App\Http\Controllers\Web;

use App\companie;
use App\course;
use App\crebo;
use App\internship;
use App\location;
use App\review;
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

//        dd($input);
        $stages = internship::whereHas('course', function($query) use ($input) {
            $query->where('location_id', $input['city'])->whereHas('cohort', function($q) use ($input) {
                $q->where('crebo_id', $input['crebo']);
            });
        })->get();

        foreach($stages as $stage) {
            dd($stage->contact->companie->name);
        }

//        dd($stages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stage = internship::all();
        return view('stage.toevoegen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
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
        //
    }
}
