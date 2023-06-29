<?php

namespace App\Traits;
use App\Models\Post;

trait PostTrait
{
    public function showPost(Post $post)
    {
        return redirect()->route('post.show',$post);
    }
}
