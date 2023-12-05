<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;    
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function update(Request $request) {
        $user = User::find($request->id_user);
        
        if($user->image) {
            Storage::delete($user->image);
        }

        $path = $request->file('image')->store('public/images');

        if ($request->hasFile('image')) {
            $user->update([
                'image'=> $path,
            ]);
        } else {
            return redirect()->route('profile.edit')->with('error', 'No image uploaded');
        }

        $successMessage = "Profile picture is successfully added";

        return redirect()->route('profile.edit')->with('success', $successMessage);
    }
}
