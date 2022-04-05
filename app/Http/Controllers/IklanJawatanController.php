<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeiklan_jawatanRequest;
use App\Http\Requests\Updateiklan_jawatanRequest;
use App\Models\iklan_jawatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IklanJawatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $iklan_jawatan = iklan_jawatan::all();
        return view ('iklanJawatan.index',compact('iklan_jawatan', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('iklanJawatan.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeiklan_jawatanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeiklan_jawatanRequest $request)
    {
        $iklan_jawatan = iklan_jawatan::create($request->all());

        return redirect()->route('iklanJawatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\iklan_jawatan  $iklan_jawatan
     * @return \Illuminate\Http\Response
     */
    public function show(iklan_jawatan $iklan_jawatan)
    {
        // dd($iklan_jawatan);
        return view('iklanJawatan.show',compact('iklan_jawatan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\iklan_jawatan  $iklan_jawatan
     * @return \Illuminate\Http\Response
     */
    public function edit($iklan_jawatan)
    {
        // dd($iklan_jawatan);
        $iklan_jawatan = iklan_jawatan::where('id', $iklan_jawatan)->first();
        return view('iklanJawatan.edit',compact('iklan_jawatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateiklan_jawatanRequest  $request
     * @param  \App\Models\iklan_jawatan  $iklan_jawatan
     * @return \Illuminate\Http\Response
     */
    public function update(Updateiklan_jawatanRequest $request, $iklan_jawatan)
    {
        $iklan_jawatan = iklan_jawatan::where('id', $iklan_jawatan)->first();

         $iklan_jawatan->update($request->all());
            // dd($iklan_jawatan);
         return redirect()->route('iklanJawatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\iklan_jawatan  $iklan_jawatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(iklan_jawatan $iklan_jawatan)
    {
        $iklan_jawatan->delete();

        return redirect()->route('iklanJawatan.index')
                        ->with('success','Iklan Jawatan deleted successfully');
    }
}
