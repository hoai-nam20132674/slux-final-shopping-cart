<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Blogs;
use App\Products;
class Categories extends Model
{
	//
    protected $table = 'categories'; //Ten bang
	protected $guarded = []; //Cac tham so
	public $primaryKey = 'id';
	public $timestamps = true;

	
	public function getListCategories(){
		$getListCategories = Categories::select()->get();
		return $getListCategories;
	}
	public function deleteCategorie($id,$parent_id){
		
		$count = Categories::where('parent_id',$id)->count();
		if($count != 0){
			for($i=0;$i<$count;$i++){
				$childrenCate = Categories::where('parent_id',$id)->get()->first();
				$childrenCate->parent_id =0;
				$childrenCate->save();
			}
		}
		$count2 = Blogs::where('categorie_id',$id)->count();
		if($count2 != 0){
			for($i=0;$i<$count2;$i++){
				$childrenBlog = Blogs::where('categorie_id',$id)->get()->first();
				$childrenBlog->categorie_id =1;
				$childrenBlog->save();
			}
		}
		$count3 = Products::where('categorie_id',$id)->count();
		if($count3 != 0){
			for($i=0;$i<$count3;$i++){
				$childrenProduct = Products::where('categorie_id',$id)->get()->first();
				$childrenProduct->categorie_id =1;
				$childrenProduct->save();
			}
		}
		$categorie = Categories::where('id',$id);
		$categorie->delete();

	}
	public function getChildren($id){
		$array = array();
		$childrenCategorie = Categories::where('parent_id',$id)->get()->toArray();
		return $childrenCategorie;
	}
	public function getIdChildren($id){
		$array = array();
		$count = Categories::where('parent_id',$id)->count();
		$childrenCategorie = Categories::where('parent_id',$id)->get();
		$i=0;
		if($count>0){
			foreach($childrenCategorie as $childrenCate){
				$array[$i]=$childrenCate->id;
				$i++;
			}
		}
		return $array;

	}
	public function getIdParent($id){
		$cate = Categories::where('id',$id)->get();
		if(count($cate)>0){
			foreach($cate as $cat){
				$parentCategorie = Categories::where('id',$cat->parent_id)->get();
				return $parentCategorie;
			}
		}
		else{
			return array();
		}
	}
	public function getBlogChildren($id){
		$childrenBlog = Blogs::where('categorie_id',$id)->get()->toArray();
		return $childrenCategorie;
	}
	public function addCategorie($request){
		$cate = new Categories;
		$cate ->parent_id =$request->parent_id;
		$cate ->name= $request->name;
		$cate ->title = $request->title;
		$cate ->content = $request->content;
		$cate ->seo_keyword = $request->seo_keyword;
		$cate ->seo_description = $request->seo_description;
		$cate ->url =$request ->url;
		$cate ->display = $request->display;
		$cate ->type = $request->type;
		$cate ->save();
	}
	public function editCategorie($request, $id){
		$cate = Categories::where('id',$id)->get()->first();
		$cate ->parent_id =$request->parent_id;
		$cate ->name= $request->name;
		$cate ->title = $request->title;
		$cate ->content = $request->content;
		$cate ->seo_keyword = $request->seo_keyword;
		$cate ->seo_description = $request->seo_description;
		$cate ->url =$request ->url;
		$cate ->display = $request->display;
		$cate ->type = $request->type;
		$cate ->save();
	}
	
}