<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Systems extends Model
{
    protected $table = 'systems'; //Ten bang
	protected $guarded = []; //Cac tham so
	public $primaryKey = 'id';
	public $timestamps = true;

	public function editSystems($request){
		Systems::truncate();
		$system = new Systems;
		$system->title=$request->title;
		$system->keywords=$request->keywords;
		$system->description = $request->description;
		$system->site_name = $request->site_name;
		$system->og_image = $request->og_image;
		$system->logo_website = $request->logo_website;
		$system->logo_title = $request->logo_title;
		$system->script = $request->script;
		$system->save();
	}
}
