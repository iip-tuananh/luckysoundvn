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
         {{-- <div class="flex-row container">
            <div class="flex-col hide-for-medium flex-left">
                  <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
                     <li class="header-contact-wrapper">
                     <ul id="header-contact" class="nav nav-divided nav-uppercase header-contact">
                        <li class="">
                              <a target="_blank" rel="noopener noreferrer" href="{{ $setting->address1 }}" title="{{ $setting->address1 }}" class="tooltip">
                              <i class="icon-map-pin-fill" style="font-size:16px;"></i>			     <span>
                              Địa chỉ			     </span>
                              </a>
                        </li>
                        <li class="">
                              <a href="mailto:{{ $setting->email }}" class="tooltip" title="{{ $setting->email }}">
                              <i class="icon-envelop" style="font-size:16px;"></i>			       <span>
                              Email			       </span>
                              </a>
                        </li>
                        <li class="">
                              <a href="tel:{{ $setting->phone1 }}" class="tooltip" title="{{ $setting->phone1 }}">
                              <i class="icon-phone" style="font-size:16px;"></i>			      
                                 <span>{{ $setting->phone1 }}</span>
                              </a>
                        </li>
                        <li class="">
                              <a href="tel:{{ $setting->phone2 }}" class="tooltip" title="{{ $setting->phone2 }}">
                              <i class="icon-phone" style="font-size:16px;"></i>			      
                                 <span>{{ $setting->phone2 }}</span>
                              </a>
                        </li>
                        <li class="">
                              <a href="tel:{{ $setting->fax }}" class="tooltip" title="{{ $setting->fax }}">
                              <i class="icon-phone" style="font-size:16px;"></i>			      
                                 <span>{{ $setting->fax }}</span>
                              </a>
                        </li>
                     </ul>
                     </li>
                  </ul>
            </div>
            <div class="flex-col hide-for-medium flex-center">
                  <ul class="nav nav-center nav-small  nav-divided">
                  </ul>
            </div>
            <div class="flex-col hide-for-medium flex-right">
                  <ul class="nav top-bar-nav nav-right nav-small  nav-divided">
                     <li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35 menu-item-design-default has-icon-left"><a href="{{ route('aboutUs') }}" class="nav-top-link"><img class="ux-menu-icon" width="20" height="20" src="{{ asset('frontend/images/icon-about_optimized.png') }}" alt="" />Giới thiệu</a></li>
                     <li id="menu-item-34" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34 menu-item-design-default has-icon-left"><a href="{{ route('lienHe') }}" class="nav-top-link"><img class="ux-menu-icon" width="20" height="20" src="{{ asset('frontend/images/icon-lienhe_optimized.png') }}" alt="" />Liên hệ</a></li>
                     <li class="html header-social-icons ml-0">
                     <div class="social-icons follow-icons" ><a href="{{$setting->facebook}}" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon plain facebook tooltip" title="Follow on Facebook" aria-label="Follow on Facebook"><i class="icon-facebook" ></i></a><a href="{{$setting->google}}" target="_blank" rel="noopener noreferrer nofollow" data-label="YouTube" class="icon plain  YouTube tooltip" title="Follow on YouTube" aria-label="Follow on YouTube"><i class="icon-youtube"></i></a><a href="https://zalo.me/{{$setting->phone2}}" target="_blank" data-label="Zalo" rel="noopener noreferrer nofollow" class="icon plain  Zalo tooltip" title="Follow on Zalo" aria-label="Follow on Zalo"><img src="{{url('frontend/images/zalo-icon1.png')}}" alt=""><a href="mailto:{{$setting->email}}" data-label="E-mail" rel="nofollow" class="icon plain  email tooltip" title="Send us an email" aria-label="Send us an email"><i class="icon-envelop" ></i></a></div>
                     </li>
                  </ul>
            </div>
         </div> --}}
         <img src="{{$bannerHeaderTop->image}}" alt="banner top" loading="lazy">
         </div>
         <div id="masthead" class="header-main hide-for-sticky">
         <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
            <!-- Logo -->
            <div id="logo" class="flex-col logo">
                  <!-- Header logo -->
                  <a href="{{ route('home') }}" title="{{ $setting->company }}" rel="home">
                  <img width="200" height="90" src="{{ $setting->logo }}" class="header_logo header-logo" alt="{{ $setting->company }}"/><img  width="200" height="90" src="{{ $setting->logo }}" class="header-logo-dark" alt="{{ $setting->company }}"/></a>
            </div>
            <!-- Mobile Left Elements -->
            <div class="flex-col show-for-medium flex-left">
                  <ul class="mobile-nav nav nav-left ">
                     <li class="nav-icon has-icon">
                     <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">
                     <i class="icon-menu" ></i>
                     </a>
                     </li>
                  </ul>
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
                     <li style="text-align: center; border: 2px solid #105caa; border-radius: 5px; padding: 0 10px;">
                        <p><b><i>Hotline: <a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a></i></b></p>
                        <p><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
                     </li>
                  </ul>
            </div>
            <!-- Right Elements -->
            <div class="flex-col hide-for-medium flex-right">
                  <ul class="header-nav header-nav-main nav nav-right  nav-uppercase">
                     <li class="header-divider"></li>
                     <li class="cart-item has-icon has-dropdown">
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
                        <a href="{{ route('listCart') }}" title="Giỏ hàng" class="header-cart-link is-small">
                           <span class="header-cart-title">
                           Giỏ hàng   /   
                           <span class="cart-price"><span class="woocommerce-Price-amount amount"><bdi>{{number_format($totalPrice)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                           </span>
                           <span class="cart-icon image-icon">
                           <strong>{{count($cart)}}</strong>
                           </span>
                        </a>
                        @else
                        <a href="{{ route('listCart') }}" title="Giỏ hàng" class="header-cart-link is-small">
                           <span class="header-cart-title">
                           Giỏ hàng   /   
                           <span class="cart-price"><span class="woocommerce-Price-amount amount"><bdi>0<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                           </span>
                           <span class="cart-icon image-icon">
                           <strong>0</strong>
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
            <!-- Mobile Right Elements -->
            <div class="flex-col show-for-medium flex-right">
                  <ul class="mobile-nav nav nav-right ">
                     <li class="header-divider"></li>
                     <li class="cart-item has-icon">
                     <a href="{{ route('listCart') }}" class="header-cart-link off-canvas-toggle nav-top-link is-small" data-open="#cart-popup" data-class="off-canvas-cart" title="Giỏ hàng" data-pos="right">
                        @if ($cart)
                           <span class="cart-icon image-icon">
                           <strong>
                           {{count($cart)}}
                           </strong>
                           </span>
                        @else
                        <span class="cart-icon image-icon">
                           <strong>0</strong>
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
                              <div class="cart-sidebar-content relative"></div>
                        </div>
                     </div>
                     </li>
                  </ul>
            </div>
         </div>
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
                  <ul id="mega_menu" class="sf-menu sf-vertical {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                     @foreach ($categoryhome as $category)
                     @if (count($category->typeCate)>0)
                        <li id="menu-item-11703" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-11703">
                           <a href="{{ route('allListProCate', ['danhmuc'=>$category->slug]) }}">{{ languageName($category->name) }}</a>
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
                        <li id="menu-item-11906" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11906"><a href="{{ route('allListProCate', ['danhmuc'=>$category->slug]) }}">{{ languageName($category->name) }}</a></li>
                     @endif
                     @endforeach
                  </ul>
                  </div>
               </ul>
            </div>
            <div class="flex-col hide-for-medium flex-center">
                  <ul class="nav header-nav header-bottom-nav nav-center  nav-divided nav-uppercase">
                     <li id="menu-item-12080" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-12080 menu-item-design-default has-icon-left"><a href="{{ route('home') }}" aria-current="page" class="nav-top-link" title="Trang chủ"><img class="ux-menu-icon" width="20" height="20" src="{{ asset('frontend/images/icon-home.png') }}" alt="Trang chủ" />Trang chủ</a></li>
                     <li id="menu-item-12081" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12081 menu-item-design-default has-icon-left"><a href="{{ route('aboutUs') }}" class="nav-top-link" title="Giới thiệu"><img class="ux-menu-icon" width="20" height="20" src="{{ asset('frontend/images/icon-aboutus.png') }}" alt="Giới thiệu" />Giới thiệu</a></li>
                     <li id="menu-item-12085" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-12085 menu-item-design-default has-dropdown has-icon-left">
                        <a href="{{ route('allListBlog') }}" class="nav-top-link"><img class="ux-menu-icon" width="20" height="20" src="{{ asset('frontend/images/icon-blogs.png') }}" alt="" />Tin tức<i class="icon-angle-down" ></i></a>
                        <ul class="sub-menu nav-dropdown nav-dropdown-simple dropdown-uppercase">
                           @foreach ($blogCate as $cate)
                              <li id="menu-item-12086" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12086 has-icon-left"><a href="{{ route('listCateBlog', ['slug'=>$cate->slug]) }}"><img class="ux-menu-icon" width="20" height="20" src="{{ asset('frontend/images/icon-blogs.png') }}" alt="" />{{languageName($cate->name)}}</a></li>
                           @endforeach
                        </ul>
                     </li>
                     <li id="menu-item-12082" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12082 menu-item-design-default has-icon-left"><a href="{{ route('lienHe') }}" class="nav-top-link" title="Liên hệ"><img class="ux-menu-icon" width="20" height="20" src="{{ asset('frontend/images/icon-contactus.png') }}" alt="Liên hệ" />Liên hệ</a></li>
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