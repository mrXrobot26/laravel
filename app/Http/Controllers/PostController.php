<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


    function viewPosts(Post $post)
    {
        return view('single-post', ["post" => $post]); // Corrected the view name
    }

    function storeNewPost()
    {
        return view('Create-Post');
    }
    function showCreateForm(Request $request)
    {
        $incomingFields =$request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();

        post::create($incomingFields);

        return "Hi";

    }
}
