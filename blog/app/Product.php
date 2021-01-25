<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $fillable = [
        'name',
        'price',
        'image'
    ];
    public function Orders(){
        return $this->belongsToMany(Order::class,'orderdetail','order_id','product_id');
    }
}