<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginSignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fullname = $request->fname." ".$request->lname;
        $birthday = $request->year."-".$request->month."-".$request->day;

        $user = new User;
        $user->name = $fullname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->DOB = $birthday;
        $user->gender = $request->gender;
        $user->verification_token = "fjalsdkjf2klj5l2345ljk6l2j4365243l5jkljk";
        $user->verified = "false";
        $user->save();
        return "logged in";
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
