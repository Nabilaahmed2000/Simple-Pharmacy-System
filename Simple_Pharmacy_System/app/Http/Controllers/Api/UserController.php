<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateApiRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Models\User;
use Nette\Utils\DateTime;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return UserResource::collection($users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {

        if ($request->hasFile('image')) {
            $file_extension = $request->image->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extension;
            $path = 'images/users';
            $request->file('image')->move($path, $file_name);
        }
        $data = $request->all();
        $date = DateTime::createFromFormat('m/d/Y', $data['date_of_birth']);
        $user = User::create([
            'name' => $data['name'],
            'national_id' => $data['national_id'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'date_of_birth' =>  $date->format('Y-m-d'),
            'phone' => $data['phone'],
            'password' => $data['password'],
            'image' => $file_name
        ]);
        return $user;
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {

        return new UserResource($user);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateApiRequest $request, User $user)
    {

//       $user->update($request->except('image', 'date_of_birth' , 'email'));
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
        $user->update([
//           'name'=>$request->name ,
            'gender'=>$request->gender,

        ]);
        $user->save();
        return $user;
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

        return response()->json(['message' => 'User deleted successfully']);
    }
}
