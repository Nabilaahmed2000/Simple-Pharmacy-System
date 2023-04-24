<?php

namespace App\Http\Controllers;
use App\Models\Drug;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drugs=Drug::all();
        return view('dashboard.medicine.index',['drugs' =>$drugs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.medicine.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
        // dd($data);
        if($request->hasFile('image')){
            $file_extension=$request->image->getClientOriginalExtension();
            $file_name=time().'.'.$file_extension;
            $path ='images/posts';
            $request->file('image')->move( $path,$file_name);
            Drug::create([
                'name' => $data['name'],
                'quantity' => $data['quantity'],
                'price' => $data['price'],
                'image'=>$file_name

            ]);
        }
        else{
            Drug::create([
                'name' => $data['name'],
                'quantity' => $data['quantity'],
                'price' => $data['price'],
                'image'=>'default.jpg'   
            ]);
        }

        return redirect()->route('dashboard.medicine.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $drug=Drug::find($id);
        return view('dashboard.medicine.show',['drug' =>$drug]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.medicine.update');
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return redirect()->route('dashboard.medicine.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view('dashboard.medicine.index');
        //
    }
}
