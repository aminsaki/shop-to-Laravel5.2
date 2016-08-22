<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    protected $table = 'commodities';

    protected $fillable = [
        'id','date','address','property','commit','img','titles','originalprice','discountprice','pricesbefore',
        'tell','city','catprodcts'
    ];
}
