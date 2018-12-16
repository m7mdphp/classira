@extends('layouts.body')
@section('title', ' إنشاء فئة فصل ')
@section('content')
<div class="container-fluid pt-25">
					<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark"> إنشاء فئة فصل </h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="#"><span> إنشاء فئة فصل </span></a></li>
								</ol>
							</div>
							<!-- /Breadcrumb -->
						
						</div>
				<!-- Row -->

				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
					<div class="panel panel-default card-view">
					<div class="panel-wrapper collapse in">
					<div class="panel-body">
						
					<div class="form-wrap mt-30">
					<form data-toggle="validator" role="form" class="form-horizontal" method="POST" action="{{ action('ClassController@store') }}" enctype="multipart/form-data">
						<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
					<div class="form-group">
						<div class="col-md-6">
							<label class="control-label mb-10">العنوان <span class="help text-danger"> *</span></label>
							<input type="text" class="form-control" placeholder="العنوان " required name="name" value="{{ old('name') }}">
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="text-center">
					<button type="submit" class="btn btn-danger inline-block mt-30">
						<span class="btn-text">تسليم</span>
					</button>
					</div>
					</form>
					</div>
					</div>
					</div>
					</div>
					</div>
				</div>
				<!-- Row -->

@endsection