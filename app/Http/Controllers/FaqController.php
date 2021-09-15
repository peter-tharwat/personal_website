<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $faqs=Faq::where(function($q) use($request){
            $q->where('question','LIKE','%'.$request->key.'%')
            ->orWhere('answer','LIKE','%'.$request->key.'%');
        })->orderBy('id','DESC')->paginate();
        return view('admin.faqs.index',compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Faq::create([
            'user_id'=>auth()->user()->id,
            'question'=>$request->question,
            'answer'=>$request->answer,
            'featured'=>$request->featured==1?1:0
        ]);
        emotify('success','تمت العملية بنجاح');
        return redirect()->route('admin.faqs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        return 0;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        return view('admin.faqs.edit',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $faq->update([
            'question'=>$request->question,
            'answer'=>$request->answer,
            'featured'=>$request->featured==1?1:0
        ]);
        emotify('success','تمت العملية بنجاح');
        return redirect()->route('admin.faqs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        emotify('success','تمت العملية بنجاح');
        return redirect()->route('admin.faqs.index');
    }
}
