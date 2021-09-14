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
    public function clients(Request $request){
        return view('front.clients');
    }
    public function articles(Request $request){
        return view('front.articles');
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
