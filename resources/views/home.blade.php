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
<script>
   if (session()->has('success')){
      $.notify("Đặt hàng thành công!", "success");
   }
</script>
<main id="main" class="">
   <div id="content" role="main" class="content-area">
      <section class="section" id="section_1578259892">
      <div class="bg section-bg fill bg-fill bg-loaded bg-loaded" >
      </div>
      <div class="section-content relative">
         <div class="row"  id="row-1794980482">
            <div id="col-1921135696" class="col cot-danh-muc medium-3 small-12 large-3">
               <div class="col-inner">
               </div>
            </div>
            <div id="col-2074296734" class="col medium-9 small-12 large-9"  >
               <div class="col-inner"  >
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
                              <img width="1020" height="430" src="{{$banner->image}}" class="attachment-large size-large" alt="" loading="lazy" srcset="{{$banner->image}} 1024w, {{$banner->image}} 600w, {{$banner->image}} 768w, {{$banner->image}} 1536w" sizes="(max-width: 1020px) 100vw, 1020px" />						
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
                        <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal"
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
                              @foreach ($prizes as $prize)
                                 <div class="ux-logo has-hover align-middle ux_logo inline-block" style="max-width: 100%!important; width: 255px!important"><a class="ux-logo-link block image-" title="{{$prize->name}}"  href="{{$prize->link}}" style="padding: 10px;"><img src="{{$prize->image}}" title="{{$prize->name}}" alt="{{$prize->name}}" class="ux-logo-image block" style="height:150px; width: 100%;" /></a></div>
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
                           {{-- <li class="tab has-icon"><a><span>Sản phẩm nổi bật</span></a></li> --}}
                           <img src="{{url('frontend/images/san-pham-hot.jpg')}}" alt="" loading="lazy">
                     </ul>
                     <div class="tab-panels">
                           <div class="panel active entry-content">
                              <div class="row  equalize-box large-columns-5 medium-columns-3 small-columns-2 row-small has-shadow row-box-shadow-1 row-box-shadow-1-hover slider row-slider slider-nav-reveal slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
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
                  }
                  #row-1436329602 .nav-line img {
                     width: 100%;
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
      @foreach ($categoryhome as $category)
      @if (count($category->product) > 0)
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
                                 <a class="button white is-link expand"  >
                                    <i class="icon-star"></i>
                                    <span>Top 10 {{ languageName($category->name) }} chất lượng nhất</span>
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
                                    padding-left: 20px !important;
                                 }
                              </style>
                        </div>
                        <div id="col-1468115842" class="col danh-muc2 medium-2 small-12 large-2"  >
                              <div class="col-inner"  >
                                 <a href="{{ route('allListProCate' , ['danhmuc'=>$category->slug])}}" target="_self" class="button secondary is-link is-small"  >
                                 <span>Xem tất cả</span>
                                 </a>
                              </div>
                              <style>
                                 #col-1468115842 > .col-inner {
                                 padding: 0px;
                                 text-align: center;
                                 }
                                 #col-1468115842 > .col-inner {
                                    background-color: #105caa;
                                 }
                                 #col-1468115842 > .col-inner a{
                                    color: #ffff;
                                    padding: 3px 0;
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
                     <div class="row  equalize-box large-columns-5 medium-columns-3 small-columns-2 row-small row-full-width has-shadow row-box-shadow-1 row-box-shadow-2-hover">
                        @foreach ($category->product as $pro)
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
      <style>
         #section_1270000722 {
         padding-top: 30px;
         padding-bottom: 30px;
         }
      </style>
      <section class="section" id="section_1844193705">
         <div class="bg section-bg fill bg-fill bg-loaded bg-loaded" >
         </div>
         <div class="section-content relative">
            <div class="row row-collapse align-center collap row-box-shadow-1-hover"  id="row-1661227582">
                  <div id="col-79221586" class="col small-12 large-12"  >
                     <div class="col-inner"  >
                     <div class="row row-collapse danh-muc"  id="row-1866843838">
                        <div id="col-139644686" class="col title-muc medium-4 small-12 large-4"  >
                        </div>
                        <div id="col-139644686" class="col title-muc medium-4 small-12 large-4"  >
                              <div class="col-inner"  >
                                 <a href="#" target="_self" class="button white is-link expand"  >
                                 <span>Thương hiệu nổi bật</span>
                                 </a>
                              </div>
                        </div>
                        <div id="col-139644686" class="col title-muc medium-4 small-12 large-4"  >
                        </div>
                     </div>
                     </div>
                  </div>
            </div>
            <div class="row"  id="row-1833886763">
                  <div id="col-1398563553" class="col small-12 large-12"  >
                     <div class="col-inner"  >
                     <div class="slider-wrapper relative" id="slider-1283013339" >
                        <div class="slider slider-nav-simple slider-nav-large slider-nav-light slider-nav-outside slider-style-normal slider-show-nav"
                              data-flickity-options='{
                              "cellAlign": "center",
                              "imagesLoaded": true,
                              "lazyLoad": 1,
                              "freeScroll": true,
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
                              @foreach ($partner as $item)
                                 <div class="ux-logo has-hover align-middle ux_logo inline-block" style="max-width: 100%!important; width: 230px!important">
                                    <div class="ux-logo-link block image-grayscale" title=""  href="" style="padding: 15px;"><img src="{{$item->image}}" title="" alt="" class="ux-logo-image block" style="height:53px;" /></div>
                                 </div>
                              @endforeach
                        </div>
                        <div class="loading-spin dark large centered"></div>
                     </div>
                     </div>
                  </div>
            </div>
         </div>
         <style>
            #section_1844193705 {
            padding-top: 0px;
            padding-bottom: 0px;
            }
         </style>
      </section>
      <div class="row row-small row-tieu-chi"  id="row-895057886">
         <div id="col-925053052" class="col medium-3 small-6 large-3"  >
            <div class="col-inner"  >
                  <div class="icon-box featured-box icon-box-left text-center"  >
                     <div class="icon-box-img" style="width: 40px">
                     <div class="icon">
                        <div class="icon-inner" >
                              <img width="41" height="41" src="{{ asset('frontend/images/icon-02.jpg') }}" class="attachment-medium size-medium" alt="camera quan sát" loading="lazy" />					
                        </div>
                     </div>
                     </div>
                     <div class="icon-box-text last-reset">
                     <p>Sản phẩm chất lượng<br />
                        thương hiệu uy tín
                     </p>
                     </div>
                  </div>
            </div>
         </div>
         <div id="col-625984921" class="col medium-3 small-6 large-3"  >
            <div class="col-inner"  >
                  <div class="icon-box featured-box icon-box-left text-left"  >
                     <div class="icon-box-img" style="width: 40px">
                     <div class="icon">
                        <div class="icon-inner" >
                              <img width="41" height="41" src="{{ asset('frontend/images/icon-03.jpg') }}" class="attachment-medium size-medium" alt="camera quan sát" loading="lazy" />					
                        </div>
                     </div>
                     </div>
                     <div class="icon-box-text last-reset">
                     <p>Tư vấn chính xác<br />
                        tác phong chuyên nghiệp
                     </p>
                     </div>
                  </div>
            </div>
         </div>
         <div id="col-896492950" class="col medium-3 small-6 large-3"  >
            <div class="col-inner"  >
                  <div class="icon-box featured-box icon-box-left text-left"  >
                     <div class="icon-box-img" style="width: 40px">
                     <div class="icon">
                        <div class="icon-inner" >
                              <img width="41" height="41" src="{{ asset('frontend/images/icon-04.jpg') }}" class="attachment-medium size-medium" alt="camera quan sát" loading="lazy" />					
                        </div>
                     </div>
                     </div>
                     <div class="icon-box-text last-reset">
                     <p>Giá thành tốt nhất<br />
                        Bảo hành uy tín
                     </p>
                     </div>
                  </div>
            </div>
         </div>
         <div id="col-1317098754" class="col medium-3 small-6 large-3"  >
            <div class="col-inner"  >
                  <div class="icon-box featured-box icon-box-left text-left"  >
                     <div class="icon-box-img" style="width: 40px">
                     <div class="icon">
                        <div class="icon-inner" >
                              <img width="41" height="41" src="{{ asset('frontend/images/icon-5.jpg') }}" class="attachment-medium size-medium" alt="camera quan sát" loading="lazy" />					
                        </div>
                     </div>
                     </div>
                     <div class="icon-box-text last-reset">
                     <p>Thanh toán tại nhà<br />
                        an toàn 100%
                     </p>
                     </div>
                  </div>
            </div>
         </div>
      </div>
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
                              <img width="1020" height="167" src="{{$banner->image}}" class="attachment-large size-large" alt="" loading="lazy" srcset="{{$banner->image}} 1024w, {{$banner->image}} 600w, {{$banner->image}} 768w" sizes="(max-width: 1020px) 100vw, 1020px" />						
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
                        {{-- <div id="col-862704539" class="col danh-muc2 hide-for-medium medium-9 small-12 large-9"  >
                              <div class="col-inner text-right"  >
                                 <a href="{{route('allListBlog')}}" class="button secondary is-link is-small"  >
                                 <span>Xem Thêm</span>
                                 </a>
                              </div>
                              <style>
                                 #col-862704539 > .col-inner {
                                 padding: 0px 10px 0px 0px;
                                 }
                              </style>
                        </div> --}}
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