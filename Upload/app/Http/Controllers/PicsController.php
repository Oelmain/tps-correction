<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PicsController extends Controller
{
    public function index()
    {
        // Find the user with ID 1
        $user = User::find(1);

        // Check if the user exists
        if (!$user) {
            // Handle the case where the user doesn't exist
            abort(404); // Or any other appropriate action
        }

        // Retrieve the user's avatar
        $pic = $user->avatar;

        // Pass the avatar to the view
        return view('welcome', compact('pic'));
    }

    public function SaveAvatar(Request $request)
    {
        $request->validate([
            "avatarFile" => "required|image",
        ]);

        // Generate a unique file name for the avatar
        $ext = $request->avatarFile->getClientOriginalExtension();
        $name = Str::random(30) . time() . "." . $ext;

        // Move the uploaded file to the avatars directory
        $request->avatarFile->move(public_path("storage/avatars"), $name);

        // Find the user with ID 1
        $user = User::find(1);

        // Check if the user exists
        if (!$user) {
            // Handle the case where the user doesn't exist
            abort(404); // Or any other appropriate action
        }

        // Update the user's avatar
        $user->avatar = $name;
        $user->save();

        // Redirect back with success message or any other appropriate action
        return redirect()->back()->with('success', 'Avatar uploaded successfully.');
    }
}
