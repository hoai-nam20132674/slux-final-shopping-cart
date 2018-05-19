<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order_Line;
class Order extends Model
{
    protected $table = 'orders'; //Ten bang
	protected $guarded = []; //Cac tham so
	public $primaryKey = 'id';
	public $timestamps = true;

	public function addOrder($request,$price,$content){
		$order = new Order;
		$order->name = $request ->name;
		$order->phone_number = $request->phone_number;
		$order->address = $request ->address;
		$order->messages = $request->messages;
		$order->price =$price;
		$order->status =0;
		$order->save();
		foreach($content as $item){
			$order_line = new Order_Line;
			$order_line ->order_id = $order->id;
			$order_line ->product_id = $item->id;
			$order_line ->quantity = $item->quantity;
			$order_line ->price = $item->quantity*$item->price;
			$order_line->save();
		}
	}
	public function deleteOrder($id){
		$order = Order::where('id',$id)->get()->first();
		$order -> delete();
	}
}
