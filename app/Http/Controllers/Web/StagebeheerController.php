<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\tool;
use Illuminate\Http\Request;

use App\Http\Requests;

class StagebeheerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tools = tool::all();
        return view('stagebeheer.index', compact('tools'));
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
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    public function edit($id){
        
    }

}
