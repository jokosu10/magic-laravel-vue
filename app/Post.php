<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Favorite;

class Post extends Model
{
    /**
     * if a post has ben marked by user
     */
    public function favorited()
    {
        return (bool) Favorite::where('user_id', Auth::id())
                    ->where('post_id', $this->id)
                    ->first();
    }
}
