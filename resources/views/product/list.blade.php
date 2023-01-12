@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
@endsection
@section('content')
<div class="shop-page-title category-page-title page-title featured-title dark ">
   <div class="page-title-bg fill">
      <div class="title-bg fill bg-fill" data-parallax-fade="true" data-parallax="-2" data-parallax-background data-parallax-container=".page-title"></div>
      <div class="title-overlay fill"></div>
   </div>
   <div class="page-title-inner flex-row  medium-flex-wrap container">
      <div class="flex-col flex-grow medium-text-center">
         <div class="is-small">
            <nav class="woocommerce-breadcrumb breadcrumbs "><a href="{{route('home')}}">Trang chủ</a> <span class="divider">&#47;</span> <a href="{{route('allProduct')}}">Cửa hàng</a> <span class="divider">&#47;</span> {{$title}}</nav>
         </div>
      </div>
   </div>
</div>
<main id="main" class="">
   @if (count($list) > 0)
   <div class="row category-page-row">
      <div id="menu-product-filter" data-url="{{route('filterProduct')}}">
         @if (isset($cate_id))
         <li class="hidden data-cate" data-cate="{{$cate_id}}"></li>
         @endif
         @if (isset($type_id))
         <li class="hidden data-type" data-cate="{{$type_id}}"></li>
         @endif
         @if (isset($combo_id))
         <li class="hidden data-combo" data-combo="{{$combo_id}}"></li>
         @endif
         <div class="col filter-cate pd0 filter-trademark small-12 large-12">
            <div class="col-inner">
               <style>
                  .filter-trademark .col-inner {
                     display: flex;
                     flex-wrap: wrap;
                  }
                  .filter-trademark .col-inner .img {
                     width: 100%;
                     max-width: 12.5%;
                     border: 1px solid #eee;
                     margin-bottom: 0;
                  }
                  .filter-trademark .col-inner .img-inner{
                     background: #fff;
                  }
               </style>
               @foreach ($brands as $brand)
                  <div class="img has-hover x md-x lg-x y md-y lg-y">
                     <a class="nav-top-link" href="javascript:;" data-brand="{{$brand->id}}">
                        <div class="img-inner">
                           <img width="271" height="76" src="{{$brand->image}}" class="attachment-large size-large lazyloaded" alt="{{$brand->name}}" decoding="async" data-ll-status="loaded">
                           <noscript><img width="271" height="76" src="{{$brand->image}}" class="attachment-large size-large" alt="{{$brand->name}}" decoding="async" /></noscript>
                        </div>
                     </a>
                  </div>
               @endforeach
            </div>
         </div>
         <div class="col filter-cate small-12 large-12">
            <div class="col-inner">
               <ul class="nav">
                  <li id="menu-item-187" class="title menu-item menu-item-type-custom menu-item-object-custom  menu-item-187"><a class="nav-top-link">Giá bán:</a></li>
                  <li id="menu-item-182" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-182"><a href="javascript:;" class="nav-top-link" data-filter="10trieu">Dưới 10 triệu</a></li>
                  <li id="menu-item-183" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-183"><a href="javascript:;" class="nav-top-link" data-filter="10-15">10- 15 triệu</a></li>
                  <li id="menu-item-184" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-184"><a href="javascript:;" class="nav-top-link" data-filter="15-20">15- 20 triệu</a></li>
                  <li id="menu-item-185" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-185"><a href="javascript:;" class="nav-top-link" data-filter="20-30">20 – 30 triệu</a></li>
                  <li id="menu-item-198" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-198"><a href="javascript:;" class="nav-top-link" data-filter="30-40">30 – 40 triệu</a></li>
                  <li id="menu-item-198" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-198"><a href="javascript:;" class="nav-top-link" data-filter="40">Trên 40 triệu</a></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="col large-12">
         <div class="shop-container">
            <div class="woocommerce-notices-wrapper"></div>
            <div id="product-list" class="products row row-small large-columns-5 medium-columns-3 small-columns-2 has-shadow row-box-shadow-1 row-box-shadow-1-hover has-equal-box-heights equalize-box">
               @foreach ($list as $product)
                  @include('layouts.product.item', ['product'=>$product])
               @endforeach
            </div>
            <!-- row -->
            <div id="pagenavnew">
               {{$list->links()}}
            </div>
         </div>
         <!-- shop container -->
      </div>
   </div>
   @else
   <div class="row" style="padding: 30px 15px;">
      Nội dung đang được cập nhật...
   </div>
   @endif
</main>
<style>
   .filter-cate {
      margin-bottom: 10px;
   }
   .filter-cate>.col-inner {
      background: #e4e4e4;
   }
   .filter-cate .nav {
      padding: 0 10px;
   }
   .filter-cate .nav li.title a {
      color: #ff6a00!important;
      font-weight: 600;
      min-width: 80px;
   }
   .filter-cate .nav li a {
      color: #065291;
      font-size: 14px;
      padding: 0;
      line-height: 33px;
   }
   .filter-cate .nav li a:hover {
      color: #333;
   }
</style>
<script>
   $('#menu-product-filter .nav-top-link').click(function() {
      var price = $(this).data('filter');
      var brand = $(this).data('brand');
      var url = $('#menu-product-filter').data('url');
      var cate = $('#menu-product-filter .data-cate').data('cate');
      var type = $('#menu-product-filter .data-type').data('type');
      var combo = $('#menu-product-filter .data-combo').data('combo');
      console.log(brand);
      $.ajax({
         type: 'post',
         url: url,
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data : {
            price : price,
            cate : cate,
            type : type,
            brand : brand,
            combo : combo
         },
         success :function(data) {
            $('#product-list').html(data.html);
         }
      })
   })
</script>
@endsection