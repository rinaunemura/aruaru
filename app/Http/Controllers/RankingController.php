<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Item;

class RankingController extends Controller
{
 public function arune()
    {
        $posts = \DB::table('user_aruaru')->join('posts', 'user_aruaru.post_id', '=', 'posts.id')->select('posts.*', \DB::raw('COUNT(post_id) as count'))->groupBy('posts.id', 'posts.user_id', 'posts.content', 'posts.created_at', 'posts.updated_at')->orderBy('count', 'DESC')->take(5)->get();

        return view('ranking.arune', [
            'posts' => $posts,
        ]);
    }   
}
