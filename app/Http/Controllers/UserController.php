<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function me(Request $request)
    {
        return response()->json($request->user());
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'string|nullable',
            'phone' => 'string|nullable',
            'status' => 'string|nullable',
        ]);

        $user = $request->user();
        $user->update($request->only(['name', 'phone', 'status']));

        return response()->json($user);
    }
}

