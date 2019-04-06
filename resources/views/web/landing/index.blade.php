@extends('web.layouts.layout')

@section('title', __('lang.home_page'))

@section('description', 'Medical - Health & Medical HTML Template')
@section('keywords', 'clinic, dental, doctor, health, hospital, medical, medical theme, medicine, therapy')

@section('preloader')
<!-- preloader -->
<div id="preloader">
  <div id="spinner">
    <img src="{{ asset('public/web/template/images/logo.png') }}" alt="Logo" style="width:150%">
  </div>
</div>
@endsection

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
<!-- Section: banner -->
<section id="home" class="divider">
  <div class="container-fluid p-0">
    <!-- Slider Revolution Start -->
    <div class="rev_slider_wrapper">
      <div class="rev_slider" data-version="5.0" style="max-height:450px">
        <ul>
          @forelse($banners as $banner)
            <li data-index="rs-{{ $banner->id }}" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="{{ $banner->image }}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
              <!-- MAIN IMAGE -->
              <img src="{{ $banner->image }}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
              <!-- LAYERS -->
              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-resizeme text-uppercase text-theme-colored pl-30 pr-30"
                id="rs-{{ $banner->id }}-layer-1"

                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['-90']"
                data-fontsize="['30']"
                data-lineheight="['54']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:bolder;  font-weight:700;">@php $banner_title = $lang.'_title'@endphp {{ $banner->$banner_title }}
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-resizeme text-center text-black"
                id="rs-{{ $banner->id }}-layer-2"
                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['-30']"
                data-fontsize="['16','18','24']"
                data-lineheight="['28']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:600;">@php $banner_description = $lang.'_description'@endphp {!! $banner->$banner_description !!}
              </div>
            </li>
          @empty
          <!-- SLIDE 1 -->
          <li data-index="rs-1" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="{{ asset('public/web/template/images/bg/bg30.jpg') }}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
            <!-- MAIN IMAGE -->
            <img src="{{ asset('public/web/template/images/bg/bg30.jpg') }}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
            <!-- LAYERS -->

            <!-- LAYER NR. 1 -->
            <div class="tp-caption tp-resizeme text-uppercase text-black pl-30 pr-30"
              id="rs-1-layer-1"

              data-x="['center']"
              data-hoffset="['0']"
              data-y="['middle']"
              data-voffset="['-90']"
              data-fontsize="['30']"
              data-lineheight="['54']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;s:500"
              data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
              data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
              data-start="1000"
              data-splitin="none"
              data-splitout="none"
              data-responsive_offset="on"
              style="z-index: 7; white-space: nowrap; font-weight:bolder;  font-weight:700;">We Provide Total
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-resizeme text-uppercase text-theme-colored pl-40 pr-40"
              id="rs-1-layer-2"
              data-x="['center']"
              data-hoffset="['0']"
              data-y="['middle']"
              data-voffset="['-20']"
              data-fontsize="['54']"
              data-lineheight="['70']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;s:500"
              data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
              data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
              data-start="1000"
              data-splitin="none"
              data-splitout="none"
              data-responsive_offset="on"
              style="z-index: 7; white-space: nowrap; font-weight:800;">Healthy masks
            </div>

            <!-- LAYER NR. 3 -->
            <div class="tp-caption tp-resizeme text-center text-black"
              id="rs-1-layer-3"

              data-x="['center']"
              data-hoffset="['0']"
              data-y="['middle']"
              data-voffset="['50','60','70']"
              data-fontsize="['16','18','24']"
              data-lineheight="['28']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;s:500"
              data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
              data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
              data-start="1400"
              data-splitin="none"
              data-splitout="none"
              data-responsive_offset="on"
              style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:600;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.
            </div>

            <!-- LAYER NR. 4 -->

</li>

          <!-- SLIDE 2 -->
          <li data-index="rs-2" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="{{ asset('public/web/template/images/bg/bg23.jpg') }}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
            <!-- MAIN IMAGE -->
            <img src="{{ asset('public/web/template/images/bg/bg23.jpg') }}"  alt=""  data-bgposition="center 20%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
            <!-- LAYERS -->

            <!-- LAYER NR. 1 -->
            <div class="tp-caption tp-resizeme text-uppercase text-black"
              id="rs-2-layer-1"

              data-x="['left']"
              data-hoffset="['30']"
              data-y="['middle']"
              data-voffset="['-110']"
              data-fontsize="['30']"
              data-lineheight="['50']"

              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;s:500"
              data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
              data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
              data-start="1000"
              data-splitin="none"
              data-splitout="none"
              data-responsive_offset="on"
              style="z-index: 7; white-space: nowrap; font-weight:bolder; font-weight:700;">We Provide Total
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-resizeme text-uppercase text-theme-colored"
              id="rs-2-layer-2"

              data-x="['left']"
              data-hoffset="['30']"
              data-y="['middle']"
              data-voffset="['-45']"
              data-fontsize="['54']"
              data-lineheight="['70']"

              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;s:500"
              data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
              data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
              data-start="1000"
              data-splitin="none"
              data-splitout="none"
              data-responsive_offset="on"
              style="z-index: 7; white-space: nowrap; font-weight:800;">Breating devices
            </div>

            <!-- LAYER NR. 3 -->
            <div class="tp-caption tp-resizeme text-black"
              id="rs-2-layer-3"

              data-x="['left']"
              data-hoffset="['35']"
              data-y="['middle']"
              data-voffset="['35','45','55']"
              data-fontsize="['16','18','24']"
              data-lineheight="['28']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;s:500"
              data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
              data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
              data-start="1400"
              data-splitin="none"
              data-splitout="none"
              data-responsive_offset="on"
              style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:600;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.
            </div>

            <!-- LAYER NR. 4 -->

    </li>

          <!-- SLIDE 3 -->
          <li data-index="rs-3" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="{{ asset('public/web/template/images/bg/bg24.jpg') }}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
            <!-- MAIN IMAGE -->
            <img src="{{ asset('public/web/template/images/bg/bg24.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
            <!-- LAYERS -->

            <!-- LAYER NR. 1 -->
            <div class="tp-caption tp-resizeme text-uppercase text-black"
              id="rs-3-layer-1"

              data-x="['right']"
              data-hoffset="['30']"
              data-y="['middle']"
              data-voffset="['-110']"
              data-fontsize="['30']"
              data-lineheight="['50']"

              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;s:500"
              data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
              data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
              data-start="1000"
              data-splitin="none"
              data-splitout="none"
              data-responsive_offset="on"
              style="z-index: 7; white-space: nowrap; font-weight:bolder; font-weight:700;">We Provide Total
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-resizeme text-uppercase text-theme-colored font-raleway"
              id="rs-3-layer-2"

              data-x="['right']"
              data-hoffset="['30']"
              data-y="['middle']"
              data-voffset="['-45']"
              data-fontsize="['54']"
              data-lineheight="['70']"

              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;s:500"
              data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
              data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
              data-start="1000"
              data-splitin="none"
              data-splitout="none"
              data-responsive_offset="on"
              style="z-index: 7; white-space: nowrap; font-weight:800;">Healthy Masks
            </div>

            <!-- LAYER NR. 3 -->
            <div class="tp-caption tp-resizeme text-right text-black"
              id="rs-3-layer-3"

              data-x="['right']"
              data-hoffset="['35']"
              data-y="['middle']"
              data-voffset="['30','40','50']"
              data-fontsize="['16','18','24']"
              data-lineheight="['28']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;s:500"
              data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
              data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
              data-start="1400"
              data-splitin="none"
              data-splitout="none"
              data-responsive_offset="on"
              style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:600;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.
            </div>

            <!-- LAYER NR. 4 -->

    </li>
        @endforelse
        </ul>
      </div>
      <!-- end .rev_slider -->
    </div>
  </div>
</section>

<!-- Section: Welcome -->
<section class="">
  <div class="container">
    <div class="section-content">
      <div class="row">
        <div class="col-md-6">
          @if($welcome != null)
            <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">@php $welcome_name = $lang.'_name'@endphp {{ $welcome->$welcome_name }}</h2>
            <p>
              @php $welcome_details = $lang.'_details'@endphp {!! $welcome->$welcome_details !!}
            </p>
            <a class="btn btn-theme-colored btn-flat btn-lg mt-10 mb-sm-30" href="{{ route('about', ['lang' => $lang, 'permalink' => $welcome->permalink]) }}">{{ __('lang.know_more') }} →</a>
          @else
            <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">The World’s Best Treatment in Our Company</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit expedita obcaecati nulla in ducimus iure quos quam recusandae dolor quas et perspiciatis voluptatum accusantium delectus nisi reprehenderit, eveniet fuga modi pariatur, eius vero. Ea vitae maiores.</p>
            <a class="btn btn-theme-colored btn-flat btn-lg mt-10 mb-sm-30" href="javascript:void(0);">{{ __('lang.know_more') }} →</a>
          @endif
        </div>
        <div class="col-md-6">
          <div class="video-popup">
            <a href="javascript:void(0);" title="Image">
              <img alt="" src="{{ asset('public/web/template/images/about/1.gif') }}" class="img-responsive img-fullwidth" style="border: solid 1px #9bd2f7;border-radius: 10px;">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Products -->
<section id="doctors" class="bg-silver-light ltr">
  <div class="container">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="text-uppercase mt-0 line-height-1">{{ __('lang.our_products') }}</h2>
          <div class="title-icon">
            <img class="mb-10" src="{{ asset('public/web/template/images/title-icon.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="row mtli-row-clearfix">
      <div class="col-md-12">
        <div class="owl-carousel-4col">
          @forelse($products as $product)
          <a href="{{ route('product', ['lang' => $lang, 'permalink' => $product->permalink]) }}" class="item">
            <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="{{ $product->image }}">
                <div class="team-overlay"></div>
              </div>
              <div class="team-details bg-silver-light pt-10 pb-10">
                <h4 class="text-uppercase font-weight-600 m-5">@php $product_name = $lang.'_name'@endphp {{ $product->$product_name }}</h4>
                <h6 class="text-theme-colored font-15 font-weight-400 mt-0">
                  @php $product_details = $lang.'_details'@endphp {!! $product->$product_details !!}
                </h6>
              </div>
            </div>
          </a>
          @empty
            <p class="text-center">
              {{ __('lang.no_data') }}
            </p>
          @endforelse
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: News -->
<section id="blog" class="ltr">
  <div class="container">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="text-uppercase mt-0 line-height-1">{{ __('lang.our_news') }}</h2>
          <div class="title-icon">
            <img class="mb-10" src="{{ asset('public/web/template/images/title-icon.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        <div class="col-md-12">
          <div class="owl-carousel-3col">
            @forelse($news as $new)
            <div class="item">
              <a class="post clearfix bg-white" href="{{ route('new', ['lang' => $lang, 'permalink' => $new->permalink]) }}">
                <div class="entry-header">
                  <div class="post-thumb thumb">
                    <img src="{{ $new->image }}" alt="" class="img-responsive img-fullwidth">
                  </div>
                  <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                    <ul>
                      <li class="font-16 text-white font-weight-600">{{ $new->day }}</li>
                      <li class="font-12 text-white text-uppercase">{{ $new->month }}</li>
                    </ul>
                  </div>
                </div>
                <div class="entry-content p-15 pt-10 pb-10">
                  <div class="entry-meta media no-bg no-border mt-0 mb-10">
                    <div class="media-body pl-0">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5 c-right">
                          <a href="{{ route('new', ['lang' => $lang, 'permalink' => $new->permalink]) }}">@php $new_title = $lang.'_title'@endphp {{ $new->$new_title }}</a></h4>
                          <p class="c-right date-time">{{ $new->created_at }}</p>
                          <p class="c-right">@php $new_details = $lang.'_details'@endphp {{ $new->$new_details }}</p>
                      </div>
                    </div>
                  </div>
                  <p class="mt-5 fl-opposite-lang">
                    <a class="text-theme-color-2 font-12 ml-5" href="{{ route('new', ['lang' => $lang, 'permalink' => $new->permalink]) }}">
                      {{ __('lang.view_details') }}
                    </a>
                  </p>
                </div>
              </a>
            </div>
            @empty
            <p class="text-center">
              {{ __('lang.no_data') }}
            </p>
            @endforelse
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="map-content">
  <div id="map" style="height:400px;width:100%;"></div>
</section>
@endsection
