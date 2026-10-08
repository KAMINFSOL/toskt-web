<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function create()
    {
        return view('profile');
    }

    public function profileEdit()
    {
        $user = Auth::user();
        return view('profile_edit', compact('user'));
    }

    public function update(EditProfileRequest $request)
    {
        $user = Auth::user();
        $user->update($request->validated());
        
        return redirect()
            ->route('profile_edit', $user)
            ->with('status', 'Данные обновлены');
    }
}
