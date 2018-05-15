<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Categories;
use App\Blogs;
use App\Products;
use App\Products_Images;
use App\Menu_Header;
use App\Menu_Footer;
use App\Menu_Sidebar;
use App\Products_Repair;
use App\Http\Requests\addCategorieRequest;
use App\Http\Requests\editCategorieRequest;
use App\Http\Requests\editBlogRequest;
use App\Http\Requests\editProductRequest;
use App\Http\Requests\addBlogRequest;
use App\Http\Requests\addProductRequest;
use App\Http\Requests\addProductRepairRequest;
use App\Http\Requests\editProductRepairRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Input;

class adminController extends Controller
{
    
    public function index(){
        $countBlogs = Blogs::select()->count();
        $categories = Categories::select()->get();
        return View('frontEndAdmin.page-content.index',['countBlogs'=>$countBlogs]);
    }

    //Categories Controller
    public function getListCategories(){
        $countBlogs = Blogs::select()->count();
        $Categories =new Categories;
        $getListCategories = $Categories->getListCategories();
    	return View('frontEndAdmin.page-content.listCategories',['getListCategories'=>$getListCategories,'countBlogs'=>$countBlogs]);
    }
    public function deleteCategorie($id,$parent_id){
        $Categories =new Categories;
        $Categories->deleteCategorie($id,$parent_id);
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Xóa danh mục thành công']);
    }
    public function addCategorie(){
        $countBlogs = Blogs::select()->count();
        $cate = new Categories;
        $categories =$cate->getListCategories();
        return View('frontEndAdmin.page-content.addCategorie',['categories'=>$categories,'countBlogs'=>$countBlogs]);
    }
    public function postAddCategorie(addCategorieRequest $request){
        $cate =new Categories;
        $cate->addCategorie($request);
        return redirect('admin/getListCategories')->with(['flash_level'=>'success','flash_message'=>'Thêm danh mục thành công']);
    }
    
    public function editCategorie($id, $parent_id){
        $countBlogs = Blogs::select()->count();
        $categorie = Categories::where('id',$id)->get();
        $categories = Categories::select()->get();
        $parent = Categories::where('id',$parent_id)->get();
        return View('frontEndAdmin.page-content.editCategorie',['categorie'=>$categorie,'categories'=>$categories,'parent'=>$parent,'countBlogs'=>$countBlogs]);
    }
    public function postEditCategorie(editCategorieRequest $request, $id){
        $cate =new Categories;
        $cate->editCategorie($request,$id);
        return redirect('admin/getListCategories')->with(['flash_level'=>'success','flash_message'=>'Sửa danh mục thành công']);
    }

    //Blog Controller

    public function getListBlogs(){
        $countBlogs = Blogs::select()->count();
        $blogs = Blogs::select()->get();
        return View('frontEndAdmin.page-content.listBlogs',['blogs'=>$blogs,'countBlogs'=>$countBlogs]);
    }
    public function addBlog(){
        $countBlogs = Blogs::select()->count();
        $categories = Categories::select()->get();
        return View('frontEndAdmin.page-content.addBlog',['categories'=>$categories,'countBlogs'=>$countBlogs]);
    }
    public function postAddBlog(addBlogRequest $request){
        if($request->categorie_id ==0){
            return redirect('admin/getListBlogs')->with(['flash_level'=>'danger','flash_message'=>'Thêm tin tức không thành công']);
        }
        $blog =new Blogs;
        $blog->addBlog($request);
        return redirect('admin/getListBlogs')->with(['flash_level'=>'success','flash_message'=>'Thêm tin tức thành công']);
    }
    public function deleteBlog($id){
        $blog =new Blogs;
        $blog->deleteBlog($id);
        return redirect('admin/getListBlogs')->with(['flash_level'=>'success','flash_message'=>'Xóa tin tức thành công']);
    }
    public function editBlog($id, $categorie_id){
        $countBlogs = Blogs::select()->count();
        $blog = Blogs::where('id',$id)->get();
        $categorie = Categories::where('id',$categorie_id)->get();
        $categories = Categories::select()->get();
        return View('frontEndAdmin.page-content.editBlog',['categorie'=>$categorie,'categories'=>$categories,'blog'=>$blog,'countBlogs'=>$countBlogs]);
    }

    public function postEditBlog(editBlogRequest $request, $id){
        $blog =new Blogs;
        $blog->editBlog($request,$id);
        return redirect('admin/getListBlogs')->with(['flash_level'=>'success','flash_message'=>'Sửa tin tức thành công']);
    }


    //Product Controller

    public function getListProducts(){
        $countBlogs = Blogs::select()->count();
        $products = Products::select()->get();
        return View('frontEndAdmin.page-content.listProducts',['products'=>$products,'countBlogs'=>$countBlogs]);
    }
    public function addProduct(){
        $countBlogs = Blogs::select()->count();
        $categories = Categories::select()->get();
        return View('frontEndAdmin.page-content.addProduct',['categories'=>$categories,'countBlogs'=>$countBlogs]);
    }
    public function postAddProduct(addProductRequest $request){
        $product = new Products;
        $product ->addProduct($request);
        return redirect('admin/getListProducts')->with(['flash_level'=>'success','flash_message'=>'Thêm sản phẩm thành công']);
    }
    public function deleteProduct($id){
        $product = new Products;
        $product->deleteProduct($id);
        return redirect('admin/getListProducts')->with(['flash_level'=>'success','flash_message'=>'Xóa sản phẩm thành công']);

    }
    public function editProduct($id, $categorie_id){
        $countBlogs = Blogs::select()->count();
        $product = Products::where('id',$id)->get();
        $categorie = Categories::where('id',$categorie_id)->get()->first();
        $categories =Categories::select()->get();
        $product_images = Products_Images::where('product_id',$id)->get();
        return View('frontEndAdmin.page-content.editProduct',['categorie'=>$categorie,'categories'=>$categories,'product'=>$product,'countBlogs'=>$countBlogs,'product_images'=>$product_images]);
    }
    public function postEditProduct(editProductRequest $request, $id){
        $product = new Products;
        $product->editProduct($request,$id);
        return redirect('admin/getListProducts')->with(['flash_level'=>'success','flash_message'=>'Sửa sản phẩm thành công']);
    }

    //Edit Menu Controller
    public function editMenu(){
        $countBlogs = Blogs::select()->count();
        $categories = Categories::select()->get();
        return View('frontEndAdmin.page-content.menu',['countBlogs'=>$countBlogs,'categories'=>$categories]);
    }
    public function postEditMenuHeader(Request $request){
        $menu_header = new Menu_Header;
        $menu_header->editMenu($request);
        return redirect('admin/editMenu')->with(['flash_level'=>'success','flash_message'=>'Sửa menu thành công']);
    }
    public function postEditMenuFooter(Request $request){
        $menu_footer =new Menu_Footer;
        $menu_footer->editMenu($request);
        return redirect('admin/editMenu')->with(['flash_level'=>'success','flash_message'=>'Sửa menu thành công']);
    }
    public function postEditMenuSidebar(Request $request){
        $menu_sidebar =new Menu_Sidebar;
        $menu_sidebar->editMenu($request);
        return redirect('admin/editMenu')->with(['flash_level'=>'success','flash_message'=>'Sửa menu thành công']);
    }


    // Product Repair Controller
    public function getListProductsRepair(){
        $countBlogs = Blogs::select()->count();
        $products_repair = Products_Repair::select()->get();
        return View('frontEndAdmin.page-content.listProductRepair',['products_repair'=>$products_repair,'countBlogs'=>$countBlogs]);
    }
    public function addProductRepair(){
        $countBlogs = Blogs::select()->count();
        return View('frontEndAdmin.page-content.addProductRepair',['countBlogs'=>$countBlogs]);
    }
    public function postAddProductRepair(addProductRepairRequest $request){
        $product_repair =new Products_Repair;
        $product_repair->addProductRepair($request);
        return redirect('admin/getListProductsRepair')->with(['flash_level'=>'success','flash_message'=>'Thêm khác hàng thành công']);
    }

    public function deleteProductRepair($id){
        $product = new Products_Repair;
        $product->deleteProductRepair($id);
        return redirect('admin/getListProductsRepair')->with(['flash_level'=>'success','flash_message'=>'Xóa khách hàng thành công']);
    }
    public function editProductRepair($id){
        $product_repair = Products_Repair::where('id',$id)->get();
        $countBlogs = Blogs::select()->count();
        return View('frontEndAdmin.page-content.editProductRepair',['product_repair'=>$product_repair,'countBlogs'=>$countBlogs]);
    }
    public function postEditProductRepair(editProductRepairRequest $request, $id){
        $product_repair=new Products_Repair;
        $product_repair->editProductRepair($request,$id);
        return redirect('admin/getListProductsRepair')->with(['flash_level'=>'success','flash_message'=>'Sửa thông tin khách hàng thành công']);
    }
    
}
