<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    //
    protected $fillable = [
        'file', 'interest_id', 'document_name',
    ];
    public function interest()
    {
        return $this->belongsTo('App\Interests');
    }
}
