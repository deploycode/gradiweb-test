<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','description','photo','price'];

    public function setPhotoAttribute($photo){
        if (is_file($photo)) {
            $new_name= Str::random(10).$photo->getClientOriginalExtension();
            $this->attributes['photo']= $new_name;
            \Storage::disk('public')->put($new_name,\File::get($photo));
        }
    }

}
