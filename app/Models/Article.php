<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];
    public function getRouteKeyName(){
        return 'slug';
    }
    public function image () {
        if($this->image==null)
            return env("DEFAULT_IMAGE");
        else return env("STORAGE_URL")."/uploads/articles/".$this->image;
    }
    public function images(){
        return $this->hasMany('\App\Models\HubFile','type_id')->where("type","ARTICLE");
    }
}
