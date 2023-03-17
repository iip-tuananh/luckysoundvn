@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
@if (session()->has("success"))
   <script>
      $.notify("Đặt hàng thành công!", "success");
   </script>
@endif
<main id="main" class="">
   <div id="content" role="main" class="content-area">
      <section class="section" id="section_1578259892">
      <div class="bg section-bg fill bg-fill bg-loaded bg-loaded" >
      </div>
      <div class="section-content relative">
         <div class="row"  id="row-1794980482">
            <div id="col-1921135696" class="col cot-danh-muc medium-3 small-12 large-3 hidden-sm hidden-xs">
               <div class="col-inner">
               </div>
            </div>
            <div class="col-5 medium-9 small-12 large-9">
               <div class="row" style="margin: 0;">
                  <div id="col-2074296734" class="col-5 medium-8 small-12 large-8"  >
                     <div class="col-inner">
                        <div class="slider-wrapper relative" id="slider-421771181" >
                           <div class="slider slider-nav-circle slider-nav-large slider-nav-dark slider-style-normal"
                                 data-flickity-options='{
                                 "cellAlign": "center",
                                 "imagesLoaded": true,
                                 "lazyLoad": 1,
                                 "freeScroll": false,
                                 "wrapAround": true,
                                 "autoPlay": 6000,
                                 "pauseAutoPlayOnHover" : true,
                                 "prevNextButtons": true,
                                 "contain" : true,
                                 "adaptiveHeight" : true,
                                 "dragThreshold" : 10,
                                 "percentPosition": true,
                                 "pageDots": true,
                                 "rightToLeft": false,
                                 "draggable": true,
                                 "selectedAttraction": 0.1,
                                 "parallax" : 0,
                                 "friction": 0.6        }'
                                 >
                                 @foreach ($banners as $banner)
                                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_560025793">
                                       <div class="img-inner dark" >
                                          <a href="{{$banner->link}}">
                                             <img width="1020" height="430" src="{{$banner->image}}" class="attachment-large size-large" alt="" loading="lazy" srcset="{{$banner->image}} 1024w, {{$banner->image}} 600w, {{$banner->image}} 768w, {{$banner->image}} 1536w" sizes="(max-width: 1020px) 100vw, 1020px" style="border-radius: 10px;"/>						
                                          </a>
                                       </div>
                                       <style>
                                       #image_560025793 {
                                       width: 100%;
                                       }
                                       </style>
                                    </div>
                                 @endforeach
                           </div>
                           <div class="loading-spin dark large centered"></div>
                        </div>
                     </div>
                  </div>
                  <div class="c-box-news col right medium-4 small-12 large-4 hidden-xs hidden-sm scroll-right">
                     @if (isset($cateBlogHome))
                        <div class="c-box-title">
                           <a href="{{ route('listCateBlog', ['slug'=>$cateBlogHome->slug]) }}">
                              <h3>
                                 {{languageName($cateBlogHome->name)}}
                              </h3>
                           </a>
                        </div>
                        @foreach ($cateBlogHome->listBlog as $blog)
                           <div class="col-inner">
                              <div class="item-read">
                                 <div class="avarta">
                                       <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}">
                                          <img src="{{$blog->image}}" loading="lazy"/>
                                       </a>
                                 </div>
                                 <div class="info">
                                    <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}">
                                       {{languageName($blog->title)}} 
                                    </a>
                                 </div>
                              </div>  
                           </div>
                        @endforeach
                        <div class="col-inner">
                           <img src="{{$cateBlogHome->avatar}}" alt="{{languageName($cateBlogHome->name)}}" loading="lazy">
                        </div>
                     @endif
                  </div>
               </div>
               <div class="row box-criteria large-columns-4 medium-columns-3 small-columns-2 row-small" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 10, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                  <div class="col">
                     <div style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius:8px;" >
                        <img src="{{url('frontend/images/vanchuyen.png')}}" alt="" loading="lazy">
                        <span><strong>Miễn phí vận chuyển</strong><br>bán kính 20km</span> 
                     </div>
                  </div>
                  <div class="col">
                     <div style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius:8px;" >
                        <img src="{{url('frontend/images/thanhtoan.png')}}" alt="" loading="lazy">
                        <span><strong>Thanh toán đa dạng</strong><br>tiền mặt thẻ tín dụng....</span>
                     </div>
                  </div>
                  <div class="col">
                     <div style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius:8px;" >
                        <img src="{{url('frontend/images/doitra.png')}}" alt="" loading="lazy">
                        <span><strong>Đổi trả hàng nếu</strong><br>lỗi sản xuất hoặc vận chuyển</span>
                     </div>
                  </div>
                  <div class="col">
                     <div style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius:8px;" >
                        <img src="{{url('frontend/images/baohanh.png')}}" alt="" loading="lazy">
                        <span><strong>Bảo hành chính hãng</strong><br>nguồn góc sản phẩm rõ ràng</span>
                     </div>
                  </div>
                  <div class="col">
                     <div style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius:8px;" >
                        <img src="{{url('frontend/images/tuvan.png')}}" alt="" loading="lazy">
                        <span><strong>Tư vấn miễn phí</strong><br>mọi lúc mọi nơi</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <style>
         #section_1578259892 {
         padding-top: 0px;
         padding-bottom: 0px;
         }
         #col-2074296734 {
            padding-left: 0;
         }
      </style>
      </section>
      <section class="section" id="section_1207011348">
      <div class="bg section-bg fill bg-fill bg-loaded bg-loaded" >
      </div>
      <div class="section-content relative">
         <div class="container">
            <div class="row"  id="row-998500072">
                  <div id="col-187624757" class="col small-12 large-12"  >
                     <div class="col-inner"  >
                     <div class="slider-wrapper relative" id="slider-41975906" >
                        <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal large-columns-5 medium-columns-3 small-columns-2 row-small row"
                              data-flickity-options='{
                              "cellAlign": "center",
                              "imagesLoaded": true,
                              "lazyLoad": 1,
                              "freeScroll": false,
                              "wrapAround": true,
                              "autoPlay": 6000,
                              "pauseAutoPlayOnHover" : true,
                              "prevNextButtons": true,
                              "contain" : true,
                              "adaptiveHeight" : true,
                              "dragThreshold" : 10,
                              "percentPosition": true,
                              "pageDots": false,
                              "rightToLeft": false,
                              "draggable": true,
                              "selectedAttraction": 0.1,
                              "parallax" : 0,
                              "friction": 0.6        }'
                              >
                              @foreach ($comboPro as $prize)
                                 <div class="col"><a class="ux-logo-link block" title="{{$prize->name}}" target="{{isset($prize->link) ? '_blank' : ''}}"  href="{{isset($prize->link) ? $prize->link : route('allProductCombo', ['slug'=>$prize->slug])}}" style="padding: 10px;"><img src="{{$prize->image}}" title="{{$prize->name}}" alt="{{$prize->name}}" class="ux-logo-image block" style="height:150px; width: 100%;border-radius: 12px;" /></a></div>
                              @endforeach
                        </div>
                        <div class="loading-spin dark large centered"></div>
                     </div>
                     </div>
                  </div>
            </div>
         </div>
      </div>
      </section>
      <section class="section" id="section_600730800">
      <div class="bg section-bg fill bg-fill bg-loaded bg-loaded" >
      </div>
      <div class="section-content relative">
         <div class="row align-center tab-col"  id="row-1436329602">
               <div id="col-2075555273" class="col tab-home small-12 large-12"  >
                  <div class="col-inner"  >
                  <div class="tabbed-content">
                     <ul class="nav nav-line nav-uppercase nav-size-large nav-center">
                        <a href="{{$bannerCateHot->link}}" style="width: 100%;">
                           <img src="{{$bannerCateHot->image}}" alt="" loading="lazy">
                        </a>
                     </ul>
                     <div class="tab-panels">
                           <div class="panel active entry-content">
                              <div class="row  equalize-box large-columns-5 medium-columns-3 small-columns-2 row-small has-shadow row-box-shadow-1 row-box-shadow-1-hover slider row-slider slider-nav-reveal slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}' style="    padding-left: 10px;
                              padding-right: 10px;">
                                 @foreach ($spnoibat as $product)
                                    @include('layouts.product.item', ['product'=>$product])
                                 @endforeach
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <style>
                  #row-1436329602 > .col > .col-inner {
                     border: 2px solid red;
                     border-radius: 20px;
                  }
                  #row-1436329602 .nav-line img {
                     width: 100%;
                  }

                  #row-1436329602 {
                     margin-bottom: 30px;
                  }
               </style>
         </div>
      </div>
      <style>
         #section_600730800 {
         padding-top: 0px;
         padding-bottom: 0px;
         }
      </style>
      </section>
      @foreach ($homeProductCategory as $category)
      @if (count($category->products) > 0)
      <section class="section" id="section_1270000722">
         <div class="bg section-bg fill bg-fill bg-loaded bg-loaded" >
         </div>
         <div class="section-content relative">
            <div class="row row-collapse align-center collap row-box-shadow-1-hover"  id="row-1971584420">
                  <div id="col-1268263548" class="col small-12 large-12"  >
                     <div class="col-inner"  >
                     <div class="row row-collapse danh-muc"  id="row-1590164106">
                        <div id="col-1872322101" class="col title-muc medium-5 small-12 large-5"  >
                              <div class="col-inner"  >
                                 <a class="button white is-link expand" href="{{$category->link}}">
                                    <i class="icon-star"></i>
                                    <span>{{ $category->name }}</span>
                                 </a>
                              </div>
                        </div>
                        <div id="col-2001838655" class="col danh-muc2 hide-for-medium medium-5 small-12 large-5"  >
                              <div class="col-inner text-right"  >
                              </div>
                              <style>
                                 #col-2001838655 > .col-inner {
                                 padding: 0px 10px 0px 0px;
                                 }
                                 #col-1872322101 a i {
                                    color: #f69320;
                                 }
                                 #col-1872322101 a {
                                    text-align: start;
                                    padding-left: 12px !important;
                                 }
                              </style>
                        </div>
                     </div>
                     </div>
                  </div>
            </div>
            <div class="row"  id="row-1515724829">
                  <div id="col-1515461008" class="col small-12 large-12"  >
                     <div class="col-inner"  >
                        <div id="button-custom" class="row equalize-box large-columns-5 medium-columns-3 small-columns-2 row-small has-shadow row-box-shadow-1 row-box-shadow-1-hover slider row-slider slider-nav-reveal slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                           @foreach ($category->products as $pro)
                              @include('layouts.product.item', ['product'=>$pro])
                           @endforeach
                        </div>
                     </div>
                  </div>
            </div>
         </div>
      </section>
      @endif
      @endforeach
      <section class="section" id="section_1559591121">
         <div class="bg section-bg fill bg-fill bg-loaded bg-loaded" >
         </div>
         <div class="section-content relative">
            <div class="row row-small"  id="row-1817293126">
               @foreach ($bannerAds as $banner)
                  <div id="col-1869792488" class="col medium-6 large-6"  >
                     <div class="col-inner"  >
                     <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1396187211">
                        <div class="img-inner dark" >
                           <a href="{{$banner->name}}">
                              <img width="1020" height="167" src="{{$banner->image}}" class="attachment-large size-large" alt="" loading="lazy" srcset="{{$banner->image}} 1024w, {{$banner->image}} 600w, {{$banner->image}} 768w" sizes="(max-width: 1020px) 100vw, 1020px" style="border-radius: 12px;"/>						
                           </a>
                        </div>
                     </div>
                     </div>
                  </div>
               @endforeach
               <style>
                  #image_1396187211 {
                  width: 100%;
                  }
               </style>
            </div>
         </div>
         <style>
            #section_1559591121 {
            padding-top: 30px;
            padding-bottom: 30px;
            }
         </style>
      </section>
      <section class="section tin-tuc" id="section_1735086214">
         <div class="bg section-bg fill bg-fill bg-loaded bg-loaded" >
         </div>
         <div class="section-content relative">
            <div class="row row-collapse align-center collap row-box-shadow-1-hover"  id="row-896937417">
                  <div id="col-751178195" class="col small-12 large-12"  >
                     <div class="col-inner"  >
                     <div class="row row-collapse danh-muc"  id="row-351774944">
                        <div id="col-2052282861" class="col title-muc medium-3 small-12 large-3"  >
                              <div class="col-inner"  >
                                 <a href="{{route('allListBlog')}}" class="button white is-link expand"  >
                                 <span>Tin tức</span>
                                 </a>
                              </div>
                        </div>
                     </div>
                     </div>
                  </div>
            </div>
            <div class="row"  id="row-1852430172">
                  <div id="col-1594646173" class="col small-12 large-12"  >
                     <div class="col-inner"  >
                     <div class="row large-columns-4 medium-columns-1 small-columns-1 row-small row-full-width slider row-slider slider-nav-simple slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                        @foreach ($homeBlog as $new)
                           <div class="col post-item" >
                                 <div class="col-inner">
                                    <a href="{{route('detailBlog', ['slug'=>$new->slug])}}" class="plain">
                                    <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                       <div class="box-image" >
                                             <div class="image-overlay-add image-zoom image-cover" style="padding-top:65%;">
                                                <img width="1333" height="565" src="{{$new->image}}" class="attachment-original size-original wp-post-image" alt="Khách hàng nên đến cửa hàng lắp đặt camera quan sát để có mức giá tốt" srcset="{{$new->image}} 1333w, {{$new->image}} 600w, {{$new->image}} 1024w, {{$new->image}} 768w" sizes="(max-width: 1333px) 100vw, 1333px" />  							
                                                <div class="overlay" style="background-color: rgba(255, 253, 253, 0.26)"></div>
                                             </div>
                                       </div>
                                       <div class="box-text text-left" >
                                             <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large ">{{languageName($new->title)}}</h5>
                                                <div class="is-divider"></div>
                                                <p class="from_the_blog_excerpt ">
                                                   {{ languageName($new->description) }}
                                                </p>
                                             </div>
                                       </div>
                                    </div>
                                    </a>
                                 </div>
                           </div>
                        @endforeach
                     </div>
                     </div>
                  </div>
            </div>
         </div>
         <style>
            #section_1735086214 {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: rgb(250, 250, 250);
            }
            #section_1735086214 .from_the_blog_excerpt {
               overflow: hidden;
               text-overflow: ellipsis;
               display: -webkit-box;
               -webkit-line-clamp: 3; /* number of lines to show */ 
               -webkit-box-orient: vertical;
            }
         </style>
      </section>
   </div>
</main>
@endsection