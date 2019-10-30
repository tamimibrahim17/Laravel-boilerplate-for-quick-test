<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Category;
use App\Attachment;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Post', 20)->create()->each(function($post){
        	$post->tags()->attach(Tag::all()->random());
        	$post->categories()->attach(Category::all()->random());
        	$post->attachments()->attach(Attachment::all()->random());
        });
    }
}
