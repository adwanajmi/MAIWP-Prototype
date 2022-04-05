<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorehartaRequest;
use App\Http\Requests\UpdatehartaRequest;
use App\Models\harta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Http\Request;




class HartaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->user()->role == "admin") {
            $harta = harta::all();

            return view('harta.index', compact('harta'));

        } else {

            $user = Auth::user();

            $user_id = $request->user()->id;
            $harta = harta::where('user_id', '=', $user_id)->get();
        }

        // $harta = harta::all();

        // $user = Auth::user();

        // // dd($user);
        return view('harta.index', compact('harta', 'user'));
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
        // dd($user_id);

        // $user = Auth::user();
        // dd($user);
        return view('harta.create', compact("user"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorehartaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorehartaRequest $request)
    {
        $harta = harta::create($request->all());

        return redirect()->route('harta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\harta  $harta
     * @return \Illuminate\Http\Response
     */
    public function show(harta $harta)
    {
        return view('harta.show', compact('harta'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\harta  $harta
     * @return \Illuminate\Http\Response
     */
    public function edit(harta $harta)
    {
        return view('harta.edit', compact('harta'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatehartaRequest  $request
     * @param  \App\Models\harta  $harta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatehartaRequest $request, harta $harta)
    {
        $harta->update($request->all());
        return redirect()->route('harta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\harta  $harta
     * @return \Illuminate\Http\Response
     */
    public function destroy(harta $harta)
    {
        $harta->delete();

        return redirect()->route('harta.index')
                        ->with('success','Harta deleted successfully');
    }
}
