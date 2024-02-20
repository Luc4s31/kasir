<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserPostRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        
        return view('admin.user', compact('users'));
    }

    public function create()
    {
        return view('admin.add-user');
    }

    public function store(UserPostRequest $request)
    {
        $validated = $request->validated();

        User::create($validated);

        return redirect()->route('users')->with('success', 'User created successfully');
    }

    public function edit($productId)
    {
        $users = User::findOrFail($productId);

        return view('admin.edit-user', compact('users'));
    }

    public function update(UserPostRequest $request, $userId)
    {
        $validated = $request->validated();

        $products = User::findOrFail($userId);

        $products->update($validated);

        return redirect()->route('users')->with('success', 'User updated successfully');
    }

    public function destroy($userId)
    {
        $products = User::findOrFail($userId);

        $products->delete();

        return redirect()->route('users')->with('success', 'User deleted successfully');
    }
}
