@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
	<div id="content" class="blog-wrapper blog-single page-wrapper">
	<div class="row row-large row-divided ">
		<div class="large-9 col">
			<article id="post-12570" class="post-12570 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc post-ftoc">
				<div class="article-inner ">
				<header class="entry-header">
					<div class="entry-header-text entry-header-text-top text-left">
						<h6 class="entry-category is-xsmall">
							<a href="{{route('listCateBlog', ['slug'=>$blog_detail->category])}}" rel="category tag">{{languageName($blog_detail->cate->name)}}</a>
						</h6>
						<h1 class="entry-title">{{languageName($blog_detail->title)}}</h1>
						<div class="entry-divider is-divider small"></div>
					</div>
				</header>
				<div class="entry-content single-page">
					<div id="ftwp-postcontent">
						{!!languageName($blog_detail->content)!!}
					<div class="blog-share text-center">
						<div class="is-divider medium"></div>
						<div class="social-icons share-icons share-row relative" >
							<a href="{{$setting->facebook}}" data-action="share/whatsapp/share" class="icon button circle is-outline tooltip whatsapp show-for-medium" title="Share on WhatsApp" aria-label="Share on WhatsApp"><i class="icon-whatsapp"></i></a>
							<a href="{{$setting->facebook}}" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip facebook" title="Share on Facebook" aria-label="Share on Facebook"><i class="icon-facebook" ></i></a>
							<a href="" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip twitter" title="Share on Twitter" aria-label="Share on Twitter"><i class="icon-twitter" ></i></a>
							<a href="mailto:{{$setting->email}}" rel="nofollow" class="icon button circle is-outline tooltip email" title="Email to a Friend" aria-label="Email to a Friend"><i class="icon-envelop" ></i></a>
							<a href="" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip pinterest" title="Pin on Pinterest" aria-label="Pin on Pinterest"><i class="icon-pinterest" ></i></a>
							<a href="" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"  rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip linkedin" title="Share on LinkedIn" aria-label="Share on LinkedIn"><i class="icon-linkedin" ></i></a></div>
					</div>
				</div>
				<!-- .entry-content2 -->
				<footer class="entry-meta text-left">
					<div class="danh-muc"><span class="title">Danh mục:</span>  
						<a href="{{route('listCateBlog', ['slug'=>$blog_detail->category])}}" rel="category tag">{{languageName($blog_detail->cate->name)}}</a>
					</div>
				</footer>
				<!-- .entry-meta -->
				<div class="bai-viet-lien-quan">
					<span class="tieu-de-xem-them"> <strong>Bài viết cùng chủ đề:</strong></span>
					<ul class="list-bai-viet">
						@foreach ($blogs as $blog)
							<li>
								<div class="box-image">
								<a href="{{route('detailBlog', ['slug'=>$blog->slug])}}"><img width="700" height="440" src="{{$blog->image}}" class="attachment-large size-large wp-post-image" alt="{{$blog->name}}" loading="lazy" srcset="{{$blog->image}} 700w, {{$blog->image}} 600w" sizes="(max-width: 700px) 100vw, 700px" /></a>
								</div>
								<a href="{{route('detailBlog', ['slug'=>$blog->slug])}}">
								<h4 class="tieu-de-bai-viet">{{languageName($blog->title)}}</h4>
								</a>
							</li>
						@endforeach
					</ul>
				</div>
				<style>
					@media only screen and (max-width: 768px) {
					.bai-viet-lien-quan {
						display: none;
					}
					}
				</style>
				</div>
			</article>
		</div>
		@include('layouts.main.rightnav-page')
	</div>
	</div>
</main>
@endsection