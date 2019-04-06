@extends('web.layouts.layout')

@php
  $product_name = $lang.'_name';
  $product_details = $lang.'_details';
  $category_name = $lang.'_name';
@endphp

@section('title', $product->$product_name)

@section('description', $product->description)
@section('keywords', $product->keywords)

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
            <h2 class="title">{{ $product->$product_name }}</h2>
            <ol class="breadcrumb text-center text-black mt-10">
              <li><a class="text-black" href="{{ route('home', $lang) }}">{{ __('lang.home_page') }}</a></li>
              <li><a class="text-black" href="{{ route('products', ['lang' => $lang, 'category_id' => $product->category->id]) }}">{{ $product->category->$category_name }}</a></li>
              <li class="active text-theme-colored">{{ $product->$product_name }}</li>
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
                  <a class="fancybox" rel="group" href="{{ $product->full_image }}">
                    <img src="{{ $product->image }}" alt="{{ $product->$product_name }}" class="img-responsive img-fullwidth">
                  </a>
                </div>
              </div>
              <div class="entry-content">
                <div class="entry-meta media no-bg no-border mt-15 pb-20">
                  <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                    <ul>
                      <li class="font-16 text-white font-weight-600">{{ $product->day }}</li>
                      <li class="font-12 text-white text-uppercase">{{ $product->month }}</li>
                    </ul>
                  </div>
                  <div class="media-body pl-15">
                    <div class="event-content pull-left flip">
                      <h3 class="entry-title text-theme-colored text-uppercase pt-0 mt-0">{{ $product->$product_name }}</h3>
                    </div>
                  </div>
                </div>
                <p class="mb-15">
                  {!! $product->$product_details !!}
                </p>
              </div>
            </article>
          </div>
        </div>
        <div class="col-md-3">
          <div class="sidebar sidebar-right mt-sm-30">
            <div class="widget">
              <h5 class="widget-title line-bottom">{{ __('lang.categories') }}</h5>
              <div class="categories">
                <ul class="list list-border angle-double-right">
                  @forelse($categories as $category)
                  <li><a href="{{ route('products', ['lang' => $lang, 'category_id' => $category->id]) }}">{{ $category->$category_name }} <span>( {{ $category->products_count }} )</span></a></li>
                  @empty
                  @endforelse
                </ul>
              </div>
            </div>
            <div class="widget">
              <h5 class="widget-title line-bottom">{{ __('lang.related_products') }}</h5>
              <div class="latest-posts">
                @forelse($related_products as $p)
                <article class="post media-post clearfix pb-0 mb-10">
                  <a class="post-thumb" href="{{ route('product', ['lang' => $lang, 'permalink' => $p->permalink]) }}">
                    <img src="{{ $p->image }}" alt="{{ $p->$product_name }}" class="w-75">
                  </a>
                  <div class="post-right">
                    <h5 class="post-title mt-0"><a href="{{ route('product', ['lang' => $lang, 'permalink' => $p->permalink]) }}">{{ $p->$product_name }}</a></h5>
                    <p>{{ $p->$product_details }}</p>
                  </div>
                </article>
                @empty
                 {{ __('lang.no_data') }}
                @endforelse
              </div>
            </div>
            <div class="widget">
              <h5 class="widget-title line-bottom">{{ __('lang.gallery') }}</h5>
              <div class="row">
                @forelse($product->images as $image)
                  <div class="col-xs-6 mb-20">
                    <a class="fancybox" rel="group" href="{{ $image->full_image }}">
                      <img src="{{ $image->image }}" alt="{{ $product->$product_name }}" class="img-responsive">
                    </a>
                  </div>
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
