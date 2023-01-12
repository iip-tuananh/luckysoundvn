
@php
      $img = json_decode($product->images);
      $origin = json_decode($product->origin);
@endphp

<div class="product-small col has-hover product type-product post-{{$product->id}} status-publish instock product_cat-camera-hanh-trinh has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
      <div class="col-inner">
         @if ($product->discount != 0)
            <div class="badge-container absolute left-10 top z-1">
               <div class="callout badge badge-circle">
               <div class="badge-inner secondary on-sale"><span class="onsale">-{{$product->discount}}%</span></div>
               </div>
            </div>
         @endif
         @if ($origin[0]->image != null)
            <div class="badge-container absolute right top z-1">
               @foreach ($origin as $item)
               <img src="{{$item->image}}" class="tag-sale" alt="tag">
               @endforeach
            </div>
         @endif
            <div class="product-small box ">
               <div class="box-image">
               <div class="image-fade_in_back">
                  <a href="{{ route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug]) }}" aria-label="{{languageName($product->name)}}">
                     <img width="300" height="300" src="{{$img[0]}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="{{languageName($product->name)}}" loading="lazy" srcset="{{$img[0]}} 300w, {{$img[0]}} 150w, {{$img[0]}} 600w, {{$img[0]}} 100w" sizes="(max-width: 300px) 100vw, 300px" />
                     @if (count($img) > 1)
                     <img width="283" height="283" src="{{$img[1]}}" class="show-on-hover absolute fill hide-for-small back-image" alt="{{languageName($product->name)}}" loading="lazy" srcset="{{$img[1]}} 283w, {{$img[1]}} 150w, {{$img[1]}} 100w" sizes="(max-width: 283px) 100vw, 283px" />	
                     @else
                     <img width="283" height="283" src="{{$img[0]}}" class="show-on-hover absolute fill hide-for-small back-image" alt="{{languageName($product->name)}}" loading="lazy" srcset="{{$img[0]}} 283w, {{$img[0]}} 150w, {{$img[0]}} 100w" sizes="(max-width: 283px) 100vw, 283px" />
                     @endif
                  </a>
               </div>
               <div class="image-tools is-small hide-for-small bottom left show-on-hover">
               </div>
               <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                  <a class="add-to-cart" data-url="{{route('addToCart')}}" data-id="{{$product->id}}" data-redirect="{{route('listCart')}}" href="javascript:void(0);">Mua ngay</a>			
               </div>
               </div>
               <div class="box-text box-text-products">
               <div class="title-tag-sale" style="min-height: 26px;">
                  @if ($product->hang_muc)
                     <img src="{{$product->hang_muc}}" alt="tag">
                  @endif
               </div>
               <div class="title-wrapper">
                  <p class="name product-title woocommerce-loop-product__title" style="font-weight: 600;"><a href="{{ route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug]) }}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">{{ languageName($product->name) }}</a></p>
               </div>
               <div class="price-wrapper">
                  @if ($product->discount != 0 && $product->price > 0)
                  @php
                     $discountPrice = $product->price - $product->price * ($product->discount / 100);
                  @endphp
                     <span class="price"><del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi>{{ number_format($product->price, 0, '', '.') }}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span class="woocommerce-Price-amount amount" style="font-size: 16px"><bdi>{{ number_format($discountPrice, 0,'','.') }}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                  @elseif($product->discount == 0 && $product->price > 0)
                     <span class="price"> 
                        <ins>
                           <span class="woocommerce-Price-amount amount" style="font-size: 16px"><bdi>{{ number_format($product->price, 0, '', '.') }}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                        </ins>
                     </span>
                  @else
                     <span class="price"> 
                        <ins>
                           <a href="tel:{{$setting->phone1}}">
                              <span class="woocommerce-Price-amount amount" style="font-size: 16px"><bdi>Liên hệ</bdi></span>
                           </a>
                        </ins>
                     </span>
                  @endif
               </div>
               </div>
            </div>
      </div>
</div>

