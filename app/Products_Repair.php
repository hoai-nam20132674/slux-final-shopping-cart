<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products_Repair_Image;
use Input;
class Products_Repair extends Model
{
    protected $table = 'products_repair'; //Ten bang
	protected $guarded = []; //Cac tham so
	public $primaryKey = 'id';
	public $timestamps = true;

	public function addProductRepair($request){
		$product_repair = new Products_Repair;
		$product_repair->name=$request->name;
		$product_repair->phone_number=$request->phone_number;
		$product_repair->address=$request->address;
		$product_repair->product_name=$request->product_name;
		$product_repair->error =$request->error;
		$product_repair->status=$request->status;
		$product_repair->save();
		if(Input::hasFile('image')){
			$file_name = $request->file('image')->getClientOriginalName();
			$request->file('image')->move('uploads/images/productRepair/',$file_name);
			$image= new Images;
			$image->name =$file_name;
			$image->url =$file_name;
			$image->alt =$file_name;
			$image->save();
			$product_repair_image =new Products_Repair_Image;
			$product_repair_image->image_id = $image->id;
			$product_repair_image->product_repair_id =$product_repair->id;
			$product_repair_image->url_image =$file_name;
			$product_repair_image->save();
		}
		else{
			$product_repair_image =new Products_Repair_Image;
			$product_repair_image->image_id = 1;
			$product_repair_image->product_repair_id =$product_repair->id;
			$product_repair_image->url_image ="null.png";
			$product_repair_image->save();
		}
		if(Input::hasFile('fimage')){
			$file_name = $request->file('fimage')->getClientOriginalName();
			$request->file('fimage')->move('uploads/images/productRepair/',$file_name);
			$image= new Images;
			$image->name =$file_name;
			$image->url =$file_name;
			$image->alt =$file_name;
			$image->save();
			$product_repair_image =new Products_Repair_Image;
			$product_repair_image->image_id = $image->id;
			$product_repair_image->product_repair_id =$product_repair->id;
			$product_repair_image->url_image =$file_name;
			$product_repair_image->save();
		}
		else{
			$product_repair_image =new Products_Repair_Image;
			$product_repair_image->image_id = 1;
			$product_repair_image->product_repair_id =$product_repair->id;
			$product_repair_image->url_image ="null.png";
			$product_repair_image->save();
		}
		
	}
	public function deleteProductRepair($id){
		$product_repair =Products_Repair::where('id',$id)->get()->first();
		$product_repair->delete();

	}
	public function editProductRepair($request,$id){
		$product_repair = Products_Repair::where('id',$id)->get()->first();
		$product_repair->name=$request->name;
		$product_repair->phone_number=$request->phone_number;
		$product_repair->address=$request->address;
		$product_repair->product_name=$request->product_name;
		$product_repair->error =$request->error;
		$product_repair->status=$request->status;
		$product_repair->save();
		$product_repair_image = Products_Repair_Image::where('product_repair_id',$id)->get()->first();
		$i = $product_repair_image->id;
		if(Input::hasFile('image')){
			$file_name = $request->file('image')->getClientOriginalName();
			$request->file('image')->move('uploads/images/productRepair/',$file_name);
			$image= new Images;
			$image->name =$file_name;
			$image->url =$file_name;
			$image->alt =$file_name;
			$image->save();
			$product_repair_image->image_id = $image->id;
			$product_repair_image->url_image =$file_name;
			$product_repair_image->save();
		}
		if(Input::hasFile('fimage')){
			$file_name = $request->file('fimage')->getClientOriginalName();
			$request->file('fimage')->move('uploads/images/productRepair/',$file_name);
			$image= new Images;
			$image->name =$file_name;
			$image->url =$file_name;
			$image->alt =$file_name;
			$image->save();
			$j=$i+1;
			$product_repair_image1 = Products_Repair_Image::where('id',$j)->get()->first();
			$product_repair_image1->image_id = $image->id;
			$product_repair_image1->url_image =$file_name;
			$product_repair_image1->save();
		}
	}
}
