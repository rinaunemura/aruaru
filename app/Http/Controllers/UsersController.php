<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // add

class UsersController extends Controller
{
   public function show($id)
    {
        $user = User::find($id);
        $posts = $user->posts()->orderBy('created_at', 'desc')->paginate(10);

        $data = [
            'user' => $user,
            'posts' => $posts,
        ];

        $data += $this->counts($user);

        return view('users.show', $data);
    }
}