<?php

namespace App\Http\Controllers;

use App\Models\ChamCong;
use App\Http\Requests\StoreChamCongRequest;
use App\Http\Requests\UpdateChamCongRequest;

class ChamCongController extends Controller
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
     * @param  \App\Http\Requests\StoreChamCongRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChamCongRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChamCong  $chamCong
     * @return \Illuminate\Http\Response
     */
    public function show(ChamCong $chamCong)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChamCong  $chamCong
     * @return \Illuminate\Http\Response
     */
    public function edit(ChamCong $chamCong)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChamCongRequest  $request
     * @param  \App\Models\ChamCong  $chamCong
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChamCongRequest $request, ChamCong $chamCong)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChamCong  $chamCong
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChamCong $chamCong)
    {
        //
    }
}
