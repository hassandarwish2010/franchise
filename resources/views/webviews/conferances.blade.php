<!DOCTYPE html>
<html lang="{{$lang}}">
<head>
    <title> {{ __('lang.conferances') }}</title>
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
        color: #fff;
    }
</style>
<body class="back_color">

@if($lang=='ar')
<div class="title right">
فاعليات ومؤتمرات
</div>
<div class="container-fluid ">
    @foreach($conferances as $conv)
    <div class="row bootm">

        <div class="col-xs-9">
            <div class="col-xs-6 color">{{$conv->date}}</div>
            <div class="col-xs-6 right color">{{$conv->title}}</div>
            <div class="col-xs-12 right">{!! $conv->details !!}</div>

        </div>
        <div class="col-xs-3">
            <img src="{{$conv->image}}" class="img-responsive img-circle">

        </div>
    </div>
    @endforeach
</div>

@elseif($lang=='en')
<div class="title left">
    {{ __('lang.conferances') }}
</div>
<div class="container-fluid">
    @foreach($conferances as $conv)
    <div class="row bootm">
        <div class="col-xs-3">
            <img src="{{$conv->image}}" class="img-responsive img-circle">

        </div>
        <div class="col-xs-9">
            <div class="col-xs-6 left color">{{$conv->title}}</div>
            <div class="col-xs-6 color">{{$conv->date}}</div>

            <div class="col-xs-12 left">{!! $conv->details !!}</div>

        </div>

    </div>
    @endforeach
</div>
@endif

</body>
</html>
