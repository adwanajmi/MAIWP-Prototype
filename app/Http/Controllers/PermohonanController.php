<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepermohonanRequest;
use App\Http\Requests\UpdatepermohonanRequest;
use App\Models\permohonan;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd(FacadesAuth::user());
        if ($request->user()->role == "admin") {
            $permohonan = permohonan::all();
        } else {

            // $user_id = $request->user()->id;
            // $permohonan = permohonan::where('id','=',$user_id)->get();

            $pemohon_id = $request->user()->id;
            $permohonan = permohonan::where('pemohon_id', '=', $pemohon_id)->get();
        }

        // dd($permohonan);

        return view('permohonan.index', compact('permohonan'));

        // $permohonan = permohonan::orderBy('id')->with('user');
        // if(!Auth::user()->hasRole('admin')){
        //     $permohonan=$permohonan->where('user_id', Auth::user()->id);
        // }

        // return view('permohonan.index', compact('permohonan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // ambil id letak dalam form

        $jawatan_id = $request->jawatan_id;
        $user = FacadesAuth::user();
        // dd($user);
        return view('permohonan.create', compact("jawatan_id", "user"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepermohonanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepermohonanRequest $request)
    {
        $permohonan = permohonan::create($request->all());
        // dd($permohonan);
        //create
        return redirect()->route('permohonan.index');
    }

    public function lulus($id)
    {

        $permohonan = permohonan::find($id);
        $permohonan->lulus = true;
        $permohonan->save();

        // $redirected_url='/permohonan';
        // return redirect($redirected_url);

        return redirect()->to('/permohonan');

        // return redirect()->route('permohonan.index')
        // ->with('success','Permohonan Lulus');

    }

    public function ditolak(Request $request)
    {
        $permohonan = permohonan::find($request->id);
        $permohonan->lulus = false;
        $permohonan->save();

        // $redirected_url='/permohonan';
        // return redirect($redirected_url);

        return redirect()->to('/permohonan');

        // return redirect()->route('permohonan.index')
        // ->with('success','Permohonan Ditolak');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function show(permohonan $permohonan)
    {
        return view('permohonan.show', compact('permohonan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function edit(permohonan $permohonan)
    {
        return view('permohonan.edit', compact('permohonan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepermohonanRequest  $request
     * @param  \App\Models\permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepermohonanRequest $request, permohonan $permohonan)
    {
        $permohonan->update($request->all());
        return redirect()->route('permohonan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function destroy(permohonan $permohonan)
    {
        return redirect()->route('permohonan.index')
            ->with('success', 'Permohonan deleted successfully');
    }
}
