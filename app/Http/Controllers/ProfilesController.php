<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show(User $user) 
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        // abort_if($user->isNot(current_user()), 404); ----- option one to make authorization
        // $this->authorize('edit', $user); ----- option two to make authorization
        
        return view('profiles.edit', compact('user'));
    }
}
