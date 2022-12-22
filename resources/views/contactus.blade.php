@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
	<div id="content" role="main" class="content-area">
	<div class="row row-lien-he"  id="row-1777154024">
		<div id="col-273144486" class="col small-12 large-12"  >
			<div class="col-inner"  >
				<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_297814993">
				<div class="img-inner dark" >
					{{-- <img width="1024" height="320" src="{{$pageContent->image}}" class="attachment-original size-original" alt="Liên hệ với chúng tôi" loading="lazy" srcset="{{$pageContent->image}} 1024w, {{$pageContent->image}} 600w, {{$pageContent->image}} 768w, {{$pageContent->image}} 1536w" sizes="(max-width: 1024px) 100vw, 1024px" />						 --}}
					{!!$setting->iframe_map!!}
				</div>
				<style>
					#image_297814993 {
					width: 100%;
					}
				</style>
				</div>
			</div>
		</div>
		<div id="col-283779671" class="col cot1 medium-6 small-12 large-6"  >
			<div class="col-inner"  >
				<h3><span style="font-size: 95%;">{{$setting->company}} </span></h3>
				<p> <strong><span style="font-size: 95%;">Trụ sở:</span></strong></p>
				<p><span style="font-size: 95%;">Địa chỉ: {{$setting->address1}}</span><span style="font-size: 95%;"><br />Hotline: <strong><a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a><br /></strong>Email: <a href="mailto:{{$setting->email}}">{{$setting->email}}</a></span></p>
				<p><strong><span style="font-size: 95%;">Văn phòng giao dịch:</span></strong></p>
				<p><span style="font-size: 95%;">Địa chỉ: {{$setting->address2}}<br />Điện thoại:  <a href="tel:0367968938"><strong>{{$setting->phone2}}</strong></a><br />Email: <a href="mailto:{{$setting->email}}">{{$setting->email}}</a></span></p>
				<p><span style="font-size: 95%;"> </span></p>
				<div role="form" class="wpcf7" id="wpcf7-f508-p32-o1" lang="vi" dir="ltr">
				<div class="screen-reader-response">
					<p role="status" aria-live="polite" aria-atomic="true"></p>
					<ul></ul>
				</div>
				{{-- <form action="/lien-he/#wpcf7-f508-p32-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
					<div style="display: none;">
						<input type="hidden" name="_wpcf7" value="508" />
						<input type="hidden" name="_wpcf7_version" value="5.5.6.1" />
						<input type="hidden" name="_wpcf7_locale" value="vi" />
						<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f508-p32-o1" />
						<input type="hidden" name="_wpcf7_container_post" value="32" />
						<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
						<input type="hidden" name="_wpcf7_recaptcha_response" value="" />
					</div>
					<div class="flex-row form-flat medium-flex-wrap">
						<div class="flex-col flex-grow">
							<span class="wpcf7-form-control-wrap tel-343"><input type="tel" name="tel-343" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Số điện thoại..." /></span>
						</div>
						<div class="flex-col ml-half">
							<input type="submit" value="Đăng ký tư vấn" class="wpcf7-form-control has-spinner wpcf7-submit button" />
						</div>
					</div>
					<p style="display: none !important;">
						<label>&#916;<textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js_1" name="_wpcf7_ak_js" value="183"/><script>document.getElementById( "ak_js_1" ).setAttribute( "value", ( new Date() ).getTime() );</script>
					</p>
					<div class="wpcf7-response-output" aria-hidden="true"></div>
				</form> --}}
				</div>
			</div>
		</div>
		<div id="col-1442772338" class="col medium-6 small-12 large-6"  >
			<div class="col-inner"  >
				<h3>LIÊN HỆ</h3>
				<p><span style="font-size: 95%; color: #282828;">Bạn vui lòng điền đầy đủ thông tin và nội dung đề xuất của bạn vào biểu mẫu dưới đây, sau đó gửi cho chúng tôi, chúng tôi sẽ liên hệ với bạn ngay sau khi nhận được thông tin của bạn.</span></p>
				<div role="form" class="wpcf7" id="wpcf7-f542-p32-o2" lang="vi" dir="ltr">
				<div class="screen-reader-response">
					<p role="status" aria-live="polite" aria-atomic="true"></p>
					<ul></ul>
				</div>
				<form action="{{route('postcontact')}}" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
					@csrf
					<p>
						<span class="wpcf7-form-control-wrap text-653"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="Tên của bạn..." required/></span><br />
						<span class="wpcf7-form-control-wrap text-653"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="Email của bạn..." required/></span><br />
						<span class="wpcf7-form-control-wrap tel-711"><input type="number" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" placeholder="Số điện thoại..." required/></span><br />
						<span class="wpcf7-form-control-wrap textarea-261"><textarea name="mess" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Nội dung liên hệ" required></textarea></span><br />
						<input type="submit" value="Gửi liên hệ" class="wpcf7-form-control has-spinner wpcf7-submit" />
					</p>
					<div class="wpcf7-response-output" aria-hidden="true"></div>
				</form>
				</div>
			</div>
		</div>
	</div>
	</div>
</main>
@endsection