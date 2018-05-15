<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Blogs_Images;
use App\Images;
use Illuminate\Support\Facades\Auth;
class Blogs extends Model
{
    protected $table = 'blogs'; //Ten bang
	protected $guarded = []; //Cac tham so
	public $primaryKey = 'id';
	public $timestamps = true;

	public function addBlog($request){
		$file_name = $request->file('image')->getClientOriginalName();
		$blog = new Blogs;
		$blog->title= $request->title;
		$blog->content =$request->content;
		$blog->categorie_id=$request->categorie_id;
		$blog->user_id = Auth::user()->id;
		$blog->seo_keyword =$request->seo_keyword;
		$blog->seo_description=$request->seo_description;
		$blog->url=$request->url;
		$blog->display=$request->display;
		$blog->image =$file_name;
		$request->file('image')->move('uploads/images/blogs/',$file_name);
		$blog->save();
		$image= new Images;
		$image->name =$file_name;
		$image->url =$file_name;
		$image->alt =$file_name;
		$image->save();
		$blog_image =new Blogs_Images;
		$blog_image->image_id = $image->id;
		$blog_image->blog_id =$blog->id;
		$blog_image->save();
	}
	public function deleteBlog($id){
		$blog = Blogs::where('id',$id);
		$blog ->delete();
	}
	public function editBlog($request, $id){
		if($request->hasFile('image')){
			$file_name = $request->file('image')->getClientOriginalName();
			$request->file('image')->move('uploads/images/blogs/',$file_name);
			$image= new Images;
			$image->name =$file_name;
			$image->url =$file_name;
			$image->alt =$file_name;
			$image->save();
			$blog_image = Blogs_Images::where('blog_id',$id)->get()->first();
			$blog_image->image_id = $image->id;
			$blog_image->save();

			$blog = Blogs::where('id',$id)->get()->first();
			$blog->title= $request->title;
			$blog->content =$request->content;
			$blog->categorie_id=$request->categorie_id;
			$blog->user_id = Auth::user()->id;
			$blog->seo_keyword =$request->seo_keyword;
			$blog->seo_description=$request->seo_description;
			$blog->url=$request->url;
			$blog->display=$request->display;
			$blog->image =$file_name;
			$blog->save();

		}
		else{

			$blog = Blogs::where('id',$id)->get()->first();
			$blog->title= $request->title;
			$blog->content =$request->content;
			$blog->categorie_id=$request->categorie_id;
			$blog->user_id = Auth::user()->id;
			$blog->seo_keyword =$request->seo_keyword;
			$blog->seo_description=$request->seo_description;
			$blog->url=$request->url;
			$blog->display=$request->display;
			$blog->save();
		}
	}
}
