<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorStoreRequest;
use App\Http\Requests\DoctorUpdateRequest;
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


        if ($request->hasFile('image')) {
            $image_extension = $request->image->getClientOriginalExtension() ;
            $image = time().'.'.$image_extension;
            $path = 'images/doctors';
            $request->image->move($path,$image);


        }
        $data=$request->all();
        Doctor::create([

            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'national_id' => $data['national_id'],
            'pharmacy_id' => $data['pharmacy_id'],
            'image'=>$image

        ])->assignRole('doctor');
       return redirect()->route('doctors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        return view('dashboard.doctors.show' , compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        $pharmacies =Pharmacy::all();
        return view('dashboard.doctors.update' , compact('doctor','pharmacies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DoctorUpdateRequest $request, Doctor $doctor)
    {

        $doctor->update($request->except('image'));
            if ($request->hasFile('image')  ) {
                $old_image = $doctor->image;
                $image = $request->image;
                $image_new_name = time() .'.'. $image->getClientOriginalExtension();
                $image->move('images/doctors', $image_new_name);
                if ($old_image) {
                    unlink("images/doctors/".$old_image);
                }
                $doctor->image = $image_new_name;
            }

        $doctor->save();
        return redirect()->route('doctors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        if($doctor->image){
            $file_path = "images/doctors/".$doctor->image;
            unlink($file_path);
        }
        $doctor->delete();
        return redirect()->route('doctors.index');
    }
}
