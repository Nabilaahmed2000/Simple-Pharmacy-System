<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class PharmacyOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pharmacyOwners = Doctor::role('owner')->get();
        return view('dashboard.pharmacyOwners.index',[
            'pharmacyOwners' =>$pharmacyOwners
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pharmacyOwners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd('store in data base');
        return redirect()->route('pharmacyOwners.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('dashboard.pharmacyOwners.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.pharmacyOwners.update');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return redirect()->route('pharmacyOwners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
