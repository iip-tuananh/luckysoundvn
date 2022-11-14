<!DOCTYPE html>
<!--[if IE 9 ]> 
<html lang="vi" class="ie9 loading-site no-js">
<![endif]-->
<!--[if IE 8 ]> 
<html lang="vi" class="ie8 loading-site no-js">
<![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="vi" class="loading-site no-js">
   <!--<![endif]-->
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
   <meta property="og:site_name" content="ahometh.vn" />
   <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
   <meta property="og:image" content="@yield('image')" />
   <meta property="og:image:secure_url" content="@yield('image')" />
   <meta property="og:image:width" content="598" />
   <meta property="og:image:height" content="333" />
   <meta property="og:image:alt" content="ahome-noi-that" />
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
   <link rel='stylesheet' id='flatsome-shop-css'  href='{{ asset('frontend/css/flatsome-shop.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' id='flatsome-style-css'  href='{{ asset('frontend/css/lap-style.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' id='flatsome-googlefonts-css'  href='{{ asset('frontend/css/css.css') }}' type='text/css' media='all' />
   {{-- <script type='text/javascript' src='{{ asset('frontend/js/jquery.min.js') }}' id='jquery-core-js'></script> --}}
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script type='text/javascript' src='{{ asset('frontend/js/jquery-migrate.min.js') }}' id='jquery-migrate-js'></script>
   <script type='text/javascript' src='{{ asset('frontend/js/notify.min.js') }}'></script>
   <script async src="{{ asset('frontend/js/js.js') }}"></script>
   <style type="text/css">div.nsl-container[data-align="left"] {
      text-align: left;
      }
      div.nsl-container[data-align="center"] {
      text-align: center;
      }
      div.nsl-container[data-align="right"] {
      text-align: right;
      }
      div.nsl-container .nsl-container-buttons a {
      text-decoration: none !important;
      box-shadow: none !important;
      border: 0;
      }
      div.nsl-container .nsl-container-buttons {
      display: flex;
      padding: 5px 0;
      }
      div.nsl-container.nsl-container-block .nsl-container-buttons {
      display: inline-grid;
      grid-template-columns: minmax(145px, auto);
      }
      div.nsl-container-block-fullwidth .nsl-container-buttons {
      flex-flow: column;
      align-items: center;
      }
      div.nsl-container-block-fullwidth .nsl-container-buttons a,
      div.nsl-container-block .nsl-container-buttons a {
      flex: 1 1 auto;
      display: block;
      margin: 5px 0;
      width: 100%;
      }
      div.nsl-container-inline {
      margin: -5px;
      text-align: left;
      }
      div.nsl-container-inline .nsl-container-buttons {
      justify-content: center;
      flex-wrap: wrap;
      }
      div.nsl-container-inline .nsl-container-buttons a {
      margin: 5px;
      display: inline-block;
      }
      div.nsl-container-grid .nsl-container-buttons {
      flex-flow: row;
      align-items: center;
      flex-wrap: wrap;
      }
      div.nsl-container-grid .nsl-container-buttons a {
      flex: 1 1 auto;
      display: block;
      margin: 5px;
      max-width: 280px;
      width: 100%;
      }
      @media only screen and (min-width: 650px) {
      div.nsl-container-grid .nsl-container-buttons a {
      width: auto;
      }
      }
      div.nsl-container .nsl-button {
      cursor: pointer;
      vertical-align: top;
      border-radius: 4px;
      }
      div.nsl-container .nsl-button-default {
      color: #fff;
      display: flex;
      }
      div.nsl-container .nsl-button-icon {
      display: inline-block;
      }
      div.nsl-container .nsl-button-svg-container {
      flex: 0 0 auto;
      padding: 8px;
      display: flex;
      align-items: center;
      }
      div.nsl-container svg {
      height: 24px;
      width: 24px;
      vertical-align: top;
      }
      div.nsl-container .nsl-button-default div.nsl-button-label-container {
      margin: 0 24px 0 12px;
      padding: 10px 0;
      font-family: Helvetica, Arial, sans-serif;
      font-size: 16px;
      line-height: 20px;
      letter-spacing: .25px;
      overflow: hidden;
      text-align: center;
      text-overflow: clip;
      white-space: nowrap;
      flex: 1 1 auto;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      text-transform: none;
      display: inline-block;
      }
      div.nsl-container .nsl-button-google[data-skin="dark"] .nsl-button-svg-container {
      margin: 1px;
      padding: 7px;
      border-radius: 3px;
      background: #fff;
      }
      div.nsl-container .nsl-button-google[data-skin="light"] {
      border-radius: 1px;
      box-shadow: 0 1px 5px 0 rgba(0, 0, 0, .25);
      color: RGBA(0, 0, 0, 0.54);
      }
      div.nsl-container .nsl-button-apple .nsl-button-svg-container {
      padding: 0 6px;
      }
      div.nsl-container .nsl-button-apple .nsl-button-svg-container svg {
      height: 40px;
      width: auto;
      }
      div.nsl-container .nsl-button-apple[data-skin="light"] {
      color: #000;
      box-shadow: 0 0 0 1px #000;
      }
      div.nsl-container .nsl-button-facebook[data-skin="white"] {
      color: #000;
      box-shadow: inset 0 0 0 1px #000;
      }
      div.nsl-container .nsl-button-facebook[data-skin="light"] {
      color: #1877F2;
      box-shadow: inset 0 0 0 1px #1877F2;
      }
      div.nsl-container .nsl-button-apple div.nsl-button-label-container {
      font-size: 17px;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
      }
      div.nsl-container .nsl-button-slack div.nsl-button-label-container {
      font-size: 17px;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
      }
      div.nsl-container .nsl-button-slack[data-skin="light"] {
      color: #000000;
      box-shadow: inset 0 0 0 1px #DDDDDD;
      }
      .nsl-clear {
      clear: both;
      }
      .nsl-container {
      clear: both;
      }
      /*Button align start*/
      div.nsl-container-inline[data-align="left"] .nsl-container-buttons {
      justify-content: flex-start;
      }
      div.nsl-container-inline[data-align="center"] .nsl-container-buttons {
      justify-content: center;
      }
      div.nsl-container-inline[data-align="right"] .nsl-container-buttons {
      justify-content: flex-end;
      }
      div.nsl-container-grid[data-align="left"] .nsl-container-buttons {
      justify-content: flex-start;
      }
      div.nsl-container-grid[data-align="center"] .nsl-container-buttons {
      justify-content: center;
      }
      div.nsl-container-grid[data-align="right"] .nsl-container-buttons {
      justify-content: flex-end;
      }
      div.nsl-container-grid[data-align="space-around"] .nsl-container-buttons {
      justify-content: space-around;
      }
      div.nsl-container-grid[data-align="space-between"] .nsl-container-buttons {
      justify-content: space-between;
      }
      /* Button align end*/
      /* Redirect */
      #nsl-redirect-overlay {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      position: fixed;
      z-index: 1000000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      backdrop-filter: blur(1px);
      background-color: RGBA(0, 0, 0, .32);;
      }
      #nsl-redirect-overlay-container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      }
      #nsl-redirect-overlay-spinner {
      content: '';
      display: block;
      margin: 20px;
      border: 9px solid RGBA(0, 0, 0, .6);
      border-top: 9px solid #fff;
      border-radius: 50%;
      box-shadow: inset 0 0 0 1px RGBA(0, 0, 0, .6), 0 0 0 1px RGBA(0, 0, 0, .6);
      width: 40px;
      height: 40px;
      animation: nsl-loader-spin 2s linear infinite;
      }
      @keyframes nsl-loader-spin {
      0% {
      transform: rotate(0deg)
      }
      to {
      transform: rotate(360deg)
      }
      }
      #nsl-redirect-overlay-title {
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
      font-size: 18px;
      font-weight: bold;
      color: #3C434A;
      }
      #nsl-redirect-overlay-text {
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
      text-align: center;
      font-size: 14px;
      color: #3C434A;
      }
      /* Redirect END*/
   </style>
   <style id="custom-css" type="text/css">:root {--primary-color: #105caa;}.full-width .ubermenu-nav, .container, .row{max-width: 1140px}.row.row-collapse{max-width: 1110px}.row.row-small{max-width: 1132.5px}.row.row-large{max-width: 1170px}.header-main{height: 90px}#logo img{max-height: 90px}#logo{width:200px;}.header-bottom{min-height: 45px}.header-top{min-height: 40px}.transparent .header-main{height: 90px}.transparent #logo img{max-height: 90px}.has-transparent + .page-title:first-of-type,.has-transparent + #main > .page-title,.has-transparent + #main > div > .page-title,.has-transparent + #main .page-header-wrapper:first-of-type .page-title{padding-top: 170px;}.header.show-on-scroll,.stuck .header-main{height:70px!important}.stuck #logo img{max-height: 70px!important}.search-form{ width: 60%;}.header-bottom {background-color: #105caa}.top-bar-nav > li > a{line-height: 16px }.stuck .header-main .nav > li > a{line-height: 50px }.header-bottom-nav > li > a{line-height: 16px }@media (max-width: 549px) {.header-main{height: 70px}#logo img{max-height: 70px}}.nav-dropdown{border-radius:15px}.nav-dropdown{font-size:100%}.header-top{background-color:#59595c!important;}/* Color */.accordion-title.active, .has-icon-bg .icon .icon-inner,.logo a, .primary.is-underline, .primary.is-link, .badge-outline .badge-inner, .nav-outline > li.active> a,.nav-outline >li.active > a, .cart-icon strong,[data-color='primary'], .is-outline.primary{color: #105caa;}/* Color !important */[data-text-color="primary"]{color: #105caa!important;}/* Background Color */[data-text-bg="primary"]{background-color: #105caa;}/* Background */.scroll-to-bullets a,.featured-title, .label-new.menu-item > a:after, .nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,button[type="submit"], .button.wc-forward:not(.checkout):not(.checkout-button), .button.submit-button, .button.primary:not(.is-outline),.featured-table .title,.is-outline:hover, .has-icon:hover .icon-label,.nav-dropdown-bold .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold > li > a:hover, .nav-dropdown-bold.dark .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold.dark > li > a:hover, .is-outline:hover, .tagcloud a:hover,.grid-tools a, input[type='submit']:not(.is-form), .box-badge:hover .box-text, input.button.alt,.nav-box > li > a:hover,.nav-box > li.active > a,.nav-pills > li.active > a ,.current-dropdown .cart-icon strong, .cart-icon:hover strong, .nav-line-bottom > li > a:before, .nav-line-grow > li > a:before, .nav-line > li > a:before,.banner, .header-top, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover, .button.primary:not(.is-outline), input[type='submit'].primary, input[type='submit'].primary, input[type='reset'].button, input[type='button'].primary, .badge-inner{background-color: #105caa;}/* Border */.nav-vertical.nav-tabs > li.active > a,.scroll-to-bullets a.active,.nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,.accordion-title.active,.featured-table,.is-outline:hover, .tagcloud a:hover,blockquote, .has-border, .cart-icon strong:after,.cart-icon strong,.blockUI:before, .processing:before,.loading-spin, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover{border-color: #105caa}.nav-tabs > li.active > a{border-top-color: #105caa}.widget_shopping_cart_content .blockUI.blockOverlay:before { border-left-color: #105caa }.woocommerce-checkout-review-order .blockUI.blockOverlay:before { border-left-color: #105caa }/* Fill */.slider .flickity-prev-next-button:hover svg,.slider .flickity-prev-next-button:hover .arrow{fill: #105caa;}/* Background Color */[data-icon-label]:after, .secondary.is-underline:hover,.secondary.is-outline:hover,.icon-label,.button.secondary:not(.is-outline),.button.alt:not(.is-outline), .badge-inner.on-sale, .button.checkout, .single_add_to_cart_button, .current .breadcrumb-step{ background-color:#f59120; }[data-text-bg="secondary"]{background-color: #f59120;}/* Color */.secondary.is-underline,.secondary.is-link, .secondary.is-outline,.stars a.active, .star-rating:before, .woocommerce-page .star-rating:before,.star-rating span:before, .color-secondary{color: #f59120}/* Color !important */[data-text-color="secondary"]{color: #f59120!important;}/* Border */.secondary.is-outline:hover{border-color:#f59120}body{font-size: 100%;}body{font-family:"Roboto Condensed", sans-serif}body{font-weight: 0}body{color: #59595c}.nav > li > a {font-family:"Roboto Condensed", sans-serif;}.mobile-sidebar-levels-2 .nav > li > ul > li > a {font-family:"Roboto Condensed", sans-serif;}.nav > li > a {font-weight: 700;}.mobile-sidebar-levels-2 .nav > li > ul > li > a {font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a{font-family: "Roboto Condensed", sans-serif;}h1,h2,h3,h4,h5,h6,.heading-font,.banner h1,.banner h2{font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font{color: #59595c;}.alt-font{font-family: "Roboto Condensed", sans-serif;}.alt-font{font-weight: 0!important;}.header:not(.transparent) .header-bottom-nav.nav > li > a{color: #ffffff;}.header:not(.transparent) .header-bottom-nav.nav > li > a:hover,.header:not(.transparent) .header-bottom-nav.nav > li.active > a,.header:not(.transparent) .header-bottom-nav.nav > li.current > a,.header:not(.transparent) .header-bottom-nav.nav > li > a.active,.header:not(.transparent) .header-bottom-nav.nav > li > a.current{color: #f69320;}.header-bottom-nav.nav-line-bottom > li > a:before,.header-bottom-nav.nav-line-grow > li > a:before,.header-bottom-nav.nav-line > li > a:before,.header-bottom-nav.nav-box > li > a:hover,.header-bottom-nav.nav-box > li.active > a,.header-bottom-nav.nav-pills > li > a:hover,.header-bottom-nav.nav-pills > li.active > a{color:#FFF!important;background-color: #105caa;}a{color: #4e657b;}a:hover{color: #105caa;}.tagcloud a:hover{border-color: #105caa;background-color: #105caa;}.shop-page-title.featured-title .title-overlay{background-color: #909090;}.has-equal-box-heights .box-image {padding-top: 100%;}.price del, .product_list_widget del, del .woocommerce-Price-amount { color: #c80d0d; }ins .woocommerce-Price-amount { color: #c80d0d; }@media screen and (min-width: 550px){.products .box-vertical .box-image{min-width: 300px!important;width: 300px!important;}}.absolute-footer, html{background-color: #59595c}/* Custom CSS *//* Css Menu */.slider-nav-reveal .flickity-prev-next-button {background-color: transparent !important;box-shadow: inherit !important;}.slider-nav-reveal .flickity-prev-next-button svg {height: 62px;width: 32px;border: 1px solid #f1f5f6;border-radius: 4px;background-color: #fff;box-shadow: 0 7px 10px 0 rgba(72,139,216,.2);border: none;}.cot-danh-muc {max-width: 263px !important;}.slide {display: inline-block;width: 100%;float: left;margin-right: 10px;}.slide .carousel {background: #FAFAFA;}.slide .carousel .carousel-nav {position: absolute;bottom: 0;margin: 0 auto;left: 0;right: 0;}.carousel {background: #EEE;}.slide .carousel-cell {width: 100%;counter-increment: carousel-cell;}.carousel-cell {position: relative;overflow: hidden;}.slide .carousel-cell.is-selected.is-nav-selected {font-weight: 700;border-bottom: 4px solid red;padding-bottom: 6px;}.slide .carousel-nav .carousel-cell {text-align: center;cursor: pointer;padding: 10px;height: 55px;width: 20% !important;font-size: 13px;line-height: 15px;color: #4a4a4a;background-color: #fff;}.slide:hover .flickity-prev-next-button {opacity: 1;}.slide .carousel-nav .carousel-cell:after {content: '';float: left;height: 35px;border-left: 1px solid #F0F0F0;position: absolute;top: 8px;left: 0;}.carousel-cell img {height: 320px;right: 0;width: 100%;bottom: 0;left: 0;top: 0;object-position: 50% 50%;object-fit: cover;font-family: 'object-fit: cover;';}.slide .flickity-prev-next-button svg {height: 62px;width: 32px;border-radius: 2px;background-color: rgba(0,0,0,.5);box-shadow: 0 7px 10px 0 rgba(72,139,216,.2);border: none;color: #fff;}#mega-menu-wrap {width: 263px;background-color: #f69320;}#mega_menu {background-color: rgba(81,75,88,.8);height: auto;}#mega_menu > li > a > img {margin-right: 0.8em;margin-top: -3px;}#mega_menu > li {border-top: none;}#mega_menu li a {color: #334862;padding-left: 13px;}#mega_menu > li > ul.sub-menu { min-height: 375px;position: absolute;top:0;}#mega_menu ul.sub-menu > li > a {color: #000;}#mega_menu > li:hover > a {background: #F69320;border-left: 4px solid red;}ul#mega_menu > li > ul {min-width: 100%;}#mega_menu > li {height: 41px;}form.searchform {border-radius: 2px;background-color: #fff;box-shadow: 0 0 2px 0 rgba(0,0,0,.12), 0 2px 2px 0 rgba(0,0,0,.24);height: 40px;}.searchform .button.icon {background-color: #F69320 !important;height: 40px;width: 77px;border: none;top: 0;right: 0;border-top-right-radius: 4px;border-bottom-right-radius: 4px;color: #000;}input.search-field, .search_categories {border: none;border-right: 1px solid #e5e6e7;box-shadow: none;height: 40px;}#nk-holine ul li:first-child a {color: #fdd602;}#nk-holine ul {list-style: none;font-weight: 700;font-size: 12px;padding-right: 10px;}#nk-holine ul > li{line-height: 35px;margin-bottom: 0;}#content {background: #ffffff;}.bottom-dn {color: #1fb349;font-size: 0.9em;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;width: 100%;}span.amount {color: #f86666;padding-top: 10px;}.button.success {margin-bottom: 0.5em;line-height: 40px;}.button.primary {margin-bottom: 0;}.tabbed-content .nav-tabs>li {width: 50%;margin: 0 0em;}.cot-blog .button{margin-top: 0.8em;}.cot-blog .tabbed-content .nav-tabs>li a {width: 100%;border-left:none;border-right:none;background-color: #0083c1;color: #fff;border-top-color: #0083c1;}.nav-tabs > li.active > a {background-color:#fff !important;color: #307218 !important;}.cot-blog .tabbed-content .nav-tabs>li span {margin: 0 auto;}.cot-blog .col.post-item {margin-top: 5px;border-top: 1px dotted #ddd;padding-top: 5px !important;}.cot-blog .col.post-item:first-child {border-top: none;margin-top: 5px;padding-top: 0px !important;}.cot-blog .box-vertical .box-text {padding: 0 0.5em;font-size: 1.1em;}.cot-blog .box-vertical .box-text h5 {font-weight: 400 !important;}.cot-blog .nav-tabs+.tab-panels {background-color: #fff;padding: 5px 10px;max-height: 330px;border:none;}.box-blog-post .is-divider {display: none;}.product-title.entry-title {color: #0083c1;}#content {background: #ffffff;}.slide-sp .flickity-slider>.col {padding: 0 9.8px 0px !important;}.slide-sp .box-text {padding-bottom: 0.5em;}.blog-wrapper, .page-wrapper {background-color: #fff !important;}#product-sidebar {padding: 20px 10px !important;}.product-main {padding: 20px 0;}.is-divider {display:none;}.entry-header-text {padding: 0;}.tab-home .tab.has-icon {border: 3px solid var(--primary-color);background-color: var(--primary-color);padding: 0px 10px;margin: 0;border-top: 3px solid var(--primary-color);line-height: 1.3em;}.tab-home .tab.has-icon a {color: #fff;padding: 5px;border-top: none !important;}.tab-home .tab.has-icon.active {background-color: #fff;}.tab-home .tab.has-icon.active a{color: #000;}h5.post-title.is-large {font-size: 1.2em;line-height: 1.3em;color: #3b5998!important;margin: 0 0 5px;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;max-height: 3.12em;}.tab-home .nav-line>li>a:before {height: 0px;}.danh-muc {border-bottom: 2px solid var(--primary-color);}.danh-muc .button {margin-bottom: 0;border-color: #0083c1;}.danh-muc2 .button span {line-height: 2.8;}.collap .row{margin-left: 0px !important;margin-right: 0px !important;}.collap .col {padding: 0 5px 0px;}.tab-col .col {padding-bottom: 0 !important;}.section-first {margin-top: 15px;}.icon-box-text h6 {color: #fff;text-transform: none;font-size: 1em;font-weight:500;}.icon-box-text {padding-top: 0.8em;}.uy-tin .col {padding: 0 9.8px 8px;}.entry-content {padding-top: 0.5em;padding-bottom: 1.5em;}.post-sidebar.large-3.col {padding: 0 10px 10px;}.related-gallery .gallery-item img {float: left;width: 25%;padding-right: 5px;}.related-gallery .gallery-caption {text-align: left;font-size: 0.9em;}.single-product div#tab-description {overflow: hidden;position: relative;}.single-product .tab-panels div#tab-description.panel:not(.active) {height: 0 !important;}.field-wrap input[type=button] {background-color: #ff4f00;color: #fff;}.footer .cat-item:before {content: "f105" !important;font-family: 'fl-icons';font-size: 16px;color: #7a9c59;padding-right: 10px;}.title-muc .button {line-height: 3;float: left;width: 0;height: 0;border-top: none !important;border-left: 0 solid transparent;border-bottom: 45px solid var(--primary-color) !important;border-radius: 0 !important;border: none;}ul li.bullet-checkmark:before {line-height: 1.8em;}.button.alt:not(.is-outline) {background-color: var(--primary-color);}.meta-related{display: none;}/* Css Menu */.woocommerce-Price-amount.amount{color: #f00; }/* Css bài viết liên quan */.xem-them .tieu-de-xem-them {font-weight: 700;display: block;margin-bottom: 10px;font-size: 19px;color: black;}.xem-them ul li {margin-bottom: 3px;}.xem-them ul li a {font-weight: 700;font-size: 16px;color: #105caa;}.xem-them ul li a:hover {text-decoration: underline;}.blog-single .entry-meta {text-transform: none;font-size: 14px;letter-spacing: 0;color: gray;border-top: 1px solid #e2e2e2;border-bottom: 1px solid #e2e2e2;padding: 10px;background: #f9f9f9;}.danh-muc {margin-bottom: 15px;}.danh-muc span.title, .the-tim-kiem span.title {border-radius: 4px;background: #105caa;padding: 4px 10px;color: white;margin-right: 5px;}.danh-muc a, .the-tim-kiem a {line-height:32px;border-radius: 4px;margin-bottom: 10px;background: #dedede;color: #464646;}.danh-muc a:hover, .the-tim-kiem a:hover {background: #f59120;color: white;}.bai-viet-lien-quan {margin-top: 15px;}.bai-viet-lien-quan h3 {font-size: 19px;color: black;}.bai-viet-lien-quan ul {margin-bottom: 0;display: inline-block;width: 100%;}.bai-viet-lien-quan ul li {list-style: none;width: 25%;color: graytext;float: left;padding-left: 4px;padding-right: 5px;}.bai-viet-lien-quan ul li .box-image img {height: 120px;border-radius: 4px;object-fit: cover;object-position: center;}.bai-viet-lien-quan h4 {font-size: 15px;color: black;line-height: 19px;padding-top: 7px;height: 64px;overflow: hidden;}/* Css bài viết liên quan *//*Duong dan Breadcrumbs*/.breadcrumbs {text-transform: uppercase;color: #222;font-weight: 700;letter-spacing: 0;padding: 0;}#breadcrumbs {margin-bottom: 10px;font-size: 14px;color: gray;text-transform: none;}.breadcrumbs a {color: #fba646;margin-left:0 !important;font-weight: 400;}.h6.entry-category is-xsmall{display:none}/*Duong dan Breadcrumbs*//* Custom CSS Tablet */@media (max-width: 849px){.slide .carousel-nav .carousel-cell {width: 40% !important;}}/* Custom CSS Mobile */@media (max-width: 549px){/* Css bài viết liên quan */.bai-viet-lien-quan ul li {width: 50%;}.bai-viet-lien-quan ul li .box-image img {height: 90px;}/* Css bài viết liên quan *//* Css Menu Mobile*/.after-title-info li:first-child {margin-left: 1.2em !important;}.slide .carousel-nav .carousel-cell {width: 60% !important;}.carousel-cell img {height: 50%;width: 100%;bottom: 0;left: 0;top: 0;object-position: 50% 50%;object-fit: cover;font-family: 'object-fit: cover;';right: 0;}/* Css Menu Mobile*/}.label-new.menu-item > a:after{content:"New";}.label-hot.menu-item > a:after{content:"Hot";}.label-sale.menu-item > a:after{content:"Sale";}.label-popular.menu-item > a:after{content:"Popular";}</style>
   </head>
   <body class="page-template page-template-page-blank page-template-page-blank-php page page-id-2 theme-flatsome ot-vertical-menu ot-submenu-top ot-menu-show-home woocommerce-no-js full-width lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow nav-dropdown-has-border {{ Route::currentRouteName() == 'home' ? 'home' : '' }}">
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
      <defs>
            <filter id="wp-duotone-dark-grayscale">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
               <feFuncR type="table" tableValues="0 0.49803921568627" />
               <feFuncG type="table" tableValues="0 0.49803921568627" />
               <feFuncB type="table" tableValues="0 0.49803921568627" />
               <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
      </defs>
   </svg>
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
      <defs>
            <filter id="wp-duotone-grayscale">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
               <feFuncR type="table" tableValues="0 1" />
               <feFuncG type="table" tableValues="0 1" />
               <feFuncB type="table" tableValues="0 1" />
               <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
      </defs>
   </svg>
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
      <defs>
            <filter id="wp-duotone-purple-yellow">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
               <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
               <feFuncG type="table" tableValues="0 1" />
               <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
               <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
      </defs>
   </svg>
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
      <defs>
            <filter id="wp-duotone-blue-red">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
               <feFuncR type="table" tableValues="0 1" />
               <feFuncG type="table" tableValues="0 0.27843137254902" />
               <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
               <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
      </defs>
   </svg>
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
      <defs>
            <filter id="wp-duotone-midnight">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
               <feFuncR type="table" tableValues="0 0" />
               <feFuncG type="table" tableValues="0 0.64705882352941" />
               <feFuncB type="table" tableValues="0 1" />
               <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
      </defs>
   </svg>
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
      <defs>
            <filter id="wp-duotone-magenta-yellow">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
               <feFuncR type="table" tableValues="0.78039215686275 1" />
               <feFuncG type="table" tableValues="0 0.94901960784314" />
               <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
               <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
      </defs>
   </svg>
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
      <defs>
            <filter id="wp-duotone-purple-green">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
               <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
               <feFuncG type="table" tableValues="0 1" />
               <feFuncB type="table" tableValues="0.44705882352941 0.4" />
               <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
      </defs>
   </svg>
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
      <defs>
            <filter id="wp-duotone-blue-orange">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
               <feFuncR type="table" tableValues="0.098039215686275 1" />
               <feFuncG type="table" tableValues="0 0.66274509803922" />
               <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
               <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
      </defs>
   </svg>
   <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
   <div id="wrapper">
      @include('layouts.header.index')
      @yield('content')
      @include('layouts.footer.index')
   </div>
   <div onclick="window.location.href= 'tel:{{$setting->phone1}}'" class="hotline-phone-ring-wrap">
      <div class="hotline-phone-ring">
         <div class="hotline-phone-ring-circle"></div>
         <div class="hotline-phone-ring-circle-fill"></div>
         <div class="hotline-phone-ring-img-circle">
            <a href="tel:{{$setting->phone1}}" class="pps-btn-img">
            <img src="{{url('frontend/images/phone.png')}}" alt="Gọi điện thoại" width="50">
            </a>
         </div>
      </div>
      <a href="tel:{{$setting->phone1}}">
      </a>
      <div class="hotline-bar"><a href="tel:{{$setting->phone1}}">
         </a><a href="tel:{{$setting->phone1}}">
         <span class="text-hotline">{{$setting->phone1}}</span>
         </a>
      </div>
   </div>
   @include('layouts.main.mobile-sidebar')
   <style>
      .hotline-phone-ring-wrap {
      position: fixed;
      bottom: 48px;
      /* right: 163px; */
      /* right: 188px; */
      left: 10px;
      z-index: 999999;
      }
      .hotline-phone-ring {
      position: relative;
      visibility: visible;
      background-color: transparent;
      width: 110px;
      height: 110px;
      cursor: pointer;
      z-index: 11;
      -webkit-backface-visibility: hidden;
      -webkit-transform: translateZ(0);
      transition: visibility .5s;
      left: 0;
      bottom: 0;
      display: block;
      }
      .hotline-phone-ring-circle {
         width: 85px;
      height: 85px;
      top: 10px;
      left: 10px;
      position: absolute;
      background-color: transparent;
      border-radius: 100%;
      border: 2px solid #e60808;
      -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
      animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
      transition: all .5s;
      -webkit-transform-origin: 50% 50%;
      -ms-transform-origin: 50% 50%;
      transform-origin: 50% 50%;
      opacity: 0.5;
      }
      .hotline-phone-ring-circle-fill {
         width: 55px;
      height: 55px;
      top: 25px;
      left: 25px;
      position: absolute;
      background-color: rgba(230, 8, 8, 0.7);
      border-radius: 100%;
      border: 2px solid transparent;
      -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
      animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
      transition: all .5s;
      -webkit-transform-origin: 50% 50%;
      -ms-transform-origin: 50% 50%;
      transform-origin: 50% 50%;
      }
      .hotline-phone-ring-img-circle {
         background-color: #e60808;
         width: 33px;
      height: 33px;
      top: 37px;
      left: 37px;
      position: absolute;
      background-size: 20px;
      border-radius: 100%;
      border: 2px solid transparent;
      -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
      animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
      -webkit-transform-origin: 50% 50%;
      -ms-transform-origin: 50% 50%;
      transform-origin: 50% 50%;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      align-items: center;
      justify-content: center;
      }
      .hotline-phone-ring-img-circle .pps-btn-img {
         display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      }
      .hotline-phone-ring-img-circle .pps-btn-img img {
         width: 20px;
         height: 20px;
      }
      .hotline-bar {
      position: absolute;
      background: rgba(230, 8, 8, 0.75);
      height: 40px;
      width: 160px;
      line-height: 40px;
      border-radius: 3px;
      padding: 0 10px;
      background-size: 100%;
      cursor: pointer;
      transition: all 0.8s;
      -webkit-transition: all 0.8s;
      z-index: 9;
      box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.1);
      border-radius: 50px !important;
      /* width: 175px !important; */
      left: 33px;
      bottom: 37px;
      }
      .hotline-bar > a {
      color: #fff;
      text-decoration: none;
      font-size: 15px;
      font-weight: bold;
      text-indent: 35px;
      display: block;
      letter-spacing: 1px;
      line-height: 40px;
      font-family: Arial;
      }
      .hotline-bar > a:hover,
      .hotline-bar > a:active {
      color: #fff;
      }
      @-webkit-keyframes phonering-alo-circle-anim {
      0% {
         -webkit-transform: rotate(0) scale(0.5) skew(1deg);
         -webkit-opacity: 0.1;
      }
      30% {
         -webkit-transform: rotate(0) scale(0.7) skew(1deg);
         -webkit-opacity: 0.5;
      }
      100% {
         -webkit-transform: rotate(0) scale(1) skew(1deg);
         -webkit-opacity: 0.1;
      }
      }
      @-webkit-keyframes phonering-alo-circle-fill-anim {
      0% {
         -webkit-transform: rotate(0) scale(0.7) skew(1deg);
         opacity: 0.6;
      }
      50% {
         -webkit-transform: rotate(0) scale(1) skew(1deg);
         opacity: 0.6;
      }
      100% {
         -webkit-transform: rotate(0) scale(0.7) skew(1deg);
         opacity: 0.6;
      }
      }
      @-webkit-keyframes phonering-alo-circle-img-anim {
      0% {
         -webkit-transform: rotate(0) scale(1) skew(1deg);
      }
      10% {
         -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
      }
      20% {
         -webkit-transform: rotate(25deg) scale(1) skew(1deg);
      }
      30% {
         -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
      }
      40% {
         -webkit-transform: rotate(25deg) scale(1) skew(1deg);
      }
      50% {
         -webkit-transform: rotate(0) scale(1) skew(1deg);
      }
      100% {
         -webkit-transform: rotate(0) scale(1) skew(1deg);
      }
      }
      @media (max-width: 768px) {
      .hotline-bar {
         display: none;
      }
      .hotline-phone-ring-wrap {
         bottom: -8px;
         right: 291px;
         }
      }
      .call-animation {
      background: #fff;
      width: 135px;
      height: 135px;
      position: relative;
      margin: 0 auto;
      border-radius: 100%;
      border: solid 5px #fff;
      animation: play 2s ease infinite;
      -webkit-backface-visibility: hidden;
      -moz-backface-visibility: hidden;
      -ms-backface-visibility: hidden;
      backface-visibility: hidden;

      }
      .img-circle {
            border-radius: 100%;
            position: absolute;
            left: -2px;
            top: -2px;
      }
      @keyframes play {

      0% {
            transform: scale(1);
      }
      15% {
            box-shadow: 0 0 0 5px rgba(0, 0, 0, 0.4);
      }
      25% {
            box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.4), 0 0 0 20px rgba(0, 0, 0, 0.2);
      }
      25% {
            box-shadow: 0 0 0 15px rgba(0, 0, 0, 0.4), 0 0 0 30px rgba(0, 0, 0, 0.2);
      }

      }

   </style>
   <style>
      .single-product div#tab-description {
      overflow: hidden;
      position: relative;
      padding-bottom: 25px;
      }
      .single-product .tab-panels div#tab-description.panel:not(.active) {
      height: 0 !important;
      }
      .devvn_readmore_flatsome {
      text-align: center;
      cursor: pointer;
      position: absolute;
      z-index: 10;
      bottom: 0;
      width: 100%;
      background: #fff;
      }
      .devvn_readmore_flatsome:before {
      height: 55px;
      margin-top: -45px;
      content: -webkit-gradient(linear,0% 100%,0% 0%,from(#fff),color-stop(.2,#fff),to(rgba(255,255,255,0)));
      display: block;
      }
      .devvn_readmore_flatsome a {
      color: #318A00;
      display: block;
      }
      .devvn_readmore_flatsome a:after {
      content: '';
      width: 0;
      right: 0;
      border-top: 6px solid #318A00;
      border-left: 6px solid transparent;
      border-right: 6px solid transparent;
      display: inline-block;
      vertical-align: middle;
      margin: -2px 0 0 5px;
      }
      .devvn_readmore_flatsome_less a:after {
      border-top: 0;
      border-left: 6px solid transparent;
      border-right: 6px solid transparent;
      border-bottom: 6px solid #318A00;
      }
      .devvn_readmore_flatsome_less:before {
      display: none;
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
   @include('layouts.main.bottom-contact')
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
            let urlCart = $(this).data('url');
            $.ajax({
               type: 'get',
               url: urlCart,
               dataType : 'json',
               success: function(data) {
                  window.location.reload();
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
      })
   </script>
   </body>
</html>