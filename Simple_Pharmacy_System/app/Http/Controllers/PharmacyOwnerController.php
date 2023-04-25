<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DoctorStoreRequest;
use App\Http\Requests\DoctorUpdateRequest;
use App\Models\Doctor;
use App\Models\Pharmacy;

class PharmacyOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pharmacyOwners = Doctor::role('owner')->get();
        return view('dashboard.pharmacyOwners.index', [
            'pharmacyOwners' => $pharmacyOwners
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pharmacies = Pharmacy::all();
        return view('dashboard.pharmacyOwners.create', compact('pharmacies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorStoreRequest $request)
    {
        $data = $request->all();
        // dd($data);
        if ($request->hasFile('image')) {
            $image_extension = $request->image->getClientOriginalExtension();
            $filename = time() . '.' . $image_extension;
            $path = 'images/pharmacyOwners';
            $request->image->move($path, $filename);
        }
        $data = $request->all();
        Doctor::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'national_id' => $data['national_id'],
            'pharmacy_id' => $data['pharmacy_id'],
            'image' => $filename

        ])->assignRole('owner');
        return redirect()->route('pharmacyOwners.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $doctor = Doctor::find($id);
        //   dd($doctor->image);
        $pharmacy_id = $doctor->pharmacy_id;
        $pharmacy = Pharmacy::find($pharmacy_id);
        return view('dashboard.pharmacyOwners.show', ['doctor' => $doctor, 'pharmacy' => $pharmacy]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctor = Doctor::find($id);
        //  dd($doctor->image);
        $pharmacies = Pharmacy::all();

        return view('dashboard.pharmacyOwners.update', ['doctor' => $doctor, 'pharmacies' => $pharmacies]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DoctorUpdateRequest $request, string $id)
    {
        dd("kkkkkk");
        $doctor = Doctor::find($id);
        dd($doctor);
        if ($doctor) {
            $doctor->update($request->except('image'));
            if ($request->hasFile('image')) {
                $old_image = $doctor->image;
                $image = $request->image;
                $image_new_name = time() . '.' . $image->getClientOriginalExtension();
                if ($image->move('images/pharmacyOwners', $image_new_name)) {
                    unlink('images/pharmacyOwners/' . $old_image);
                }
                $doctor->image = $image_new_name;
            }
        }

        $doctor->save();
        return redirect()->route('pharmacyOwners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $doctor_img= Doctor::find($id)->image;
        //  dd($postPhoto);
        if ($doctor_img) {
            $file_path = "images/pharmacyOwners/" . $doctor_img;
            unlink($file_path);
        }
        Doctor::destroy($id);
        return redirect()->route('pharmacyOwners.index');
    }
}
