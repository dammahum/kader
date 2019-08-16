<?php

namespace App\Http\Controllers\Kader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Model\DaftarKeahlian;

class DaftarKeahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftarkeahlians = DaftarKeahlian::orderBy('created_at', 'desc')->get();

        return view('backend.daftarkeahlian.index', compact('daftarkeahlians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $daftarkeahlian = New DaftarKeahlian();

        return view('backend.daftarkeahlian.create', compact('daftarkeahlian'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\DaftarKeahlianStoreRequest $request)
    {
        DaftarKeahlian::create($request->all());

        return redirect('daftarkeahlian');
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
        $daftarkeahlian = DaftarKeahlian::findOrFail($id);

        return view('backend.daftarkeahlian.edit', compact('daftarkeahlian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\DaftarKeahlianUpdateRequest $request, $id)
    {
        DaftarKeahlian::findOrFail($id)->update($request->all());

        return redirect('daftarkeahlian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DaftarKeahlian::findOrFail($id)->delete();

        return redirect('daftarkeahlian');
    }
}
