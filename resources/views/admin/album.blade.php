@extends('layouts.admin')
@section('content')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom  border-primary">
		<h5 class="h5">相册管理</h5>
		<div class="btn-toolbar mb-2 mb-md-0">
			<label for="addPictrue" class="btn btn-sm btn-success">添加</label>
			<input type="file" class="d-none" name="addPictrue" id="addPictrue">
		</div>
	</div>
  
    <div class="row">
		<div class="col-md-3 col-6">
          <div class="card mb-4 shadow-sm">
            <img width="100%" height="100%" src="/img/banner1.jpg"/>
            <div class="card-body">
              <p class="card-text editable">This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
				<button type="button" class="btn btn-sm btn-outline-danger">删 除</button>
				<button type="button" class="btn btn-sm btn-outline-success">保 存</button>
              </div>
            </div>
          </div>
        </div>
		<div class="col-md-3 col-6">
          <div class="card mb-4 shadow-sm">
            <img width="100%" height="100%" src="/img/banner1.jpg"/>
            <div class="card-body">
              <p class="card-text editable">This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
				<button type="button" class="btn btn-sm btn-outline-danger">删 除</button>
				<button type="button" class="btn btn-sm btn-outline-success">保 存</button>
              </div>
            </div>
          </div>
        </div>
		<div class="col-md-3 col-6">
          <div class="card mb-4 shadow-sm">
            <img width="100%" height="100%" src="/img/banner1.jpg"/>
            <div class="card-body">
              <p class="card-text editable">This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
				<button type="button" class="btn btn-sm btn-outline-danger">删 除</button>
				<button type="button" class="btn btn-sm btn-outline-success">保 存</button>
              </div>
            </div>
          </div>
        </div>
		<div class="col-md-3 col-6">
          <div class="card mb-4 shadow-sm">
            <img width="100%" height="100%" src="/img/banner1.jpg"/>
            <div class="card-body">
              <p class="card-text editable">This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
				<button type="button" class="btn btn-sm btn-outline-danger">删 除</button>
				<button type="button" class="btn btn-sm btn-outline-success">保 存</button>
              </div>
            </div>
          </div>
        </div>
		<div class="col-md-3 col-6">
          <div class="card mb-4 shadow-sm">
            <img width="100%" height="100%" src="/img/banner1.jpg"/>
            <div class="card-body">
              <p class="card-text editable">This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
				<button type="button" class="btn btn-sm btn-outline-danger">删 除</button>
				<button type="button" class="btn btn-sm btn-outline-success">保 存</button>
              </div>
            </div>
          </div>
        </div>
	</div>
@endsection
