<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'content'];
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function likes(){
        return $this->hasMany('App\Models\Like');
    }
}
