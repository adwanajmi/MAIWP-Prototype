<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecutiRequest;
use App\Http\Requests\UpdatecutiRequest;
use App\Models\cuti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Auth;




class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->user()->role == "admin") {
            $cuti = cuti::all();

            // dd('test');
            return view('cuti.index', compact('cuti'));

        } else {
            $user = Auth::user();


            $user_id = $request->user()->id;
            $cuti = cuti::where('user_id', '=', $user_id)->get();
        }

        return view('cuti.index', compact('cuti', 'user'));

        // $cuti = cuti::all();
        // return view('cuti.index', compact('cuti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user_id = $request->user_id;
        $user = FacadesAuth::user();
        // dd($user);

        return view('cuti.create', compact("user_id", "user"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecutiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecutiRequest $request)
    {
        $cuti = cuti::create($request->all());
        return redirect()->route('cuti.index');


    }

    public function lulus($id)
    {

        $cuti = cuti::find($id);
        $cuti->lulus = true;
        $cuti->save();

        return redirect()->to('/cuti');



    }

    public function ditolak(Request $request)
    {
        $cuti = cuti::find($request->id);
        $cuti->lulus = false;
        $cuti->save();

        return redirect()->to('/cuti');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function show(cuti $cuti)
    {
        return view('cuti.show', compact('cuti'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function edit(cuti $cuti)
    {
        return view('cuti.edit', compact('cuti'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecutiRequest  $request
     * @param  \App\Models\cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecutiRequest $request, cuti $cuti)
    {
        $cuti->update($request->all());
        return redirect()->route('cuti.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function destroy(cuti $cuti)
    {
        return redirect()->route('cuti.index')
        ->with('success', 'cuti deleted successfully');

    }
}
