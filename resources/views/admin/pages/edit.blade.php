@extends('admin.layouts.layout')

@section('title')
  Edit {{ $page->title }}
@endsection

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">{{ $page->title }}</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}">{{ __('lang.dashboard') }}</a></li>
          <li><a href="{{ url('admin-panel/page/'.$page->type) }}">{{ __('lang.pages') }}</a></li>
        <li class="active">{{ $page->title }}</li>
      </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
  <div class="col-sm-12">
      <div class="white-box">
        <div class="row adminform">
          <h3 class="box-title m-b-0">{{ $page->title }}</h3>

            <form class="form-full-width" action="{{ route('pages.update', $page->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            @include('admin/pages/form')
          </form>
        </div>
      </div>
  </div>
</div>
@endsection
