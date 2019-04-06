@extends('admin.layouts.layout')

@section('title')
  Message From {{ $mail->name }}
@endsection

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Message From {{ $mail->name }}</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}">{{ __('lang.dashboard') }}</a></li>
        <li><a href="{{ route('mails.index', $status) }}">{{ __('lang.mails') }}</a></li>
        <li class="active">Message From {{ $mail->name }}</li>
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
          <h5 class="sender_name"><span class="main-color"> Mail from </span>:  {{ $mail->name }} </h5>
          <h5 class="sender_email"><span class="main-color"> Email </span>:  {{ $mail->email }} </h5>

          <p class="contact_details">
            {!! $mail->details !!}
          </p>
        </div>
      </div>

      <div class="box">
        <div class="box-header">
          <h3 class="box-title main-color"> Reply </h3>
        </div>
        <!-- /.box-header -->
          <form class="form-full-width" action="{{ route('mails.reply', [$mail->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-12">
                  <div class="white-box">
                      <div class="row">
                          <div class="col-sm-12 col-xs-12">
                            <label for="details">{{ __('lang.details') }} *</label>
                            <textarea name="details" rows="8" class="form-control" style="resize:vertical;width:100%;" placeholder="{{ __('lang.details') }}"></textarea>
                            @if ($errors->has('details'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('details') }}</strong>
                                </span>
                            @endif
                          </div>

                          <div class="col col-md-12">
                            <div class="form-group" style="margin-top:30px;">
                                <button type="submit" class="btn btn-success btn-block waves-effect waves-light mt-25">{{ __('lang.send') }}</button>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </form>
      </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
@endsection
