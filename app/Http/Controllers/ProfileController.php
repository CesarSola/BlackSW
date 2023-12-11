<?php

namespace App\Http\Controllers;
use App\Models\User;


class ProfileController extends Controller
{
    public function index()
    {
        $Users = User::all();
        return view('profile.index' , compact('users'));
    }

}
