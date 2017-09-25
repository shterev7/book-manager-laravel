<?php

namespace App;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';
    protected $fillable = ['title'];

    public function author()
    {
        return $this->belongsTo('App\Authors', 'author_id');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
