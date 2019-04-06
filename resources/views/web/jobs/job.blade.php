@extends('web.layouts.layout')

@php
  $job_name = $lang.'_name';
  $job_details = $lang.'_details';
@endphp

@section('title', $job->$job_name)
@section('description', 'Medical - Health & Medical HTML Template')
@section('keywords', 'clinic, dental, doctor, health, hospital, medical, medical theme, medicine, therapy')

@section('content')
<div class="main-content">
  <!-- Section: inner-header -->
  <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{ asset('public/web/template/images/bg/bg1.jpg') }}">
    <div class="container pt-60 pb-60">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="title">{{ $job->$job_name }}</h2>
            <ol class="breadcrumb text-center text-black mt-10">
              <li><a class="text-black" href="{{ route('home', $lang) }}">{{ __('lang.home_page') }}</a></li>
              <li><a class="text-black" href="{{ route('jobs', $lang) }}">{{ __('lang.jobs') }}</a></li>
              <li class="active text-theme-colored">{{ $job->$job_name }}</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Blog -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="job-overview">
            <dl class="dl-horizontal">
              <dt><i class="fa fa-calendar text-theme-colored mt-5 font-15"></i></dt>
              <dd>
                <h5 class="mt-0">{{ __('lang.date_posted') }} :</h5>
                <p>{{ __('lang.since') }}  {{ $job->diff }} {{ __('lang.days_ago') }}</p>
              </dd>
            </dl>
            <dl class="dl-horizontal">
              <dt><i class="fa fa-user text-theme-colored mt-5 font-15"></i></dt>
              <dd>
                <h5 class="mt-0">{{ __('lang.job_title') }} :</h5>
                <p>{{ $job->$job_name }}</p>
              </dd>
            </dl>
          </div>
        </div>
        <div class="col-md-9">
          <div class="icon-box mb-0 p-0">
            <a href="#" class="icon icon-gray pull-left mb-0 mr-10">
              <i class="pe-7s-users"></i>
            </a>
            <h3 class="icon-box-title pt-15 mt-0 mb-40">{{ $job->$job_name }}</h3>
            <hr>
            <p class="text-gray">
              {!! $job->$job_details !!}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Job Apply Form -->
  <section class="divider parallax layer-overlay overlay-white-8" data-bg-img="{{ asset('public/web/template/images/bg/bg1.jpg') }}">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 bg-lightest-transparent p-30 pt-10">
          <h3 class="text-center text-theme-colored mb-20">{{ __('lang.apply_now') }}</h3>
          <form id="job_apply_form" name="job_apply_form" action="{{ route('job.apply', ['lang' => $lang, 'id' => $job->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>{{ __('lang.name') }} <small>*</small></label>
                  <input name="name" type="text" placeholder="{{ __('lang.name') }}" required="required" class="form-control">
                  <div id="failed_job_name" class="help-block"></div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="email">{{ __('lang.email') }} <small>*</small></label>
                  <input name="email" class="form-control required email" type="email" placeholder="{{ __('lang.email') }}" required="required">
                  <div id="failed_job_email" class="help-block"></div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>{{ __('lang.details') }} <small>*</small></label>
              <textarea id="details" name="details" class="form-control required" rows="5" placeholder="{{ __('lang.details') }}"></textarea>
              <div id="failed_job_details" class="help-block"></div>
            </div>
            <div class="form-group">
              <label>{{ __('lang.cv') }} *</label>
              <input name="cv" class="file" type="file">
              <small>Maximum upload file size: 12 MB</small>
              <div id="failed_job_cv" class="help-block"></div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- end main-content -->
@endsection
