<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrangeControlador extends Controller{
    public function index(){
        return view("orange.index");
    }

    public function blog(){
        $response = Http::get('http://localhost:3020/Post');
        $posts = $response->json();
    
        foreach ($posts as &$post) {
            $commentsResponse = Http::get("http://localhost:3020/Comments/{$post['id_post']}");
            $comments = $commentsResponse->json();
            $post['comment_count'] = count($comments);
        }
        
        return view("orange.blog", ['posts' => $posts]);
    }
    
}
