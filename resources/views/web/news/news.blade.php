@extends('web.layouts.layout')

@php
  $news_title = $lang.'_title';
  $news_details = $lang.'_details';
@endphp

@section('title', __('lang.news'))
@section('description', 'Medical - Health & Medical HTML Template')
@section('keywords', 'clinic, dental, doctor, health, hospital, medical, medical theme, medicine, therapy')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css">
@endsection

@section('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
<script>
$(document).ready(function() {
  $(".fancybox").fancybox();
});
</script>
@endsection

@section('content')
<section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="{{ asset('public/web/template/images/bg/bg1.jpg') }}">
  <div class="container pt-60 pb-60">
    <!-- Section Content -->
    <div class="section-content">
      <div class="row">
        <div class="col-md-12 xs-text-center">
          <h3 class="title text-white">{{ __('lang.news') }}</h3>
          <ol class="breadcrumb mt-10 white">
            <li><a class="text-white" href="{{ route('home', $lang) }}">{{ __('lang.home_page') }}</a></li>
            <li class="active text-theme-colored">{{ __('lang.news') }}</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Upcoming Events -->
<section id="upcoming-events" class="divider parallax layer-overlay overlay-white-8" data-bg-img="{{ asset('public/web/template/images/bg/bg2.jpg') }}">
  <div class="container pb-50 pt-80">
    <div class="section-content">
      <div class="row">
        @forelse($news as $new)
          <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="schedule-box maxwidth500 bg-light mb-30 news-box">
            <div class="thumb">
              <img class="img-fullwidth" alt="{{ $new->$news_title }}" src="{{ $new->image }}">
              <div class="overlay">
                <a class="fancybox" rel="group" href="{{ $new->full_image }}"><i class="fa fa-image mr-5"></i></a>
              </div>
            </div>
            <div class="schedule-details clearfix p-15 pt-10">
              <h5 class="font-16 title"><a href="{{ route('new', ['lang' => $lang, 'permalink' => $new->permalink]) }}">{{ $new->$news_title }}</a></h5>
              <ul class="list-inline font-11 mb-20">
                <li><i class="fa fa-calendar mr-5"></i>{{ $new->created_at }}</li>
              </ul>
              <p>{{ $new->$news_details }}</p>
              <div class="mt-10">
               <a class="btn btn-dark btn-theme-colored btn-sm mt-10" href="{{ route('new', ['lang' => $lang, 'permalink' => $new->permalink]) }}">{{ __('lang.read_more') }}</a>
              </div>
            </div>
          </div>
        </div>
        @empty
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="schedule-box maxwidth500 bg-light mb-30 news-box">
            {{ __('lang.no_data') }}
          </div>
        </div>
        @endforelse

        <div class="col-md-12">
          {{ $news->links() }}
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<!-- end main-content -->
@endsection
