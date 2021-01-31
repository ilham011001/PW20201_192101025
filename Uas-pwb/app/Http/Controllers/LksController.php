<?php

namespace App\Http\Controllers;

use App\Models\Lks;
use Illuminate\Http\Request;

class LksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
    {
        $lkses = Lks::all();
        $isCreate = true;

        return view('lks.index', compact('lkses', 'isCreate'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return
     */
    public function store(Request $request)
    {
        Lks::create($request->all());

        return redirect()->route('lks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lks  $lks
     * @return
     */
    public function show(Lks $lks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lks  $lks
     * @return
     */
    public function edit(Lks $lks, $id)
    {
        $lkses = Lks::all();
        $isCreate = false;
        $lks = Lks::findOrFail($id);

        return view('lks.index', compact('lkses', 'isCreate', 'lks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lks  $lks
     * @return
     */
    public function update(Request $request, Lks $lks, $id)
    {
        $lks = Lks::findOrFail($id);
        $lks->update($request->all());

        return redirect()->route('lks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lks  $lks
     * @return
     */
    public function destroy(Lks $lks, $id)
    {
        $lks = Lks::findOrFail($id);
        $lks->delete();

        return redirect()->route('lks.index');
    }
}
