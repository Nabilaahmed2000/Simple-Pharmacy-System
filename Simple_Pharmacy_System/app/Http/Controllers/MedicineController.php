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
        $drugs=Drug::paginate(10);
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
            $path ='images/drugs';
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

        return redirect()->route('medicine.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $drug=Drug::find($id);
        // dd($drug->image);
        return view('dashboard.medicine.show',['drug' =>$drug]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $drug=Drug::all()->where('id',$id);
        return view('dashboard.medicine.update',['drugs' =>$drug]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $drug=Drug::find($id);
        $drug->name = $request->name;
        $drug->price = $request->price;
        $drug->quantity = $request->quantity;

        // Handle the image upload (if there is one)
        // dd($request);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->storeAs('images/drugs', $filename);
            $drug->image = $filename;
        }
        // Save the updated drug to the database
        $drug->save();
        // return redirect()->route('dashboard.medicine.index');
        //
        return redirect()->route('medicine.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = Drug::where('id', $id)->delete();
        return view('dashboard.medicine.index');
        //
    }
}
