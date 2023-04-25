<?php

namespace App\Http\Controllers;
use App\Models\Drug;
use App\Http\Requests\DrugRequest;
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
    public function store(DrugRequest $request)
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
                'type' => $data['type'],
                'image'=>$file_name

            ]);
        }
        else{
            Drug::create([
                'name' => $data['name'],
                'quantity' => $data['quantity'],
                'price' => $data['price'],
                'type' => $data['type'],
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
    // public function update(DrugRequest $request, string $id)
    // {
    //     $drug=Drug::find($id);
    //     $drug->name = $request->name;
    //     $drug->price = $request->price;
    //     $drug->quantity = $request->quantity;
    //     $drug->type = $request->type;

    //     // Handle the image upload (if there is one)
    //     // dd($request);
    //     if ($request->hasFile('image')) {
    //         $old_image = $drug->image;
    //         $image = $request->image;
    //         $image_new_name = time() . '.' . $image->getClientOriginalExtension();
    //         if ($image->move('images/drugs', $image_new_name)) {
    //             unlink('images/drugs/' . $old_image);
    //         }
    //         $drug->image = $image_new_name;
    //     }
    //     // Save the updated drug to the database
    //     $drug->save();
    //     return redirect()->route('medicine.index');
    // }
    public function update(DrugRequest $request, string $id)
    {
        $drug = Drug::find($id);
        $drug->name = $request->name;
        $drug->price = $request->price;
        $drug->quantity = $request->quantity;
        $drug->type = $request->type;
        dd($request);
    
        // Handle the image upload (if there is one)
        if ($request->hasFile('image')) {
            $old_image = $drug->image;
            $image = $request->file('image');
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            dd($image_new_name,$old_image);
            if ($image->move('images/drugs', $image_new_name)) {
                // Delete the old image
                unlink('images/drugs/' . $old_image);
                // Update the drug with the new image name
                $drug->image = $image_new_name;
                
            } else {
                // Handle the file upload error
                return back()->with('error', 'Failed to upload image.');
            }
        }
    
        // Save the updated drug to the database
        $drug->save();
        // dd($drug);
        return redirect()->route('medicine.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = Drug::where('id', $id)->delete();
        $drugs=Drug::paginate(10);
        return view('dashboard.medicine.index',['drugs' =>$drugs]);
        // return view('dashboard.medicine.index');
        //
    }
}
