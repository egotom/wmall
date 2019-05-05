@extends('layouts.admin')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom  border-primary">
	<h5 class="h5">店铺管理</h5>
</div>	 
@if(isset($store))
<form method="PUT"  action="/admin/store">
@else
<form method="POST"  action="/admin/store">
@endif
	@csrf
	<fieldset class="form-group border p-4" >
		<legend class="col-form-label col-md-2 pt-0 "> </legend>
		<div class="form-group row">
			<label for="cn" class="col-md-2 col-form-label text-right">店铺名称：</label>
			<div class="col-md-3">
			  <input class="form-control" name="name" placeholder="公司名称" required="required" type="text" value="@if(isset($store)){{$store->name}}@endif">
			</div>
			<label for="tel" class="col-md-2 col-form-label text-right">联系电话：</label>
			<div class="col-md-3">
			  <input class="form-control" name="telphone" placeholder="联系电话" required="required" type="text" value="@if(isset($store)){{$store->telphone}}@endif">
			</div>
		</div>
		<div class="form-group row">
			<label for="tel" class="col-md-2 col-form-label text-right">地址：</label>
			<div class="col-md-3">
			  <input class="form-control" name="address" placeholder="企业地址" required="required" type="text" value="@if(isset($store)){{$store->address}}@endif">
			</div>
			<label for="tel" class="col-md-2 col-form-label text-right">营业时间：</label>
			<div class="col-md-3">
			  <input class="form-control" name="part_time" placeholder="营业时间" required="required" type="text" value="@if(isset($store)){{$store->part_time}}@endif">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label text-right">推荐：</label>
			<div class="col-md-3">
				<select id="tujian" multiple="multiple" name="tujian">
					<option value="cheese">Cheese</option>
					<option value="tomatoes">Tomatoes</option>
					<option value="mozarella">Mozzarella</option>
					<option value="mushrooms">Mushrooms</option>
					<option value="pepperoni">Pepperoni</option>
					<option value="onions">Onions</option>
				</select>
			</div>
			<label for="tel" class="col-md-2 col-form-label text-right">特色：</label>
			<div class="col-md-3">
				<select id="tese" multiple="multiple" name="tese">
					<option value="cheese">Cheese</option>
					<option value="tomatoes">Tomatoes</option>
					<option value="mozarella">Mozzarella</option>
					<option value="mushrooms">Mushrooms</option>
					<option value="pepperoni">Pepperoni</option>
					<option value="onions">Onions</option>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="tel" class="col-md-2 col-form-label text-right">上架产品：</label>
			<div class="col-md-3">
				<select id="shangj" multiple="multiple" name="shangj">
					<option value="cheese">Cheese</option>
					<option value="tomatoes">Tomatoes</option>
					<option value="mozarella">Mozzarella</option>
					<option value="mushrooms">Mushrooms</option>
					<option value="pepperoni">Pepperoni</option>
					<option value="onions">Onions</option>
				</select>
			</div>
			<label for="tel" class="col-md-2 col-form-label text-right">相册：</label>
			<div class="col-md-3">
			    <select id="phto" multiple="multiple" name="phto">
					<option value="cheese">Cheese</option>
					<option value="tomatoes">Tomatoes</option>
					<option value="mozarella">Mozzarella</option>
					<option value="mushrooms">Mushrooms</option>
					<option value="pepperoni">Pepperoni</option>
					<option value="onions">Onions</option>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="tel" class="col-md-2 col-form-label text-right">人均消费：</label>
			<div class="col-md-3">
			  <input class="form-control" name="avg_price" placeholder="人均消费" required="required" type="text" value="@if(isset($store)){{$store->avg_price}}@endif">
			</div>
			<div class="col-md-2 text-right">
			  <input type="checkbox" class="mt-3" name="takeout">
			</div>
			<label for="takeout" class="col-md-2 col-form-label mt-1 text-left">支持外卖</label>
		</div>
		<div class="form-group row px-4">
			@if(count($errors))
			<label id="info" class="col-md-8 offset-2 col-form-label rounded alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</label>
			@endif
			@if(isset($ok))
				<label id="info" class="col-md-8 offset-2 col-form-label rounded alert alert-success">
					{{$ok[0]}}
				</label>
			@endif
		</div>
		<div class="form-group row ">
			<div class="col-md-2 offset-2">
			  <button type="submit" class="btn btn-sm btn-success" id="storeAdd"> 保 存</button>
			</div>
		</div>
	</fieldset>
</form>
@endsection
