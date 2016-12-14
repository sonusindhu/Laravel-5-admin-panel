<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class News extends Model
{
    protected $table = 'news'; 
    protected $fillable = [
        'title', 'slug', 'description','category_id',
    ];
    public static $rules = array(
        'title' => 'required|max:255',
        'slug' => 'required|unique:news|max:255',
        'description' => 'required',
        'category_id' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    );
    
    
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
