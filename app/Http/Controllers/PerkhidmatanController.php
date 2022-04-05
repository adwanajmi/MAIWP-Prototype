<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreperkhidmatanRequest;
use App\Http\Requests\UpdateperkhidmatanRequest;
use App\Models\perkhidmatan;

class PerkhidmatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perkhidmatan = Perkhidmatan::all();
        return view('perkhidmatan.index', compact('perkhidmatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perkhidmatan.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreperkhidmatanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreperkhidmatanRequest $request)
    {
        $perkhidmatan = Perkhidmatan::create($request->all());
        return redirect()->route('perkhidmatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\perkhidmatan  $perkhidmatan
     * @return \Illuminate\Http\Response
     */
    public function show(perkhidmatan $perkhidmatan)
    {
        return view('perkhidmatan.show', compact('perkhidmatan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\perkhidmatan  $perkhidmatan
     * @return \Illuminate\Http\Response
     */
    public function edit(perkhidmatan $perkhidmatan)
    {
        return view('perkhidmatan.edit',compact('perkhidmatan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateperkhidmatanRequest  $request
     * @param  \App\Models\perkhidmatan  $perkhidmatan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateperkhidmatanRequest $request, perkhidmatan $perkhidmatan)
    {
        $perkhidmatan->update($request->all());
        return redirect()->route('perkhidmatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\perkhidmatan  $perkhidmatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(perkhidmatan $perkhidmatan)
    {
        $perkhidmatan->delete();

        return redirect()->route('perkhidmatan.index')
                        ->with('success','Perkhidmatan deleted successfully');
    }
}
