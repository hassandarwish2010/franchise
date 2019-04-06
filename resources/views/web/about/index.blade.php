@extends('web.layouts.layout')

@php
  $about_name = $lang.'_name';
  $about_details = $lang.'_details';
@endphp

@section('title', $about->$about_name)

@section('description', $about->description)
@section('keywords', $about->keywords)

@section('content')
<section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="{{ asset('public/web/template/images/bg/bg1.jpg') }}">
  <div class="container pt-60 pb-60">
    <!-- Section Content -->
    <div class="section-content">
      <div class="row">
        <div class="col-md-12 xs-text-center">
          <h3 class="title text-white">{{ $about->$about_name }}</h3>
          <ol class="breadcrumb mt-10 white">
            <li><a class="text-white" href="{{ route('home', $lang) }}">{{ __('lang.home_page') }}</a></li>
            <li class="active text-theme-colored">{{ $about->$about_name }}</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: about -->
<section class="mb-100">
  <div class="container pb-0">
    <div class="row">
      <div class="col-12">
        <h2 class="text-theme-colored mt-0">{{ $about->$about_name }}</h2>
        <p class="font-weight-600">
          {!! $about->$about_details !!}
        </p>
      </div>
    </div>
  </div>
</section>
@endsection
