<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'order';
    protected $fillable = [
        'ngayban',
        'tong'
    ];
    public function Products(){
        return $this->belongsToMany(Product::class,'orderdetail','product_id','order_id');
    }
}
