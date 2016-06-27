<?php

namespace App\Http\Controllers\Api;

use App\contact;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class AdminGebruikerController extends Controller
{

//    public function validator($input){
//        return Validator::make($input, [
//                'name' => 'required|max:50|min:2',
//            ]
//        )
//    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    private function validator($input)
    {
        return Validator::make($input, [
            'email' => 'unique:Users,email'

        ]);
    }


    public function store(Request $request)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $gebruiker)
    {
        $input = $request->all();
        $validator = $this->validator($input);
        if ($validator->fails()) {
            return redirect()->back()->with('status', 'Het ingevulde e-mailadres is al in gebruik.');
        }
        $gebruiker->update($request->all());
        $gebruiker->contact()->update($request->all());
        return redirect(route('admin.gebruiker.index'))->with('status','Wijzigingen zijn opgeslagen');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($gebruiker)
    {
        $gebruiker->delete();
        return redirect(route('admin.gebruiker.index'))->with('status','De gebruiker is succesvol verwijderd.');

    }
}
