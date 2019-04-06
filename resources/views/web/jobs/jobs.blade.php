@extends('web.layouts.layout')

@php
  $jobs_name = $lang.'_name';
  $jobs_details = $lang.'_details';
@endphp

@section('title', __('lang.jobs'))
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
          <h3 class="title text-white">{{ __('lang.jobs') }}</h3>
          <ol class="breadcrumb mt-10 white">
            <li><a class="text-white" href="{{ route('home', $lang) }}">{{ __('lang.home_page') }}</a></li>
            <li class="active text-theme-colored">{{ __('lang.jobs') }}</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Job Content -->
<section>
  <div class="container pb-0">
    <div class="row text-center">
      @forelse($jobs as $job)
      <div class="col-sm-4">
        <div class="icon-box iconbox-border iconbox-theme-colored p-40">
          <a href="{{ route('job', ['lang' => $lang, 'job_id' => $job->id]) }}" class="icon icon-gray icon-bordered icon-border-effect effect-flat">
            <i class="pe-7s-users"></i>
          </a>
          <h5 class="icon-box-title">{{ $job->$jobs_name }}</h5>
          <p class="text-gray">{{ $job->$jobs_details }}</p>
          <a class="btn btn-dark btn-sm mt-15" href="{{ route('job', ['lang' => $lang, 'job_id' => $job->id]) }}">{{ __('lang.read_more') }}</a>
        </div>
      </div>
      @empty
        <div class="col-xs-12" style="margin-bottom:50px;">
          {{ __('lang.no_data') }}
        </div>
      @endforelse

      <div class="col-md-12">
        {{ $jobs->links() }}
      </div>
    </div>
  </div>
</section>
<!-- end jobs-content -->
@endsection
