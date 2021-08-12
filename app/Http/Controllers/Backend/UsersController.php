<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users()
    {
        return view('users.users');
    }

    private function register_new_users(User $users, Request $request)
    {
        // $validator = $request->validated();

        try {

            $users->email = $request->email;
            $users->first_name = $request->first_name;
            $users->last_name = $request->last_name;
            $users->gender = $request->gender;
            $users->role = 'User';
            $users->city = $request->city;
            $users->country = $request->country;
            $users->save();

        } catch (\Throwable $excep) {
            return response()->json([
                'status' => 500,
                'message' => 'something wrong...',
                'data' => '-',
            ]);
        }

    }

    public function store_new_user(Request $request)
    {
        $users = new User;
        $this->register_new_users($users, $request);

        return response()->json([
            'status' => 200,
            'message' => 'user has been created.',
            'data' => $users,
        ]);
    }


    public function update_new_user(Request $request)
    {
        $users = User::where('uuid', $uuid)->firstOrFail();
        $this->register_new_users($users, $request);

        return response()->json([
            'status' => 200,
            'message' => 'user has been updated.',
            'data' => $users,
        ]);
    }
}



