<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretemudugaRequest;
use App\Http\Requests\UpdatetemudugaRequest;
use App\Models\temuduga;

use Illuminate\Http\Request;
class TemudugaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {

        $user_id = $request->user()->id;

        $temuduga = temuduga::where('id','=',$user_id)->get();
        // dd($temuduga);



        return view('temuduga.index', compact('temuduga'));
    }

    // public function index1()
    // {
    //     $temuduga = temuduga::all();
    //     return view('temuduga1.index', compact('temuduga1'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('temuduga.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretemudugaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretemudugaRequest $request)
    {
        $temuduga = temuduga::create($request->all());
        return redirect()->route('temuduga.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\temuduga  $temuduga
     * @return \Illuminate\Http\Response
     */
    public function show(temuduga $temuduga)
    {
        // dd($temuduga);
        return view('temuduga.show', compact('temuduga'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\temuduga  $temuduga
     * @return \Illuminate\Http\Response
     */
    public function edit(temuduga $temuduga)
    {
        return view('temuduga.edit',compact('temuduga'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetemudugaRequest  $request
     * @param  \App\Models\temuduga  $temuduga
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetemudugaRequest $request, temuduga $temuduga)
    {
        $temuduga->update($request->all());
        return redirect()->route('temuduga.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\temuduga  $temuduga
     * @return \Illuminate\Http\Response
     */
    public function destroy(temuduga $temuduga)
    {
        $temuduga->delete();

        return redirect()->route('temuduga.index')
                        ->with('success','Temuduga deleted successfully');
    }
}
