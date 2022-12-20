@extends('layouts.main.master')
@section('title')
Kết quả tìm kiếm
@endsection
@section('description')
Đã tìm thấy {{$countproduct}} kết quả phù hợp cho từ khóa "{{$keyword}}"
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('content')
<div class="shop-page-title category-page-title page-title featured-title dark ">
	<div class="page-title-bg fill">
	<div class="title-bg fill bg-fill" data-parallax-fade="true" data-parallax="-2" data-parallax-background data-parallax-container=".page-title"></div>
	<div class="title-overlay fill"></div>
	</div>
	<div class="page-title-inner flex-row  medium-flex-wrap container">
	<div class="flex-col flex-grow medium-text-center">
		<div class="is-small">
			<nav class="woocommerce-breadcrumb breadcrumbs "><a href="{{route('home')}}">Trang chủ</a>  <span class="divider">&#47;</span> Đã tìm thấy {{$countproduct}} kết quả phù hợp</nav>
		</div>
	</div>
	</div>
</div>
<main id="main" class="">
	<div class="row category-page-row">
	<div class="col large-12">
		<div class="shop-container">
			<div class="woocommerce-notices-wrapper"></div>
			<div class="products row row-small large-columns-5 medium-columns-3 small-columns-2 has-shadow row-box-shadow-1 row-box-shadow-1-hover has-equal-box-heights equalize-box">
				@foreach ($resultPro as $product)
				@include('layouts.product.item', ['product'=>$product])
				@endforeach
			</div>
			<!-- row -->
		</div>
		<!-- shop container -->
	</div>
	</div>
</main>
@endsection