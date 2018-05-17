<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Line extends Model
{
    protected $table = 'orders_line'; //Ten bang
	protected $guarded = []; //Cac tham so
	public $primaryKey = 'id';
	public $timestamps = true;
}
