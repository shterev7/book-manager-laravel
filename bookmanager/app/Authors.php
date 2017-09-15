<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    protected $table ='authors';
    protected $fillable = ['firstname','lastname'];

    public function book()
    {
        return $this->hasMany('Books','author');
    }
}
