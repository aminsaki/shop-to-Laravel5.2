<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'abouts';
    protected $fillable = [
        'data', 'user_id','title', 'commit',
    ];
    public function user()
    {
        return $this->hasOne('App/User');
    }
}
