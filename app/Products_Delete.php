<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_Delete extends Model
{
    protected $table = 'products_delete'; //Ten bang
	protected $guarded = []; //Cac tham so
	public $primaryKey = 'id';
	public $timestamps = true;
}
