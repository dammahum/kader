<?php

namespace App\Http\Controllers\Kader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Model\StatusPekerjaan;

class StatusPekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statuspekerjaans = StatusPekerjaan::orderBy('created_at', 'desc')->get();

        return view('backend.statuspekerjaan.index', compact('statuspekerjaans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuspekerjaan = new StatusPekerjaan();

        return view('backend.statuspekerjaan.create', compact('statuspekerjaan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\StatusPekerjaanStoreRequest $request)
    {
        StatusPekerjaan::create($request->all());

        return redirect('statuspekerjaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $statuspekerjaan = StatusPekerjaan::findOrFail($id);

        return view('backend.statuspekerjaan.edit', compact('statuspekerjaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\StatusPekerjaanUpdateRequest $request, $id)
    {
        StatusPekerjaan::findOrFail($id)->update($request->all());

        return redirect('statuspekerjaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StatusPekerjaan::findOrFail($id)->delete();

        return redirect('statuspekerjaan');
    }
}
