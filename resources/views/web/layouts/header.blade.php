<!-- Header -->
<header id="header" class="header">
  <div class="header-top bg-theme-colored sm-text-center"></div>
  <div class="header-middle p-0 bg-lightest xs-text-center">
    <div class="container pt-0 pb-0">
      <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-5">
          <div class="widget no-border m-0">
            <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="{{ route('home', $lang) }}">
              <img src="{{ asset('public/web/template/images/logo.png') }}" alt="Logo" style="width:50%; height:auto">
            </a>
          </div>
        </div>
        @if(isset($setting->phone) && $setting->phone != null)
        <div class="col-xs-12 col-sm-4 col-md-4">
          <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0 pull-lang">
            <ul class="list-inline">
              <li><i class="fa fa-mobile text-theme-colored font-42 mt-5 sm-display-block"></i></li>
              <li>
                <a href="javascript:void(0);" class="font-12 text-gray text-uppercase">{{ __('lang.call_us') }}</a>
                <h5 class="font-14 m-0 ltr-dir">{{ $setting->phone }}</h5>
              </li>
            </ul>
          </div>
        </div>
        @endif
        @if(isset($setting->email) && $setting->email != null)
        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0 pull-lang">
            <ul class="list-inline">
              <li><i class="fa fa-envelope text-theme-colored font-36 mt-5 sm-display-block"></i></li>
              <li>
                <a href="javascript:void(0);" class="font-12 text-gray text-uppercase">{{ __('lang.email') }}</a>
                <h5 class="font-13 text-black m-0">{{ $setting->email }}</h5>
              </li>
            </ul>
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
  <div class="header-nav">
    <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
      <div class="container">
        <nav id="menuzord" class="menuzord blue bg-light">
          <ul class="menuzord-menu">
            <li><a href="{{ route('home', $lang) }}">{{ __('lang.home') }}</a></li>
            @if(count($about_pages) > 0)
            <li>
              <a href="javascript:void(0);">{{ __('lang.about') }}</a>
              <ul class="dropdown">
                @forelse($about_pages as $about)
                  <li><a href="{{ route('about', ['lang' => $lang, 'permalink' => $about->permalink]) }}">@php $about_name = $lang.'_name'@endphp {{ $about->$about_name}}</a></li>
                @empty
                @endforelse
              </ul>
            </li>
            @endif
            @if(count($random_categories) > 0)
            <li>
              <a href="javascript:void(0);">{{ __('lang.products') }}</a>
              <ul class="dropdown">
                @forelse($random_categories as $category)
                <li>
                  <a href="{{ route('products', ['lang' => $lang, 'category_id' => $category->id]) }}">@php $category_name = $lang.'_name'@endphp {{ $category->$category_name }}</a>
                  <ul class="dropdown">
                    @forelse($category->products as $product)
                    <li><a href="{{ route('product', ['lang' => $lang, 'permalink' => $product->permalink]) }}">@php $product_name = $lang.'_name'@endphp {{ $product->$product_name }}</a></li>
                    @empty
                    @endforelse
                  </ul>
                </li>
                @empty
                @endforelse
              </ul>
            </li>
            @endif
            @if($factory_page != null)
              <li><a href="{{ route('about', ['lang' => $lang, 'permalink' => $factory_page->permalink]) }}">@php $about_name = $lang.'_name'@endphp {{ $factory_page->$about_name}}</a></li>
            @endif
            <li><a href="{{ route('news', ['lang' => $lang]) }}">{{ __('lang.news') }}</a></li>
            <li><a href="{{ route('jobs', ['lang' => $lang]) }}">{{ __('lang.jobs') }}</a></li>
            <li><a href="{{ route('contact', ['lang' => $lang]) }}">{{ __('lang.contact') }}</a></li>
          </ul>
          <ul class="menuzord-menu opposite-menu">
            <li>
              <a href="{{ route('set.language', 'en') }}" >
                <img src='{{ asset("public/publics/images/en.png") }}' alt="English" title="English"/>
              </a>
            </li>
            <li>
              <a href="{{ route('set.language', 'ar') }}" >
                <img src='{{ asset("public/publics/images/ar.png") }}' alt="عربى" title="عربى"/>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>

<!-- Start main-content -->
<div class="main-content">
