<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'application_id',
        'body',
        'level'
    ];

    public function application()
    {
        return $this->belongsTo('App\Application');
    }
}
