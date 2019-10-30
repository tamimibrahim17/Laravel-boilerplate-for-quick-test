<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    
    protected $fillable = [
    	'name',
    	'path'
    ];
    
    public function posts()
    {
    	return $this->belongsToMany('App\Post', 'post_attachment', 'attachment_id');
    }

    public function getLinkAttribute()
    {
    	if( !empty($this->path) ){
    		return asset($this->path);
    	}

    	return '#';
    }
}
