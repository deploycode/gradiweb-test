<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','description','photo','price'];

    public function setPhotoAttribute($photo){
        if (!empty($photo)) {
            $new_name= $this->attributes['name'].$photo->getClientOriginalName();
            $this->attributes['photo']= $new_name;
            \Storage::disk('public')->put($new_name,\File::get($photo));
        }
    }

}
