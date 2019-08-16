<?php

namespace App\Http\Controllers\Kader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Model\JenjangTarbiyah;

class JenjangTarbiyahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenjangtarbiyahs = JenjangTarbiyah::orderBy('created_at', 'desc')->get();

        return view('backend.jenjangtarbiyah.index', compact('jenjangtarbiyahs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenjangtarbiyah = New JenjangTarbiyah();

        return view('backend.jenjangtarbiyah.create', compact('jenjangtarbiyah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\JenjangTarbiyahStoreRequest $request)
    {
        JenjangTarbiyah::create($request->all());

        return redirect('jenjangtarbiyah');
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
        $jenjangtarbiyah = JenjangTarbiyah::findOrFail($id);

        return view('backend.jenjangtarbiyah.edit', compact('jenjangtarbiyah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\JenjangTarbiyahUpdateRequest $request, $id)
    {
        JenjangTarbiyah::findOrFail($id)->update($request->all());

        return redirect('jenjangtarbiyah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JenjangTarbiyah::findOrFail($id)->delete();

        return redirect('jenjangtarbiyah');
    }
}
