<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Faq;
use App\Models\Article;
use App\Models\Client;
use App\Models\Color;
use App\Models\Contact;
use App\Models\Profile;

class FrontEndController extends Controller
{
    public function index(Request $request){
        return view('front.index');
    }
    public function portfolios(Request $request){
        return view('front.portfolios');
    }
    public function portfolio_show(Request $request,Portfolio $portfolio){
        return view('front.portfolio-show',compact('portfolio'));
    }
    public function client_show(Request $request,Client $client){
        return view('front.client-show',compact('client'));
    }
    public function article_show(Request $request,Article $article){
        return view('front.article-show',compact('article'));
    }
    public function clients(Request $request){
        return view('front.clients');
    }
    public function articles(Request $request){
        return view('front.articles');
    }
    public function contact_post(Request $request){
        $request->validate([
            'contact_name'=>"required|min:3|max:255",
            'contact_email'=>"required|email",
            'contact_phone'=>"required|integer|between:99999999,9999999999999999",
            'contact_message'=>"required|string|min:3|max:1000",
        ]);
        if($request->contact_phone[0]!='8'){
            Contact::create([
                'contact_name'=>$request->contact_name,
                'contact_email'=>$request->contact_email,
                'contact_phone'=>$request->contact_phone,
                'contact_message'=>$request->contact_message,
            ]);
            $this->notify_me("لديك رسالة جديدة من ".$request->contact_message , route('admin.contact.index'));
        }
        emotify('success','تم إرسال رسالتك بنجاح');
        return redirect()->back();
    }
    public function donate(Request $request){
        return view('front.donate');
    }
    public function contact(Request $request){
        return view('front.contact');
    }
    public function hire(Request $request){
        return view('front.hire');
    }
}
