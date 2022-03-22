<?php

namespace App\Http\Controllers;

use App\Models\KetNoi;
use App\Http\Requests\StoreKetNoiRequest;
use App\Http\Requests\UpdateKetNoiRequest;

class KetNoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreKetNoiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKetNoiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KetNoi  $ketNoi
     * @return \Illuminate\Http\Response
     */
    public function show(KetNoi $ketNoi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KetNoi  $ketNoi
     * @return \Illuminate\Http\Response
     */
    public function edit(KetNoi $ketNoi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKetNoiRequest  $request
     * @param  \App\Models\KetNoi  $ketNoi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKetNoiRequest $request, KetNoi $ketNoi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KetNoi  $ketNoi
     * @return \Illuminate\Http\Response
     */
    public function destroy(KetNoi $ketNoi)
    {
        //
    }
}
