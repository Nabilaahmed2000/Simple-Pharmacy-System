<?php

namespace App\Http\Controllers;

use App\Http\Requests\PharmacyRequest;
use App\Http\Requests\PharmacyUpdateRequest;
use App\Models\Pharmacy;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allPharmacies = Pharmacy::all();
        return view('dashboard.pharmacy.index',compact('allPharmacies'));
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
    public function store(PharmacyRequest $request)
    {
        Pharmacy::create($request->all());
        return redirect()->route('pharmacy.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $pharmacy = Pharmacy::find($id);
        return view('dashboard.pharmacy.show', compact('pharmacy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $pharmacy = Pharmacy::find($id);
        return view('dashboard.pharmacy.update', compact('pharmacy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PharmacyUpdateRequest $request, Pharmacy $pharmacy)
    {
        // dd($request->all());
        $pharmacy->update($request->all());
        return redirect()->route('pharmacy.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pharmacy $pharmacy)
    {
        $pharmacy->delete();
        return redirect()->route('pharmacy.index');
    }
}
