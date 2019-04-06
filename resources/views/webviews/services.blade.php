<!DOCTYPE html>
<html lang="{{$lang}}">
<head>
    <title> {{ __('lang.services') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    .right{
        text-align: right
    }
    .left{
        text-align: left;
    }
    .bootm{
        margin-bottom: 20px;
    }
    .back_color{
        background-color: #43A5Ad;
    }
    .title{
        background-color: #7fc6d7;
        height: 60px;
        line-height: 60px;
        margin-bottom: 10px;
    }
    *{
        font-family: 'Cairo' !important;
    }
    .color{
        color:#fff;
    }
</style>
<body>

@if($lang=='ar')
    <div class="title right">
        خدماتنا
    </div>
     <div class="container-fluid ">
         @foreach($services as $service)
         <h4 class="right">{{$service->title}}</h4>
             <p class="right">{!! $service->details !!}</p>
         @endforeach
     </div>

@elseif($lang=='en')
    <div class="title left">
        {{ __('lang.services') }}
    </div>
    <div class="container-fluid ">
        @foreach($services as $service)
            <h4 class="left">{{$service->title}}</h4>
            <p class="left">{!! $service->details !!}</p>
        @endforeach
    </div>
@endif

</body>
</html>
