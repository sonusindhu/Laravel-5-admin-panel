<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    protected $table = 'categories';    
    public static $rules = array(
        'name' => 'required|max:255',
        'slug' => 'required|unique:categories|max:255',
    );
    
    public function news(){
        return $this->hasMany('App\News');
    }

}
