@extends('layouts.body')
@section('title', 'تقرير مستوي طالب')
@section('content')
					<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">تقرير مستوي طالب</h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="#"><span>تقرير مستوي طالب</span></a></li>
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
					<div class="form-wrap">
					<form >

					<div class="form-group mr-15 col-md-6">
					<label class="control-label mr-10" for="schcool">اختيار المدارس لتحديد المراحل الدراسيه</label>
					<select class="form-control" id="schcool">
						<option>الاندلس بنين</option>
						<option>الجبيل الصناعيه بنين</option>
					</select>
					</div>
					
					<div class="form-group mr-15 col-md-6">
					<label class="control-label mr-10" for="period">المراحل الدراسية</label>
					<select class="form-control" id="period">
						<option>المرحله الابتدائيه</option>
						<option>المرحله الاعداديه</option>
					</select>
					</div>

					<div class="form-group mr-15 col-md-6">
					<label class="control-label mr-10" for="class">الصفوف</label>
					<select class="form-control" id="class">
						<option>الاول الابتدائي</option>
						<option>الثاني الابتدائي</option>
					</select>
					</div>

					<div class="form-group mr-15 col-md-6">
					<label class="control-label mr-10" for="class-room">الفصول</label>
					<select class="form-control" id="class-room">
						<option>1</option>
						<option>2</option>
					</select>
					</div>

					<div class="form-group mr-15 col-md-6">
					<label class="control-label mr-10" for="students">الطلاب</label>
					<select class="form-control" id="students">
						<option>محمد احمد ابراهيم</option>
						<option>احمد علي علي علي</option>
					</select>
					</div>

					<div class="form-group mr-15 col-md-6">
					<label class="control-label mr-10" for="class-s">الفصول الدراسية للطالب</label>
					<select class="form-control" id="class-s">
						<option>الفصل الدراسي الاول 1438</option>
						<option>الفصل الدراسي الثاني 1438</option>
					</select>
					</div>

					<div class="form-group mr-15 col-md-6">
					<input type="checkbox" id="subjects">
					<label class="control-label mr-10" for="subjects">اختيار عدة مواد</label>
					</div>
		
					<div class="form-group mr-15 col-md-6">
					<label class="control-label mr-10" for="class-sub">المواد</label>
					<select class="form-control" id="class-sub">
						<option>اختار </option>
						<option>العلوم </option>
						<option>الكيمياء</option>
					</select>
					</div>

					<div class="form-group mr-15 col-md-6">
					<label class="control-label mr-10" for="home-work">الانشطة والواجبات</label>
					<select class="form-control" id="home-work">
						<option>اختار </option>
						<option>العلوم </option>
						<option>الكيمياء</option>
					</select>
					</div>

					<div class="clearfix"></div>
					<div class="text-center">
					<button type="submit" class="btn btn-danger inline-block btn-anim mt-30">
						<i class="icon-rocket"></i><span class="btn-text">عرض</span>
					</button>
					</div>
					</form>
					</div>
					</div>
					</div>
					</div>
					</div>
				</div>
		@endsection