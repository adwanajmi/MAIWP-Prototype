<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelatihanRequest;
use App\Http\Requests\UpdatelatihanRequest;
use App\Models\latihan;
use Illuminate\Support\Facades\Auth;

class LatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $latihan = latihan::all();
        return view('latihan.index', compact('latihan', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('latihan.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorelatihanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelatihanRequest $request)
    {
        $latihan = latihan::create($request->all());
        return redirect()->route('latihan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\latihan  $latihan
     * @return \Illuminate\Http\Response
     */
    public function show(latihan $latihan)
    {
        return view('latihan.show', compact('latihan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\latihan  $latihan
     * @return \Illuminate\Http\Response
     */
    public function edit(latihan $latihan)
    {
        return view('latihan.edit',compact('latihan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelatihanRequest  $request
     * @param  \App\Models\latihan  $latihan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelatihanRequest $request, latihan $latihan)
    {
        $latihan->update($request->all());
        return redirect()->route('latihan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\latihan  $latihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(latihan $latihan)
    {
        $latihan->delete();

        return redirect()->route('latihan.index')
        ->with('success','latihan deleted successfully');
    }
}
