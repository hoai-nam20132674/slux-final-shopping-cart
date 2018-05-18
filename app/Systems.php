<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Systems extends Model
{
    protected $table = 'systems'; //Ten bang
	protected $guarded = []; //Cac tham so
	public $primaryKey = 'id';
	public $timestamps = true;
}
