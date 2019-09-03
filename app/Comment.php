<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $primary_key = 'id';
    protected $fillable = ['description', 'user_id', 'post_id', 'deleted_at','created_at', 'updated_at'];

    public function posts()
    {
        $this->belongsTo('App\Post');
    }

    public function users()
    {
        $this->belongsTo('App\User');
    }
    //
}
