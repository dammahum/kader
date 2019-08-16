<?php

namespace App\Http\Controllers\Kader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Model\AmalJamai;

class AmalJamaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amaljamais = AmalJamai::orderBy('created_at', 'desc')->get();

        return view('backend.amaljamai.index', compact('amaljamais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $amaljamai = new AmalJamai();

        return view('backend.amaljamai.create', compact('amaljamai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\AmalJamaiStoreRequest $request)
    {
        $amaljamai = AmalJamai::create($request->all());

        return redirect('amaljamai');
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
        $amaljamai = AmalJamai::findOrFail($id);

        return view('backend.amaljamai.edit', compact('amaljamai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\AmalJamaiUpdateRequest $request, $id)
    {
        AmalJamai::findOrFail($id)->update($request->all());

        return redirect('amaljamai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AmalJamai::findOrFail($id)->delete();

        return redirect('amaljamai');
    }
}
