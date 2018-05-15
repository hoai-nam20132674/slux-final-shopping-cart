<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products_Images;
use App\Images;
use App\Products_Delete;
use Input;
class Products extends Model
{
    protected $table = 'products'; //Ten bang
	protected $guarded = []; //Cac tham so
	public $primaryKey = 'id';
	public $timestamps = true;

	public function addProduct($request){
		$product =new Products;
		$file_name = $request->file('image')->getClientOriginalName();
		$product->url = $request->url;
		$product->name =$request->name;
		$product->price=$request->price;
		$product->title=$request->title;
		$product->seo_keyword=$request->seo_keyword;
		$product->seo_description=$request->seo_description;
		$product->sale=$request->sale;
		$product->tskt=$request->tskt;
		$product->ttsp=$request->ttsp;
		$product->description=$request->content;
		$product->categorie_id =$request->categorie_id;
		$product->display=$request->display;
		$product->image=$file_name;
		$product->view=0;
		$request->file('image')->move('uploads/images/products/',$file_name);
		$product->save();
		$image = new Images;
		$image->name =$file_name;
		$image->url =$file_name;
		$image->alt =$file_name;
		$image->save();
		$product_image =new Products_Images;
		$product_image->image_id = $image->id;
		$product_image->product_id =$product->id;
		$product_image->url_image =$file_name;
		$product_image->save();
		
		if(Input::hasFile('fimage')){
			$i=0;
			foreach(Input::file('fimage') as $file){
				if(isset($file)){
					$file_name = $file->getClientOriginalName();
					$file->move('uploads/images/products/',$file_name);
					$image= new Images;
					$image->name =$file_name;
					$image->url =$file_name;
					$image->alt =$file_name;
					$image->save();
					$product_image =new Products_Images;
					$product_image->image_id = $image->id;
					$product_image->product_id =$product->id;
					$product_image->url_image =$file_name;
					$product_image->save();
					$i++;
				}
			}
			for($i;$i<3;$i++){
				$product_image =new Products_Images;
				$product_image->image_id = 1;
				$product_image->product_id =$product->id;
				$product_image->url_image ="null.png";
				$product_image->save();
			}

		}
		else{
			for($i=0;$i<3;$i++){
				$product_image =new Products_Images;
				$product_image->image_id = 1;
				$product_image->product_id =$product->id;
				$product_image->url_image ="null.png";
				$product_image->save();
			}
		}
	}
	public function deleteProduct($id){
		$count = Products_Images::where('product_id',$id)->count();
		$product =Products::where('id',$id)->get()->first();
		$product_delete =new Products_Delete;
		$product_delete->product_id= $product->id;
		$product_delete->url = $product->url;
		$product_delete->name =$product->name;
		$product_delete->price=$product->price;
		$product_delete->title=$product->title;
		$product_delete->seo_keyword=$product->seo_keyword;
		$product_delete->seo_description=$product->seo_description;
		$product_delete->sale=$product->sale;
		$product_delete->tskt=$product->tskt;
		$product_delete->ttsp=$product->ttsp;
		$product_delete->description=$product->description;
		$product_delete->categorie_id =$product->categorie_id;
		$product_delete->display=$product->display;
		$product_delete->image=$product->image;
		$product_delete->view=$product->view;
		$product_delete->save();
		if($count != 0){
			for($i=0;$i<$count;$i++){
				$product_image= Products_Images::where('product_id',$id)->get()->first();
				$product_image->product_id =1;
				$product_image->save();
			}
		}
		$product = Products::where('id',$id);
		$product->delete();
	}
	public function editProduct($request,$id){
		$product = Products::where('id',$id)->get()->first();
		$product_image =Products_Images::where('product_id',$id)->get()->first();
		$product->url = $request->url;
		$product->name =$request->name;
		$product->price=$request->price;
		$product->title=$request->title;
		$product->seo_keyword=$request->seo_keyword;
		$product->seo_description=$request->seo_description;
		$product->sale=$request->sale;
		$product->tskt=$request->tskt;
		$product->ttsp=$request->ttsp;
		$product->description=$request->content;
		$product->categorie_id =$request->categorie_id;
		$product->display=$request->display;
		if($request->hasFile('image')){
			$file_name = $request->file('image')->getClientOriginalName();
			$image= new Images;
			$image->name =$file_name;
			$image->url =$file_name;
			$image->alt =$file_name;
			$image->save();
			$product->image=$file_name;
			$product_image->url_image =$file_name;
			$product_image->image_id=$image->id;
			$product_image->save();
			$request->file('image')->move('uploads/images/products/',$file_name);
		}
		$i = $product_image->id;
		$product->save();
		if(Input::hasFile('fimage1')){
			$j=$i+1;
			$product_image1 = Products_Images::where('id',$j)->get()->first();
			$file_name = $request->file('fimage1')->getClientOriginalName();
			$image= new Images;
			$image->name =$file_name;
			$image->url =$file_name;
			$image->alt =$file_name;
			$image->save();
			$product_image1 ->url_image =$file_name;
			$product_image1->image_id =$image->id;
			$product_image1->save();
			$request->file('fimage1')->move('uploads/images/products/',$file_name);
			
		}
		if(Input::hasFile('fimage2')){
			$j=$i+2;
			$product_image2 = Products_Images::where('id',$j)->get()->first();
			$file_name = $request->file('fimage2')->getClientOriginalName();
			$image= new Images;
			$image->name =$file_name;
			$image->url =$file_name;
			$image->alt =$file_name;
			$image->save();
			$product_image2 ->url_image =$file_name;
			$product_image2->image_id =$image->id;
			$product_image2->save();
			$request->file('fimage2')->move('uploads/images/products/',$file_name);
			
		}
		if(Input::hasFile('fimage3')){
			$j=$i+3;
			$product_image3 = Products_Images::where('id',$j)->get()->first();
			$file_name = $request->file('fimage3')->getClientOriginalName();
			$image= new Images;
			$image->name =$file_name;
			$image->url =$file_name;
			$image->alt =$file_name;
			$image->save();
			$product_image3 ->url_image =$file_name;
			$product_image3->image_id =$image->id;
			$product_image3->save();
			$request->file('fimage3')->move('uploads/images/products/',$file_name);
			
		}
	}
}
