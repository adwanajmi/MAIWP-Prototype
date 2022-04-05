<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorenotifikasiRequest;
use App\Http\Requests\UpdatenotifikasiRequest;
use App\Models\notifikasi;

class NotifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifikasi = Notifikasi::all();
        return view('notifikasi.index', compact('notifikasi'));

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
     * @param  \App\Http\Requests\StorenotifikasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorenotifikasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\notifikasi  $notifikasi
     * @return \Illuminate\Http\Response
     */
    public function show(notifikasi $notifikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\notifikasi  $notifikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(notifikasi $notifikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatenotifikasiRequest  $request
     * @param  \App\Models\notifikasi  $notifikasi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatenotifikasiRequest $request, notifikasi $notifikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\notifikasi  $notifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(notifikasi $notifikasi)
    {
        //
    }
}
