<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];
    public function getRouteKeyName(){
        return 'slug';
    }
    public function images(){
        return $this->hasMany('\App\Models\HubFile','type_id')->where("type","PORTFOLIO");
    }
    public function main_image(){
        return $this->hasMany('\App\Models\HubFile','type_id')->where("type","PORTFOLIO")->orderBy('is_main','DESC');
    }
    public function main_image_url(){

        $image = $this->hasMany('\App\Models\HubFile','type_id')->where("type","PORTFOLIO")->orderBy('is_main','DESC')->first();
        if($image==null)
            return env("DEFAULT_IMAGE");
        else return env("STORAGE_URL").$image->path.$image->name;
    }
    
}
