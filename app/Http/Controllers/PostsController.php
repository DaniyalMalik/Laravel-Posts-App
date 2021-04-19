<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
// use DB;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::find(1); //finding by id
        // $posts = Post::all()->take(1);
        // $posts = Post::orderBy('title','desc')->get();
        // $posts = Post::orderBy('created_at','asc')->paginate();
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        // $posts = Post::where('id','2')->get();
        // $posts = DB::select('SELECT * FROM posts');
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        // $this->validate($request, [
        //     'title' => 'required|max:255',
        //     'body' => <div ,=""></div>
        // ]);

        $posts = new Post();
        $posts->user_id = Auth::user()->id;
        $posts->title = $request->input('title');
        $posts->body = $request->input('body');
        $posts->save();

        // Post::create([
        //     'user_id' => Auth::user()->id,
        //     'title' => $request->title,
        //     'body' => $request->body,
        // ]);

        return redirect('/posts')->with('success', 'Post Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $posts = Post::find($id);
        $posts->title = $request->input('title');
        $posts->body = $request->input('body');
        $posts->save();

        return redirect('/posts')->with('success', 'Post Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::find($id);
        $posts->delete();

        return redirect('/posts')->with('success', 'Post Deleted!');
    }
}
