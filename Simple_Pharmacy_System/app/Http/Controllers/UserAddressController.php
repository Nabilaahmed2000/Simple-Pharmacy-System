<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAddressStoreRequest;
use App\Models\Area;
use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Http\Request;

class UserAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userAddresses = UserAddress::paginate(10);
        $users = User::all();
        $areas = Area::all();
        return view('dashboard.UserAddress.index', ['addresses' => $userAddresses, 'users' => $users, 'areas' => $areas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $areas = Area::all();
        return view('dashboard.UserAddress.create', ['users' => $users, 'areas' => $areas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserAddressStoreRequest $request)
    {
        $userAddress = UserAddress::where('user_id', $request->user_id)->where('is_main', 1)->get();
        if ($userAddress->count() > 0) {
            $main = 0;
        } else {
            $main = 1;
        }
        UserAddress::create(
            [
                'user_id' => $request->user_id,
                'area_id' => $request->area_id,
                'street_name' => $request->street_name,
                'building_number' => $request->building_number,
                'floor_number' => $request->floor_number,
                'flat_number' => $request->flat_number,
                'is_main' => $main,
            ]
        );
        return redirect()->route('userAddress.index');
        // return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $addresses = UserAddress::where('user_id', $id)->get();
        $users = User::all();
        $areas = Area::all();
        return view('dashboard.UserAddress.show', ['addresses' => $addresses, 'users' => $users, 'areas' => $areas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $address = UserAddress::where('id', $id)->get();
        $users = User::all();
        $areas = Area::all();
        return view('dashboard.UserAddress.update', ['address' => $address, 'users' => $users, 'areas' => $areas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $userAddress = UserAddress::find($id);
        $userAddress->update($request->all());
        $userAddress->save();
        return redirect()->route('userAddress.show', ['userAddress' => $userAddress->user_id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        UserAddress::where('id', $id)->delete();
        return redirect()->route('userAddress.index');
    }
}
