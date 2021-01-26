<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'orderdetail';
   
    public function product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public function order(){
        return $this->belongsTo(OrderDetail::class,'order_id','id');
    }
}
