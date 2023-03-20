@php $qtys = 0 ; @endphp
@if(session('cart'))
@foreach(session('cart') as $id => $details)
@php 
$qtys += $details['quantity'] ;
@endphp
@endforeach
@endif
<header id="header" class="header has-sticky sticky-jump">
   <div class="header-wrapper">
      <div id="top-bar" class="header-top hide-for-sticky nav-dark">
         <img src="{{$bannerHeaderTop->image}}" alt="banner top" loading="lazy" class="top-desktop">
         <img src="{{asset('frontend/images/banner-top.jpg')}}" alt="" srcset="" loading="lazy" class="top-mobile" style="display: none">
      </div>
      <style>
         @media only screen and (max-width:768px){
         .top-desktop{
         display: none !important;
         }
         .top-mobile{
         display: block !important;
         }
         }
      </style>
      <div id="masthead" class="header-main hide-for-sticky">
         <!-- Mobile Right Elements -->
         <div class="container c-header-mobile hidden-lg">
            <div class="pb-0">
               <a href="tel:{{$setting->phone1}}">
               <span>
               <i class="fa-solid fa-phone"></i>
               </span>
               <span>
               {{$setting->phone1}}
               </span>
               </a>&nbsp;&nbsp;
               @if ($setting->phone2)
               <a href="tel:{{$setting->phone2}}">
               <span>
               <i class="fa-solid fa-phone"></i>
               </span>
               <span>
               {{$setting->phone2}}
               </span>
               </a>
               @endif
            </div>
            <div class="pb-0">
               <div class="flex-col show-for-medium flex-right">
                  <ul class="mobile-nav nav nav-right ">
                     <li class="header-divider"></li>
                     <li class="c-box-cart cart-item has-icon">
                        <a href="{{ route('listCart') }}" class="header-cart-link off-canvas-toggle nav-top-link is-small" data-open="#cart-popup" data-class="off-canvas-cart" title="Giỏ hàng" data-pos="right">
                        @if (count($cartcontent) > 0)
                        <span class="header-cart-itemIcon">
                        <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <span class="c-box-amount">
                        <strong>{{count($cartcontent)}}</strong>
                        </span>
                        </span>
                        @else
                        <span class="header-cart-itemIcon">
                        <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <span class="c-box-amount">
                        <strong>0</strong>
                        </span>
                        </span>
                        @endif
                        </a>
                        <!-- Cart Sidebar Popup -->
                        <div id="cart-popup" class="mfp-hide widget_shopping_cart">
                           <div class="cart-popup-inner inner-padding">
                              <div class="cart-popup-title text-center">
                                 <h4 class="uppercase">Giỏ hàng</h4>
                                 <div class="is-divider"></div>
                              </div>
                              @if (count($cartcontent) > 0)
                              <div class="widget_shopping_cart_content">
                                 <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                    @php
                                    $totalPrice = 0 ;
                                    @endphp
                                    @foreach ($cartcontent as $item)
                                    @php
                                    $price = $item['price'] - $item['price'] * ($item['discount'] / 100);
                                    $totalPrice += $price * $item['quantity'];
                                    @endphp
                                    <li class="woocommerce-mini-cart-item mini_cart_item">
                                       <a href="#" class="remove remove_from_cart_button removeCart" aria-label="Xóa sản phẩm này" data-url="{{route('removeCart', ['id'=>$item['id']])}}">&times;</a>											
                                       <a href="{{route('detailProduct', ['cate'=>$item['cate_slug'], 'type'=>$item['type_slug'], 'slug'=>$item['slug']])}}">
                                       <img width="300" height="300" src="{{$item['image']}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="{{languageName($item['name'])}}" loading="lazy" srcset="{{$item['image']}} 300w, {{$item['image']}} 150w, {{$item['image']}} 600w, {{$item['image']}} 100w" sizes="(max-width: 300px) 100vw, 300px" />{{languageName($item['name'])}}</a>
                                       <span class="quantity">{{$item['quantity']}} &times; <span class="woocommerce-Price-amount amount"><bdi>{{number_format($price)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>				
                                    </li>
                                    @endforeach
                                 </ul>
                                 <p class="woocommerce-mini-cart__total total">
                                    <strong>Tổng số phụ:</strong> <span class="woocommerce-Price-amount amount"><bdi>{{number_format($totalPrice)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>	
                                 </p>
                                 <p class="woocommerce-mini-cart__buttons buttons"><a href="{{route('listCart')}}" class="button wc-forward">Xem giỏ hàng</a><a href="{{route('checkout')}}" class="button checkout wc-forward">Thanh toán</a></p>
                              </div>
                              @else
                              <div class="widget_shopping_cart_content">
                                 <p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong giỏ hàng.</p>
                              </div>
                              @endif
                              <div class="cart-sidebar-content relative"></div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
            <!-- Logo -->
            <div id="logo" class="flex-col logo">
               <!-- Header logo -->
               <a href="{{ route('home') }}" title="{{ $setting->company }}" rel="home">
               <img width="200" height="90" src="{{ $setting->logo }}" class="header_logo header-logo" alt="{{ $setting->company }}"/><img  width="200" height="90" src="{{ $setting->logo }}" class="header-logo-dark" alt="{{ $setting->company }}"/></a>
            </div>
            <!-- Left Elements -->
            <div class="flex-col hide-for-medium flex-left
               flex-grow">
               <ul class="header-nav header-nav-main nav nav-left justify-center nav-uppercase" >
                  <li class="header-search-form search-form html relative has-icon">
                     <div class="header-search-form-wrapper">
                        <div class="searchform-wrapper ux-search-box relative is-normal">
                           <form role="search" method="post" class="searchform" action="{{ route('search_result') }}">
                              @csrf
                              <div class="flex-row relative">
                                 <div class="flex-col flex-grow">
                                    <label class="screen-reader-text" for="woocommerce-product-search-field-0">Tìm kiếm:</label>
                                    <input type="search" id="woocommerce-product-search-field-0" class="search-field mb-0" placeholder="Tìm kiếm&hellip;" value="" name="keyword" />
                                    <input type="hidden" name="post_type" value="product" />
                                 </div>
                                 <div class="flex-col">
                                    <button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                                    <i class="icon-search" ></i>			</button>
                                 </div>
                              </div>
                              <div class="live-search-results text-left z-top"></div>
                           </form>
                        </div>
                     </div>
                  </li>
                  <li class="c-box-price " style="text-align: center; padding: 0 35px;">
                     <a href="tel:{{$setting->phone1}}">
                     <span class="c-item-text">
                     <span>
                     Hotline: 
                     <i>{{$setting->phone1}}</i>
                     </span> 
                     </span>
                     </a>
                  </li>
                  <style>
                     .c-box-price:hover {
                     background-color: white;
                     }
                     .header .c-box-price:hover a{
                     color: #000;
                     }
                     .header .c-box-price:hover a i{
                     color: red;
                     }
                     .header .c-box-price a i{
                     color: #F69320;
                     font-weight: 900;
                     }
                     .header .c-box-price a {
                     font-size: 14px;
                     text-transform: capitalize
                     }
                  </style>
               </ul>
            </div>
            <!-- Right Elements -->
            <div class="flex-col hide-for-medium flex-right">
               <ul class="header-nav header-nav-main nav nav-right  nav-uppercase">
                  {{-- 
                  <li class="header-divider"></li>
                  --}}
                  <li class="c-box-cart cart-item has-icon has-dropdown">
                     @php
                     $cart = session()->get('cart');
                     $totalPrice = 0;
                     @endphp
                     @if ($cart)
                     @php
                     foreach ($cart as $item) {
                     $pricePro = ($item['price'] - $item['price'] * ($item['discount'] / 100)) * $item['quantity'];
                     $totalPrice += $pricePro;
                     }
                     @endphp
                     <a href="{{ route('listCart') }}" title="Giỏ hàng" class="header-cart-link is-small" style="padding: 11px 20px;">
                     <span class="header-cart-itemIcon">
                     <i class="fa-solid fa-cart-shopping"></i>
                     </span>
                     <span class="header-cart-title">
                     Giỏ hàng   
                     </span>
                     </span>
                     </span>
                     <span class="c-box-amount">
                     <strong>{{count($cart)}}</strong>
                     </span>
                     </span>
                     </a>
                     @else
                     <a href="{{ route('listCart') }}" title="Giỏ hàng" class="header-cart-link is-small" style="padding: 11px 20px;">
                     <span class="header-cart-itemIcon">
                     <i class="fa-solid fa-cart-shopping"></i>
                     </span>
                     <span class="header-cart-title">
                     Giỏ hàng  
                     </span>
                     <span class="c-box-amount">
                     <strong>0</strong>
                     </span>
                     </span>
                     </a>
                     @endif   
                     <ul class="nav-dropdown nav-dropdown-simple dropdown-uppercase">
                        <li class="html widget_shopping_cart">
                           @if ($cart)
                           <div class="widget_shopping_cart_content">
                              <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                 @foreach ($cart as $item)
                                 @php
                                 $price = $item['price'] - $item['price'] * ($item['discount'] / 100);
                                 @endphp
                                 <li class="woocommerce-mini-cart-item mini_cart_item">
                                    <a href="#" class="remove remove_from_cart_button removeCart" aria-label="Xóa sản phẩm này" data-url="{{route('removeCart', ['id'=>$item['id']])}}">&times;</a>											
                                    <a href="{{route('detailProduct', ['cate'=>$item['cate_slug'], 'type'=>$item['type_slug'], 'slug'=>$item['slug']])}}">
                                    <img width="300" height="300" src="{{$item['image']}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="{{languageName($item['name'])}}" loading="lazy" srcset="{{$item['image']}} 300w, {{$item['image']}} 150w, {{$item['image']}} 600w, {{$item['image']}} 100w" sizes="(max-width: 300px) 100vw, 300px" />{{languageName($item['name'])}}</a>
                                    <span class="quantity">{{$item['quantity']}} &times; <span class="woocommerce-Price-amount amount"><bdi>{{number_format($price)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>				
                                 </li>
                                 @endforeach
                              </ul>
                              <p class="woocommerce-mini-cart__total total">
                                 <strong>Tổng số phụ:</strong> <span class="woocommerce-Price-amount amount"><bdi>{{number_format($totalPrice)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>	
                              </p>
                              <p class="woocommerce-mini-cart__buttons buttons"><a href="{{route('listCart')}}" class="button wc-forward">Xem giỏ hàng</a><a href="{{route('checkout')}}" class="button checkout wc-forward">Thanh toán</a></p>
                           </div>
                           @else
                           <div class="widget_shopping_cart_content">
                              <p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong giỏ hàng.</p>
                           </div>
                           @endif
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- Mobile Search Elements -->
            <div class="flex-col show-for-medium flex-right">
               <div class="yith-ajaxsearchform-container ">
                  <form role="search" method="post" id="yith-ajaxsearchform" action="{{ route('search_result') }}">
                     @csrf
                     <div class="yith-ajaxsearchform-container">
                        <div class="search-navigation">
                           <label class="screen-reader-text" for="yith-s">Search for:</label>
                           <input type="search" value="" name="keyword" id="yith-s" class="yith-s" placeholder="Bạn tìm gì...">
                           <div class="autocomplete-suggestions" style="position: absolute; display: none; z-index: 9999;"></div>
                        </div>
                        <input style="background-image: url({{asset('frontend/images/icon-search.png')}})" type="submit" id="yith-searchsubmit" value="Search">
                     </div>
                  </form>
               </div>
            </div>
            <!-- Mobile Left Elements -->
            <div class="flex-col show-for-medium flex-right">
               <ul class="mobile-nav nav nav-right ">
                  <li class="nav-icon has-icon">
                     <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">
                     <i class="icon-menu" ></i>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="menu-show">
            <div class="row">
               @foreach ($categoryhomenhieu as $cate)
               <div class="col-xs-3 col-md-3" style="padding: 3px">
                  <div class="tuan-fex" onclick="window.location.href='{{route('allListProCate',['danhmuc'=>$cate->slug])}}'">
                     {{languageName($cate->name)}}
                  </div>
               </div>
               @endforeach
            </div>
         </div>
         <style>
            @media only screen and (min-width:768px){
            .menu-show{
            background-color: orangered;
            padding: 5px;
            display: none !important;
            }
            }
            .menu-show{
            background-color: orangered;
            padding: 5px;
            }
            .tuan-fex{
            display: flex;
            padding: 10px;
            width: 95px;
            background-color: #e5e3e3;
            height: 100px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
            /* word-break: break-word; */
            align-content: center;
            justify-content: center;
            align-items: center;
            }
         </style>
         <div class="container">
            <div class="top-divider full-width"></div>
         </div>
      </div>
      <div id="wide-nav" class="header-bottom wide-nav flex-has-center hide-for-medium">
         <div class="flex-row container">
            <div class="flex-col hide-for-medium flex-left">
               <ul class="nav header-nav header-bottom-nav nav-left  nav-divided nav-uppercase">
                  <div id="mega-menu-wrap"
                     class="ot-vm-hover">
                     <div id="mega-menu-title">
                        <i class="icon-menu"></i> DANH MỤC SẢN PHẨM                
                     </div>
                     <style>
                      #mega_menu_new{
                        display: none;
                      }
                     </style>
                     <ul id="mega_menu" class="menunhocon menu-cuon-tuan sf-menu sf-vertical {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" >
                        @foreach ($categoryhome as $category)
                        @if (count($category->typeCate)>0)
                        <li id="menu-item-11703" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-11703">
                           <a href="{{ route('allListProCate', ['danhmuc'=>$category->slug]) }}" class="sf-with-ul">
                           <img width="20" height="20" src="{{$category->avatar}}" class="menu-image menu-image-title-after lazyloaded" alt="" decoding="async" data-ll-status="loaded">
                           {{ languageName($category->name) }}
                           </a>
                           <ul class="sub-menu">
                              @foreach ($category->typeCate as $type)
                              @if (isset($type->typeTwoCate))
                              <li id="menu-item-11704" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-11704">
                                 <a href="{{ route('allListProType', ['danhmuc'=>$type->cate_slug, 'loaidanhmuc'=>$type->slug]) }}">{{ languageName($type->name) }}</a>
                                 <ul class="sub-menu">
                                    @foreach ($type->typeTwoCate as $typeTwo)
                                    <li id="menu-item-11705" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11705"><a href="{{ route('allListTypeTwo', ['danhmuc'=>$typeTwo->cate_slug, 'loaidanhmuc'=>$typeTwo->type_slug, 'thuonghieu'=>$typeTwo->slug]) }}">{{ languageName($typeTwo->name) }}</a></li>
                                    @endforeach
                                 </ul>
                              </li>
                              @else
                              <li id="menu-item-11702" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11702"><a href="{{ route('allListProType', ['danhmuc'=>$type->cate_slug, 'loaidanhmuc'=>$type->slug]) }}">{{ languageName($type->name) }}</a></li>
                              @endif
                              @endforeach
                           </ul>
                        </li>
                        @else
                        <li id="menu-item-11906" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11906"><a href="{{ route('allListProCate', ['danhmuc'=>$category->slug]) }}">
                           <img width="20" height="20" src="{{$category->avatar}}" class="menu-image menu-image-title-after lazyloaded" alt="" decoding="async" data-ll-status="loaded">
                           {{ languageName($category->name) }}
                           </a>
                        </li>
                        @endif
                        @endforeach
                        <div class="more-tuan">Xem thêm</div>
                     </ul>
                     <ul id="mega_menu_new" class=" menu-cuon-tuan sf-menu sf-vertical {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" >
                        @foreach ($categoryhomenhieu as $category)
                        @if (count($category->typeCate)>0)
                        <li id="menu-item-11703" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-11703">
                           <a href="{{ route('allListProCate', ['danhmuc'=>$category->slug]) }}" class="sf-with-ul">
                           <img width="20" height="20" src="{{$category->avatar}}" class="menu-image menu-image-title-after lazyloaded" alt="" decoding="async" data-ll-status="loaded">
                           {{ languageName($category->name) }}
                           </a>
                           <ul class="sub-menu">
                              @foreach ($category->typeCate as $type)
                              @if (isset($type->typeTwoCate))
                              <li id="menu-item-11704" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-11704">
                                 <a href="{{ route('allListProType', ['danhmuc'=>$type->cate_slug, 'loaidanhmuc'=>$type->slug]) }}">{{ languageName($type->name) }}</a>
                                 <ul class="sub-menu">
                                    @foreach ($type->typeTwoCate as $typeTwo)
                                    <li id="menu-item-11705" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11705"><a href="{{ route('allListTypeTwo', ['danhmuc'=>$typeTwo->cate_slug, 'loaidanhmuc'=>$typeTwo->type_slug, 'thuonghieu'=>$typeTwo->slug]) }}">{{ languageName($typeTwo->name) }}</a></li>
                                    @endforeach
                                 </ul>
                              </li>
                              @else
                              <li id="menu-item-11702" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11702"><a href="{{ route('allListProType', ['danhmuc'=>$type->cate_slug, 'loaidanhmuc'=>$type->slug]) }}">{{ languageName($type->name) }}</a></li>
                              @endif
                              @endforeach
                           </ul>
                        </li>
                        @else
                        <li id="menu-item-11906" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11906"><a href="{{ route('allListProCate', ['danhmuc'=>$category->slug]) }}">
                           <img width="20" height="20" src="{{$category->avatar}}" class="menu-image menu-image-title-after lazyloaded" alt="" decoding="async" data-ll-status="loaded">
                           {{ languageName($category->name) }}
                           </a>
                        </li>
                        @endif
                        @endforeach
                        <div class="thu-menu">Thu gọn</div>
                     </ul>
                  </div>
               </ul>
            </div>
            <style>
               .showmenuto{
                  display: block !important;
               }
               .anmenu{
                  display: none !important;
               }
            </style>
            <script>
               $('.more-tuan').click(function (e) { 
                  e.preventDefault();
                  console.log(123);
                  $('#mega_menu_new').addClass('showmenuto');
                  $('#mega_menu').addClass('anmenu');
               });
               $('.thu-menu').click(function (e) { 
                  e.preventDefault();
                  console.log(123);
                  $('#mega_menu_new').removeClass('showmenuto');
                  $('#mega_menu').removeClass('anmenu');
               });
            </script>
            <div class="flex-col hide-for-medium flex-center">
               <ul class="nav header-nav header-bottom-nav nav-center  nav-divided nav-uppercase">
                  <li id="menu-item-12080" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-12080 menu-item-design-default has-icon-left has-dropdown"><a href="{{ route('home') }}" aria-current="page" class="nav-top-link" title="Trang chủ"><img class="ux-menu-icon" width="20" height="20" src="{{ asset('frontend/images/icon-home.png') }}" alt="Trang chủ" />Trang chủ</a></li>
                  <li id="menu-item-12081" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12081 menu-item-design-default has-icon-left has-dropdown"><a href="{{ route('aboutUs') }}" class="nav-top-link" title="{{$aboutUsMenu->title}}"><img class="ux-menu-icon" width="20" height="20" src="{{ asset('frontend/images/icon-aboutus.png') }}" alt="{{$aboutUsMenu->title}}" />{{$aboutUsMenu->title}}</a></li>
                  <li id="menu-item-12082" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12082 menu-item-design-default has-icon-left has-dropdown"><a href="{{ route('lienHe') }}" class="nav-top-link" title="Liên hệ"><img class="ux-menu-icon" width="20" height="20" src="{{ asset('frontend/images/icon-blogs.png') }}" alt="Liên hệ" />Liên hệ</a></li>
                  @foreach ($blogCate as $key=>$cate)
                  @if ($key == 0)
                  <li id="menu-item-12085" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-12085 menu-item-design-default has-dropdown has-icon-left">
                     <a href="{{ route('listCateBlog', ['slug'=>$cate->slug]) }}" class="nav-top-link"><img class="ux-menu-icon" width="20" height="20" src="{{ asset('frontend/images/icon-ideal.png') }}" alt="" />{{languageName($cate->name)}}
                     @if (count($cate->typeCate) > 0)
                     <i class="icon-angle-down" ></i>
                     @endif
                     </a>
                     @if (count($cate->typeCate) > 0)
                     <ul class="sub-menu nav-dropdown nav-dropdown-simple dropdown-uppercase">
                        @foreach ($cate->typeCate as $type)
                        <li id="menu-item-12086" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12086 has-icon-left"><a href="{{ route('listTypeBlog', ['slug'=>$type->slug]) }}"><img class="ux-menu-icon" width="20" height="20" src="{{ asset('frontend/images/icon-ideal.png') }}" alt="" />{{languageName($type->name)}}</a></li>
                        @endforeach
                     </ul>
                     @endif
                  </li>
                  @endif
                  @if ($key == 1)
                  <li id="menu-item-12085" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-12085 menu-item-design-default has-dropdown has-icon-left">
                     <a href="{{ route('listCateBlog', ['slug'=>$cate->slug]) }}" class="nav-top-link"><img class="ux-menu-icon" width="20" height="20" src="{{ asset('frontend/images/icon-contactus.png') }}" alt="" />{{languageName($cate->name)}}
                     @if (count($cate->typeCate) > 0)
                     <i class="icon-angle-down" ></i>
                     @endif
                     </a>
                     @if (count($cate->typeCate) > 0)
                     <ul class="sub-menu nav-dropdown nav-dropdown-simple dropdown-uppercase">
                        @foreach ($cate->typeCate as $type)
                        <li id="menu-item-12086" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12086 has-icon-left"><a href="{{ route('listTypeBlog', ['slug'=>$type->slug]) }}"><img class="ux-menu-icon" width="20" height="20" src="{{ asset('frontend/images/icon-contactus.png') }}" alt="" />{{languageName($type->name)}}</a></li>
                        @endforeach
                     </ul>
                     @endif
                  </li>
                  @endif
                  @endforeach
               </ul>
            </div>
            <div class="flex-col hide-for-medium flex-right flex-grow">
               <ul class="nav header-nav header-bottom-nav nav-right  nav-divided nav-uppercase">
               </ul>
            </div>
         </div>
      </div>
      <div class="header-bg-container fill">
         <div class="header-bg-image fill"></div>
         <div class="header-bg-color fill"></div>
      </div>
   </div>
</header>