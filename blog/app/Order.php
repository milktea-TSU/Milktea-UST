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
    public function user(){
        return $this->hasOne(User::class);
    }
    public function orderdetail(){
        return $this->hasMany(OrderDetail::class,'order_id','id');
    }
}
