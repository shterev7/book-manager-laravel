<?php

namespace App;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Database\Eloquent\Model;


class Books extends Model
{
    public function user()
    {
        return $this->belongsTo('User');
    }

    protected $fillable = ['title'];

    public function author()
    {
        return $this->belongsTo('Authors');
    }
}

class Review extends Model
{
    public function book()
    {
        return $this->belongsTo('Books');
    }
    protected $fillable = ['author', 'text'];

}