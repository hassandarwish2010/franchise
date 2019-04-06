@extends('web.layouts.layout')

@php
  $category_name = $lang.'_name';
  $product_name = $lang.'_name';
  $product_details = $lang.'_details';
@endphp

@section('title', $category->$category_name)
@section('description', 'Medical - Health & Medical HTML Template')
@section('keywords', 'clinic, dental, doctor, health, hospital, medical, medical theme, medicine, therapy')

@section('content')
<section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="{{ asset('public/web/template/images/bg/bg1.jpg') }}">
  <div class="container pt-60 pb-60">
    <!-- Section Content -->
    <div class="section-content">
      <div class="row">
        <div class="col-md-12 xs-text-center">
          <h3 class="title text-white">{{ $category->$category_name }}</h3>
          <ol class="breadcrumb mt-10 white">
            <li><a class="text-white" href="{{ route('home', $lang) }}">{{ __('lang.home_page') }}</a></li>
            <li class="active text-theme-colored">{{ $category->$category_name }}</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row multi-row-clearfix">
      <div class="blog-posts">
        @forelse($products as $product)
        <div class="col-sm-6 col-md-4">
          <article class="post clearfix mb-30 bg-lighter">
            <div class="entry-header">
              <a href="{{ route('product', ['lang' => $lang, 'permalink' => $product->permalink]) }}" class="post-thumb thumb">
                <img src="{{ $product->image }}" alt="" class="img-responsive img-fullwidth">
              </a>
            </div>
            <div class="entry-content p-20 pr-10">
              <div class="entry-meta media mt-0 no-bg no-border">
                <div class="media-body pl-15">
                  <div class="event-content pull-left flip">
                    <h4 class="entry-title text-theme-colored text-uppercase m-0 mt-5">
                      <a class="text-theme-colored" href="{{ route('product', ['lang' => $lang, 'permalink' => $product->permalink]) }}">{{ $product->$product_name }}</a>
                    </h4>
                  </div>
                </div>
              </div>
              <p class="mt-10">
                {{ $product->$product_details }}
              </p>
              <a href="{{ route('product', ['lang' => $lang, 'permalink' => $product->permalink]) }}" class="btn-read-more">{{ __('lang.read_more') }}</a>
              <div class="clearfix"></div>
            </div>
          </article>
        </div>
        @empty
        {{ __('lang.no_data') }}
        @endforelse

        <div class="col-md-12">
          {{ $products->links() }}
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<!-- end main-content -->
@endsection
