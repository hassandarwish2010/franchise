@extends('admin.layouts.layout')

@section('title', __('lang.dashboard'))

@section('js')
<script>
$(document).ready(function() {
    $.toast({
        heading: 'Welcome At Medline Dashboard',
        text: 'You can control all the website from here',
        position: 'top-right',
        loaderBg: '#FF0000',
        icon: 'info',
        hideAfter: 3500,
        stack: 6
    })
});
</script>
@endsection

@section('content')

@endsection
