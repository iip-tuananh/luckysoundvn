@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$imgs = json_decode($product->images);
@endphp
{{url(''.$imgs[0])}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="shop-page-title product-page-title dark  page-title featured-title ">
   <div class="page-title-bg fill">
      <div class="title-bg fill bg-fill" data-parallax-fade="true" data-parallax="-2" data-parallax-background data-parallax-container=".page-title"></div>
      <div class="title-overlay fill"></div>
   </div>
   <div class="page-title-inner flex-row  medium-flex-wrap container">
      <div class="flex-col flex-grow medium-text-center">
         <div class="is-small">
            <nav class="woocommerce-breadcrumb breadcrumbs "><a href="{{route('home')}}">Trang chủ</a> <span class="divider">&#47;</span> <a href="{{route('allProduct')}}">Cửa hàng</a> <span class="divider">&#47;</span> <a href="{{route('allListProCate', ['danhmuc'=>$product->cate_slug])}}">{{languageName($product->cate->name)}}</a> <span class="divider">&#47;</span> <a href="">{{languageName($product->name)}}</a></nav>
         </div>
      </div>
      <div class="flex-col nav-right medium-text-center">
      </div>
   </div>
</div>
<main id="main" class="">
   <div class="shop-container">
      <div class="container">
         <div class="woocommerce-notices-wrapper"></div>
      </div>
      <div id="product-173" class="post-ftoc product type-product post-173 status-publish first instock product_cat-camera-hanh-trinh has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
         <div class="product-container">
            <div class="product-main">
               <div class="row content-row mb-0">
                  <div class="product-gallery large-6 col">
                     <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
                        @if (($product->discount)>0)
                           <div class="badge-container is-larger absolute left top z-1">
                              <div class="callout badge badge-circle">
                                 <div class="badge-inner secondary on-sale"><span class="onsale">-{{$product->discount}}%</span></div>
                              </div>
                           </div>
                        @endif
                        <figure class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half"
                           data-flickity-options='{
                           "cellAlign": "center",
                           "wrapAround": true,
                           "autoPlay": false,
                           "prevNextButtons":true,
                           "adaptiveHeight": true,
                           "imagesLoaded": true,
                           "lazyLoad": 1,
                           "dragThreshold" : 15,
                           "pageDots": false,
                           "rightToLeft": false       }'>
                           @foreach ($imgs as $img)
                           <div data-thumb="{{$img}}" class="woocommerce-product-gallery__image slide first">
                              <a href="{{$img}}"><img width="600" height="600" src="{{$img}}" class="wp-post-image skip-lazy" alt="{{$product->sku}}" loading="lazy" title="{{languageName($product->name)}}" data-caption="" data-src="{{$img}}" data-large_image="{{$img}}" data-large_image_width="600" data-large_image_height="600" srcset="{{$img}} 600w, {{$img}} 400w, {{$img}} 300w, {{$img}} 100w" sizes="(max-width: 600px) 100vw, 600px" /></a>
                           </div>
                           @endforeach
                        </figure>
                     </div>
                     <div class="product-thumbnails thumbnails slider-no-arrows slider row row-small row-slider slider-nav-small small-columns-4"
                        data-flickity-options='{
                        "cellAlign": "left",
                        "wrapAround": false,
                        "autoPlay": false,
                        "prevNextButtons": true,
                        "asNavFor": ".product-gallery-slider",
                        "percentPosition": true,
                        "imagesLoaded": true,
                        "pageDots": false,
                        "rightToLeft": false,
                        "contain": true
                        }'>
                        @foreach ($imgs as $img)
                           <div class="col">
                              <a>
                              <img src="{{$img}}" alt="{{$product->sku}}" width="300" height="300" class="attachment-woocommerce_thumbnail" />				</a>
                           </div>
                        @endforeach
                     </div>
                  </div>
                  <div class="product-info summary col col-fit entry-summary product-summary">
                     <h1 class="product-title product_title entry-title">
                        {{languageName($product->name)}}
                     </h1>
                     <div class="is-divider small"></div>
                     SKU: {{$product->sku}}
                     <div class="price-wrapper">
                        @php
                           $discountPrice = $product->price - $product->price * ($product->discount / 100);
                        @endphp
                        @if ($product->discount > 0)
                           <p class="price product-page-price price-on-sale">
                              <del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi>{{number_format($product->price)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi>{{number_format($discountPrice)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins>
                           </p>
                        @else
                           <p class="price product-page-price price-on-sale"><ins><span class="woocommerce-Price-amount amount"><bdi>{{number_format($product->price)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins>
                           </p>
                        @endif
                     </div>
                     <div class="product-short-description">
                        <p>{!! languageName($product->description) !!}</p>
                     </div>
                     <form class="cart" action="https://cameraquansat.net.vn/san-pham/webvision-s8-camera-hanh-trinh-2k-adas-canh-bao-toc-do/" method="post" enctype='multipart/form-data'>
                        <div class="sticky-add-to-cart-wrapper">
                           <div class="sticky-add-to-cart">
                              <div class="sticky-add-to-cart__product">
                                 <img src="{{$imgs[0]}}" alt="{{languageName($product->name)}}" class="sticky-add-to-cart-img" />
                                 <div class="product-title-small hide-for-small"><strong>{{languageName($product->name)}}</strong></div>
                                 <div class="price-wrapper">
                                    @if ($product->discount > 0)
                                       <p class="price product-page-price price-on-sale">
                                          <del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi>{{number_format($product->price)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi>{{number_format($discountPrice)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins>
                                       </p>
                                    @else
                                       <p class="price product-page-price price-on-sale">
                                          <ins><span class="woocommerce-Price-amount amount"><bdi>{{number_format($product->price)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins>
                                       </p>
                                    @endif
                                 </div>
                              </div>
                              <div class="quantity buttons_added">
                                 <input type="button" value="-" class="minus button is-form">				<label class="screen-reader-text" for="quantity_62a08a1011ba6">WEBVISION S8  Camera hành trình 2K ADAS cảnh báo tốc độ số lượng</label>
                                 <input
                                    type="number"
                                    id="quantity_62a08a1011ba6"
                                    class="input-text qty text"
                                    step="1"
                                    min="1"
                                    max=""
                                    name="quantity"
                                    value="1"
                                    title="SL"
                                    size="4"
                                    placeholder=""
                                    inputmode="numeric" />
                                 <input type="button" value="+" class="plus button is-form">	
                              </div>
                              <a class="single_add_to_cart_button button alt add-to-cart" data-url="{{route('addToCart', ['id'=>$product->id])}}">Thêm vào giỏ hàng</a>
                           </div>
                        </div>
                     </form>
                     <div
                        class="yith-wcwl-add-to-wishlist add-to-wishlist-173  wishlist-fragment on-first-load"
                        data-fragment-ref="173"
                        data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:173,&quot;parent_product_id&quot;:173,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}"
                        >
                        <!-- ADD TO WISHLIST -->
                        <div class="yith-wcwl-add-button">
                           <a
                              href="?add_to_wishlist=173&#038;_wpnonce=9cfe678538"
                              class="add_to_wishlist single_add_to_wishlist"
                              data-product-id="173"
                              data-product-type="simple"
                              data-original-product-id="173"
                              data-title="Add to wishlist"
                              rel="nofollow"
                              >
                           <i class="yith-wcwl-icon fa fa-heart-o"></i>		<span>Add to wishlist</span>
                           </a>
                        </div>
                        <!-- COUNT TEXT -->
                     </div>
                     <div class="social-icons share-icons share-row relative" ><a href="{{$setting->facebook}}" data-action="share/whatsapp/share" class="icon button circle is-outline tooltip whatsapp show-for-medium" title="Share on WhatsApp" aria-label="Share on WhatsApp"><i class="icon-whatsapp"></i></a><a href="{{$setting->facebook}}" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip facebook" title="Share on Facebook" aria-label="Share on Facebook"><i class="icon-facebook" ></i></a><a href="" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip twitter" title="Share on Twitter" aria-label="Share on Twitter"><i class="icon-twitter" ></i></a><a href="mailto:{{$setting->email}}" rel="nofollow" class="icon button circle is-outline tooltip email" title="Email to a Friend" aria-label="Email to a Friend"><i class="icon-envelop" ></i></a><a href="" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip pinterest" title="Pin on Pinterest" aria-label="Pin on Pinterest"><i class="icon-pinterest" ></i></a><a href="" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"  rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip linkedin" title="Share on LinkedIn" aria-label="Share on LinkedIn"><i class="icon-linkedin" ></i></a></div>
                  </div>
               </div>
            </div>
            <div class="product-footer">
               <div class="container">
                  <div class="woocommerce-tabs wc-tabs-wrapper container tabbed-content">
                     <ul class="tabs wc-tabs product-tabs small-nav-collapse nav nav-uppercase nav-line nav-left" role="tablist">
                        <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
                           <a href="#tab-description">
                           Thông tin chi tiết					</a>
                        </li>
                     </ul>
                     <div class="tab-panels">
                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content active" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                           <div id="ftwp-postcontent">
                              {!! languageName($product->content) !!}
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="related related-products-wrapper product-section">
                     <h3 class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">
                        Sản phẩm tương tự			
                     </h3>
                     <div class="row has-equal-box-heights equalize-box large-columns-4 medium-columns-3 small-columns-2 row-small">
                        @foreach ($productlq as $pro)
                        @if ($product->id != $pro->id)
                        @include('layouts.product.item', ['product'=>$pro])
                        {{-- <div class="product-small col has-hover post-ftoc product type-product post-170 status-publish instock product_cat-camera-hanh-trinh has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                           <div class="col-inner">
                              @if ($pro->discount > 0)
                                 <div class="badge-container absolute left top z-1">
                                    <div class="callout badge badge-circle">
                                       <div class="badge-inner secondary on-sale"><span class="onsale">-{{$pro->discount}}%</span></div>
                                    </div>
                                 </div>
                              @endif
                              <div class="product-small box ">
                                 <div class="box-image">
                                    @php
                                       $img = json_decode($product->images);
                                       $disPrice =  $pro->price - $pro->price * ($pro->discount / 100);
                                    @endphp
                                    <div class="image-fade_in_back">
                                       <a href="{{$img[0]}}" aria-label="{{languageName($product->name)}}">
                                       <img width="283" height="283" src="{{$img[0]}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="{{$img[0]}} 283w, {{$img[0]}} 150w, {{$img[0]}} 100w" sizes="(max-width: 283px) 100vw, 283px" /><img width="283" height="283" src="{{$img[1]}}" class="show-on-hover absolute fill hide-for-small back-image" alt="{{languageName($product->name)}}" loading="lazy" srcset="{{$img[1]}} 283w, {{$img[1]}}" class="show-on-hover absolute fill hide-for-small  150w, {{$img[1]}}" class="show-on-hover absolute fill hide-for-small  100w" sizes="(max-width: 283px) 100vw, 283px" />				</a>
                                    </div>
                                    <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                    </div>
                                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                       <a class="quick-view add-to-cart" data-url="{{route('addToCart', ['id'=>$product->id])}}" href="#quick-view">Mua ngay</a>			
                                    </div>
                                 </div>
                                 <div class="box-text box-text-products">
                                    <div class="title-wrapper">
                                       <p class="name product-title woocommerce-loop-product__title"><a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'type'=>$product->type_slug, 'slug'=>$product->slug])}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">{{languageName($product->name)}}</a></p>
                                    </div>
                                    <div class="price-wrapper">
                                       @if($product->discount > 0)
                                       <span class="price"><del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi>{{number_format($product->price)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi>{{number_format($disPrice)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                       @else
                                       <span class="price"> <ins><span class="woocommerce-Price-amount amount"><bdi>{{number_format($product->price)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                       @endif
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div> --}}
                        @endif
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- shop container -->
</main>
@endsection