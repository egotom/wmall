@extends('layouts.admin')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom  border-primary">
	<h5 class="h5">菜单管理</h5>
</div>
	<fieldset class="form-group border p-4" id="invoice">
		<legend class="col-form-label col-md-2 pt-0 "></legend>
		<div class="form-group row">
			<label for="cn" class="col-md-2 col-form-label text-right">产品名称：</label>
			<div class="col-md-5">
			  <input class="form-control" name="cn" placeholder="产品名称" required="required" type="text">
			</div>
		</div>
		<div class="form-group row">
			<label for="tel" class="col-md-2 col-form-label text-right">定价：</label>
			<div class="col-md-3">
			  <input class="form-control" name="addr" placeholder="价格" required="required" type="text">
			</div>			
		</div>
		<div class="form-group row">
			<label for="tel" class="col-md-2 col-form-label text-right">类别：</label>
			<div class="col-md-3">
			    <select class="custom-select">
				  <option selected>Open this select menu</option>
				  <option value="1">One</option>
				  <option value="2">Two</option>
				  <option value="3">Three</option>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="tel" class="col-md-2 col-form-label text-right">产品介绍</label>
			<div class="col-md-8">
			    <script id="container" name="content" type="text/plain" style="width:100%;height:200px;">
					产品介绍
				</script>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-1 offset-2 text-right">
			  <input type="checkbox" class="mt-3" id="special">
			</div>
			<label for="special" class="col-md-1 col-form-label mt-1 text-left">特色</label>
			<div class="col-md-1 text-right">
			  <input type="checkbox" class="mt-3" id="recomand">
			</div>
			<label for="recomand" class="col-md-1 col-form-label mt-1 text-left">推荐</label>
			<div class="col-md-1 text-right">
			  <input type="checkbox" class="mt-3" id="pub">
			</div>
			<label for="pub" class="col-md-1 col-form-label mt-1 text-left">上架</label>
			<div class="col-md-1 text-right">
			  <input type="checkbox" class="mt-3" id="takeout">
			</div>
			<label for="takeout" class="col-md-1 col-form-label mt-1 text-left">支持外卖</label>
		</div>
		<div class="form-group row">
			<div class="col-md-1 offset-2">
			  <button type="submit" class="btn btn-sm btn-success"> 保 存</button>
			</div>
		</div>
	</fieldset>
	<script type="text/javascript">
		$(function(){
			window.um = UM.getEditor('container', {
				/* 传入配置参数,可配参数列表看umeditor.config.js */
				toolbar: [
					'source | undo redo | bold italic underline strikethrough | superscript subscript | forecolor backcolor | removeformat |',
					'insertorderedlist insertunorderedlist | selectall cleardoc paragraph | fontfamily fontsize' ,
					'| justifyleft justifycenter justifyright justifyjustify |',
					'link unlink | emotion image video  | map',
					'| horizontal print preview fullscreen', 'drafts', 'formula'
				]
			});
		});
	</script>
@endsection
