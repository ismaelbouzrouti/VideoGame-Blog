<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        //retrieving posts by publishing date so i can show them on the blade in chronological order
        $posts = Post::OrderBy('publishing_date', 'desc')->get();

        return view('dashboard', compact('posts'));
    }

    public function search(Request $request)
    {
        // we get the searched username from the request
        $search = $request->input('search');

        //we use it in the query
        $users = User::where('username', 'like', '%' . $search . '%')->get();

        return view('dashboard', compact('users', 'search'));
    }

    //user from search result is passed to this controller 
    public function showProfile(User $user): View
    {
        //the user info is passed via this function to the profile page
        return view('profile.profile-page', compact('user'));


    }
}


