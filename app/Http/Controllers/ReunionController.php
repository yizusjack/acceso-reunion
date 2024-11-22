<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reunion;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ReunionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reunion.createReunion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Reunion::create($request->all());

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reunion $reunion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reunion $reunion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reunion $reunion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reunion $reunion)
    {
        //
    }

    public function asignar(Reunion $reunion, User $user)
    {
        $reunion->users()->attach($user, ['codigo' => Str::uuid()]);
        
        return redirect()->route('dashboard');
    }
}
