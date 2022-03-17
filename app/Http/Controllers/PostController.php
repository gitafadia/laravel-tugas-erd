<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function create()
    {
        return store(Request $request)
        {
            $this->validate($request, [
                'title' => 'required|sstring|max:155',
                'content' =>'required',
                'status' => 'required'
            ]);

            $post = Post::create([
                'title' => $request->title,
                'content' => $request->content,
                'status' => $request->status,
                'slug' => Str::slug($request->title)
            ]);
    
            if ($post) {
                return redirect()
                    ->route('post.index')
                    ->with([
                        'success' => 'New post has been created successfully'
                    ]);
            } else {
                return redirect()
                    ->back()
                    ->withInput()
                    ->with([
                        'error' => 'Some problem occurred, please try again'
                    ]);
            }
        }
    }
        }
    }
    //
}
