<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function search(Request $request)
    {
        // we get the searched username from the request
        $search = $request->input('search');

        //we use it in the query
        $users = User::where('username', 'ilike', '%' . $search . '%')->get();

        return view('dashboard', compact('users', 'search'));
    }

    //user from search result is passed to this controller 
    public function showProfile(User $user): View
    {
        //the user info is passed via this function to the profile page
        return view('profile.profile-page', compact('user'));


    }
}


