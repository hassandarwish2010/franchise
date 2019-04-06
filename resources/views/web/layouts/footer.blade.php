</div>
<!-- end main-content -->

<!-- Footer -->
<footer id="footer" class="footer pb-0" data-bg-img="{{ asset('public/web/template/images/footer-bg.png') }}" data-bg-color="#25272e">
  <div class="container pt-90 pb-60">
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <a href="{{ route('home', $lang) }}"><img alt="Medline" src="{{ asset('public/web/template/images/logo.png') }}"></a>
          @if($about_us_page != null)
          <p class="font-12 mt-10 mb-10">
            @php $about_us_details = $lang.'_details'@endphp {{ $about_us_page->$about_us_details }}
          </p>
          <a class="btn btn-default btn-transparent btn-xs btn-flat mt-5" href="{{ route('about', ['lang' => $lang, 'permalink' => $about_us_page->permalink]) }}">{{ __('lang.read_more') }}</a>
          @endif
          <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm mt-20">
            @if(isset($setting->facebook) && $setting->facebook != null)
              <li><a href="{{ $setting->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
            @endif
            @if(isset($setting->twitter) && $setting->twitter != null)
              <li><a href="{{ $setting->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
            @endif
            @if(isset($setting->googleplus) && $setting->googleplus != null)
              <li><a href="{{ $setting->googleplus }}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            @endif
            @if(isset($setting->linkedin) && $setting->linkedin != null)
              <li><a href="{{ $setting->linkedin }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            @endif
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h5 class="widget-title line-bottom-theme-colored-2">{{ __('lang.latest_products') }}</h5>
          <div class="latest-posts">
            @forelse($latest_3_products as $product)
            <article class="post media-post clearfix pb-0 mb-10">
              <a class="post-thumb" href="{{ route('product', ['lang' => $lang, 'permalink' => $product->permalink]) }}"><img src="{{ $product->image }}" alt="" class="footer-products"></a>
              <div class="post-right">
                <h5 class="post-title mt-0 mb-5"><a href="{{ route('product', ['lang' => $lang, 'permalink' => $product->permalink]) }}">@php $product_name = $lang.'_name'@endphp {{ $product->$product_name }}</a></h5>
                <p class="post-date mb-0 font-12">{{ $product->created_at }}</p>
              </div>
            </article>
            @empty
            there is no products until now !
            @endforelse
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h5 class="widget-title line-bottom-theme-colored-2">{{ __('lang.contact_us') }}</h5>
          <form id="contact_form_landing" name="" class="quick-contact-form" action="{{ route('contact.save', $lang) }}" method="post">
            <div class="form-group">
              <input name="name" class="form-control" type="text" required="required" placeholder="{{ __('lang.name') }}">
              <div id="failed_contact_name" class="help-block"></div>
            </div>
            <div class="form-group">
              <input name="email" class="form-control" type="email" required="rqeuired" placeholder="{{ __('lang.email') }}">
              <div id="failed_contact_email" class="help-block"></div>
            </div>
            <div class="form-group">
              <textarea name="details" class="form-control" required="rqeuired" placeholder="{{ __('lang.enter_message') }}" rows="3"></textarea>
              <div id="failed_contact_details" class="help-block"></div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-default btn-transparent btn-xs btn-flat mt-0" data-loading-text="Please wait...">{{ __('lang.send_message') }}</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h5 class="widget-title line-bottom-theme-colored-2">{{ __('lang.contact_info') }}</h5>
          <div class="opening-hours">
            <ul class="list list-border">
              @if(isset($setting->address) && $setting->address != null)
              <li class="clearfix"> <span><i class="fa fa-map-marker mr-5"></i> {{ __('lang.address') }} :</span>
                <div class="value pull-right">{{ $setting->address }}</div>
              </li>
              @endif
              @if(isset($setting->phone) && $setting->phone != null)
              <li class="clearfix"> <span><i class="fa fa-phone mr-5"></i> {{ __('lang.phone') }} :</span>
                <div class="value pull-right d-ltr"> {{ $setting->phone }} </div>
              </li>
              @endif
              @if(isset($setting->email) && $setting->email != null)
              <li class="clearfix"> <span><i class="fa fa-envelope mr-5"></i> {{ __('lang.email') }} :</span>
                <div class="value pull-right"> {{ $setting->email }} </div>
              </li>
              @endif
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-theme-colored p-20">
    <div class="row text-center">
      <div class="col-md-12">
        <p class="text-white font-11 m-0">{{ __('lang.copyright') }} &copy;{{ date('Y') }}
          <a class="typical" href="http://td.com.eg" target="_blank">Typical design</a>
          {{ __('lang.right_reserved') }}</p>
      </div>
    </div>
  </div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

@include('web.partials.success_modal')
@include('web.partials.failed_modal')
