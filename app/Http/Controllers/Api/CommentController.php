<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\review;
use App\stage_user;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

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
    public function store(Request $request)
    {
        $input = $request->all();
        $input['status_id'] = 1;
        $internshipuser = stage_user::where('id',$input['stage_user_id'])->first();
        unset($input['stage_user_id']);
        $input['stage_user_id'] = $internshipuser->id;
        review::create($input);
        return redirect()->back()->with('status', 'Je comment is toegevoegd');
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
