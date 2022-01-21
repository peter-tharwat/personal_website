<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles= Article::where(function($q)use ($request){
            $q->where('title','LIKE','%'.$request->key.'%')
            ->orWhere('description','LIKE'.'%'.$request->key.'%');
        })->orderBy('id','DESC')->paginate();
        return view('admin.articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $article = Article::create([
            'user_id'=>auth()->user()->id,
            'title'=>$request->title,
            'description'=>$request->description,
            'featured'=>$request->featured==1?1:0,
            'slug'=>uniqid()
        ]);
        $article->update(['slug' =>
            $this->generate_slug($article->id . '-' . $article->title),
        ]); 
        if($request->hasFile('image')){
            $file =$this->store_file([
                'source'=>$request->image,
                'validation'=>"image",
                'path_to_save'=>'/uploads/articles/',
                'type'=>'ARTICLE', 
                'user_id'=>\Auth::user()->id,
                'resize'=>[500,3000],
                'small_path'=>'small/',
                'visibility'=>'PUBLIC',
                'file_system_type'=>env('FILESYSTEM_DRIVER'),
                /*'watermark'=>true,*/
                'compress'=>'auto'
            ])['filename']; 
            $this->use_hub_file($file, $article->id, auth()->user()->id);
            $article->update(['image'=>$file]);
        }
        emotify('success', 'تمت العملية بنجاح');
        return redirect()->route('admin.articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'link'=>$request->link,
            'featured'=>$request->featured==1?1:0,
        ]);
        if($request->hasFile('image')){
            $this->remove_hub_file($article->image);
            $file =$this->store_file([
                'source'=>$request->image,
                'validation'=>"image",
                'path_to_save'=>'/uploads/articles/',
                'type'=>'ARTICLE', 
                'user_id'=>\Auth::user()->id,
                'resize'=>[500,3000],
                'small_path'=>'small/',
                'visibility'=>'PUBLIC',
                'file_system_type'=>env('FILESYSTEM_DRIVER'),
                /*'watermark'=>true,*/
                'compress'=>'auto'
            ])['filename']; 
            $this->use_hub_file($file, $article->id, auth()->user()->id);
            $article->update(['image'=>$file]);
        }
        emotify('success', 'تمت العملية بنجاح');
        return redirect()->route('admin.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        emotify('success', 'تمت العملية بنجاح');
        return redirect()->route('admin.articles.index');
    }
}
