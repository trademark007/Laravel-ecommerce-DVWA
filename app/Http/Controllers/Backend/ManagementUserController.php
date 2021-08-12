<?php

namespace App\Http\Controllers\backend;

use Hash;
use App\Models\User;
use Webpatser\Uuid\Uuid;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\backend\users\createUsers;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class ManagementUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Cache::remember('users', 10 * 10, function(){
            return  User::UserData()->get();
        });
        
        return view('backend.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    private function save_user(User $users, createUsers $request)
    {
        $validate = $request->validated();

        try {

            $users->uuid = utf8_encode(Uuid::generate(4));
            $users->first_name = $request->first_name;
            $users->last_name = $request->last_name;
            $users->email = $request->email;
            $users->gender = $request->gender;
            $users->role = $request->role;
            $users->status = $request->status;
            $users->city = $request->city;
            $users->country = $request->country;
            $users->password = Hash::make($request->password);


            $users->save();

        } catch (\Throwable $th) {
            dd($th);
            toastr()->error('something wrong...');
            return back();
        }
    }

    public function store_management_users(createUsers $request)
    {
        $users = new User;
        $this->save_user($users, $request);

        toastr()->success('sukses!');
        return redirect()->route('management.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return view('backend');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_manegement_users(Request $request, $id)
    {
        $users = Users::where('id', $request->id)->firstOrFail();
        $this->save_user($users, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
