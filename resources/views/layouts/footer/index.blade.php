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
                  color: #ffff;"><strong>Về chúng tôi</strong></p>
                  <p style="text-align: justify;">{{ $setting->webname }}</p>
                  <p style="text-align: justify;">Hãy liên hệ với chúng tôi để nhận được tư vấn báo giá tốt nhất.</p>
                  <div class="social-icons follow-icons" >
                     <a href="{{ $setting->facebook }}" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon primary button circle facebook tooltip" title="Follow on Facebook" aria-label="Follow on Facebook"><i class="icon-facebook" ></i></a>
                     <a href="mailto:{{$setting->email}}" data-label="E-mail" rel="nofollow" class="icon primary button circle  email tooltip" title="Send us an email" aria-label="Send us an email"><i class="icon-envelop" ></i></a>
                     <a href="tel:{{$setting->phone1}}" target="_blank" data-label="Phone" rel="noopener noreferrer nofollow" class="icon primary button circle  phone tooltip" title="Call us" aria-label="Call us"><i class="icon-phone" ></i></a>
                  </div>
               </div>
         </div>
         <div id="col-1493538928" class="col medium-7 small-12 large-7"  >
               <div class="col-inner"  >
                  <div class="row row-small"  id="row-2108084258">
                  <div id="col-712618223" class="col medium-6 small-12 large-6"  >
                     <div class="col-inner"  >
                           <p style="text-align: justify;
                           background-color: #105caa;
                           padding: 10px 15px;
                           color: #ffff;"><strong>Trụ sở</strong></p>
                           <ul>
                              <li style="text-align: justify;">Trụ sở: {{$setting->address1}}</li>
                              @if ($setting->address2)
                              <li style="text-align: justify;">Văn phòng: {{$setting->address2}}</li>
                              @endif
                              <li style="text-align: justify;">Hotline: {{$setting->phone1}} {{isset($setting->phone2) ? '- '. $setting->phone2 : '' }} {{isset($setting->fax) ? '- '.$setting->fax : ''}}</li>
                              <li>Email: <a href="mailto:{{$setting->email}}">{{$setting->email}}</a></li>
                              <li>Website: <a href="{{route('home')}}">{{route('home')}}</a></li>
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
      </div>
      <style>
      #section_948757949 {
      padding-top: 30px;
      padding-bottom: 30px;
      }
      </style>
   </section>
   <div class="absolute-footer dark medium-text-center small-text-center">
      <div class="container clearfix">
      <div class="footer-primary pull-left">
         <div class="copyright-footer">
               Copyright 2022 &copy; <strong>{{$setting->company}}</strong> <strong>Design By SBT</strong>     
         </div>
      </div>
      </div>
   </div>
   <a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline hide-for-medium circle" id="top-link"><i class="icon-angle-up" ></i></a>
</footer>