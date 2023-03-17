<!DOCTYPE html>
<html lang="vi">
   <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <title>@yield('title')</title>
   <meta name="keywords" content="@yield('title')"/>
   <meta name="robots" content="noodp,index,follow" />
   <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
   <meta name="csrf-token" content="{{ csrf_token() }}" />
   <meta name="description" content="@yield('description')" />
   <link rel="canonical" href="{{url()->current()}}" />
   <meta property="og:locale" content="vi_VN" />
   <meta property="og:type" content="article" />
   <meta property="og:title" content="@yield('title')" />
   <meta property="og:description" content="@yield('description')" />
   <meta property="og:url" content="{{url()->current()}}" />
   <meta property="og:site_name" content="{{url()->current()}}" />
   <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
   <meta property="og:image" content="@yield('image')" />
   <meta property="og:image:secure_url" content="@yield('image')" />
   <meta property="og:image:width" content="598" />
   <meta property="og:image:height" content="333" />
   <meta property="og:image:alt" content="luckysoundvn" />
   <meta property="og:image:type" content="image/jpeg" />
   <meta name="twitter:card" content="summary_large_image" />
   <meta name="twitter:title" content="@yield('title')" />
   <meta name="twitter:description" content="@yield('description')" />
   <meta name="twitter:image" content="@yield('image')" />
   <!-- Fav Icon -->
   <link rel="icon" href="{{url(''.$setting->favicon)}}" type="image/x-icon">
   <link rel='stylesheet' id='dashicons-css'  href='{{ asset('frontend/css/dashicons.min.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' id='menu-icons-extra-css'  href='{{ asset('frontend/css/extra.min.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' id='contact-form-7-css'  href='{{ asset('frontend/css/styles.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' id='ot-vertical-menu-css-css'  href='{{ asset('frontend/css/style.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' id='pwb-styles-frontend-css'  href='{{ asset('frontend/css/styles-frontend.min.css') }}' type='text/css' media='all' />
   <style id='woocommerce-inline-inline-css' type='text/css'>
      .woocommerce form .form-row .required { visibility: visible; }
   </style>
   <link rel='stylesheet' id='flatsome-woocommerce-wishlist-css'  href='{{ asset('frontend/css/wishlist.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' id='flatsome-main-css'  href='{{ asset('frontend/css/flatsome.css') }}' type='text/css' media='all' />
   <style id='flatsome-main-inline-css' type='text/css'>
      @font-face {
      font-family: "fl-icons";
      font-display: block;
      src: url(https://cameraquansat.net.vn/wp-content/themes/flatsome/assets/css/icons/fl-icons.eot?v=3.14.1);
      src:
      url(https://cameraquansat.net.vn/wp-content/themes/flatsome/assets/css/icons/fl-icons.eot#iefix?v=3.14.1) format("embedded-opentype"),
      url('/frontend/fonts/fl-icons.woff2') format("woff2"),
      url('/frontend/fonts/fl-icons.ttf') format("truetype"),
      url('/frontend/fonts/fl-icons.woff') format("woff"),
      url(https://cameraquansat.net.vn/wp-content/themes/flatsome/assets/css/icons/fl-icons.svg?v=3.14.1#fl-icons) format("svg");
      }
   </style>
   @yield('css')
   <link rel='stylesheet' id='flatsome-shop-css'  href='{{ asset('frontend/css/flatsome-shop.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' id='flatsome-style-css'  href='{{ asset('frontend/css/lap-style.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' id='flatsome-googlefonts-css'  href='{{ asset('frontend/css/css.css') }}' type='text/css' media='all' />
   {{-- <script type='text/javascript' src='{{ asset('frontend/js/jquery.min.js') }}' id='jquery-core-js'></script> --}}
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script type='text/javascript' src='{{ asset('frontend/js/jquery-migrate.min.js') }}' id='jquery-migrate-js'></script>
   <script type='text/javascript' src='{{ asset('frontend/js/notify.min.js') }}'></script>

   @yield('js')
   <script async src="{{ asset('frontend/js/js.js') }}"></script>
   <script src="https://kit.fontawesome.com/d3f77edfc2.js" crossorigin="anonymous"></script>
   <style id="custom-css" type="text/css">
   :root {--primary-color: #105caa;}.full-width .ubermenu-nav, .container, .row{max-width: 1280px}.row.row-collapse{max-width: 1252px}.row.row-small{max-width: 1280px}.row.row-large{max-width: 1280px}.header-main{height: 90px}#logo img{max-height: 90px}#logo{width:250px;}.header-bottom{min-height: 45px}.header-top{min-height: 40px}.transparent .header-main{height: 90px}.transparent #logo img{max-height: 90px}.has-transparent + .page-title:first-of-type,.has-transparent + #main > .page-title,.has-transparent + #main > div > .page-title,.has-transparent + #main .page-header-wrapper:first-of-type .page-title{padding-top: 170px;}.header.show-on-scroll,.stuck .header-main{height:70px!important}.stuck #logo img{max-height: 70px!important}.search-form{ width: 60%;}.header-bottom {background-color: #105caa}.top-bar-nav > li > a{line-height: 16px }.stuck .header-main .nav > li > a{line-height: 50px }.header-bottom-nav > li > a{line-height: 16px }@media (max-width: 549px) {.header-main{height: 70px}#logo img{max-height: 70px}}.nav-dropdown{border-radius:15px}.nav-dropdown{font-size:100%}.header-top{background-color:#59595c!important;}/* Color */.accordion-title.active, .has-icon-bg .icon .icon-inner,.logo a, .primary.is-underline, .primary.is-link, .badge-outline .badge-inner, .nav-outline > li.active> a,.nav-outline >li.active > a, .cart-icon strong,[data-color='primary'], .is-outline.primary{color: #105caa;}/* Color !important */[data-text-color="primary"]{color: #105caa!important;}/* Background Color */[data-text-bg="primary"]{background-color: #105caa;}/* Background */.scroll-to-bullets a,.featured-title, .label-new.menu-item > a:after, .nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,button[type="submit"], .button.wc-forward:not(.checkout):not(.checkout-button), .button.submit-button, .button.primary:not(.is-outline),.featured-table .title,.is-outline:hover, .has-icon:hover .icon-label,.nav-dropdown-bold .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold > li > a:hover, .nav-dropdown-bold.dark .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold.dark > li > a:hover, .is-outline:hover, .tagcloud a:hover,.grid-tools a, input[type='submit']:not(.is-form), .box-badge:hover .box-text, input.button.alt,.nav-box > li > a:hover,.nav-box > li.active > a,.nav-pills > li.active > a ,.current-dropdown .cart-icon strong, .cart-icon:hover strong, .nav-line-bottom > li > a:before, .nav-line-grow > li > a:before, .nav-line > li > a:before,.banner, .header-top, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover, .button.primary:not(.is-outline), input[type='submit'].primary, input[type='submit'].primary, input[type='reset'].button, input[type='button'].primary, .badge-inner{background-color: #105caa;}/* Border */.nav-vertical.nav-tabs > li.active > a,.scroll-to-bullets a.active,.nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,.accordion-title.active,.featured-table,.is-outline:hover, .tagcloud a:hover,blockquote, .has-border, .cart-icon strong:after,.cart-icon strong,.blockUI:before, .processing:before,.loading-spin, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover{border-color: #105caa}.nav-tabs > li.active > a{border-top-color: #105caa}.widget_shopping_cart_content .blockUI.blockOverlay:before { border-left-color: #105caa }.woocommerce-checkout-review-order .blockUI.blockOverlay:before { border-left-color: #105caa }/* Fill */.slider .flickity-prev-next-button:hover svg,.slider .flickity-prev-next-button:hover .arrow{fill: #105caa;}/* Background Color */[data-icon-label]:after, .secondary.is-underline:hover,.secondary.is-outline:hover,.icon-label,.button.secondary:not(.is-outline),.button.alt:not(.is-outline), .badge-inner.on-sale, .button.checkout, .single_add_to_cart_button, .current .breadcrumb-step{ background-color:#ff0000; }[data-text-bg="secondary"]{background-color: #f59120;}/* Color */.secondary.is-underline,.secondary.is-link, .secondary.is-outline,.stars a.active, .star-rating:before, .woocommerce-page .star-rating:before,.star-rating span:before, .color-secondary{color: #f59120}/* Color !important */[data-text-color="secondary"]{color: #f59120!important;}/* Border */.secondary.is-outline:hover{border-color:#f59120}body{font-size: 100%;}body{font-family: 'Arial';font-weight: normal;}body{font-weight: 0}body{color: #000000}.nav > li > a {font-family: 'Arial';}.mobile-sidebar-levels-2 .nav > li > ul > li > a {font-family: 'Arial';}.nav > li > a {font-weight: normal;}.mobile-sidebar-levels-2 .nav > li > ul > li > a {font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a{font-family: 'Arial';}h1,h2,h3,h4,h5,h6,.heading-font,.banner h1,.banner h2{font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font{color: #59595c;}.alt-font{font-family: 'Arial';}.alt-font{font-weight: 0!important;}.header:not(.transparent) .header-bottom-nav.nav > li > a{color: #ffffff;letter-spacing: .05em;font-size: 14px;}.header:not(.transparent) .header-bottom-nav.nav > li > a:hover,.header:not(.transparent) .header-bottom-nav.nav > li.active > a,.header:not(.transparent) .header-bottom-nav.nav > li.current > a,.header:not(.transparent) .header-bottom-nav.nav > li > a.active,.header:not(.transparent) .header-bottom-nav.nav > li > a.current{color: #f69320;}.header-bottom-nav.nav-line-bottom > li > a:before,.header-bottom-nav.nav-line-grow > li > a:before,.header-bottom-nav.nav-line > li > a:before,.header-bottom-nav.nav-box > li > a:hover,.header-bottom-nav.nav-box > li.active > a,.header-bottom-nav.nav-pills > li > a:hover,.header-bottom-nav.nav-pills > li.active > a{color:#FFF!important;background-color: #105caa;}a{color: #000000;}a:hover{color: #105caa;}.tagcloud a:hover{border-color: #105caa;background-color: #105caa;}.shop-page-title.featured-title .title-overlay{background-color: #ffffff;}.has-equal-box-heights .box-image {padding-top: 100%;}.price del, .product_list_widget del, del .woocommerce-Price-amount { color: #c80d0d; }ins .woocommerce-Price-amount { color: #c80d0d; }@media screen and (min-width: 550px){.products .box-vertical .box-image{min-width: 300px!important;width: 300px!important;}}.absolute-footer, html{background-color: #105caa}/* Custom CSS *//* Css Menu */.slider-nav-reveal .flickity-prev-next-button {background-color: transparent !important;box-shadow: inherit !important;}.slider-nav-reveal .flickity-prev-next-button svg {height: 62px;width: 32px;border: 1px solid #f1f5f6;border-radius: 4px;background-color: #fff;box-shadow: 0 7px 10px 0 rgba(72,139,216,.2);border: none;}.cot-danh-muc {max-width: 263px !important;}.slide {display: inline-block;width: 100%;float: left;margin-right: 10px;}.slide .carousel {background: #FAFAFA;}.slide .carousel .carousel-nav {position: absolute;bottom: 0;margin: 0 auto;left: 0;right: 0;}.carousel {background: #EEE;}.slide .carousel-cell {width: 100%;counter-increment: carousel-cell;}.carousel-cell {position: relative;overflow: hidden;}.slide .carousel-cell.is-selected.is-nav-selected {font-weight: 700;border-bottom: 4px solid red;padding-bottom: 6px;}.slide .carousel-nav .carousel-cell {text-align: center;cursor: pointer;padding: 10px;height: 55px;width: 20% !important;font-size: 13px;line-height: 15px;color: #4a4a4a;background-color: #fff;}.slide:hover .flickity-prev-next-button {opacity: 1;}.slide .carousel-nav .carousel-cell:after {content: '';float: left;height: 35px;border-left: 1px solid #F0F0F0;position: absolute;top: 8px;left: 0;}.carousel-cell img {height: 320px;right: 0;width: 100%;bottom: 0;left: 0;top: 0;object-position: 50% 50%;object-fit: cover;font-family: 'object-fit: cover;';}.slide .flickity-prev-next-button svg {height: 62px;width: 32px;border-radius: 2px;background-color: rgba(0,0,0,.5);box-shadow: 0 7px 10px 0 rgba(72,139,216,.2);border: none;color: #fff;}#mega-menu-wrap {width: 263px; background: linear-gradient(to bottom,#c80505,#880e22);}#mega_menu {position: absolute;top: 100%;margin-top: 0;left: 0;width: 100%;padding: 0;background: #f1f3f4;border-top: none;display: none; padding-bottom: 5px;}
   #mega_menu > li > a > img {margin-right: 0.8em;margin-top: -3px;}
   #mega_menu > li {border-top: none;}#mega_menu li a {color: #000000;padding-left: 13px;text-transform: none;font-weight: 400;}#mega_menu > li > ul.sub-menu { min-height: 375px;position: absolute;top:0;}#mega_menu ul.sub-menu > li > a {color: #000;}#mega_menu > li:hover > a {background: transparent;border-left: 4px solid red;}ul#mega_menu > li > ul {min-width: 100%;}#mega_menu > li {height: 41px;}form.searchform {border-radius: 2px;background-color: #fff;box-shadow: 0 0 2px 0 rgba(0,0,0,.12), 0 2px 2px 0 rgba(0,0,0,.24);height: 40px;}.searchform .button.icon {background-color: #F69320 !important;height: 40px;width: 77px;border: none;top: 0;right: 0;border-top-right-radius: 4px;border-bottom-right-radius: 4px;color: #000;}input.search-field, .search_categories {border: none;border-right: 1px solid #e5e6e7;box-shadow: none;height: 40px;}#nk-holine ul li:first-child a {color: #fdd602;}#nk-holine ul {list-style: none;font-weight: 700;font-size: 12px;padding-right: 10px;}#nk-holine ul > li{line-height: 35px;margin-bottom: 0;}#content {background: #ffffff;}.bottom-dn {color: #1fb349;font-size: 0.9em;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;width: 100%;}span.amount {color: #f86666;padding-top: 10px;}.button.success {margin-bottom: 0.5em;line-height: 40px;}.button.primary {margin-bottom: 0;}.tabbed-content .nav-tabs>li {width: 50%;margin: 0 0em;}.cot-blog .button{margin-top: 0.8em;}.cot-blog .tabbed-content .nav-tabs>li a {width: 100%;border-left:none;border-right:none;background-color: #0083c1;color: #fff;border-top-color: #0083c1;}.nav-tabs > li.active > a {background-color:#fff !important;color: #307218 !important;}.cot-blog .tabbed-content .nav-tabs>li span {margin: 0 auto;}.cot-blog .col.post-item {margin-top: 5px;border-top: 1px dotted #ddd;padding-top: 5px !important;}.cot-blog .col.post-item:first-child {border-top: none;margin-top: 5px;padding-top: 0px !important;}.cot-blog .box-vertical .box-text {padding: 0 0.5em;font-size: 1.1em;}.cot-blog .box-vertical .box-text h5 {font-weight: 400 !important;}.cot-blog .nav-tabs+.tab-panels {background-color: #fff;padding: 5px 10px;max-height: 330px;border:none;}.box-blog-post .is-divider {display: none;}.product-title.entry-title {color: #d20d14;}#content {background: #ffffff;}.slide-sp .flickity-slider>.col {padding: 0 9.8px 0px !important;}.slide-sp .box-text {padding-bottom: 0.5em;}.blog-wrapper, .page-wrapper {background-color: #fff !important;}#product-sidebar {padding: 20px 10px !important;}.product-main {padding: 20px 0;}.is-divider {display:none;}.entry-header-text {padding: 0;}.tab-home .tab.has-icon {border: 3px solid var(--primary-color);background-color: var(--primary-color);padding: 0px 10px;margin: 0;border-top: 3px solid var(--primary-color);line-height: 1.3em;}.tab-home .tab.has-icon a {color: #fff;padding: 5px;border-top: none !important;}.tab-home .tab.has-icon.active {background-color: #fff;}.tab-home .tab.has-icon.active a{color: #000;}h5.post-title.is-large {font-size: 1.2em;line-height: 1.3em;color: #3b5998!important;margin: 0 0 5px;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;max-height: 3.12em;}.tab-home .nav-line>li>a:before {height: 0px;}.danh-muc {border-bottom: 2px solid var(--primary-color);}.danh-muc .button {margin-bottom: 0;border-color: #0083c1;}.danh-muc2 .button span {line-height: 2.8;}.collap .row{margin-left: 0px !important;margin-right: 0px !important;}.collap .col {padding: 0 5px 0px;}.tab-col .col {padding-bottom: 0 !important;}.section-first {margin-top: 15px;}.icon-box-text h6 {color: #fff;text-transform: none;font-size: 1em;font-weight:500;}.icon-box-text {padding-top: 0.8em;}.uy-tin .col {padding: 0 9.8px 8px;}.entry-content {padding-top: 0.5em;padding-bottom: 1.5em;}.post-sidebar.large-3.col {padding: 0 10px 10px;}.related-gallery .gallery-item img {float: left;width: 25%;padding-right: 5px;}.related-gallery .gallery-caption {text-align: left;font-size: 0.9em;}.single-product div#tab-description {overflow: hidden;position: relative;}.single-product .tab-panels div#tab-description.panel:not(.active) {height: 0 !important;}.field-wrap input[type=button] {background-color: #ff4f00;color: #fff;}.footer .cat-item:before {content: "f105" !important;font-family: 'fl-icons';font-size: 16px;color: #7a9c59;padding-right: 10px;}.title-muc .button {line-height: 3;float: left;width: 0;height: 0;border-top: none !important;border-left: 0 solid transparent;border-radius: 0 !important;border: none;}ul li.bullet-checkmark:before {line-height: 1.8em;}.button.alt:not(.is-outline) {background-color: #d20d14;}.meta-related{display: none;}/* Css Menu */.woocommerce-Price-amount.amount{color: #f00; }/* Css bài viết liên quan */.xem-them .tieu-de-xem-them {font-weight: 700;display: block;margin-bottom: 10px;font-size: 19px;color: black;}.xem-them ul li {margin-bottom: 3px;}.xem-them ul li a {font-weight: 700;font-size: 16px;color: #105caa;}.xem-them ul li a:hover {text-decoration: underline;}.blog-single .entry-meta {text-transform: none;font-size: 14px;letter-spacing: 0;color: gray;border-top: 1px solid #e2e2e2;border-bottom: 1px solid #e2e2e2;padding: 10px;background: #f9f9f9;}.danh-muc {margin-bottom: 15px;}.danh-muc span.title, .the-tim-kiem span.title {border-radius: 4px;background: #105caa;padding: 4px 10px;color: white;margin-right: 5px;}.danh-muc a, .the-tim-kiem a {line-height:32px;border-radius: 4px;margin-bottom: 10px;background: #dedede;color: #464646;}.danh-muc a:hover, .the-tim-kiem a:hover {background: #f59120;color: white;}.bai-viet-lien-quan {margin-top: 15px;}.bai-viet-lien-quan h3 {font-size: 19px;color: black;}.bai-viet-lien-quan ul {margin-bottom: 0;display: inline-block;width: 100%;}.bai-viet-lien-quan ul li {list-style: none;width: 31%;color: graytext;float: left;padding-left: 4px;padding-right: 5px;}.bai-viet-lien-quan ul li .box-image img {height: 180px;border-radius: 4px;object-fit: cover;object-position: center;}.bai-viet-lien-quan h4 {font-size: 15px;color: black;line-height: 19px;padding-top: 7px;height: 64px;overflow: hidden;}/* Css bài viết liên quan *//*Duong dan Breadcrumbs*/.breadcrumbs {text-transform: uppercase;color: #222;font-weight: 700;letter-spacing: 0;padding: 0;}#breadcrumbs {margin-bottom: 10px;font-size: 14px;color: gray;text-transform: none;}.breadcrumbs a {color: #fba646;margin-left:0 !important;font-weight: 400;}.h6.entry-category is-xsmall{display:none}/*Duong dan Breadcrumbs*//* Custom CSS Tablet */@media (max-width: 849px){.slide .carousel-nav .carousel-cell {width: 40% !important;}}/* Custom CSS Mobile */@media (max-width: 549px){/* Css bài viết liên quan */.bai-viet-lien-quan ul li {width: 50%;}.bai-viet-lien-quan ul li .box-image img {height: 90px;}/* Css bài viết liên quan *//* Css Menu Mobile*/.after-title-info li:first-child {margin-left: 1.2em !important;}.slide .carousel-nav .carousel-cell {width: 60% !important;}.carousel-cell img {height: 50%;width: 100%;bottom: 0;left: 0;top: 0;object-position: 50% 50%;object-fit: cover;font-family: 'object-fit: cover;';right: 0;}/* Css Menu Mobile*/}.label-new.menu-item > a:after{content:"New";}.label-hot.menu-item > a:after{content:"Hot";}.label-sale.menu-item > a:after{content:"Sale";}.label-popular.menu-item > a:after{content:"Popular";}
   @media only screen and (max-width: 768px) {
      .header-top {
         min-height: 45px;
      }
      .header-top img{
         min-height: 45px;
      }
      .title-muc .button {
         line-height: 0;
         height: auto !important;
      }
   }
   </style>
   </head>
   <body class="page-template page-template-page-blank page-template-page-blank-php page page-id-2 theme-flatsome ot-vertical-menu ot-submenu-top ot-menu-show-home woocommerce-no-js full-width lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow nav-dropdown-has-border {{ Route::currentRouteName() == 'home' ? 'home' : '' }}">
   <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
   <div id="wrapper">
      @include('layouts.header.index')
      @yield('content')
      @include('layouts.footer.index')
   </div>
   <div class="list-social">
      <div class="row-social">
         <div class="social-colum social-01">
            <a target="_blank" href="{{$setting->google}}">
               <img src="{{url('frontend/images/icon-ytb.png')}}" class="lazyloaded" data-ll-status="loaded">
               <span>Youtube</span>
            </a>
         </div>
         <div class="social-colum social-02">
            <a target="_blank" href="https://www.google.com/maps/place/{{$setting->address1}}">
               <img src="{{url('frontend/images/icon-map.png')}}" class="lazyloaded" data-ll-status="loaded">
               <span>Chỉ đường</span>
            </a>
         </div>
         <div class="social-colum social-03">
            <a target="_blank" href="{{$setting->facebook}}">
               <img src="{{url('frontend/images/facebook.png')}}" class="lazyloaded" data-ll-status="loaded">
               <span>Facebook</span>
            </a>
         </div>
         <div class="social-colum social-04">
            <a href="tel:{{$setting->phone1}}">
               <img src="{{url('frontend/images/hotline.png')}}" class="lazyloaded" data-ll-status="loaded">
               <span>{{$setting->phone1}}</span>
            </a>
         </div>
      </div>
   </div>
   @include('layouts.main.mobile-sidebar')
   <style>
      .list-social {
         z-index: 1;
         position: relative;
      }
      .list-social .social-01 {
         top: 250px;
      }
      .list-social .social-02 {
         top: 354px;
      }
      .list-social .social-03 {
         top: 406px;
      }
      .list-social .social-04 {
         top: 302px;
      }
      .list-social .social-colum {
         position: fixed;
         right: 0;
      }
      .list-social a {
         display: flex;
         width: auto;
         align-items: center;
         box-shadow: 0 0 6px 1px #1f1e1e70;
         padding: 10px 10px 10px 15px;
         border-top-left-radius: 4px;
         border-bottom-left-radius: 4px;
      }
      .list-social a span, .list-social a {
         text-transform: none;
         color: #fff;
         font-size: 0;
         font-weight: 500;
         transition: 1s;
      }
      .list-social a img {
         padding: 0;
         margin-right: 10px;
         max-height: 25px;
         width: auto;
         border-right: none;
      }
      .list-social .social-01 a {
         background: red;
      }
      .list-social .social-02 a {
         background: #0089fd;
      }
      .list-social .social-03 a {
         background: #4267b2;
      }
      .list-social .social-04 a {
         background: #F87C00;
      }
      .list-social .social-colum a:hover span {
         font-size: 16px;
      }
      @media only screen and (max-width: 768px) {
         .list-social .social-colum a:hover span {
            font-size: 0px;
         }
         .list-social a {
         padding: 10px 10px 18px 18px;
         border-top-left-radius: 4px;
         border-top-right-radius: 4px;
         border-bottom-left-radius: 4px;
      }
      }
   </style>
   <style>
      .bottom-contact{display:none}
      @media  (max-width: 767px) {
      .bottom-contact{display: block;
      position: fixed;
      bottom: 0;
      background: white;
      width: 100%;
      z-index: 99;
      box-shadow: 2px 1px 9px #dedede;
      border-top: 1px solid #eaeaea;}
      .bottom-contact ul li{width: 25%;
      float: left;
      list-style: none;
      text-align: center; font-size:13.5px;}
      .bottom-contact ul li span{color:black}
      .bottom-contact ul li img{    width: 35px;
      margin-top: 10px;
      margin-bottom: 0px;}
      }
   </style>
   {{-- @include('layouts.main.bottom-contact') --}}
   <script type='text/javascript' src='{{ asset('frontend/js/hoverIntent.js') }}' id='ot-hoverIntent-js'></script>
   <script type='text/javascript' src='{{ asset('frontend/js/superfish.min.js') }}' id='ot-superfish-js'></script>
   <script type='text/javascript' src='{{ asset('frontend/js/ot-vertical-menu.min.js') }}' id='ot-vertical-menu-js'></script>
   <script type='text/javascript' id='flatsome-js-js-extra'>
      /* <![CDATA[ */
      var flatsomeVars = {"ajaxurl":"","rtl":"","sticky_height":"70","assets_url":"","lightbox":{"close_markup":"<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>","close_btn_inside":false},"user":{"can_edit_pages":false},"i18n":{"mainMenu":"Main Menu"},"options":{"cookie_notice_version":"1","swatches_layout":false,"swatches_box_select_event":false,"swatches_box_behavior_selected":false,"swatches_box_update_urls":"1","swatches_box_reset":false,"swatches_box_reset_extent":false,"swatches_box_reset_time":300,"search_result_latency":"0"},"is_mini_cart_reveal":"1"};
      /* ]]> */
   </script>
   <script type='text/javascript' src='{{ asset('frontend/js/flatsome.js') }}' id='flatsome-js-js'></script>
   <script type='text/javascript' src='{{ asset('frontend/js/woocommerce.js') }}' id='flatsome-theme-woocommerce-js-js'></script>
   <script>
      $(function() {
         $('.add-to-cart').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            let quantity = $(this).parents().find('input[name=quantity]').val();
            let urlCart = $(this).data('url');
            let urlRedirect = $(this).data('redirect');
            $.ajax({
               type: 'post',
               url: urlCart,
               headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
               data: {id: id, quantity: quantity},
               success: function(data) {
                  window.location.replace(urlRedirect);
                  $.notify("Thêm vào giỏ hàng thành công!", "success");
               },
               error: function(data) {
                  $.notify("Thêm vào giỏ hàng thất bại!", "error");
               }
            })
         });
         $('.removeCart').on('click', function(e) {
            e.preventDefault();
            let urlRemoveCart = $(this).data('url');
            $.ajax({
               type: 'get',
               url: urlRemoveCart,
               success: function(data) {
                  window.location.reload();
                  $.notify("Xoá khỏi giỏ hàng thành công!", "success");
               },
               error: function(data) {
                  $.notify("Xóa giỏ hàng thất bại!", "error");
               }
            })
         })
         $('.btn-minus').click(function() {
            var id = $(this).parent().data('id');
            var url = $(this).parent().data('url');
            var result = document.getElementById('quantity_'+id); var qty = result.value; if( !isNaN( qty ) && qty > 1 ) result.value--;
            var quantity= result.value;
            console.log(quantity);
            $.ajax({
               type: 'post',
               url: url,
               headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
               data: {id: id, quantity:quantity},
               success: function(data) {
                  window.location.reload();
               }
            })
         })
         $('.btn-plus').click(function() {
            var id = $(this).parent().data('id');
            var url = $(this).parent().data('url');
            var result = document.getElementById('quantity_'+id); var qty = result.value; if( !isNaN( qty )) result.value++;
            var quantity= result.value;
            console.log(quantity);
            $.ajax({
               type: 'post',
               url: url,
               headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
               data: {id: id, quantity:quantity},
               success: function(data) {
                  window.location.reload();
               }
            })
         })
      })
   </script>
   </body>
</html>