<?php

namespace App\Http\Controllers;

use App\Models\Annunce;
use Illuminate\Http\Request;

class AnnunceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('annunce.annunce-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Annunce::create($request->all());
        return redirect()->route('annunce.annunceList');
    }

    // ->with(['success'=>'categoria creato']);
    /**
     * Display the specified resource.
     */
    public function show(Annunce $annunce)
    {
        return view('list-annunce');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Annunce $annunce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Annunce $annunce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Annunce $annunce)
    {
        //
    }
}
