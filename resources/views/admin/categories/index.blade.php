@extends('admin.layouts.layout')

@section('title', __('lang.categories'))

@include('admin/layouts/datatable')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">{{ __('lang.categories') }}</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}">{{ __('lang.dashboard') }}</a></li>
        <li class="active">{{ __('lang.categories') }}</li>
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
<div class="row">
  <div class="col-sm-12">
      <div class="white-box">
          <a class="box-title m-b-1 btn btn-info btn-rounded" href="{{ route('categories.create') }}">{{ __('lang.add_new') }}</a>
          <div class="table-responsive">
              <table id="table" class="display nowrap" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>{{ __('lang.name') }}</th>
                          <th>{{ __('lang.image') }}</th>
                          <th>{{ __('lang.actions') }}</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>#</th>
                        <th>{{ __('lang.name') }}</th>
                          <th>{{ __('lang.image') }}</th>

                          <th>{{ __('lang.actions') }}</th>
                      </tr>
                  </tfoot>
                  <tbody>
                    @foreach($categories as $category)
                      <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $category->en_name }}</td>
                          <td>
                              <img src="{{ $category->image }}" alt="{{ $category->en_title }}" class="thumb-image">
                          </td>
                          <td class="text-nowrap">
                              <a href="{{ route('image',array('id'=>$category->id,'$type'=>'category')) }}" data-toggle="tooltip" data-original-title="Gallery">
                                  <i class="fa fa-file-image-o text-inverse m-r-10"></i>
                              </a>
                              <a href="{{ route('categories.edit', $category->id) }}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                              <a href="javascript:void(0)" class="delete_confirmation" data-toggle="modal" data-target="#myModal" data-action="{{ route('categories.destroy', $category->id) }}">
                                 <i class="fa fa-close text-danger"></i>
                               </a>
                          </td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
@include('admin.partials.confirm_modal')
@endsection
