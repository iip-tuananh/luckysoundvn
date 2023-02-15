
<footer id="footer" class="footer-wrapper">
   <div class="row row-small large-columns-5 medium-columns-4 small-columns-3 row-small" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
      @foreach ($partner as $item)
         <div class="col">
            <a href="{{$item->link}}" class="img-tc ">
               <img src="{{$item->image}}" alt="{{$item->name}}" loading="lazy" style="border-radius: 12px;">
            </a>
         </div>
      @endforeach
   </div>
   <section class="section footer-section" id="section_948757949">
      <div class="section-content">
      <div class="row-large row" >
         <div id="col-149956225" class="col medium-5 small-12 large-5"  >
               <div class="col-inner"  >
                  <p style="text-align: justify;
                  background-color: #105caa;
                  padding: 10px 15px; border-radius: 8px;
                  color: #ffff;"><strong>LUCKY SOUND</strong></p>
                  <div style="background-color: #ffff; padding: 10px 15px;border-radius: 8px;" >
                     <p style="text-align: justify;"><i class="icon-shopping-cart"></i>  {{ $setting->company }}</p>
                     <p><i class="icon-checkmark"></i>  Website: <a target="_blank" href="{{route('home')}}">{{route('home')}}</a></p>
                     <p><i class="icon-map-pin-fill"></i>  <a href="https://www.google.com/maps/place/{{$setting->address1}}" target="_blank" rel="noopener noreferrer">{{$setting->address1}}</a></p>
                     <p>Hotline: <a href="tel:{{$setting->phone1}}" target="_blank" rel="noopener noreferrer" style="color: #e83a3a">{{$setting->phone1}}</a></p>
                     @if (isset($setting->fax))
                     <p>Số kinh doanh: <a href="tel:{{$setting->fax}}" target="_blank" rel="noopener noreferrer" style="color: #e83a3a">{{$setting->fax}}</a></p>
                     @endif
                     @if (isset($setting->phone2))
                     <p>Số kỹ thuật: <a href="tel:{{$setting->phone2}}" target="_blank" rel="noopener noreferrer" style="color: #e83a3a">{{$setting->phone2}}</a></p>
                     @endif
                     
                  </div>
               </div>
            <style>
               #col-149956225 i {
                  color:#105caa; 
               }
            </style>
         </div>
         <div class="col medium-7 small-12 large-7"  >
            <div class="row row-small">
            <div class="col medium-6 small-12 large-6"  >
               <div class="col-inner"  >
                     <p style="text-align: justify;
                     background-color: #105caa;
                     padding: 10px 15px;border-radius: 8px;
                     color: #ffff;"><strong>THÔNG TIN, CHÍNH SÁCH</strong></p>
                     <ul style="background-color: #ffff; padding: 10px 15px; border-radius: 8px;">
                        @foreach ($helpCus as $item)
                        <li style="text-align: justify;"><a href="{{route('helpCus', ['slug'=>$item->slug])}}">{{$item->title}}</a></li>
                        @endforeach
                     </ul>
               </div>
            </div>
            <div class="col medium-6 small-12 large-6"  >
               <div class="col-inner"  >
                     <p style="text-align: justify;
                     background-color: #105caa;
                     padding: 10px 15px;border-radius: 8px;
                     color: #ffff;"><strong>BẢN ĐỒ</strong></p>
                     {!! $setting->iframe_map !!}
               </div>
            </div>
            </div>
         </div>
      </div>
      <div class="row row-large" id="footer-of-footer">
         <div class="medium-5 large-5 small-12"></div>
         <div class="medium-7 large-7 small-12">
            <div class="row row-large">
               <div class="medium-6 large-6 small-12">
                  <p>DỊCH VỤ GIAO HÀNG</p>
                  <div style="display:flex;">
                     <img src="{{url('frontend/images/dichvu_img_1.png')}}" alt="dichvu_img_1" loading="lazy">
                     &nbsp;
                     <img src="{{url('frontend/images/dichvu_img_2.png')}}" alt="dichvu_img_2" loading="lazy">
                     &nbsp;
                     <img src="{{url('frontend/images/dichvu_img_3.png')}}" alt="dichvu_img_3" loading="lazy">
                     &nbsp;
                  </div>
               </div>
               <div class="medium-6 large-6 small-12">
                  <p>KÊNH THƯƠNG MẠI ĐIỆN TỬ</p>
                  <div style="display:flex;"  class="img-ct">
                     <a href="{{$setting->fbPixel}}" target="_blank">
                        <img src="{{url('frontend/images/ft_facebook_icon1.png')}}" alt="ft_facebook_icon1" loading="lazy">
                     </a>
                     &nbsp;&nbsp;&nbsp;
                     <a href="{{$setting->GA}}" target="_blank">
                        <img src="{{url('frontend/images/ft_instagram_icon1.png')}}" alt="ft_instagram_icon1" loading="lazy">
                     </a>
                     &nbsp;&nbsp;&nbsp;
                     <a href="{{$setting->google}}" target="_blank">
                        <img src="{{url('frontend/images/ft_twitter_icon1.png')}}" alt="ft_twitter_icon1" loading="lazy">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <style>
         @media only screen and (max-width: 768px) {
            #footer-of-footer {
               display: none!important;
            }
            #footer .footer-section .row {
               display: block;
            }
         }
         .img-ct img{
            height: 40px !important;
            width: 40px !important;
            background-size: cover;
         }
      </style>
      <style>
         #footer-of-footer img{
            width: 90px;
            height: 56px;
         }
         #section_948757949 {
            padding-bottom: 30px;
         }
      </style>
   </section>
   <a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline hide-for-medium circle" id="top-link"><i class="icon-angle-up" ></i></a>
</footer>