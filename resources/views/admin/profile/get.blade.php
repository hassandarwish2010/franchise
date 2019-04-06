@extends('admin.layouts.layout')

@section('title')
  Edit Profile
@endsection

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Edit Profile</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}">{{ __('lang.dashboard') }}</a></li>
        <li class="active">Edit Profile</li>
      </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
  <div class="col-sm-12">
      <div class="white-box">
        <div class="row adminform">
          <h3 class="box-title m-b-0">Edit Profile</h3>
          <form class="form-full-width" action="{{ route('admin.profile.save') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('admin/profile/form')
          </form>
        </div>
      </div>
  </div>
</div>
@endsection
