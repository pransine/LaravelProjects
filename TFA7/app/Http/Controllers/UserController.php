<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::all();

        return view('users', ['users' => $users]);
    }

    public function create(): View
    {
        return view('users.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'username' => 'required|unique:users,username',
            'full_name' => 'required'
        ]);

        User::create($validated);

        return redirect()->route('users')
            ->with('success', 'User added successfully!');
    }

    public function edit($id): View
    {
        $user = User::findOrFail($id);

        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $validated = $request->validate([
            'username' => 'required|unique:users,username,' . $id,
            'full_name' => 'required',
            'avatar' => 'nullable|image|max:2048'
        ]);

        $user = User::findOrFail($id);

        unset($validated['avatar']);

        if ($request->hasFile('avatar')) {
            $manager = new ImageManager(new Driver());

            $image = $manager->read($request->file('avatar'));

            $image->cover(150, 150);

            $encoded = $image->toJpeg(80);

            $path = 'avatars/' . uniqid() . '.jpg';

            Storage::disk('public')->put($path, (string) $encoded);

            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }
            $validated['avatar'] = $path;
        }

        $user->update($validated);

        return redirect()->route('users')
            ->with('success', 'User updated successfully!');
    }

}