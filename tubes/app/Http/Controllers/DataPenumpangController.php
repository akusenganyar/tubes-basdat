<?php

namespace App\Http\Controllers;

use App\Models\pemesanan\data_penumpang;
use Illuminate\Http\Request;

class DataPenumpangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemesanan.data-penumpang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        data_penumpang::create($request->all());
        return redirect()->route('pemesanan.create')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pemesanan\data_penumpang  $data_penumpang
     * @return \Illuminate\Http\Response
     */
    public function show(data_penumpang $data_penumpang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pemesanan\data_penumpang  $data_penumpang
     * @return \Illuminate\Http\Response
     */
    public function edit(data_penumpang $data_penumpang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedata_penumpangRequest  $request
     * @param  \App\Models\pemesanan\data_penumpang  $data_penumpang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, data_penumpang $data_penumpang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pemesanan\data_penumpang  $data_penumpang
     * @return \Illuminate\Http\Response
     */
    public function destroy(data_penumpang $data_penumpang)
    {
        //
    }
}
