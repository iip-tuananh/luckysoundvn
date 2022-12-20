@extends('layouts.main.master')
@section('title')
Giỏ hàng của bạn
@endsection
@section('description')
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('content')
<main id="main" class="">
   <div id="content" class="content-area page-wrapper" role="main">
      <div class="row row-main">
         <div class="large-12 col">
            @if ($cart)
            <div class="col-inner">
               <div class="woocommerce">
                  <div class="woocommerce-notices-wrapper"></div>
                  <div class="woocommerce row row-large row-divided">
                     <div class="col large-7 pb-0 ">
                           <div class="cart-wrapper sm-touch-scroll">
                              <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                 <thead>
                                    <tr>
                                       <th class="product-name" colspan="3">Sản phẩm</th>
                                       <th class="product-price">Giá</th>
                                       <th class="product-quantity">Số lượng</th>
                                       <th class="product-subtotal">Tạm tính</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @php
                                       $totalPrice = 0;
                                    @endphp
                                    @foreach ($cart as $item)
                                    @php
                                       $price = $item['price'] - $item['price'] * ($item['discount'] / 100);
                                       $totalPrice += $price * $item['quantity'];
                                    @endphp
                                       <tr class="woocommerce-cart-form__cart-item cart_item">
                                          <td class="product-remove">
                                             <a href="#" class="remove removeCart" aria-label="Xóa sản phẩm này" data-url="{{route('removeCart', ['id'=>$item['id']])}}">&times;</a>						
                                          </td>
                                          <td class="product-thumbnail">
                                             <a href="{{route('detailProduct', ['cate'=>$item['cate_slug'], 'type'=>$item['type_slug'], 'slug'=>$item['slug']])}}"><img width="300" height="300" src="{{$item['image']}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="{{languageName($item['name'])}}" loading="lazy" srcset="{{$item['image']}} 300w, {{$item['image']}} 150w, {{$item['image']}} 600w, {{$item['image']}} 100w" sizes="(max-width: 300px) 100vw, 300px" /></a>						
                                          </td>
                                          <td class="product-name" data-title="Sản phẩm">
                                             <a href="{{route('detailProduct', ['cate'=>$item['cate_slug'], 'type'=>$item['type_slug'], 'slug'=>$item['slug']])}}">{{languageName($item['name'])}}</a>							
                                             <div class="show-for-small mobile-product-price">
                                                <span class="mobile-product-price__qty">{{$item['quantity']}} x </span>
                                                <span class="woocommerce-Price-amount amount"><bdi>{{number_format($price)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>							
                                             </div>
                                          </td>
                                          <td class="product-price" data-title="Giá">
                                             <span class="woocommerce-Price-amount amount"><bdi>{{number_format($price)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>						
                                          </td>
                                          <td class="product-quantity" data-title="Số lượng">
                                             <div class="quantity buttons_added" data-url="{{route('updateCart')}}" data-id="{{$item['id']}}">
                                                <input type="button" value="-" class="minus button is-form btn-minus">				
                                                <label class="screen-reader-text" for="quantity_{{$item['id']}}">{{languageName($item['name'])}}</label>
                                                <input
                                                   type="number"
                                                   id="quantity_{{$item['id']}}"
                                                   class="input-text qty text"
                                                   step="1"
                                                   min="0"
                                                   max=""
                                                   name="qty"
                                                   value="{{$item['quantity']}}"
                                                   title="SL"
                                                   size="4"
                                                   placeholder=""
                                                   inputmode="numeric" />
                                                <input type="button" value="+" class="plus button is-form btn-plus">	
                                             </div>
                                          </td>
                                          <td class="product-subtotal" data-title="Tạm tính">
                                             <span class="woocommerce-Price-amount amount"><bdi>{{number_format($price * $item['quantity'])}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>						
                                          </td>
                                       </tr>
                                    @endforeach
                                    <tr>
                                       <td colspan="6" class="actions clear">
                                          <div class="continue-shopping pull-left text-left">
                                             <a class="button-continue-shopping button primary is-outline"  href="{{route('allProduct')}}">
                                             &#8592;&nbsp;Tiếp tục xem sản phẩm	</a>
                                          </div>
                                          <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="06b6aa30b2" /><input type="hidden" name="_wp_http_referer" value="/gio-hang/" />				
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                     </div>
                     <div class="cart-collaterals large-5 col pb-0">
                        <div class="cart-sidebar col-inner ">
                           <div class="cart_totals ">
                              <table cellspacing="0">
                                 <thead>
                                    <tr>
                                       <th class="product-name" colspan="2" style="border-width:3px;">Cộng giỏ hàng</th>
                                    </tr>
                                 </thead>
                              </table>
                              <h2>Cộng giỏ hàng</h2>
                              <table cellspacing="0" class="shop_table shop_table_responsive">
                                 <tr class="cart-subtotal">
                                    <th>Tạm tính</th>
                                    <td data-title="Tạm tính"><span class="woocommerce-Price-amount amount"><bdi>{{number_format($totalPrice)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></td>
                                 </tr>
                                 <tr class="order-total">
                                    <th>Tổng</th>
                                    <td data-title="Tổng"><strong><span class="woocommerce-Price-amount amount"><bdi>{{number_format($totalPrice)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></strong> </td>
                                 </tr>
                              </table>
                              <div class="wc-proceed-to-checkout">
                                 <a href="{{route('checkout')}}" class="checkout-button button alt wc-forward">
                                 Tiến hành thanh toán</a>
                              </div>
                           </div>
                           <div class="cart-sidebar-content relative"></div>
                        </div>
                     </div>
                  </div>
                  <div class="cart-footer-content after-cart-content relative"></div>
               </div>
            </div>
            @else
            <div class="col-inner">
               <div class="woocommerce">
                  <div class="text-center pt pb">
                     <div class="woocommerce-notices-wrapper"></div>
                     <p class="cart-empty woocommerce-info">Chưa có sản phẩm nào trong giỏ hàng.</p>
                     <p class="return-to-shop">
                        <a class="button primary wc-backward" href="{{route('allProduct')}}">
                        Quay trở lại cửa hàng</a>
                     </p>
                  </div>
               </div>
            </div>
            @endif
         </div>
      </div>
   </div>
</main>
@endsection