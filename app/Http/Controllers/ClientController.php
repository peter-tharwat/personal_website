<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clients= Client::where(function($q)use ($request){
            $q->where('title','LIKE','%'.$request->key.'%')
            ->orWhere('description','LIKE'.'%'.$request->key.'%');
        })->orderBy('id','DESC')->paginate();
        return view('admin.clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $client = Client::create([
            'user_id'=>auth()->user()->id,
            'title'=>$request->title,
            'description'=>$request->description,
            'link'=>$request->link,
            'slug'=>uniqid()
        ]);
        $client->update(['slug' =>
            $this->generate_slug($client->id . '-' . $client->title),
        ]); 
        if($request->hasFile('image')){
            $file =$this->store_file([
                'source'=>$request->image,
                'validation'=>"image",
                'path_to_save'=>'/uploads/clients/',
                'type'=>'CLIENT', 
                'user_id'=>\Auth::user()->id,
                'resize'=>[500,3000],
                'small_path'=>'small/',
                'visibility'=>'PUBLIC',
                'file_system_type'=>env('FILESYSTEM_DRIVER'),
                /*'watermark'=>true,*/
                'compress'=>'auto'
            ])['filename']; 
            $this->use_hub_file($file, $client->id, auth()->user()->id);
            $client->update(['image'=>$file]);
        }
        emotify('success', 'تمت العملية بنجاح');
        return redirect()->route('admin.clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('admin.clients.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $client->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'link'=>$request->link
        ]);
        if($request->hasFile('image')){
            $this->remove_hub_file($client->image);
            $file =$this->store_file([
                'source'=>$request->image,
                'validation'=>"image",
                'path_to_save'=>'/uploads/clients/',
                'type'=>'CLIENT', 
                'user_id'=>\Auth::user()->id,
                'resize'=>[500,3000],
                'small_path'=>'small/',
                'visibility'=>'PUBLIC',
                'file_system_type'=>env('FILESYSTEM_DRIVER'),
                /*'watermark'=>true,*/
                'compress'=>'auto'
            ])['filename']; 
            $this->use_hub_file($file, $client->id, auth()->user()->id);
            $client->update(['image'=>$file]);
        }
        emotify('success', 'تمت العملية بنجاح');
        return redirect()->route('admin.clients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        emotify('success', 'تمت العملية بنجاح');
        return redirect()->route('admin.clients.index');
    }
}
