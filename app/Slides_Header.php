<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slides_Header extends Model
{
    protected $table = 'slides_header'; //Ten bang
	protected $guarded = []; //Cac tham so
	public $primaryKey = 'id';
	public $timestamps = true;
}
