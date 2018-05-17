<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Products;
use App\Categories;
use App\Products_Images;
use App\Blogs;
use Cart;
use App\Order;
use App\Menu_Sidebar;
use App\Http\Requests\addOrderRequest;
class viewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $totalQuantity= Cart::getTotalQuantity();
        return View('frontEndUser.index',['totalQuantity'=>$totalQuantity]);
    }

    public function viewContentPageCategorie($url)
    {
        $categorie = Categories::where('url',$url)->get();
        $product= Products::where('url',$url)->get();
        $blog = Blogs::where('url',$url)->get();
        if($url == "login"){
            return redirect('login/admin-master');
        }
        if(count($categorie)>0){
            foreach($categorie as $cate){
                if($cate->type ==0){
                    $blogs = Blogs::select()->orderBy('created_at','DESC')->get();
                    $products=Products::select()->orderBy('created_at','DESC')->get();
                    $totalQuantity= Cart::getTotalQuantity();
                    return View('frontEndUser.page-content.newsCategorie',['cate'=>$cate,'blogs'=>$blogs,'products'=>$products,'totalQuantity'=>$totalQuantity]);
                }
                if($cate->type ==2){
                    $blogs = Blogs::select()->orderBy('created_at','DESC')->paginate(10);
                    $products = Products::select()->orderBy('created_at','DESC')->get();
                    $totalQuantity= Cart::getTotalQuantity();
                    $menu_sidebars= Menu_Sidebar::select()->get();
                    return View('frontEndUser.page-content.listNewsCategorie',['blogs'=>$blogs,'cate'=>$cate,'products'=>$products,'totalQuantity'=>$totalQuantity,'menu_sidebars'=>$menu_sidebars]);
                }
                else{
                    $id =$cate->id;
                    $products= $this->getProductCategorie($id);
                    $idCateParents = $this->getIdCategorieParent($id);
                    $blogs =Blogs::select()->orderBy('created_at','DESC')->get();
                    $totalQuantity= Cart::getTotalQuantity();
                    $menu_sidebars= Menu_Sidebar::select()->get();
                    return View('frontEndUser.page-content.listProductCategorie',['products'=>$products,'idCateParents'=>$idCateParents,'blogs'=>$blogs,'totalQuantity'=>$totalQuantity,'menu_sidebars'=>$menu_sidebars]);
                }
            }
        }
        if(count($product)>0){
            foreach($product as $pr){
                $product_images = Products_Images::where('product_id',$pr->id)->get();
                $idCateParents = $this->getIdCategorieParent($pr->categorie_id);
                $categories = Categories::whereIn('id',$idCateParents)->get();
                $blogs = Blogs::where('categorie_id',$pr->categorie_id)->orderBy('created_at','DESC')->get();
                $products = Products::where('categorie_id',$pr->categorie_id)->orderBy('created_at','DESC')->get();
                $totalQuantity= Cart::getTotalQuantity();
                return View('frontEndUser.page-content.view-product-item',['pr'=>$pr,'product_images'=>$product_images,'categories'=>$categories,'blogs'=>$blogs,'products'=>$products,'totalQuantity'=>$totalQuantity]);
            }
        }
        if(count($blog)>0){
            foreach($blog as $bl){
                $products = Products::where('categorie_id',$bl->categorie_id)->get();
                $categorie = Categories::where('id',$bl->categorie_id)->get()->first();
                $blogs =Blogs::where('categorie_id',$bl->categorie_id)->orderBy('created_at','DESC')->get();
                $totalQuantity= Cart::getTotalQuantity();
                return View('frontEndUser.page-content.view-news-item',['products'=>$products,'categorie'=>$categorie,'bl'=>$bl,'blogs'=>$blogs,'totalQuantity'=>$totalQuantity]);
            }
        }
    }
    public $arrayIdCateParent = array();
    public $tg=0;
    public function getIdCategorieParent($id){
        $arrayIdCateParent = array();
        $tg=0;
        $categorie = new Categories;
        $arrayIdCateParent[$tg]=$id;
        $parentCategorie = $categorie->getIdParent($id);
        for($x =0;$x<10;$x++){
            if(count($parentCategorie)>0){
                $tg++;
                foreach($parentCategorie as $parentCate){
                    $arrayIdCateParent[$tg]=$parentCate->id;
                    $parentCategorie = $categorie->getIdParent($parentCate->id);
                }
            }
        }
        return $arrayIdCateParent;
    }
    public function getIdCategorieChildren($id){
        $cate =new Categories;
        $array =array();
        $i=0;
        $k=0;
        $n=0;
        $idCateChildrens = $cate->getIdChildren($id);
        $count=0;
        if(count($idCateChildrens)>0){
            $count = count($idCateChildrens);
            for($i;$i<$count;$i++){
                $array[$i]=$idCateChildrens[$i];
            }
            foreach($idCateChildrens as $idCateChildren){
                $cate = new Categories;
                $idCateChildrens1= $cate->getIdChildren($idCateChildren);
                if(count($idCateChildrens1)>0){
                    $count1 = count($idCateChildrens1);
                    $j=0;
                    $count=$count1+$count;
                    for($i;$i<$count;$i++){
                        $array[$i]=$idCateChildrens1[$j];
                        $j++;
                    }
                    foreach($idCateChildrens1 as $idCateChildren1){
                        $cate = new Categories;
                        $idCateChildrens2= $cate->getIdChildren($idCateChildren1);
                        if(count($idCateChildrens2)>0){
                            $count2 = count($idCateChildrens2);
                            $j=0;
                            $count=$count2+$count;
                            for($i;$i<$count;$i++){
                                $array[$i]=$idCateChildrens2[$j];
                                $j++;
                            }
                            foreach($idCateChildrens2 as $idCateChildren2){
                                $cate = new Categories;
                                $idCateChildrens3= $cate->getIdChildren($idCateChildren2);
                                if(count($idCateChildrens3)>0){
                                    $count3 = count($idCateChildrens3);
                                    $j=0;
                                    $count=$count3+$count;
                                    for($i;$i<$count;$i++){
                                        $array[$i]=$idCateChildrens3[$j];
                                        $j++;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $array[$count]=$id;
        return $array;
    }
    public function getProductCategorie($id){
        $categories = $this->getIdCategorieChildren($id);
        $products = Products::whereIn('categorie_id',$categories)->orderBy('created_at','DESC')->paginate(9);
        // dd($products);
        return $products;
    }
    public function addToCart($url){
        $product = Products::where('url',$url)->get()->first();
        Cart::add(array('id'=>$product->id,'name'=>$product->name,'quantity'=>1,'price'=>$product->price,'attributes'=>array('img'=>$product->image)));
        $content = Cart::getContent();
        return redirect()->route('getCart');
        // dd($content);
    }
    public function updateCartAddItem($id){
        $content = Cart::getContent();
        $i=0;
        foreach($content as $item){
            if($item->id == $id){
                $i++;
            }
        }
        if($i>0){
            $product = Products::where('id',$id)->get()->first();
            Cart::add(array('id'=>$product->id,'name'=>$product->name,'quantity'=>1,'price'=>$product->price,'attributes'=>array('img'=>$product->image)));
        }
        else{
            return redirect()->route('home');
        }
    }
    public function updateCartRemoveItem($id,$quantity){
        $content = Cart::getContent();
        $i=0;
        foreach($content as $item){
            if($item->id == $id){
                $i++;
            }
        }
        if($i>0){
            $array = array();
            $array[0]=$quantity;
            Cart::update($id, array('quantity'=>array('relative' => false,'value' => $quantity),));
        }
        else{
            return redirect()->route('home');
        }
    }
    public function removeItem($id){
        $content = Cart::getContent();
        $i=0;
        foreach($content as $item){
            if($item->id == $id){
                $i++;
            }
        }
        if($i>0){
            Cart::remove($id);
        }
        else{
            return redirect()->route('home');
        }
    }
    public function getCart(){
        $contents = Cart::getContent();
        $total = Cart::getTotal();
        $totalQuantity = Cart::getTotalQuantity();
        return View('frontEndUser.page-content.cart',['contents'=>$contents,'total'=>$total,'totalQuantity'=>$totalQuantity]);
    }
    public function postAddOrder(addOrderRequest $request){
        $content = Cart::getContent();
        $price = Cart::getTotal();
        if(count($content)>0){
            $order = new Order;
            $order->addOrder($request, $price, $content);
            Cart::clear();
            return redirect()->route('home')->with(['flash_level'=>'success','flash_message'=>'Đặt hàng thành công']);

        }
        else{
            return redirect()->route('home')->with(['flash_level'=>'danger','flash_message'=>'Không có sản phẩm nào trong giỏ hàng']);
        }
    }
    
}
