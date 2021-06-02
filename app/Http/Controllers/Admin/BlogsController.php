<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
    
        return view('admin.blogs.index', compact('blogs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blogs = new Blog();

        $blogs->title = $request->title;
        $blogs->body  = $request->body;
        $blogs->image = $request->image;

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'mimes:jpeg,bmp,png,gif,jpg'
            ]);
            
            $request->image(public_path('images/file'), $image);
        }

        $blogs->save();

        return redirect('/blogs');

        //     $request->validate([
        //         'title' => 'required',
        //         'body' => 'required',
        //         'image' => 'required'
        //     ]);
        //     dd($request);
            

        //     if ($request->hasFile('image')) {
        
        //     $request->validate([
        //         'image' => 'mimes:jpeg,bmp,png,gif,jpg'
        //     ]);
            
        //     $request->image->store('images', 'public');
            
        //     $blogs = new Blog([
        //         'title' => $request->get('title'),
        //         'body'  => $request->get('body'),
        //         'image' => $request->get('image')
        //     ]);
            
            
        //     $blogs->save();
            

        // }

        //     return redirect('/blogs');
    }       

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs = Blog::all();
    
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit',compact('blog'));
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
        $blogs = Blog::findOrFail($id);

        $blogs->update([
            'title' => $request->title,
            'body' => $request->body,
            'image' => 'none'
        ]);
        return redirect()->route('blogs.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $blogs = Blog::findOrFail($id);
       $blogs->delete();
       
        return redirect()->route('blogs.index');
    }
}
