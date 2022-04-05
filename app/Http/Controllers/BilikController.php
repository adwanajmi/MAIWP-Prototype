<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorebilikRequest;
use App\Http\Requests\UpdatebilikRequest;
use App\Models\bilik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Auth;

class BilikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->user()->role == "admin") {
            $bilik = bilik::all();

            // dd($bilik);
            return view('bilik.index', compact('bilik'));

        } else {
            $user = Auth::user();


            $user_id = $request->user()->id;
            $bilik = bilik::where('user_id', '=', $user_id)->get();
        }

        return view('bilik.index', compact('bilik', 'user'));
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

        return view('bilik.create', compact("user_id", "user"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebilikRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebilikRequest $request)
    {
        $bilik = bilik::create($request->all());
        return redirect()->route('bilik.index');
    }

    public function lulus($id)
    {

        $bilik = bilik::find($id);
        $bilik->lulus = true;
        $bilik->save();

        return redirect()->to('/bilik');



    }

    public function ditolak(Request $request)
    {
        $bilik = bilik::find($request->id);
        $bilik->lulus = false;
        $bilik->save();

        return redirect()->to('/bilik');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bilik  $bilik
     * @return \Illuminate\Http\Response
     */
    public function show(bilik $bilik)
    {
        return view('bilik.show', compact('bilik'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bilik  $bilik
     * @return \Illuminate\Http\Response
     */
    public function edit(bilik $bilik)
    {
        return view('bilik.edit', compact('bilik'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebilikRequest  $request
     * @param  \App\Models\bilik  $bilik
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebilikRequest $request, bilik $bilik)
    {
        $bilik->update($request->all());
        return redirect()->route('bilik.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bilik  $bilik
     * @return \Illuminate\Http\Response
     */
    public function destroy(bilik $bilik)
    {
        return redirect()->route('bilik.index')
        ->with('success', 'Bilik deleted successfully');
    }
}
