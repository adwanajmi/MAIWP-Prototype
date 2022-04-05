<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorekenderaanRequest;
use App\Http\Requests\UpdatekenderaanRequest;
use App\Models\kenderaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Auth;

class KenderaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->user()->role == "admin") {
            $kenderaan = kenderaan::all();

            // dd('test');
            return view('kenderaan.index', compact('kenderaan'));

        } else {
            $user = Auth::user();


            $user_id = $request->user()->id;
            $kenderaan = kenderaan::where('user_id', '=', $user_id)->get();
        }

        return view('kenderaan.index', compact('kenderaan', 'user'));
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

        return view('kenderaan.create', compact("user_id", "user"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorekenderaanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekenderaanRequest $request)
    {
        $kenderaan = kenderaan::create($request->all());

        // dd($kenderaan);

        return redirect()->route('kenderaan.index');
    }

    public function lulus($id)
    {

        $kenderaan = kenderaan::find($id);
        $kenderaan->lulus = true;
        $kenderaan->save();

        return redirect()->to('/kenderaan');



    }

    public function ditolak(Request $request)
    {
        $kenderaan = kenderaan::find($request->id);
        $kenderaan->lulus = false;
        $kenderaan->save();

        return redirect()->to('/kenderaan');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kenderaan  $kenderaan
     * @return \Illuminate\Http\Response
     */
    public function show(kenderaan $kenderaan)
    {
        return view('kenderaan.show', compact('kenderaan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kenderaan  $kenderaan
     * @return \Illuminate\Http\Response
     */
    public function edit(kenderaan $kenderaan)
    {
        return view('kenderaan.edit', compact('kenderaan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekenderaanRequest  $request
     * @param  \App\Models\kenderaan  $kenderaan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekenderaanRequest $request, kenderaan $kenderaan)
    {
        $kenderaan->update($request->all());
        return redirect()->route('kenderaan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kenderaan  $kenderaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(kenderaan $kenderaan)
    {
        return redirect()->route('kenderaan.index')
        ->with('success', 'kenderaan deleted successfully');
    }
}
