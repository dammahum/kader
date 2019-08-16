<?php

namespace App\Http\Controllers\Kader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Model\JenisUsaha;

class JenisUsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisusahas = JenisUsaha::orderBy('created_at', 'desc')->get();

        return view('backend.jenisusaha.index', compact('jenisusahas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenisusaha = new JenisUsaha();

        return view('backend.jenisusaha.create', compact('jenisusaha'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\JenisUsahaStoreRequest $request)
    {
        JenisUsaha::create($request->all());

        return redirect('jenisusaha');
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
        $jenisusaha = JenisUsaha::findOrFail($id);

        return view('backend.jenisusaha.edit', compact('jenisusaha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        JenisUsaha::findOrFail($id)->update($request->all());

        return redirect('jenisusaha');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JenisUsaha::findOrFail($id)->delete();

        return redirect('jenisusaha');
    }
}
