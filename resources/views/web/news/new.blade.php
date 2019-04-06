@extends('web.layouts.layout')

@php
  $news_title = $lang.'_title';
  $news_details = $lang.'_details';
@endphp

@section('title', $news->$news_title)

@section('description', $news->description)
@section('keywords', $news->keywords)

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
<div class="main-content">
  <!-- Section: inner-header -->
  <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{ asset('public/web/template/images/bg/bg1.jpg') }}">
    <div class="container pt-60 pb-60">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="title">{{ $news->$news_title }}</h2>
            <ol class="breadcrumb text-center text-black mt-10">
              <li><a class="text-black" href="{{ route('home', $lang) }}">{{ __('lang.home_page') }}</a></li>
              <li><a class="text-black" href="{{ route('news', $lang) }}">{{ __('lang.news') }}</a></li>
              <li class="active text-theme-colored">{{ $news->$news_title }}</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Blog -->
  <section>
    <div class="container mt-30 mb-30 pt-30 pb-30">
      <div class="row">
        <div class="col-md-9">
          <div class="blog-posts single-post">
            <article class="post clearfix mb-0">
              <div class="entry-header">
                <div class="post-thumb thumb">
                  <a class="fancybox" rel="group" href="{{ $news->full_image }}">
                    <img src="{{ $news->image }}" alt="{{ $news->$news_title }}" class="img-responsive img-fullwidth">
                  </a>
                </div>
              </div>
              <div class="entry-content">
                <div class="entry-meta media no-bg no-border mt-15 pb-20">
                  <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                    <ul>
                      <li class="font-16 text-white font-weight-600">{{ $news->day }}</li>
                      <li class="font-12 text-white text-uppercase">{{ $news->month }}</li>
                    </ul>
                  </div>
                  <div class="media-body pl-15">
                    <div class="event-content pull-left flip">
                      <h3 class="entry-title text-theme-colored text-uppercase pt-0 mt-0">{{ $news->$news_title }}</h3>
                    </div>
                  </div>
                </div>
                <p class="mb-15">
                  {!! $news->$news_details !!}
                </p>
              </div>
            </article>
          </div>
        </div>
        <div class="col-md-3">
          <div class="sidebar sidebar-right mt-sm-30">
            <div class="widget">
              <h5 class="widget-title line-bottom">{{ __('lang.other_news') }}</h5>
              <div class="latest-posts">
                @forelse($other_news as $n)
                <article class="post media-post clearfix pb-0 mb-10">
                  <a class="post-thumb" href="{{ route('new', ['lang' => $lang, 'permalink' => $n->permalink]) }}">
                    <img src="{{ $n->image }}" alt="{{ $n->$news_title }}" class="w-75">
                  </a>
                  <div class="post-right">
                    <h5 class="post-title mt-0"><a href="{{ route('new', ['lang' => $lang, 'permalink' => $n->permalink]) }}">{{ $n->$news_title }}</a></h5>
                    <p>{{ $n->$news_details }}</p>
                  </div>
                </article>
                @empty
                 {{ __('lang.no_data') }}
                @endforelse
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- end main-content -->
@endsection
