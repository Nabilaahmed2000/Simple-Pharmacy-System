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
    public function update(DrugRequest $request, string $id)
    {
        $drug = Drug::find($id);
        $drug->update($request->except('image'));
        if ($request->hasFile('image')  ) {
            $old_image = $drug->image;
            $image = $request->image;
            $image_new_name = time() .'.'. $image->getClientOriginalExtension();
            $image->move('images/drugs', $image_new_name);
            if ($old_image) {
                unlink("images/drugs/".$old_image);
            }
            $drug->image = $image_new_name;
        }

            $drug->save();
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
