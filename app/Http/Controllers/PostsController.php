<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a paginated list of post
     */
    public function index()
    {
        $posts = Post::paginate(5);

        return view('posts.index', compact('posts'));
    }

    /**
     * Favorite a particular post
     *
     * @param Post $post
     * @return Response
     */
    public function favoritePost(Post $post)
    {
        Auth::user()->favorites()->attach($post->id);

        return back();
    }

    /**
     * Favorite a particular post
     *
     * @param Post $post
     * @return Response
     */
    public function unFavoritePost(Post $post)
    {
        Auth::user()->favorites()->detach($post->id);

        return back();
    }


}
