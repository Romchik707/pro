<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();

        return view('users.index', compact('users'));
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @param  Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, User $user)
    {

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $frd = $request->all();
        $user->update([
            'name'=>$frd['name'] ?? '',
            'email'=>Arr::get($frd, 'email'),
            'password'=>Arr::get($frd, 'password'),
        ]);

        return redirect()->back();
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
