<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class XodimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view ('admin.Employes.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Employes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user['name'] = $request['name'];
        $user['surname'] = $request['surname'];
        $user['passport'] = $request['passport'];
        $user['position'] = $request['position'];
        $user['phone number'] = $request['phonenumber'];
        $user['address'] = $request['address'];
        $user['email'] = $request['name'].'@gmail.com';
        $user['password'] = Hash::make($request['name']);
        $user->save();
        return redirect()->route('admin.xodim.index')->with('flash_message', 'User Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
//        $user = User::find($id);
//        return view('admin.Employes.show')->with('users', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.Employes.edit')->with('users', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        dd($request);
        $user = User::find($id);
        $user['name'] = $request['name'];
        $user['surname'] = $request['surname'];
        $user['passport'] = $request['passport'];
        $user['position'] = $request['position'];
        $user['phone number'] = $request['phonenumber'];
        $user['address'] = $request['address'];
        $user['email'] = $request['name'].'@gmail.com';
        $user['password'] = Hash::make($request['name']);
        $user->save();
        return redirect()->route('admin.xodim.index')->with('flash_message', 'User Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('admin.xodim.index')->with('flash_message', 'User Deleted!');
    }
}

