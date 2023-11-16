<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = DB::table('users')->get();
        return view('admin.content.user.index', ['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = DB::table('users')->get();
        return view('admin.content.user.add', ['users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $user = new User();
        $user['name'] = $input['userName'];
        $user['phone'] = $input['userPhone'];
        $user['email'] = $input['userEmail'];
        $user['address'] = $input['userAddress'];
        $user['password'] = $input['userPassword'];
        $user['avatar'] = $input['userAvatar'];
        $user->save();
        return redirect()->route('admin.user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = DB::table('users')->get();
        $item = User::find($id);
        return view('admin.content.user.edit', ['users'=>$users, 'item'=>$item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->all();
        $user = User::find($id);
        $user['name'] = $input['userName'];
        $user['phone'] = $input['userPhone'];
        $user['email'] = $input['userEmail'];
        $user['address'] = $input['userAddress'];
        $user['password'] = $input['userPassword'];
        $user['avatar'] = $input['userAvatar'];
        $user->save();
        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::find($id);
        $users->delete($id);
        return redirect()->route('admin.user.index');
    }
}
