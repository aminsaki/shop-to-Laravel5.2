<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sendmass extends Model
{
    protected $table = 'sendmass';
    
    protected $fillable = [
        'id','user_id', 'uid','commit','date',
    ];
}
