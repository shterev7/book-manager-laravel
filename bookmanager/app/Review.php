<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['name', 'email', 'review'];

    public function book()
    {
        return $this->belongsTo('App\Books', 'book_id');
    }
}
