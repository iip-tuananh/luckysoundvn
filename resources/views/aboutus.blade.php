@extends('layouts.main.master')
@section('title')
Giới thiệu về {{$setting->company}}
@endsection
@section('description')
{{$pageContent->description}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
   <div id="content" role="main" class="content-area">
      <div class="row"  id="row-1473975542">
         <div id="col-635266924" class="col small-12 large-12"  >
            <div class="col-inner"  >
               <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2088558601">
                  <div class="img-inner dark" >
                     <img width="1640" height="624" src="{{$pageContent->image}}" class="attachment-original size-original" alt="Giới thiệu về {{$setting->company}}" loading="lazy" srcset="{{$pageContent->image}} 1640w, {{$pageContent->image}} 600w, {{$pageContent->image}} 1024w, {{$pageContent->image}} 768w, {{$pageContent->image}} 1536w" sizes="(max-width: 1640px) 100vw, 1640px" />						
                  </div>
                  <style>
                     #image_2088558601 {
                     width: 100%;
                     }
                  </style>
               </div>
               <div class="container section-title-container" >
                  <h3 class="section-title section-title-center"><b></b><span class="section-title-main" >{{$pageContent->title}}</span><b></b></h3>
               </div>
               {!!$pageContent->content!!}
            </div>
         </div>
      </div>
   </div>
</main>
@endsection