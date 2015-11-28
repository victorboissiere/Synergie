<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Requests\Posts\PostRequest;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Do not allow guest user to access methods in this class
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display all posts
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(15);
        return view('admin.posts.posts_index', compact('posts'));
    }

    /**
     * Display form to create new article
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.post_create');
    }

    /**
     * Store new article data
     *
     * @param PostRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        Post::create($request->all());

        flash('Article ajouté avec succès');

        return redirect()->route('admin-posts.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.posts.post_create', compact('post'));
    }

    /**
     * Show form to update post with right data
     *
     * @param PostRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->update($request->all());

        flash('Article modifié avec succès');

        return redirect()->route('admin-posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if (is_null($post))
        {
            return response()->json([
                'message' => 'Article introuvable'
            ], 400);
        }

        $post->delete();

        return response()->json([
            'message' => 'Article supprimé avec succès'
        ], 200);
    }
}
