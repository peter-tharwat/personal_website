<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
    	return view('admin.index');
    }
    public function upload_image(Request $request){
   
        $file = $this->store_file([
            'source'=>$request->upload,
            'validation'=>"image",
            'path_to_save'=>'/uploads/images/',
            'type'=>'IMAGE', 
            'user_id'=>\Auth::user()->id,
            'resize'=>[500,1000],
            'small_path'=>'small/',
            'visibility'=>'PUBLIC',
            'file_system_type'=>env('FILESYSTEM_DRIVER'),
            /*'watermark'=>true,*/
            'compress'=>'auto'
        ]); 
        return [
            'fileName'=>$file['filename'],
            'uploaded'=>1,
            'url'=>env('STORAGE_URL')."/uploads/images/".$file['filename'] ];
    }
    public function users(Request $request)
    {
    	return view('admin.users.index');
    }
    public function settings(Request $request){
        $user= \App\Models\User::first();
        $settings=$user;
        return view('admin.settings.index',compact('settings'));
    }
    public function settings_update(Request $request){

        $user = \App\Models\User::first();

        if($request->password!=null && strlen($request->password)>=6)
            $user->update([
                'password'=>bcrypt($request->password)
            ]);
        if($request->hasFile('avatar')){
            if($user->avatar!=null){
                $this->remove_hub_file($user->avatar);
            }
            $file =$this->store_file([
                'source'=>$request->avatar,
                'validation'=>"image",
                'path_to_save'=>'/uploads/avatars/',
                'type'=>'AVATAR', 
                'user_id'=>\Auth::user()->id,
                'resize'=>[500,3000],
                'small_path'=>'small/',
                'visibility'=>'PUBLIC',
                'file_system_type'=>env('FILESYSTEM_DRIVER'),
                /*'watermark'=>true,*/
                'compress'=>'auto'
            ])['filename']; 

            $this->use_hub_file($file, $user->id, $user->id);
            $user->update(['avatar'=>$file]);
        }
        if($request->hasFile('website_logo')){
            if($user->website_logo!=null){
                $this->remove_hub_file($user->website_logo);
            }
            $file =$this->store_file([
                'source'=>$request->website_logo,
                'validation'=>"image",
                'path_to_save'=>'/uploads/website_logos/',
                'type'=>'WEBSITE_LOGO', 
                'user_id'=>\Auth::user()->id,
                'resize'=>[500,3000],
                'small_path'=>'small/',
                'visibility'=>'PUBLIC',
                'file_system_type'=>env('FILESYSTEM_DRIVER'),
                /*'watermark'=>true,*/
                'compress'=>'auto'
            ])['filename']; 
            $this->use_hub_file($file, $user->id, $user->id);
            $user->update(['website_logo'=>$file]);
        }
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'phone2'=>$request->phone2,
            'default_view'=>$request->default_view,
            'bio'=>$request->bio,
            'contact_email'=>$request->contact_email,
            'portfolios_text'=>$request->portfolios_text,
            'articles_text'=>$request->articles_text,
            'clients_text'=>$request->clients_text,
            'donate_text'=>$request->donate_text,
            'contact_text'=>$request->contact_text,
            'hire_text'=>$request->hire_text,
            'facebook_link'=>$request->facebook_link,
            'twitter_link'=>$request->twitter_link,
            'instagram_link'=>$request->instagram_link,
            'youtube_link'=>$request->youtube_link,
            'telegram_link'=>$request->telegram_link,
            'whatsapp_link'=>$request->whatsapp_link,
            'tiktok_link'=>$request->tiktok_link,
            'upwork_link'=>$request->upwork_link,
            'nafezly_link'=>$request->nafezly_link,
            'linkedin_link'=>$request->linkedin_link,
            'github_link'=>$request->github_link,
            'stackoverflow_link'=>$request->stackoverflow_link,
            'another_link1'=>$request->another_link1,
            'another_link2'=>$request->another_link2,
            'another_link3'=>$request->another_link3,
            'patreon_link'=>$request->patreon_link,
            'paypal_link'=>$request->paypal_link,
            'main_color'=>$request->main_color,
            'hover_color'=>$request->hover_color,
            'show_portfolios'=>$request->show_portfolios==1?$request->show_portfolios:0,
            'show_articles'=>$request->show_articles==1?$request->show_articles:0,
            'show_clients'=>$request->show_clients==1?$request->show_clients:0,
            'show_donate'=>$request->show_donate==1?$request->show_donate:0,
            'show_contact'=>$request->show_contact==1?$request->show_contact:0,
            'show_hire'=>$request->show_hire==1?$request->show_hire:0,
            'header_text'=>$request->header_text,
            'footer_text'=>$request->footer_text,
            'google_recapcha'=>$request->google_recapcha,
        ]);
        emotify('success', 'تمت العملية بنجاح');
        return redirect()->back();
    }
    public function seen_notifications(Request $request){
        auth()->user()->unreadNotifications->markAsRead();
    }
}
