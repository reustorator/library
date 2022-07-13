<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Materials extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'author',
        'type',
        'category',
        'description'
        ];

    public function posts(){
        return $this->hasMany('Post');
    }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
