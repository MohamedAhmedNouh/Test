<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    //
    public function  index(){
        return view('profile');
    }
    public function show($id)
    {
        $profile = User::find($id);
        return view('profile', array('user' => $profile));
    }
    public function update($id){
        $profile = User::find($id);
        return view('profile.update', array('user' => $profile));
    }

    public function submit(User $user){
        $profile = User::findOrFail($user->id);
        $profile->update($user);
        return view('profile', array('user' => $profile));
    }
}
