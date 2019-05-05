@extends('layouts.admin')
@section('content')	
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom  border-primary">
	<h5 class="h5">账号设置</h5>
	<div class="btn-toolbar mb-2 mb-md-0">
	  <div class="btn-group mr-2">
		<button type="button" class="btn btn-sm btn-outline-primary">列表</button>
		<button type="button" class="btn btn-sm btn-outline-primary">缩略图</button>
	  </div>
		<button type="button" class="btn btn-sm btn-outline-success ">添加</button>
	</div>
</div>	
<form method="POST" action="/dashboard/deliveryAddr">
<input name="_token" value="jfGzyGDzynzQCOA0mzd3NWX4a5b4GVX9b0xOz0kR" type="hidden">
	<fieldset class="form-group border px-4" id="invoice">
		<legend class="col-form-label col-md-2 pt-0 text-danger">开票信息</legend>
		<div class="form-group row">
			<label for="cn" class="col-md-1 col-form-label">名称：</label>
			<div class="col-md-3">
			  <input class="form-control" name="cn" placeholder="公司名称" required="required" type="text">
			</div>
			<label for="tel" class="col-md-1 col-form-label">电话：</label>
			<div class="col-md-2">
			  <input class="form-control" name="tel" placeholder="联系电话" required="required" type="text">
			</div>
			<label for="tel" class="col-md-2 col-form-label">统一信用代码：</label>
			<div class="col-md-3">
			  <input class="form-control" name="vat" placeholder="统一信用代码" required="required" type="text">
			</div>
		</div>
		<div class="form-group row">
			<label for="tel" class="col-md-1 col-form-label">地址：</label>
			<div class="col-md-3">
			  <input class="form-control" name="addr" placeholder="企业地址" required="required" type="text">
			</div>
			<label for="tel" class="col-md-1 col-form-label">开户行：</label>
			<div class="col-md-3">
			  <input class="form-control" name="bank" placeholder="开户银行" required="required" type="text">
			</div>
			<label for="tel" class="col-md-1 col-form-label">账号：</label>
			<div class="col-md-3">
			  <input class="form-control" name="bn" placeholder="银行账号" required="required" type="text">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-2">
			  <button type="submit" class="btn btn-sm btn-success"> 保 存</button>
			</div>
		</div>
		</form>
	</fieldset>
@endsection
