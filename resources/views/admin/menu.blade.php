@extends('layouts.admin')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom  border-primary">
	<h5 class="h5">菜单管理</h5>
	<div class="btn-toolbar mb-2 mb-md-0">
	  <div class="btn-group mr-2">
		<button type="button" class="btn btn-sm btn-outline-primary">列表</button>
		<button type="button" class="btn btn-sm btn-outline-primary">缩略图</button>
	  </div>
		<button type="button" class="btn btn-sm btn-outline-success ">添加</button>
	</div>
</div>
<div class="table-responsive">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">品名</th>
	  <th scope="col">价格</th>
      <th scope="col">类目</th>
	  <th scope="col">上架</th>
      <th scope="col">特色</th>
      <th scope="col">推荐</th>
	  <th scope="col">外卖</th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
		<th scope="row">十三点</th>
		<td>￥88.34</td>
		<td>Mark</td>
		<td>是</td>
		<td>否</td>
		<td>是</td>
		<td>是</td>
		<td>
			<a ><embed src="/img/edit.svg" width="20" height="20" type="image/svg+xml" /></a>
			<a class="h1 text-danger d-inline-block ml-2 optIcon" title="删除"> &times;</a>
		</td>
    </tr>
  </tbody>
</table>
</div>
@endsection
