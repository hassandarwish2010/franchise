<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

@if($lang=='ar')
    <h2 style="text-align: right;direction: rtl;">{{ $page->title }} </h2>

    <div style="text-align: right;direction: rtl;">{!!$page->details!!}</div>
@elseif($lang=='en')
    <h2 style="text-align:left;direction: ltr;">{{ $page->title  }} </h2>

    <div style="text-align:left;direction: ltr;">{!!$page->details!!}</div>
@endif

</body>
</html>
