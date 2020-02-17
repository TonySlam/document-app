<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interests extends Model
{
    //
    protected $fillable = [
        'category'
    ];

    public function documents()
    {
        return $this->hasMany('App\Documents');
    }
}
