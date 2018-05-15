<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_Images extends Model
{
    protected $table = 'products_images'; //Ten bang
	protected $guarded = []; //Cac tham so
	public $primaryKey = 'id';
	public $timestamps = true;
}
