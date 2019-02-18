<?php

namespace App\Http\Controllers;

use App\Post;
// use App\Bookuser;
// use DB;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function carlinelist()
    {
        $data = Post::all();

        return view('admin/carlinelist', [
            'posts' => $data
        ]);
    }
    public function view()
    {
        return "Post list";
    }
    public function add()
    {
        return view( 'admin/add' );
    }
    public function create()
    {
        $validator = validator(request()->all(), [
            "carline" => "required"
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }
        $post = new Post();
        $post ->carline = request()->carline;
        $post ->save();

        return redirect('post/carlinelist');
    }
    public function edit($id)
    {
        $data = Post::find($id);

        return view( 'admin/edit', [
            'post' => $data
        ]);
    }
    public function update($id)
    {
        $post = Post::find($id);

        $post->carline = request()->carline;
        $post->save();

        return redirect('post/carlinelist');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('post/carlinelist');
    }
    public function userview()
    {
        $carlinedata = Post::all();

        return view('userbook/useradd', [
            'userbooks' => $carlinedata
        ]);
    }
    
    
}


