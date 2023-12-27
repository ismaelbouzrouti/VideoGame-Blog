<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        $users = User::where('username', 'like', '%' . $search . '%')->get();

        return view('dashboard', compact('users', 'search'));
    }
}


