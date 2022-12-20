@extends('layouts.main.master')
@section('title')
Thanh toán đơn hàng
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
            <div class="col-inner">
               <div class="woocommerce">
                  <div class="woocommerce-notices-wrapper"></div>
                  <form name="checkout" method="post" class="checkout woocommerce-checkout " action="{{route('postBill')}}" enctype="multipart/form-data">
                     @csrf
                     <div class="row pt-0 ">
                        <div class="large-7 col  ">
                           <div id="customer_details">
                              <div class="clear">
                                 <div class="woocommerce-billing-fields">
                                    <h3>Thông tin thanh toán</h3>
                                    <div class="woocommerce-billing-fields__field-wrapper">
                                       <p class="form-row form-row-wide validate-required" id="billing_last_name_field" data-priority="">
                                          <label for="billing_last_name" class="">Họ và tên&nbsp;<abbr class="required" title="bắt buộc">*</abbr>
                                          </label>
                                          <span class="woocommerce-input-wrapper">
                                             <input type="text" class="input-text " name="billingName" id="billing_last_name" placeholder="Nhập đầy đủ họ và tên của bạn"  value=""  required/>
                                          </span>
                                       </p>
                                       <p class="form-row address-field form-row-first validate-required" id="billing_address_1_field" data-priority="50">
                                          <label for="billing_address_1" class="">Địa chỉ&nbsp;<abbr class="required" title="bắt buộc">*</abbr>
                                          </label><span class="woocommerce-input-wrapper">
                                             <input type="text" class="input-text " name="billingAddress" id="billing_address_1" placeholder="Ví dụ: Số xx Hẻm xx Xã, Huyện, Thành Phố"  value="" autocomplete="address-line1" required/>
                                          </span>
                                       </p>
                                       <p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="100">
                                          <label for="billing_phone" class="">Số điện thoại&nbsp;<abbr class="required" title="bắt buộc">*</abbr>
                                          </label>
                                          <span class="woocommerce-input-wrapper"><input type="tel" class="input-text " name="billingPhone" id="billing_phone" placeholder=""  value="" autocomplete="tel" required/>
                                          </span>
                                       </p>
                                       <p class="form-row form-row-wide validate-required validate-email" id="billing_email_field" data-priority="110">
                                          <label for="billing_email" class="">Địa chỉ email&nbsp;<abbr class="required" title="bắt buộc">*</abbr>
                                          </label>
                                          <span class="woocommerce-input-wrapper">
                                             <input type="email" class="input-text " name="billingEmail" id="billing_email" placeholder=""  value="" autocomplete="email username" required/>
                                          </span>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="clear">
                                 <div class="woocommerce-shipping-fields">
                                 </div>
                                 <div class="woocommerce-additional-fields">
                                    <h3>Thông tin bổ sung</h3>
                                    <div class="woocommerce-additional-fields__field-wrapper">
                                       <p class="form-row notes" id="order_comments_field" data-priority="">
                                          <label for="order_comments" class="">Ghi chú đơn hàng&nbsp;<span class="optional">(tuỳ chọn)</span>
                                          </label>
                                          <span class="woocommerce-input-wrapper">
                                             <textarea name="note" class="input-text " id="order_comments" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn."  rows="2" cols="5"></textarea>
                                          </span>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="large-5 col">
                           <div class="col-inner has-border">
                              <div class="checkout-sidebar sm-touch-scroll">
                                 <h3 id="order_review_heading">Đơn hàng của bạn</h3>
                                 <div id="order_review" class="woocommerce-checkout-review-order">
                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                       <thead>
                                          <tr>
                                             <th class="product-name">Sản phẩm</th>
                                             <th class="product-total">Tạm tính</th>
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
                                             <tr class="cart_item">
                                                <td class="product-name">{{languageName($item['name'])}}<strong class="product-quantity">&times;&nbsp;{{$item['quantity']}}</strong>											
                                                </td>
                                                <td class="product-total">
                                                   <span class="woocommerce-Price-amount amount"><bdi>{{number_format($price)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>					
                                                </td>
                                             </tr>
                                          @endforeach
                                       </tbody>
                                       <tfoot>
                                          <tr class="cart-subtotal">
                                             <th>Tạm tính</th>
                                             <td><span class="woocommerce-Price-amount amount"><bdi>{{number_format($totalPrice)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></td>
                                          </tr>
                                          <tr class="order-total">
                                             <th>Tổng</th>
                                             <td><strong><span class="woocommerce-Price-amount amount"><bdi>{{number_format($totalPrice)}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></strong> </td>
                                             <input type="text" name="total_money" value="{{$totalPrice}}" hidden>
                                          </tr>
                                       </tfoot>
                                    </table>
                                    <div id="payment" class="woocommerce-checkout-payment">
                                       <ul class="wc_payment_methods payment_methods methods">
                                          {{-- <li class="wc_payment_method payment_method_bacs">
                                             <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs"  checked='checked' data-order_button_text="" />
                                             <label for="payment_method_bacs">
                                             Chuyển khoản ngân hàng 	</label>
                                             <div class="payment_box payment_method_bacs" >
                                                <p>Thực hiện thanh toán vào ngay tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng Mã đơn hàng của bạn trong phần Nội dung thanh toán. Đơn hàng sẽ đươc giao sau khi tiền đã chuyển.</p>
                                             </div>
                                          </li> --}}
                                          <li class="wc_payment_method payment_method_cod">
                                             <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod"  data-order_button_text="" />
                                             <label for="payment_method_cod">
                                             Trả tiền mặt khi nhận hàng 	</label>
                                             <div class="payment_box payment_method_cod" style="display:none;">
                                                <p>Trả tiền mặt khi giao hàng</p>
                                             </div>
                                          </li>
                                       </ul>
                                       <div class="form-row place-order">
                                          <noscript>
                                             Trình duyệt của bạn không hỗ trợ JavaScript, hoặc nó bị vô hiệu hóa, hãy đảm bảo bạn nhấp vào <em>Cập nhật giỏ hàng</em> trước khi bạn thanh toán. Bạn có thể phải trả nhiều hơn số tiền đã nói ở trên, nếu bạn không làm như vậy.			<br/><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Cập nhật tổng">Cập nhật tổng</button>
                                          </noscript>
                                          <div class="woocommerce-terms-and-conditions-wrapper">
                                          </div>
                                          <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Đặt hàng" data-value="Đặt hàng">Đặt hàng</button>
                                          <input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="e60d101cd7" /><input type="hidden" name="_wp_http_referer" value="/thanh-toan/" />	
                                       </div>
                                    </div>
                                 </div>
                                 <div class="woocommerce-privacy-policy-text">
                                    <p>Thông tin cá nhân của bạn sẽ được sử dụng để xử lý đơn hàng, tăng trải nghiệm sử dụng website, và cho các mục đích cụ thể khác đã được mô tả trong <a href="#" class="woocommerce-privacy-policy-link" target="_blank">chính sách riêng tư</a>.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection