<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_Repair_Image extends Model
{
    protected $table = 'products_repair_image'; //Ten bang
	protected $guarded = []; //Cac tham so
	public $primaryKey = 'id';
	public $timestamps = true;
}
