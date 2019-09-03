<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primary_key = 'id';
    protected $fillable = ['title','description','photo','user_id','created_at','updated_at','deleted_at'];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
