<?php

namespace App;

class Cart
{
	public $items = null;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			
		}
	}

	public function add($item, $id){
		$giohang = ['item' => $item];
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$giohang = $this->items[$id];
			}
		}
		$this->items[$id] = $giohang;
	}
	//xóa 1
	public function reduceByOne($id){	
		unset($this->items[$id]);
	}
	
}
