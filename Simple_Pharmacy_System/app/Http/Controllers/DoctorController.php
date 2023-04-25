<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorStoreRequest;
use App\Models\Doctor;
use App\Models\Pharmacy;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors=  Doctor::role('doctor')->get();
        return view('dashboard.doctors.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pharmacies =Pharmacy::all();
        return view('dashboard.doctors.create', compact('pharmacies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorStoreRequest $request)
    {

return  $request;
        if ($request->hasFile('image')) {
            $image_extension = $request->image->getClientOriginalExtension() ;
            $filename = time().'.'.$image_extension;
            $path = 'images/doctors';
            $request->image->move($path,$filename);


        }
        $data=$request->all();
        Doctor::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'national_id' => $data['national_id'],
            'pharmacy_id' => $data['pharmacy_id'],
            'image'=>$filename

        ])->assignRole('doctor');
       return redirect()->route('doctors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('dashboard.doctors.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.doctors.update');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return redirect()->route('doctors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
