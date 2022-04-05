<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreuserRequest;
use App\Http\Requests\UpdateuserRequest;

use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view ('user.index',compact('user'));

    }

    public function kehadiran(user $user)
    {

        // $user = User::all();

        return view ('user.kehadiran',compact('user'));

    }

    public function tatatertib(user $user)
    {

        // $user = User::all();

        return view ('user.tatatertib',compact('user'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreuserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreuserRequest $request)
    {
        // $user = user::create($request->all());
        // return redirect()->route('user.index');

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->password_confirmation = $request->password_confirmation;
        $user->role = $request->role;

        $user->save();
        dd('hhahahhaha');

        $redirected_url = '/user/';
        return redirect($redirected_url);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        return view('user.show', compact('user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        return view('user.edit',compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateuserRequest  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateuserRequest $request, user $user)
    {
        $user->update($request->all());

         return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        $user->delete();

        return redirect()->route('user.index')
                        ->with('success','user deleted successfully');
    }
}
