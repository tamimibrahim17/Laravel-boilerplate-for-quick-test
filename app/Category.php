<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    protected $fillable = [
    	'name',
    	'description'
    ];
    
    public function posts()
    {
    	return $this->belongsToMany('App\Post', 'post_category', 'category_id');
    }
}
