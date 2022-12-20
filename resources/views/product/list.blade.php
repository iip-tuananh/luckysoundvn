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
   <div class="row category-page-row">
      <div class="col large-12">
         <div class="shop-container">
            <div class="woocommerce-notices-wrapper"></div>
            <div class="products row row-small large-columns-5 medium-columns-3 small-columns-2 has-shadow row-box-shadow-1 row-box-shadow-1-hover has-equal-box-heights equalize-box">
               @foreach ($list as $product)
                  @include('layouts.product.item', ['product'=>$product])
               @endforeach
            </div>
            <!-- row -->
            {{$list->links()}}
         </div>
         <!-- shop container -->
      </div>
      {{-- <div class="large-3 col hide-for-medium ">
         <div id="shop-sidebar" class="sidebar-inner">
            <aside id="nav_menu-4" class="widget widget_nav_menu">
               <span class="widget-title shop-sidebar">Danh mục sản phẩm</span>
               <div class="is-divider small"></div>
               <div class="menu-danh-muc-san-pham-container">
                  <ul id="menu-danh-muc-san-pham" class="menu">
                     @foreach ($categoryhome as $category)
                     @if (isset($category->typeCate))
                        <li id="menu-item-11927" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat current-menu-ancestor current-menu-parent menu-item-has-children menu-item-11927">
                           <a href="{{ route('allListProCate', ['danhmuc'=>$category->slug]) }}">{{ languageName($category->name) }}</a>
                           <ul class="sub-menu">
                              @foreach ($category->typeCate as $type)
                              @if (isset($type->typeTwoCate))
                                 <li id="menu-item-11928" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-11928">
                                    <a href="{{ route('allListProType', ['danhmuc'=>$type->cate_slug, 'loaidanhmuc'=>$type->slug]) }}">{{ languageName($type->name) }}</a>
                                    <ul class="sub-menu">
                                       @foreach ($type->typeTwoCate as $typeTwo)
                                          <li id="menu-item-11929" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11929"><a href="{{ route('allListTypeTwo', ['danhmuc'=>$typeTwo->cate_slug, 'loaidanhmuc'=>$typeTwo->type_slug, 'thuonghieu'=>$typeTwo->slug]) }}">{{ languageName($typeTwo->name) }}</a></li>
                                       @endforeach
                                    </ul>
                                 </li>
                              @else
                                 <li id="menu-item-11926" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat current-menu-item menu-item-11926"><a href="{{ route('allListProType', ['danhmuc'=>$type->cate_slug, 'loaidanhmuc'=>$type->slug]) }}" aria-current="page">{{ languageName($type->name) }}</a></li>
                              @endif
                              @endforeach
                           </ul>
                        </li>
                     @else
                        <li id="menu-item-11995" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11995"><a href="{{ route('allListProCate', ['danhmuc'=>$category->slug]) }}">{{ languageName($category->name) }}</a></li>
                     @endif
                     @endforeach
                  </ul>
               </div>
            </aside>
         </div>
      </div> --}}
   </div>
</main>
@endsection