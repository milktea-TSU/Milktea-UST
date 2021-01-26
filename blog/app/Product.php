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
    public function orderdetail(){
        return $this->hasMany(OrderDetail::class,'product_id','id');
    }
    
}