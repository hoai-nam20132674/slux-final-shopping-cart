<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_Footer extends Model
{
    protected $table = 'menu_footer'; //Ten bang
	protected $guarded = []; //Cac tham so
	public $primaryKey = 'id';
	public $timestamps = true;

	public function editMenu($request){
		if(Input::has('categorie_footer')){
			Menu_Footer::truncate();
            $selects = $request->categorie_footer;
            $count = count($selects);
            for($i=0;$i<$count;$i++){
            	$categorie= Categories::where('id',$request->categorie_footer[$i])->get()->first();
            	$menu_footer =new Menu_Footer;
            	$menu_footer->categorie_id=$request->categorie_footer[$i];
            	$menu_footer->categorie_name=$categorie->name;
            	$menu_footer->categorie_url=$categorie->url;
            	$menu_footer->save();
            }
        }
	}
}
