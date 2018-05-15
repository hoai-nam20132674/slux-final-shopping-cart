<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
class Menu_Header extends Model
{
    protected $table = 'menu_header'; //Ten bang
	protected $guarded = []; //Cac tham so
	public $primaryKey = 'id';
	public $timestamps = true;

	public function editMenu($request){
		if(Input::has('categorie_header')){
			Menu_Header::truncate();
            $selects = $request->categorie_header;
            $count = count($selects);
            for($i=0;$i<$count;$i++){
            	$categorie= Categories::where('id',$request->categorie_header[$i])->get()->first();
            	$menu_header =new Menu_Header;
            	$menu_header->categorie_id=$request->categorie_header[$i];
            	$menu_header->categorie_name=$categorie->name;
            	$menu_header->categorie_url=$categorie->url;
            	$menu_header->save();
            }
        }
	}
}
