<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorekakitanganRequest;
use App\Http\Requests\UpdatekakitanganRequest;
use App\Models\kakitangan;

class KakitanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kakitangan = Kakitangan::all();
        return view('kakitangan.index', compact('kakitangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kakitangan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorekakitanganRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekakitanganRequest $request)
    {
        $kakitangan = kakitangan::create($request->all());

        return redirect()->route('kakitangan.index', $kakitangan);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kakitangan  $kakitangan
     * @return \Illuminate\Http\Response
     */
    public function show(kakitangan $kakitangan)
    {
        return view('kakitangan.show', compact('kakitangan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kakitangan  $kakitangan
     * @return \Illuminate\Http\Response
     */
    public function edit(kakitangan $kakitangan)
    {
        return view('kakitangan.edit',compact('kakitangan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekakitanganRequest  $request
     * @param  \App\Models\kakitangan  $kakitangan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekakitanganRequest $request, kakitangan $kakitangan)
    {
        $kakitangan->update($request->all());
        return redirect()->route('kakitangan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kakitangan  $kakitangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(kakitangan $kakitangan)
    {
        $kakitangan->delete();

        return redirect()->route('kakitangan.index')
                        ->with('success','Kakitangan deleted successfully');
    }
}
