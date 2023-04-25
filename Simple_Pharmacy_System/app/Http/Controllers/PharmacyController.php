<?php

namespace App\Http\Controllers;

use App\Http\Requests\PharmacyRequest;
use App\Models\Pharmacy;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pharmacy.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pharmacy.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $pharmacy = Pharmacy::create($request->all());

    }

    /**
     * Display the specified resource.
     */
    public function show(Pharmacy $pharmacy)
    {
        return view('dashboard.pharmacy.show', compact('pharmacy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pharmacy $pharmacy)
    {
        return view('dashboard.pharmacy.edit', compact('pharmacy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PharmacyRequest $request, Pharmacy $pharmacy)
    {
        $pharmacy->update($request->all());
        return redirect()->route('dashboard.pharmacy.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pharmacy $pharmacy)
    {
        $pharmacy->delete();
        return redirect()->route('dashboard.pharmacy.index');
    }
}
