<?php

namespace App\Http\Controllers;

use App\Models\Thuong;
use App\Http\Requests\StoreThuongRequest;
use App\Http\Requests\UpdateThuongRequest;

class ThuongController extends Controller
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
     * @param  \App\Http\Requests\StoreThuongRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreThuongRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thuong  $thuong
     * @return \Illuminate\Http\Response
     */
    public function show(Thuong $thuong)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thuong  $thuong
     * @return \Illuminate\Http\Response
     */
    public function edit(Thuong $thuong)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateThuongRequest  $request
     * @param  \App\Models\Thuong  $thuong
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateThuongRequest $request, Thuong $thuong)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thuong  $thuong
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thuong $thuong)
    {
        //
    }
}
