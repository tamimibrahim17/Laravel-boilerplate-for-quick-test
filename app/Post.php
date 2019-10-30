<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'title',
    	'content',
    	'user_id',
    	'status'
    ];


    public function tags()
    {
    	return $this->belongsToMany('App\Tag', 'post_tag', 'post_id');
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Category', 'post_category', 'post_id');
    }

    public function attachments()
    {
    	return $this->belongsToMany('App\Attachment', 'post_attachment', 'post_id');
    }

}
