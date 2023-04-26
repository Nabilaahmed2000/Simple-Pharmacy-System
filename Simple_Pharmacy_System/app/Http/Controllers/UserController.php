<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Nette\Utils\DateTime;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('dashboard.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        $data = $request->all();
        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'images/users';
        $request->file('image')->move($path, $file_name);
        $date = DateTime::createFromFormat('m/d/Y', $data['date_of_birth']);
        User::create([
            'name' => $data['name'],
            'national_id' => $data['national_id'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'date_of_birth' => $date->format('Y-m-d'),
            'phone' => $data['phone'],
            'password' => $data['password'],
            'image' => $file_name
        ]);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('dashboard.users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::all()->where('id', $id);
        return view('dashboard.users.update', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, string $id)
    {
        // $id = $request->id;
        $user = User::find($id);
        $user->update($request->except('image', 'date_of_birth'));
        if ($request->date_of_birth) {
            $date = DateTime::createFromFormat('m/d/Y', $request->date_of_birth);
            $user->date_of_birth = $date->format('Y-m-d');
        }
        if ($request->hasFile('image')) {
            $old_image = $user->image;
            $image = $request->image;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('images/users', $image_new_name);
            if ($old_image) {
                unlink("images/users/" . $old_image);
            }
            $user->image = $image_new_name;
        }
        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $old_image = User::find($user->id)->image;
        if($old_image) {
            unlink("images/users/" . $old_image);
        }
        $user->delete();
        $users = User::paginate(10);
        return view('dashboard.users.index', ['users' => $users]);
    }
}
