<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];
    public function getRouteKeyName(){
        return 'slug';
    }
    public function image() {
        if($this->image==null)
            return env("DEFAULT_IMAGE");
        else return env("STORAGE_URL")."/uploads/clients/".$this->image;
    }
}
