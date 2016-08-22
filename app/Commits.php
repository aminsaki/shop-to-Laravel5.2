<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commits extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'masejs';
    protected $fillable = [
        'id','username', 'tell','email','user_id','text','commoditie_id','flag'
    ];

   

}
