<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-6">

    public function index()
    {
        $personals = Personal::all();
        return view('personals.index', compact('personals'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Personal::create($request->all());
        return redirect()->route('personals.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personal $personal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personal $personal)
    {
        return view('personals.edit', compact('personal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personal $personal)
    {
        $personal->update($request->all());
        return redirect()->route('personals.index');
    }

    /**
     * Remove the specified resource from storage.
     */ 
    public function destroy(Personal $personal)
    {
        $personal->delete(); 
        return redirect()->route('personals.index');
    }
}
