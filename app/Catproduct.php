<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catproduct extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'catproducts';
    
    protected $fillable = [
        'id','cat_id','title',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
