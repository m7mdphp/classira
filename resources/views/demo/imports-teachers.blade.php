@extends('layouts.body')
@section('title', 'استيراد المعلمين من برنامج نور')
@section('content')
<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">استيراد المعلمين من برنامج نور</h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="#"><span>استيراد المعلمين من برنامج نور</span></a></li>
								</ol>
							</div>
							<!-- /Breadcrumb -->
						
						</div>
				<!-- Row -->
				<!-- Row -->

			

				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
					<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">استيراد ملف من برنامج نور</h6>
						</div>
						<div class="clearfix"></div>
						</div>
					<div class="panel-wrapper collapse in">
					<div class="panel-body">
					<div class="form-wrap">
					<form class="form-inline">
					<input type="file" id="input-file-now" class="dropify" required />
					<div class="clearfix"></div>
					<div class="text-center">
					<button type="submit" class="btn btn-danger inline-block mt-30">
						<span class="btn-text">التالي</span>
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