<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //relacion de muchos(Entry) a uno usuario 
    public function user()
    {
        return$this->belongsTo(User::class);
    }
    //
}
