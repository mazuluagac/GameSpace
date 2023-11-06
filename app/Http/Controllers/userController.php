<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = \App\Models\User::all();
        return view('users.index', compact('user'));

    }

    
    public function create()
    {
        return view('users.create');

    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email',
            'password' => 'required',
            'role' => 'required',
        ]);
        $user = new \App\Models\User;
        $user->name = $request->get('name');
        $user->email = $request->get('email'); 
        $user->password = $request->get('password');
        $user->role = $request->get('role');
        $user->save();
        return redirect()->route('users.index')->with('success', 'User has been added');
    }

    
    public function show($id)
    {
        $user = \App\Models\User::find($id);
        return view('users.show', compact('user'));
    }

    
    public function edit($id)
    {
        $user = \App\Models\User::find($id);
        return view('users.edit', compact('user'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email'=> 'email',
            'password' => 'required',
            'role' => 'required',
        ]);
        $user = \App\Models\User::find($id);
        $user->name = $request->get('name');
        $user->email= $request->get('email');
        $user->password = $request->get('password');
        $user->role = $request->get('role');
        $user->save();
        return redirect()->route('users.index')->with('success', 'User has been updated');
    }

    
    
    public function destroy($id)
    {
        $user = \App\Models\User::find($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User has been deleted');
    }
}
