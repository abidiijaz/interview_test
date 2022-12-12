<?php
namespace App\Http\Traits;
use App\Models\Post;

trait QueryTraits{
    public function getPosts(){
        $posts= Post::Orderby('id','ASC')->get();
        return $posts;
    }
    public function getOnePost($id){
        $post = Post::where('id', $id)->first();
        return $post;
    }
}