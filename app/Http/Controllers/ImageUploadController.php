<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ImageUploadController extends Controller
{


    public function imageUploadPost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        /* Store $imageName name in DATABASE from HERE */
        User::where('id', Auth::id())->update(['logo' => $imageName]);

        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $imageName);
    }
}
