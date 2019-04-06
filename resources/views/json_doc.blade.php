<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>franchise Json API Documentations</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<div class="page-header">
		<h1>Franchise Json API Documentations <small></small></h1>
	</div>
	<div class="row">
		<div class="col-md-2 col-sm-3">
			<div class="panel panel-primary">
      <div class="panel-heading">Sections</div>
      <div class="panel-body">
      	<ul class="nav nav-pills nav-stacked">
  <li class="active"><a data-toggle="pill" href="#home">Base URLS</a></li>
<!--   <li><a data-toggle="pill" href="#menu3">Conventions</a></li>
 -->  <li><a data-toggle="pill" href="#menu1">URLS</a></li>
<!--   <li><a data-toggle="pill" href="#menu2">Driver App</a></li>
 --></ul>

      </div>
    </div>
		</div>
		<div class="col-md-10 col-sm-9">


      	<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <div class="panel panel-default">
  <div class="panel-heading">Basic URLS</div>
  <div class="panel-body">
  	<table class="table">
  		<thead>
  	<tr>
  	<th><strong>Server : </strong></th>
  	<th>http://192.168.1.121/franchise/api/</th>
  	</tr>
  </thead>
  </table>
  </div>
</div>
  </div>
  <div id="menu1" class="tab-pane fade">
    <div class="panel panel-default">
  <div class="panel-heading">App URLs</div>
  <div class="panel-body">
    <div class="alert alert-warning">
  
</div>
  	<table class="table">
  		<thead>
  			<th>Method</th>
  			<th>Relative Path</th>
  			<th>Description</th>
  			<th>Parameters</th>
  			<th>Result</th>
  		</thead>
  		<tbody>
  			<tr>
  				<td><strong>Post : </strong></td>
  				<td>login</td>
  				<td>User login</td>
  				<td>password,username</td>
{{--  				<td><a target="blank" class="label label-primary" href="http://204.93.167.45/~res/sefrry/json/list_cities">Test</a></td>--}}
  			</tr>
			<tr>
				<td><strong>Post : </strong></td>
				<td>register</td>
				<td>User register</td>
				<td>password,username,name,email,phone,country,city are required</td>
				{{--  				<td><a target="blank" class="label label-primary" href="http://204.93.167.45/~res/sefrry/json/list_cities">Test</a></td>--}}
			</tr>
  			<tr>
  				<td><strong>Post : </strong></td>
  				<td>verfiy</td>
  				<td>To verfiy User Account </td>
  				<td>email,code are required and api_token </td>
{{--  				<td><a target="blank" class="label label-primary" href="http://192.168.1.121/franchise/api/cats">Test</a></td>--}}
  			</tr>
  			<tr>
  				<td><strong>Post : </strong></td>
  				<td>checkcompleteprofile</td>
  				<td>To check complete User profile</td>
  				<td>id and 	api_token </td>
{{--  				<td><a target="blank" class="label label-primary" href="http://204.93.167.45/~res/sefrry/json/list_res/1/1">Test</a></td>--}}
  			</tr>
  			<tr>
  				<td><strong>Post : </strong></td>
  				<td>completeprofile</td>
  				<td>To complete user profile</td>
  				<td>[id,company_name,company_type,company_phone,fax,cat_id,admin_phone,admin_conversion,api_token]</td>
{{--  				<td><a target="blank" class="label label-primary" href="http://204.93.167.45/~res/sefrry/json/items/1/0">Test</a></td>--}}
  			</tr>
			<tr>
				<td><strong>Post : </strong></td>
				<td>register-token</td>
				<td>for notification must generate token </td>
				<td>token , platform [android or ios] and api_token</td>
				{{--  				<td><a target="blank" class="label label-primary" href="http://204.93.167.45/~res/sefrry/json/list_res/1/1">Test</a></td>--}}
			</tr>
			<tr>
				<td><strong>Post : </strong></td>
				<td>remove-token</td>
				<td>when user logout token will remove </td>
				<td>token and api_token</td>
				{{--  				<td><a target="blank" class="label label-primary" href="http://204.93.167.45/~res/sefrry/json/list_res/1/1">Test</a></td>--}}
			</tr>
			<tr>
				<td><strong>Get : </strong></td>
				<td>banners/{lang}</td>
				<td> to get Banners Images </td>
				<td>lang=>language</td>
				<td><a target="blank" class="label label-primary" href="http://192.168.1.121/franchise/api/banners/ar">Test</a></td>
			</tr>
			<tr>
				<td><strong>Get : </strong></td>
				<td>cats</td>
				<td> to get all categories </td>
				<td>-</td>
				<td><a target="blank" class="label label-primary" href="http://192.168.1.121/franchise/api/cats">Test</a></td>
			</tr>

			<tr>
				<td><strong>Post : </strong></td>
				<td>cat</td>
				<td> to get details of one category </td>
				<td>id</td>
{{--				<td><a target="blank" class="label label-primary" href="http://192.168.1.121/franchise/api/cats">Test</a></td>--}}
			</tr>
			<tr>
				<td><strong>Post : </strong></td>
				<td>catwithfranchise</td>
				<td> to get details of one category and its franchises </td>
				<td>id</td>
				{{--				<td><a target="blank" class="label label-primary" href="http://192.168.1.121/franchise/api/cats">Test</a></td>--}}
			</tr>

			<tr>
				<td><strong>Get : </strong></td>
				<td>countries</td>
				<td> to get all countries </td>
				<td>-</td>
				<td><a target="blank" class="label label-primary" href="http://192.168.1.121/franchise/api/countries">Test</a></td>
			</tr>
			<tr>
				<td><strong>Get : </strong></td>
				<td>markets</td>
				<td> to get all markets </td>
				<td>-</td>
				<td><a target="blank" class="label label-primary" href="http://192.168.1.121/franchise/api/markets">Test</a></td>
			</tr>
			<tr>
				<td><strong>Get : </strong></td>
				<td>getfranchisetype</td>
				<td> to get all Franchise Type </td>
				<td>-</td>
				<td><a target="blank" class="label label-primary" href="http://192.168.1.121/franchise/api/getfranchisetype">Test</a></td>
			</tr>

			<tr>
				<td><strong>Get : </strong></td>
				<td>getperiod</td>
				<td> to get all Periods </td>
				<td>-</td>
				<td><a target="blank" class="label label-primary" href="http://192.168.1.121/franchise/api/getperiod">Test</a></td>
			</tr>

			<tr>
				<td><strong>Get : </strong></td>
				<td>getallfranchises</td>
				<td> to get all Franchises </td>
				<td>-</td>
				<td><a target="blank" class="label label-primary" href="http://192.168.1.121/franchise/api/getallfranchises">Test</a></td>
			</tr>
			<tr>
				<td><strong>Post : </strong></td>
				<td>createfranchise</td>
				<td> to Create New franchise </td>
				<td>[name ,user_id ,details , category_id , country_id , establish_date , period_id , image,
					franchise_type_id, franchise_type_value, owner_ship_commission ,
					marketing_commission , franchise_market ,  space=>must be array , total_Investment=> must be arry ,
					banners => must be array ]=><h4>are required</h4> <br>,[existing_local_branch, undercost_local_branch,
					existing_outside_branch , undercost_outside_branch , other_commission , other_commission_value ]
				=><h4>may be null</h4> </td>
				{{--				<td><a target="blank" class="label label-primary" href="http://192.168.1.121/franchise/api/cats">Test</a></td>--}}
			</tr>

			<tr>
				<td><strong>Post : </strong></td>
				<td>getuserfranchises</td>
				<td> to get user franchises </td>
				<td>[user_id]</td>
{{--				<td><a target="blank" class="label label-primary" href="http://192.168.1.121/franchise/api/page/ar/questions">Test</a></td>--}}
			</tr>
			<tr>
				<td><strong>get : </strong></td>
				<td>last-franchise</td>
				<td> to get last franchise </td>
				<td>-</td>
				<td><a target="blank" class="label label-primary" href="http://192.168.1.121/franchise/api/last-franchise">Test</a></td>
			</tr>
			<tr>
				<td><strong>Post : </strong></td>
				<td>deletefranchise</td>
				<td> to delete franchise </td>
				<td>[id]</td>
{{--				<td><a target="blank" class="label label-primary" href="http://192.168.1.121/franchise/api/page/ar/questions">Test</a></td>--}}
			</tr>

			<tr>
				<td><strong>Get : </strong></td>
				<td>services</td>
				<td> to get services page </td>
				<td>[lang=> 'ar' or 'en']</td>
				<td><a target="blank" class="label label-primary" href="http://192.168.1.121/franchise/api/services/ar">Test</a></td>
			</tr>

			<tr>
				<td><strong>Get : </strong></td>
				<td>courses</td>
				<td> to get courses page </td>
				<td>[lang=> 'ar' or 'en']</td>
				<td><a target="blank" class="label label-primary" href="http://192.168.1.121/franchise/api/courses/ar">Test</a></td>
			</tr>

			<tr>
				<td><strong>Get : </strong></td>
				<td>conferances</td>
				<td> to get conferances page </td>
				<td>[lang=> 'ar' or 'en']</td>
				<td><a target="blank" class="label label-primary" href="http://192.168.1.121/franchise/api/conferances/ar">Test</a></td>
			</tr>
			send-for-consultant
			<tr>
				<td><strong>Post : </strong></td>
				<td>suggestions</td>
				<td> to send suggestions</td>
				<td>[type , from ,email ,country , message]</td>
				{{--				<td><a target="blank" class="label label-primary" href="http://192.168.1.121/franchise/api/page/ar/questions">Test</a></td>--}}
			</tr>

			<tr>
				<td><strong>Post : </strong></td>
				<td>send-for-consultant</td>
				<td> to send message consultant</td>
				<td>[type , from ,email ,country , message]</td>
				{{--				<td><a target="blank" class="label label-primary" href="http://192.168.1.121/franchise/api/page/ar/questions">Test</a></td>--}}
			</tr>

			<tr>
				<td><strong>Post : </strong></td>
				<td>send-for-owner</td>
				<td> to send message owner</td>
				<td>[type , from ,email ,country , message, id]</td>
				{{--				<td><a target="blank" class="label label-primary" href="http://192.168.1.121/franchise/api/page/ar/questions">Test</a></td>--}}
			</tr>

  		</tbody>
  </table>
  </div>
</div>
  </div>


  </div>

</div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
