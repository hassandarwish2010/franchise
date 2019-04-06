<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="@yield('description')" />
<meta name="keywords" content="@yield('keywords')" />
<meta name="author" content="Ayman Elmalah" />
<!-- Page Title -->
<title>@yield('title') | {{ config('app.name', 'Medline') }}</title>
<!-- Favicon and Touch Icons -->
<link href="{{ asset('public/publics/images/icon.png') }}" rel="shortcut icon" type="image/png">
<link href="{{ asset('public/publics/images/icon.png') }}" rel="icon">
<link href="{{ asset('public/publics/images/icon.png') }}" rel="icon" sizes="72x72">
<link href="{{ asset('public/publics/images/icon.png') }}" rel="icon" sizes="114x114">
<link href="{{ asset('public/publics/images/icon.png') }}" rel="icon" sizes="144x144">
<!-- Stylesheet -->
<link href="{{ asset('public/web/template/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('public/web/template/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('public/web/template/css/animate.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('public/web/template/css/css-plugin-collections.css') }}" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{ asset('public/web/template/css/menuzord-skins/menuzord-boxed.css') }}" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{ asset('public/web/template/css/style-main.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{ asset('public/web/template/css/preloader.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{ asset('public/web/template/css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{ asset('public/web/template/css/responsive.css') }}" rel="stylesheet" type="text/css">
<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{ asset('public/web/template/js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('public/web/template/js/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('public/web/template/js/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="{{ asset('public/web/template/css/colors/theme-skin-blue.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('public/web/template/css/style.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('public/web/css/style.css') }}" rel="stylesheet" type="text/css">
@isset($lang)
  @if($lang == 'ar')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/web/css/ar/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
  @endif
@endisset
@yield('css')
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="has-side-panel side-panel-right fullwidth-page side-push-panel">
<div class="body-overlay"></div>
