<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DataTables;
use Session;
use DB;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\BlogCategory;
use App\Models\Blog;
use App\Models\Brochure;
use App\Models\WallmartLink;
use App\Models\AboutusDetail;
use App\Models\AbouthomeDetail;
use App\Models\BannerDetail;
use App\Models\Banner;

class MainController extends Controller
{
    public function index(Request $request){
         //$productdetails = Product::where('status','1')->orderBy('id','desc')->get()->toArray();
         $productcategory = ProductCategory::where('status','1')->get()->toArray();
         if($productcategory){
             foreach($productcategory as $val){
                $productdetailss = [
                    'id' => $val['id'],
                    'category_name' => $val['uname']
                ];
             $productdetailsss = Product::where('status','1')->where('product_category',$val['id'])->orderBy('id','desc')->get()->toArray();
             $productdetails[] = array_merge($productdetailss, ['product_list' => $productdetailsss]);
             }
         }

         $brochuredetails = Brochure::where('status','1')->orderBy('id','desc')->limit(9)->get()->toArray();
         $bannerdetails = BannerDetail::where('status','1')->orderBy('id','desc')->limit(6)->get()->toArray();
         $abouthomedetails = AbouthomeDetail::where('status','1')->orderBy('id','desc')->limit(1)->get()->toArray();
         $wallmartdetails = WallmartLink::where('status','1')->orderBy('id','desc')->limit(9)->get()->toArray();
       // print_r($wallmartdetails);die;
        return view('index',compact('productdetails','brochuredetails','bannerdetails','abouthomedetails','wallmartdetails'));
    }

    public function aboutUs(Request $request){
         $details = AboutusDetail::where('status','1')->orderBy('id','desc')->limit(2)->get()->toArray();
         $banner = Banner::where('status','1')->orderBy('id','desc')->limit(1)->get()->toArray();
       // print_r($banner);die;
        return view('aboutus',compact('details','banner'));
    }

    public function menu(Request $request){
        // $productdetails = Product::where('status','1')->orderBy('id','desc')->get()->toArray();
           $productcategory = ProductCategory::where('status','1')->get()->toArray();
         if($productcategory){
             foreach($productcategory as $val){
                $productdetailss = [
                    'id' => $val['id'],
                    'category_name' => $val['uname']
                ];
             $productdetailsss = Product::where('status','1')->where('product_category',$val['id'])->orderBy('id','desc')->get()->toArray();
             $productdetails[] = array_merge($productdetailss, ['product_list' => $productdetailsss]);
             }
         }
          $banner = Banner::where('status','1')->orderBy('id','desc')->limit(1)->get()->toArray();
        // print_r($productdetails);die;
        return view('menu',compact('productdetails','banner'));
    }

    public function productdetails(Request $request,$id){
         $productdetails = Product::where('id',$id)->first();
        $products = Product::where('status','1')->orderBy('id','desc')->limit(6)->get()->toArray();
        $banner = Banner::where('status','1')->orderBy('id','desc')->limit(1)->get()->toArray();
        // print_r($products);die;
        return view('store/menudetails',compact('productdetails','products','banner'));
    }

    public function contact(Request $request){
        $banner = Banner::where('status','1')->orderBy('id','desc')->limit(1)->get()->toArray();
        return view('contact',compact('banner'));
    }

    public function contactus(Request $request){
        $banner = Banner::where('status','1')->orderBy('id','desc')->limit(1)->get()->toArray();
        return view('store/contact',compact('banner'));
    }

    public function book(Request $request){
        return view('book');
    }

    public function event(Request $request){
        $banner = Banner::where('status','1')->orderBy('id','desc')->limit(1)->get()->toArray();
        return view('event',compact('banner'));
    }

    public function blog(Request $request){
        $blogdetails = Blog::where('status','1')->orderBy('id','desc')->get()->toArray();
        $banner = Banner::where('status','1')->orderBy('id','desc')->limit(1)->get()->toArray();
       // print_r($blogdetails);die;
        return view('blog',compact('blogdetails','banner'));
    }

    public function cart(Request $request){
        $banner = Banner::where('status','1')->orderBy('id','desc')->limit(1)->get()->toArray();
        return view('cart',compact('banner'));
    }
    
    public function wishlist(Request $request){
        $banner = Banner::where('status','1')->orderBy('id','desc')->limit(1)->get()->toArray();
        return view('wishlist',compact('banner'));
    }

    public function checkout(Request $request){
        $banner = Banner::where('status','1')->orderBy('id','desc')->limit(1)->get()->toArray();
        return view('checkout',compact('banner'));
    }

    public function login(Request $request){
        return view('login');
    }

    public function myprofile(Request $request){
        $banner = Banner::where('status','1')->orderBy('id','desc')->limit(1)->get()->toArray();
        return view('myprofile',compact('banner'));
    }

    public function signup(Request $request){
        return view('signup');
    }

    public function store(Request $request){
        // $productdetails = Product::where('status','1')->orderBy('id','desc')->get()->toArray();
         $productcategory = ProductCategory::where('status','1')->get()->toArray();
         if($productcategory){
             foreach($productcategory as $val){
                $productdetailss = [
                    'id' => $val['id'],
                    'category_name' => $val['uname']
                ];
             $productdetailsss = Product::where('status','1')->where('product_category',$val['id'])->orderBy('id','desc')->get()->toArray();
             $productdetails[] = array_merge($productdetailss, ['product_list' => $productdetailsss]);
             }
         }
         $banner = Banner::where('status','1')->orderBy('id','desc')->limit(1)->get()->toArray();
        // print_r($productdetails);die;
        return view('menu1',compact('productdetails','banner'));
    }

    public function whereToBuy(Request $request){
        $banner = Banner::where('status','1')->orderBy('id','desc')->limit(1)->get()->toArray();
        return view('wheretobuy', compact('banner'));
    }
}
