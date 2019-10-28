<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use \Illuminate\Contracts\Encryption\Encrypter;
class PostController extends Controller
{
    public function index()
    {
      //  $postes  = [] ;
        $posts = Post::get();
        foreach ($posts as $key => $post) {
            // dd($post->body);
            $posts[$key]['body'] =  \decrypt($post->body);
        }
        return view('back-end.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('back-end.posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required',
        ]);

        $post = Post::create([
            'body' =>encrypt($request->body),
        ]);

        alert()->success('Post Added Successfully', 'Done');

        return redirect()->back();
    }

    public function destroy($id)
    {
      
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect()->back();
    }

    public function getdata()
    {
        $posts = Post::get();
        foreach ($posts as $key => $post) {
           // dd($post->body);
            $posts =  \decrypt($post->body);
            return view('back-end.posts.index', compact('posts'));
        }
    }
}
