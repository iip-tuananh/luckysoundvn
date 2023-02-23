@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{ strip_tags(languageName($product->description)) }}
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
               <div class="row content-row mb-0 box-shadow-ct box-pd">
                  <div class="product-gallery large-5 col">
                     <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="box-shadow: 0 0 5px #888; border-radius: 20px;">
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
                  <div class="product-info summary large-4 col col-fit entry-summary product-summary">
                     <h2 class="product-title product_title entry-title">
                        {{languageName($product->name)}}
                     </h2>
                     <div class="is-divider small"></div>
                     <div class="price-wrapper">
                        @php
                           $discountPrice = $product->price - $product->price * ($product->discount / 100);
                        @endphp
                        @if ($product->discount > 0)
                           <p class="price product-page-price price-on-sale" style="font-size: 14px;">
                              <del aria-hidden="true" style="color: gray;">Giá cũ: <span class="woocommerce-Price-amount amount" style="color: gray;"><bdi>{{number_format($product->price, 0,'','.')}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del>
                           </p>
                           <p class="price product-page-price price-on-sale">
                              <ins><span style="font-size: 16px;">Giá bán: </span><span class="woocommerce-Price-amount amount"><bdi>{{number_format($discountPrice, 0,'','.')}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins>
                           </p>
                        @else
                           <p class="price product-page-price price-on-sale"><ins><span style="font-size: 16px;">Giá bán: </span><span class="woocommerce-Price-amount amount"><bdi>{{number_format($product->price,0,'','.')}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins>
                           </p>
                        @endif
                     </div>
                     <div class="gu-flex">
                        @if (isset($product->species))
                           <div class="flw">
                           <div class="unit">
                              <span>Đơn vị tính</span>
                              {{$product->species}} </div>
                           </div>
                        @endif
                        @if (isset($product->thickness))
                           <div class="flw">
                           <div class="guarantee">
                              <span>Bảo hành</span>
                              {{$product->thickness}} </div>
                           </div>
                        @endif
                     </div>
                     <style>
                        .gu-flex {
                           display: flex;
                           flex-wrap: nowrap;
                        }
                        .gu-flex .flw:nth-child(1) {
                           border-right: none;
                        }
                        .gu-flex .flw {
                           background: #ececec;
                           border: 1px solid #dbdbdb;
                           border-bottom: none;
                           padding: 5px;
                        }
                        .gu-flex .flw .guarantee, .gu-flex .flw .unit {
                           display: flex;
                           flex-wrap: wrap;
                           justify-content: center;
                           font-size: 13px;
                           color: #0089fd;
                           text-transform: capitalize;
                        }
                        .gu-flex .flw .guarantee span, .gu-flex .flw .unit span {
                           width: 100%;
                           text-align: center;
                           color: #000;
                           text-transform: none;
                        }
                     </style>
                     @if (json_decode($product->preserve)[0]->detail != null)
                     <div class="woocommerce-product-details__short-description">
                        <h4 class="pdrr-so-head"><span style="color: #d83131; font-family: 'Arial';">* ƯU ĐÃI ĐẶC BIỆT KÈM THEO *</span></h4>
                        <div class="pdrr-so-info">
                           <ul class="pdrr-so-info-full">
                              @foreach (json_decode($product->preserve) as $item)
                              <li><i class="icon-checkmark"></i> {{$item->detail}}</li>
                              @endforeach
                           </ul>
                        </div>
                     </div>
                     @else
                     <div class="product-short-description">
                     <p>{!! languageName($product->description) !!}</p>
                     </div>
                     @endif
                     <form class="cart" enctype='multipart/form-data'>
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
                                 <input type="button" value="-" class="minus button is-form" onClick="var result = document.getElementById('quantityItem'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro &gt; 1 ) result.value--;return false;">
                                 <input
                                    type="number"
                                    id="quantityItem"
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
                                 <input type="button" value="+" class="plus button is-form" onClick="var result = document.getElementById('quantityItem'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;">	
                              </div>
                              <a class="single_add_to_cart_button button alt add-to-cart" data-url="{{route('addToCart')}}" data-id="{{$product->id}}" data-redirect="{{route('listCart')}}">Thêm vào giỏ hàng</a>
                           </div>
                        </div>
                     </form>
                     <section class="btn-mua-hang" id="section_1417514793">
                        <div class="section-content relative">
                           <a href="https://zalo.me/{{$setting->phone1}}" target="_blank" class="button primary lowercase btn-1">
                           <span>Tư vấn Zalo</span>
                           </a>
                           <a href="{{$setting->facebook}}" target="_blank" class="button primary lowercase btn-2">
                           <span>Tư vấn Facebook</span>
                           </a>
                        </div>
                     </section>
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
                  <div class="large-3 col prd-sizebar">
                     <div class="col-inner">
                        <div class="container section-title-container">
                           <h3 class="section-title section-title-normal"><b></b><span class="section-title-main">Mua hàng quá dễ dàng</span><b></b></h3>
                        </div>
                        <div class="icon-box featured-box icon-box-left text-left align-middle">
                           <div class="icon-box-img" style="width: 25px">
                              <div class="icon">
                                 <div class="icon-inner">
                                    <img width="79" height="79" src="{{url('frontend/images/icon-new-08.jpg')}}" class="attachment-medium size-medium lazyloaded" alt="" data-ll-status="loaded">
                                 </div>
                              </div>
                           </div>
                           <div class="icon-box-text last-reset" style="padding-top: 0;">
                              <h3>Trải nghiệm thực tế</h3>
                              <p>Tại phòng âm thanh của Lucky Sound</p>
                           </div>
                        </div>
                        <div class="icon-box featured-box icon-box-left text-left align-middle">
                           <div class="icon-box-img" style="width: 25px">
                              <div class="icon">
                                 <div class="icon-inner">
                                    <img width="79" height="79" src="{{url('frontend/images/icon-new-07.jpg')}}" class="attachment-medium size-medium lazyloaded" alt="" data-ll-status="loaded">
                                 </div>
                              </div>
                           </div>
                           <div class="icon-box-text last-reset" style="padding-top: 0;">
                              <h3>Giao hàng miễn phí</h3>
                              <p>Khoảng cách 10km</p>
                           </div>
                        </div>
                        <div class="icon-box featured-box icon-box-left text-left align-middle">
                           <div class="icon-box-img" style="width: 25px">
                              <div class="icon">
                                 <div class="icon-inner">
                                    <img width="79" height="79" src="{{url('frontend/images/icon-new-05.jpg')}}" class="attachment-medium size-medium lazyloaded" alt="" data-ll-status="loaded">
                                 </div>
                              </div>
                           </div>
                           <div class="icon-box-text last-reset" style="padding-top: 0;">
                              <h3>Setup miễn phí</h3>
                              <p>Chuyên gia hàng đầu tại Lucky Sound</p>
                           </div>
                        </div>
                        <div class="icon-box featured-box icon-box-left text-left align-middle">
                           <div class="icon-box-img" style="width: 25px">
                              <div class="icon">
                                 <div class="icon-inner">
                                    <img width="79" height="79" src="{{url('frontend/images/icon-new-04.jpg')}}" class="attachment-medium size-medium lazyloaded" alt="" data-ll-status="loaded">
                                 </div>
                              </div>
                           </div>
                           <div class="icon-box-text last-reset" style="padding-top: 0;">
                              <h3>Bảo hành tận nơi</h3>
                              <p>Dễ dàng và tiện lợi</p>
                           </div>
                        </div>
                        <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_678438254">
                           <div class="img-inner dark">
                              <img width="625" height="188" src="{{url('frontend/images/tra-gop-lai-suat-thap.jpg')}}" class="attachment-large size-large lazyloaded" alt="" sizes="(max-width: 625px) 100vw, 625px" srcset="{{url('frontend/images/tra-gop-lai-suat-thap.jpg')}} 625w, {{url('frontend/images/tra-gop-lai-suat-thap.jpg')}} 300w, {{url('frontend/images/tra-gop-lai-suat-thap.jpg')}} 600w" data-ll-status="loaded">
                           </div>
                           <style scope="scope">
                              #image_678438254 {
                              width: 100%;
                              }
                              .prd-sizebar .section-title span {
                                 padding: 0;
                                 margin: 0;
                                 font-size: 20px;
                                 font-weight: 600;
                                 color: #d10216;
                                 text-transform: none;
                              }
                              .prd-sizebar .section-title {
                                 border-bottom: none;
                              }
                              .prd-sizebar .icon-box {
                                 border: 1px solid #ddd;
                                 border-bottom: none;
                                 padding: 5px;
                              }
                              .prd-sizebar .icon-box .icon-box-text {
                                 padding-left: 10px;
                              }
                              .prd-sizebar .icon-box .icon-box-text h3 {
                                 font-size: 14px;
                                 text-transform: uppercase;
                                 margin: 0;
                                 font-weight: 600;
                                 color: #000;
                              }
                              .prd-sizebar .icon-box .icon-box-text p {
                                 margin: 0;
                                 font-size: 14px;
                                 color: #333;
                              }
                              .woocommerce-product-details__short-description {
                                 padding: 10px;
                                 margin-bottom: 15px;
                                 border: 1px solid #e3e3e3;
                              }
                              .woocommerce-product-details__short-description ul li{
                                 list-style-type: none;
                                 margin-left: 0;
                              }
                              .woocommerce-product-details__short-description ul li i{
                                 color: #d20d14;
                              }
                              .btn-mua-hang {
                                 padding: 0;
                                 margin: 20px 0;
                              }
                              .btn-mua-hang .section-content {
                                 display: flex;
                                 flex-wrap: wrap;
                                 justify-content: space-between;
                              }
                              .btn-mua-hang .section-content a.button {
                                 margin-bottom: 0;
                                 line-height: 35px;
                                 padding: 0;
                                 min-height: auto;
                                 width: 48%;
                                 margin: 0;
                              }
                              .btn-mua-hang .section-content a.button.btn-1 {
                                 background: #1297F6;
                              }
                              .btn-mua-hang .section-content a.button span {
                                 font-size: 14px;
                                 font-weight: 500;
                                 display: inline-block;
                                 line-height: 1.6;
                              }
                              .btn-mua-hang .section-content a.button.btn-2 {
                                 background: #0279F7;
                                 margin-right: 0;
                              }
                           </style>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="product-footer ">
               <div class="container box-shadow-ct box-pd mg-bt">
                  <div class="woocommerce-tabs wc-tabs-wrapper container tabbed-content">
                     <ul class="tabs wc-tabs product-tabs small-nav-collapse nav nav-uppercase nav-line nav-left" role="tablist">
                        <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
                           <a href="#tab-description">
                           Mô tả chi tiết					</a>
                        </li>
                        <li class="description_tab" id="tab-title-tskt" role="tab" aria-controls="tab-tskt">
                           <a href="#tab-tskt">
                           Thông số kĩ thuật					</a>
                        </li>
                     </ul>
                     <div class="tab-panels">
                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content active" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                           <div id="ftwp-postcontent">
                              {!! languageName($product->content) !!}
                           </div>
                        </div>
                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content" id="tab-tskt" role="tabpanel" aria-labelledby="tab-title-tskt">
                           <div id="ftwp-postcontent">
                              @if (json_decode($product->size)[0]->detail != null)
                              <table cellspacing="0" cellpadding="0">
                                 <tbody>
                                    @foreach (json_decode($product->size) as $item)
                                    <tr>
                                       <td><span>{{$item->title}}</span></td>
                                       <td><span>{{$item->detail}}</span></td>
                                    </tr>
                                    @endforeach
                                 </tbody>
                              </table>
                              @else
                                 <p>Nội dung đang được cập nhật ...</p>
                              @endif
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="related related-products-wrapper product-section ">
                     <h3 class="product-section-title container-width product-section-title-related pt-half pb-half uppercase" style="margin-left:0;">
                        Sản phẩm tương tự			
                     </h3>
                     <div class="row has-equal-box-heights equalize-box large-columns-4 medium-columns-3 small-columns-2 row-small">
                        @foreach ($productlq as $pro)
                        @if ($product->id != $pro->id)
                        @include('layouts.product.item', ['product'=>$pro])
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