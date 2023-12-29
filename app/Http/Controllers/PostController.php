<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function showPostForm()
    {

        return view('posts.create-posts');


    }

    public function store(Request $request)
    {

        $request->validate([

            'title' => ['required', 'string'],
            'content' => ['required', 'string'],
            'cover_image' => ['image', 'mimes:jpeg,png']

        ]);


        if ($request->hasFile('cover_image')) {

            //same logic as profileController update

            // Get the original file name
            $originalFileName = $request->file('cover_image')->getClientOriginalName();

            // Generate a unique file name
            $tempFileName = pathinfo($originalFileName, PATHINFO_FILENAME) . '_' . time() . '.' . $request->file('cover_image')->getClientOriginalExtension();

            //replace spaces with an underscore
            $coverImageFileName = str_replace(' ', '_', $tempFileName);

            // Store the file on the webserver with a custom name
            $request->file('cover_image')->storeAs('avatars', $coverImageFileName, 'public');

        }



        $post = $request->user()->posts()->create([
            'title' => $request->title,
            'content' => $request->content,
            'cover_image' => 'avatars/' . $coverImageFileName,
            'publishing_date' => now()
        ]);



        $post->save();

        return redirect()->back()->with('success', 'post was saved');

    }
}
