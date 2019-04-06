@extends('web.layouts.layout')

@section('title', __('lang.contact'))
@section('description', 'Medical - Health & Medical HTML Template')
@section('keywords', 'clinic, dental, doctor, health, hospital, medical, medical theme, medicine, therapy')

@section('js')
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtRmXKclfDp20TvfQnpgXSDPjut14x5wk&callback=initMap"></script>
<script>
  function initMap() {
    var lat = {{ $setting_lat }};
    var lon = {{ $setting_lon }}
    var myLatLng = {lat: lat, lng: lon };

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 18,
      center: myLatLng
    });

    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Medline'
    });
  };
</script>
@endsection

@section('content')
<section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="{{ asset('public/web/template/images/bg/bg1.jpg') }}">
  <div class="container pt-60 pb-60">
    <!-- Section Content -->
    <div class="section-content">
      <div class="row">
        <div class="col-md-12 xs-text-center">
          <h3 class="title text-white">{{ __('lang.contact') }}</h3>
          <ol class="breadcrumb mt-10 white">
            <li><a class="text-white" href="{{ route('home', $lang) }}">{{ __('lang.home_page') }}</a></li>
            <li class="active text-theme-colored">{{ __('lang.contact') }}</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Have Any Question -->
<section class="divider">
  <div class="container pt-60 pb-60">
    <div class="section-title mb-60">
      <div class="row">
        <div class="col-md-12">
          <div class="esc-heading small-border text-center">
            <h3>{{ __('lang.have_questions') }}</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        @if(isset($setting->phone) && $setting->phone != null)
        <div class="col-sm-12 col-md-4">
          <div class="contact-info text-center">
            <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
            <h4>{{ __('lang.call_us') }}</h4>
            <h6 class="text-gray d-ltr">{{ $setting->phone }}</h6>
          </div>
        </div>
        @endif
        @if(isset($setting->address) && $setting->address != null)
        <div class="col-sm-12 col-md-4">
          <div class="contact-info text-center">
            <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
            <h4>{{ __('lang.address') }}</h4>
            <h6 class="text-gray">{{ $setting->address }}</h6>
          </div>
        </div>
        @endif
        @if(isset($setting->email) && $setting->email != null)
        <div class="col-sm-12 col-md-4">
          <div class="contact-info text-center">
            <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
            <h4>{{ __('lang.email') }}</h4>
            <h6 class="text-gray">{{ $setting->email }}</h6>
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
</section>

<!-- Section Contact -->
<section id="contact" class="divider bg-lighter">
  <div class="container-fluid pt-0 pb-0">
    <div class="section-content">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <div class="contact-wrapper">
            <h3 class="line-bottom mt-0 mb-20">{{ __('lang.interested_discussing') }}</h3>
            <!-- Contact Form -->
            <form id="contact_form_contact" name="contact_form" action="{{ route('contact.save', $lang) }}" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="name">{{ __('lang.name') }} <small>*</small></label>
                    <input name="name" class="form-control" type="text" placeholder="{{ __('lang.name') }}" required="required">
                    <div id="failed_contact_page_name" class="help-block"></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="email">{{ __('lang.email') }} <small>*</small></label>
                    <input name="email" class="form-control required email" type="email" placeholder="{{ __('lang.email') }}" required="required">
                    <div id="failed_contact_page_email" class="help-block"></div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="details">{{ __('lang.details') }} *</label>
                <textarea name="details" class="form-control required" rows="5" placeholder="{{ __('lang.details') }}" required="required"></textarea>
                <div id="failed_contact_page_details" class="help-block"></div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">{{ __('lang.send') }}</button>
                <button type="reset" class="btn btn-default btn-flat btn-theme-colored">{{ __('lang.reset') }}</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 bg-img-center bg-img-cover p-0">
          <div id="map" style="height:500px;width:90%;margin:50px 5%;border:1px solid #ccc;"></div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
