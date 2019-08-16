<?php

namespace App\Http\Controllers\Kader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Model\StatusPernikahan;

class StatusPernikahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statuspernikahans = StatusPernikahan::orderBy('created_at', 'desc')->get();

        return view('backend.statuspernikahan.index', compact('statuspernikahans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuspernikahan = New StatusPernikahan();

        return view('backend.statuspernikahan.create', compact('statuspernikahan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\StatusPernikahanStoreRequest $request)
    {
        StatusPernikahan::create($request->all());

        return redirect('statuspernikahan');
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
        $statuspernikahan = StatusPernikahan::findOrFail($id);

        return view('backend.statuspernikahan.edit', compact('statuspernikahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\StatusPernikahanUpdateRequest $request, $id)
    {
        StatusPernikahan::findOrFail($id)->update($request->all());

        return redirect('statuspernikahan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StatusPernikahan::findOrFail($id)->delete();

        return redirect('statuspernikahan');
    }
}
