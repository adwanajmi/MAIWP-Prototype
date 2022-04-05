<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoremesyuaratRequest;
use App\Http\Requests\UpdatemesyuaratRequest;
use App\Models\mesyuarat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class MesyuaratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $mesyuarat = mesyuarat::all();
        // return view('mesyuarat.index', compact('mesyuarat'));

        if ($request->user()->role == "admin") {

            // $user = User::all();

            // $mesyuarat = mesyuarat::all();

            $mesyuarat['mesyuarat'] = mesyuarat::
            where('user_id','=',Auth::user()->id)
                ->Paginate(7)
                ->onEachSide(2);;
            return view('mesyuarat.index')->with($mesyuarat);

            // dd('test');
            // return view('mesyuarat.index', compact('mesyuarat'));

        } else {
            $user = Auth::user();


            $user_id = $request->user()->id;
            $mesyuarat = mesyuarat::where('user_id', '=', $user_id)->get();
        }

        return view('mesyuarat.index', compact('mesyuarat', 'user'));
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


        $list= User::all();

        return view('mesyuarat.create', compact("user_id", "user", "list"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremesyuaratRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremesyuaratRequest $request)
    {
        $mesyuarat = mesyuarat::create($request->all());
        return redirect()->route('mesyuarat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mesyuarat  $mesyuarat
     * @return \Illuminate\Http\Response
     */
    public function show(mesyuarat $mesyuarat)
    {
        return view('mesyuarat.show', compact('mesyuarat'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mesyuarat  $mesyuarat
     * @return \Illuminate\Http\Response
     */
    public function edit(mesyuarat $mesyuarat)
    {
        return view('mesyuarat.edit',compact('mesyuarat'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemesyuaratRequest  $request
     * @param  \App\Models\mesyuarat  $mesyuarat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemesyuaratRequest $request, mesyuarat $mesyuarat)
    {
        $mesyuarat->update($request->all());
        return redirect()->route('mesyuarat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mesyuarat  $mesyuarat
     * @return \Illuminate\Http\Response
     */
    public function destroy(mesyuarat $mesyuarat)
    {
        //
    }
}
