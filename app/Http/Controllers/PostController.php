<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    // Display Add Post Page
    public function addPost()
    {
        return view('add-post');
    }

    // Create Post
    public function createPost(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->body  = $request->input('body');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/image/', $filename);
            $post->image = $filename;
        }
        $post->save();
        return back()->with('post_created', 'Post has been created successfully!');
    }

    // Read Post
    public function getPost()
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        return view('posts', compact('posts'));
    }

    // Fetch Post For Specific Id
    public function getPostById($id)
    {
        $post = Post::where('id', $id)->first();
        return view('single-post', compact('post'));
    }


    // Update Post
    public function editPost($id)
    {
        $post = Post::find($id);
        return view('edit-post', compact('post'));
    }

    public function updatePost(Request $request)
    {
        $post = Post::find($request->id);
        $post->title = $request->input('title');
        $post->body  = $request->input('body');
        if($request->hasFile('image'))
        {
            $destination = 'uploads/image/'.$post->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/image/', $filename);
            $post->image = $filename;
        } else {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/image/', $filename);
            $post->image = $filename;
        }

        $post->save();
        return back()->with('post_updated', 'Post has been updated successfully!');
    }

    // Delete Post
    public function deletePost($id)
    {
        $post = Post::find($id);
        $destination = 'uploads/image/'.$post->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $post->delete();
        return back()->with('post_deleted', 'Post has been deleted successfully!');
    }
}

