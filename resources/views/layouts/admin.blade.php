<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@lang('pages.App')</title>
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/bootstrap-multiselect.css">
	<script src="/js/app.js" charset="utf-8"></script>
	<script type="text/javascript" src="/js/bootstrap-multiselect.js"></script>
	
	<link rel="stylesheet" href="/umeditor/themes/default/css/umeditor.css">
	<script type="text/javascript" src="/third-party/template.min.js"></script>
	<script type="text/javascript" src="/umeditor/umeditor.config.js"></script>
	<script type="text/javascript" src="/umeditor/umeditor.js"></script>
	<script type="text/javascript" src="/umeditor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
	<div class=" bg-slight ">
		<div class="container">
		  <nav class="navbar navbar-expand-lg navbar-light ">
			<a class="navbar-brand h1" href="/">@lang('pages.App')</a>
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="navbar-collapse collapse" id="navbarsExample09" style="">
			  <ul class="navbar-nav mr-auto">
				<li class="nav-item active"><a class="nav-link" href="#"> <span class="sr-only">(current)</span></a></li>
			  </ul>
			<ul class="navbar-nav ml-auto">
				<!-- Authentication Links -->
				@guest
					<li class="nav-item">
						<a class="nav-link" href="{{ route('login') }}">@lang('pages.Login')</a>
					</li>
					@if (Route::has('register'))
					<li class="nav-item">
						<a class="nav-link" href="{{ route('register') }}">@lang('pages.Register')</a>
					</li>
					@endif
				@else
				<li class="nav-item dropdown">Hi, 
					<a href="{{ route('logout') }}"  title="退出登录" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
						{{ Auth::user()->name }} 
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
				</li>
				@endguest
			</ul>
			</div>
		  </nav>
		</div>
	</div>
    <div class="container pt-3">
      <div class="row d-flex justify-content-center">
        <div class="col-md-6 col-12">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="web-tab" data-toggle="tab" href="#web" role="tab" aria-controls="web" aria-selected="true">@lang('pages.Menu')</a></li>
            <li class="nav-item"><a class="nav-link" id="ads-tab" data-toggle="tab" href="#ads" role="tab" aria-controls="ads" aria-selected="false">@lang('pages.Restaurant')</a></li>
            <li class="nav-item"><a class="nav-link" id="LBS-tab" data-toggle="tab" href="#LBS" role="tab" aria-controls="LBS" aria-selected="false">@lang('pages.LBS')</a></li>
          </ul>
          <div class="tab-content pt-3 px-3 " id="myTabContent">
            <div class="tab-pane fade show active" id="web" role="tabpanel" aria-labelledby="web-tab">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-primary" placeholder="" aria-label="" aria-describedby="ba2">
                <div class="input-group-append"><a class="btn btn-primary" href="#" id="ba2">@lang('pages.Search')</a></div>
              </div>
            </div>
            <div class="tab-pane fade" id="ads" role="tabpanel" aria-labelledby="ads-tab">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-success" placeholder="" aria-label="" aria-describedby="ba2">
                <div class="input-group-append"><a class="btn btn-success" href="#" id="ba2">@lang('pages.Search')</a></div>
              </div>
            </div>
            <div class="tab-pane fade" id="LBS" role="tabpanel" aria-labelledby="LBS-tab">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-danger" placeholder="" aria-label="" aria-describedby="ba2">
                <div class="input-group-append"><a class="btn btn-danger" href="#" id="ba2">@lang('pages.Search')</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<div class="container-fuld">
	  <div class="row px-2">
		<div class="col-md-2 col-12 px-4">
			<div class="list-group list-group-flush">
			  <a href="/admin/overview" class="list-group-item list-group-item-action bg-transparent">概 览   </a>
			  <a href="/admin/store" class="list-group-item list-group-item-action bg-transparent">店铺管理</a>
			  <a href="/admin/album" class="list-group-item list-group-item-action bg-transparent">相册管理</a>
			  <a href="/admin/menu" class="list-group-item list-group-item-action bg-transparent">产品管理</a>			  
			  <a href="/admin/statistics" class="list-group-item list-group-item-action bg-transparent">浏览量统计</a>
			  <a href="/admin/setting" class="list-group-item list-group-item-action bg-transparent">账号设置</a>
			</div>
		</div>
		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 border-left">
			@yield('content')
		</main>
	  </div>
	</div>

	<footer class="bg-slight mt-4">
	<div class="container py-4">
		<p class="float-right"><a href="#">回到顶端</a></p>
		<div class="row  soft d-none d-md-block d-lg-block">
			<p>&copy; 2017-2019 &middot;<a href="{{ url('/about') }}"> @lang('pages.App')</a></p>
		</div>
		<div class="container-fluid text-center">
			<div class="row d-md-none fixed-bottom">
				<a href="{{ url('/about') }}" class="bg-success d-inline-block col-sm-4 col-4 py-3 text-white" >关于我们</a>
				<a href="tel:@lang('pages.kefu')" class="bg-info d-inline-block  col-sm-4 col-4 py-3 text-white shangqiao" >在线客服</a>
				<a href="{{ url('/login') }}" class="bg-danger d-inline-block col-sm-4 col-4 py-3 text-white" >注册 / 登录</a>
			</div>
		</div>
	</div>
	</footer>
</body>
</html>
