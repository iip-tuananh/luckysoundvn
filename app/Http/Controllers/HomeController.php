<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\product\Category;
use App\models\product\Product;
use App\models\blog\Blog;
use Session;
use App\models\website\Partner;
use App\models\blog\BlogCategory;
use App\models\BannerAds;
use  App\models\ReviewCus;
use App\models\website\Prize;

class HomeController extends Controller
{
    public function home()
    {
        $data['bannerAds'] = BannerAds::where('status',1)->get(['name','image','id']);
        $data['homeBlog'] = Blog::where([
            'status'=>1, 'home_status'=>1
        ])->orderBy('id','DESC')->limit(12)->get(['id','title','slug','created_at','image','description']);
        $data['partner'] = Partner::where(['status'=>1])->get(['id','image','name','link']);
        $data['prizes'] = Prize::where(['status'=>1])->get();
        $data['reviewCus'] = ReviewCus::where(['status'=>1])->get();
        $data['spnoibat'] = Product::where(['status'=>1,'discountStatus'=>1])->orderBy('id','DESC')->select('id','category','name','discount','price','images','slug','cate_slug','type_slug')
            ->paginate(12);
        return view('home',$data);
    }
}
