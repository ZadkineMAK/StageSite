<?php

namespace App\Http\Controllers\Web;

use App\contact;
use App\role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminGebruikerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.gebruiker.AdminIndex', compact('users'));

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
    public function show($gebruiker)
    {
        return view('admin.gebruiker.AdminShow', compact('gebruiker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($gebruiker)
    {
        $role = role::all()->pluck('name', 'id');
        return view('admin.gebruiker.AdminEdit', compact('gebruiker', 'role'));
    }

}
