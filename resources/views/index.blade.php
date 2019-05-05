@extends('layouts.app')
@section('content')
    <div class="container ">
      <div class="row">
		<div class="col-md-3 col-6">
          <div class="card mb-4 shadow-sm">
            <img width="100%" height="100%" src="img/banner1.jpg"/>
            <div class="card-body">
              <p class="card-text">This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-secondary">￥ 9.00</small>
				<button type="button" class="btn btn-sm btn-outline-success">电话</button>
              </div>
            </div>
          </div>
        </div>
		<div class="col-md-3 col-6">
          <div class="card mb-4 shadow-sm">
            <img width="100%" height="100%" src="img/banner2.jpg"/>
            <div class="card-body">
              <p class="card-text">This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-secondary">￥ 9.00</small>
				<button type="button" class="btn btn-sm btn-outline-success">电话</button>
              </div>
            </div>
          </div>
        </div>
		<div class="col-md-3 col-6">
          <div class="card mb-4 shadow-sm">
            <img width="100%" height="100%" src="img/banner3.jpg"/>
            <div class="card-body">
              <p class="card-text">This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-secondary">￥ 9.00</small>
				<button type="button" class="btn btn-sm btn-outline-success">电话</button>
              </div>
            </div>
          </div>
        </div>
		<div class="col-md-3 col-6">
          <div class="card mb-4 shadow-sm">
            <img width="100%" height="100%" src="img/banner3.jpg"/>
            <div class="card-body">
              <p class="card-text">This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
				<small class="text-secondary">￥ 9.00</small>
                <button type="button" class="btn btn-sm btn-outline-success">电话</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <div class="container">
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 col-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5 col-5">
		<img width="100%" width="100%" src="img/banner3.jpg"/>
      </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 col-7 order-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5 col-5 order-1">
        <img width="100%" width="100%" src="img/banner1.jpg"/>
      </div>
    </div>
  </div>
@endsection
