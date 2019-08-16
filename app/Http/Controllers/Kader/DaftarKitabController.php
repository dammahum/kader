<?php

namespace App\Http\Controllers\Kader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DaftarKitab;

class DaftarKitabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftarkitabs = DaftarKitab::orderBy('created_at', 'desc')->get();

        return view('backend.daftarkitab.index', compact('daftarkitabs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $daftarkitab = new DaftarKitab();

        return view('backend.daftarkitab.index', compact('daftarkitab'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DaftarKitab::create($request->all());

        return redirect('daftarkitab');
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
        $daftarkitab = DaftarKitab::findOrFail($id);

        return view('backend.daftarkitab.edit', compact('daftarkitab'));
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
        DaftarKitab::findOrFail($id)->update($request->all());

        return redirect('daftarkitab');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DaftarKitab::findOrFail($id)->delete();

        return redirect('daftarkitab');
    }
}
