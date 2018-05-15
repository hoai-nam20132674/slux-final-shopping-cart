<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_Sidebar extends Model
{
    protected $table = 'menu_sidebar'; //Ten bang
	protected $guarded = []; //Cac tham so
	public $primaryKey = 'id';
	public $timestamps = true;

	public function editMenu($request){
		if(Input::has('categorie_sidebar')){
			Menu_Sidebar::truncate();
            $selects = $request->categorie_sidebar;
            $count = count($selects);
            for($i=0;$i<$count;$i++){
            	$categorie= Categories::where('id',$request->categorie_sidebar[$i])->get()->first();
            	$menu_sidebar =new Menu_Sidebar;
            	$menu_sidebar->categorie_id=$request->categorie_sidebar[$i];
            	$menu_sidebar->categorie_name=$categorie->name;
            	$menu_sidebar->categorie_url=$categorie->url;
            	$menu_sidebar->save();
            }
        }
	}
}
