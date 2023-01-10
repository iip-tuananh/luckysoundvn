<footer id="footer" class="footer-wrapper">
   <section class="section footer-section" id="section_948757949">
      <div class="bg section-bg fill bg-fill bg-loaded bg-loaded" >
      </div>
      <div class="section-content relative">
      <div class="row row-large"  id="row-1850732756">
         <div id="col-149956225" class="col medium-5 small-12 large-5"  >
               <div class="col-inner"  >
                  <p style="text-align: justify;
                  background-color: #105caa;
                  padding: 10px 15px;
                  color: #ffff;"><strong>LUCKY SOUND</strong></p>
                  <p style="text-align: justify;"><i class="icon-shopping-cart"></i>  {{ $setting->company }}</p>
                  {{-- <span style="text-align: justify;">{{$setting->webname}}</span> --}}
                  <p><i class="icon-checkmark"></i>  Website: <a target="_blank" href="{{route('home')}}">{{route('home')}}</a></p>
                  {{-- <p><i class="icon-facebook"></i>  Facebook: <a href="{{$setting->facebook}}" target="_blank">{{$setting->facebook}}</a></p>
                  <p><i class="icon-youtube"></i>  YouTube: <a href="{{$setting->google}}" target="_blank">{{$setting->google}}</a></p> --}}
                  <p><i class="icon-map-pin-fill"></i>  <a href="https://www.google.com/maps/place/{{$setting->address1}}" target="_blank" rel="noopener noreferrer">{{$setting->address1}}</a></p>
                  <p>Hotline 1: <a href="tel:{{$setting->phone1}}" target="_blank" rel="noopener noreferrer" style="color: #e83a3a">{{$setting->phone1}}</a></p>
                  @if (isset($setting->phone2))
                  <p>Hotline 2: <a href="tel:{{$setting->phone2}}" target="_blank" rel="noopener noreferrer" style="color: #e83a3a">{{$setting->phone2}}</a></p>
                  @endif
                  @if (isset($setting->phone3))
                  <p>Kỹ thuật: <a href="tel:{{$setting->phone3}}" target="_blank" rel="noopener noreferrer" style="color: #e83a3a">{{$setting->phone3}}</a></p>
                  @endif
               </div>
            <style>
               #col-149956225 i {
                  color:#105caa; 
               }
            </style>
         </div>
         <div id="col-1493538928" class="col medium-7 small-12 large-7"  >
               <div class="col-inner"  >
                  <div class="row row-small"  id="row-2108084258">
                  <div id="col-712618223" class="col medium-6 small-12 large-6"  >
                     <div class="col-inner"  >
                           <p style="text-align: justify;
                           background-color: #105caa;
                           padding: 10px 15px;
                           color: #ffff;"><strong>THÔNG TIN, CHÍNH SÁCH</strong></p>
                           <ul>
                              @foreach ($helpCus as $item)
                              <li style="text-align: justify;"><a href="{{route('helpCus', ['slug'=>$item->slug])}}">{{$item->title}}</a></li>
                              @endforeach
                           </ul>
                     </div>
                  </div>
                  <div id="col-1081915389" class="col medium-6 small-12 large-6"  >
                     <div class="col-inner"  >
                           <p style="text-align: justify;
                           background-color: #105caa;
                           padding: 10px 15px;
                           color: #ffff;"><strong>Bản đồ</strong></p>
                           {!! $setting->iframe_map !!}
                     </div>
                  </div>
                  </div>
               </div>
         </div>
      </div>
      <div class="row row-large" id="footer-of-footer">
         <div class="medium-4 large-4 small-4"></div>
         <div class="medium-4 large-4 small-4">
            <p>DỊCH VỤ GIAO HÀNG</p>
            <div style="display:flex;">
               <img src="{{url('frontend/images/unnamed.png')}}" alt="">
               <img src="{{url('frontend/images/grab.jpg')}}" alt="">
               <img src="{{url('frontend/images/vietnam-post.png')}}" alt="">
            </div>
         </div>
         <div class="medium-4 large-4 small-4">
            <p>KÊNH THƯƠNG MẠI ĐIỆN TỬ</p>
         </div>
      </div>
      </div>
      <style>
         @media only screen and (max-width: 768px) {
            #footer-of-footer{
               display: none;
            }
         }
         #footer-of-footer img{
            width: 90px;
            height: 56px;
         }
         #section_948757949 {
            padding-top: 30px;
            padding-bottom: 30px;
         }
      </style>
   </section>
   <a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline hide-for-medium circle" id="top-link"><i class="icon-angle-up" ></i></a>
</footer>