<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Uploads extends Model
{
    protected $table = 'uploads';
    
    protected $fillable = [
        'id','img','imgo','imgt','user_id','date'
    ];
    public function user()
    {
        return $this->hasMany('App/User');
    }
}