@extends('admin.layouts.layout')

@section('title')
  From : {{ $apply->name }}
@endsection

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">From : {{ $apply->name }}</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}">{{ __('lang.dashboard') }}</a></li>
        <li><a href="{{ route('applies.index') }}">{{ __('lang.applies') }}</a></li>
        <li class="active">From : {{ $apply->name }}</li>
      </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
  <div class="col-12">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif
  </div>
</div>
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="box">
        <div class="box-header">
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <h5 class="sender_name"><span class="main-color"> From : {{ $apply->name }} </h5>
          <h5 class="sender_email"><span class="main-color"> Email </span>:  {{ $apply->email }} </h5>
          <h5 class="job"><span class="main-color"> Job </span>:  {{ $apply->job->en_name }} </h5>
          <a class="btn btn-primary" href="{{ asset('public/uploads/' . $apply->cv) }}">Download</a>
          <p class="contact_details">
            {!! $apply->details !!}
          </p>
        </div>
      </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
@endsection
