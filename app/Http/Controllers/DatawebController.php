<?php

namespace App\Http\Controllers;

use App\Models\Dataweb;
use App\Http\Requests\StoreDatawebRequest;
use App\Http\Requests\UpdateDatawebRequest;
use Illuminate\Http\Request;

class DatawebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.index', [
            "web" => collect(Dataweb::all())->first()
        ]);
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
     * @param  \App\Http\Requests\StoreDatawebRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDatawebRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dataweb  $dataweb
     * @return \Illuminate\Http\Response
     */
    public function show(Dataweb $dataweb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dataweb  $dataweb
     * @return \Illuminate\Http\Response
     */
    public function edit(Dataweb $dataweb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDatawebRequest  $request
     * @param  \App\Models\Dataweb  $dataweb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dataweb $dataweb)
    {

        validator($request->all(), [
            'nama_web' => 'required',
            'alamat' => 'required',
            'footer' => 'required',
            'pemilik' => 'required'
        ])->validate();



        Dataweb::where('id', 1)->update([
            'nama_web' => $request->nama_web,
            'alamat' => $request->alamat,
            'footer' => $request->footer,
            'pemilik' => $request->pemilik
        ]);


        return redirect()->route('web.index')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dataweb  $dataweb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dataweb $dataweb)
    {
        //
    }
}
