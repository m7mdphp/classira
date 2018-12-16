@extends('layouts.body')
@section('title', 'مراجعة طلبات التسجيل')
@section('content')
					<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">مراجعة طلبات التسجيل</h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="#"><span>مراجعة طلبات التسجيل</span></a></li>
								</ol>
							</div>
							<!-- /Breadcrumb -->
						
						</div>
				<!-- Row -->
				<!-- Row -->
				<!-- Row -->
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default border-panel  card-view">
						<div class="panel-body">
						<div class="table-wrap">
								<div class="table-responsive">
									<table id="example" class="table table-hover display  pb-30" >
										<thead>
											<tr>
												<th><input type="checkbox" name="select_all" id="select_all"></th>
												<th>الاسم</th>
												<th>رقم التسجيل</th>
												<th>الرقم</th>
												<th>المدرسة</th>
												<th>الصف الدراسي</th>
												<th>الجوال</th>
												<th>البريد الالكتروني</th>
												<th>الحالة</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th><input type="checkbox" name="select_all" id="select_all2"></th>
												<th>الاسم</th>
												<th>رقم التسجيل</th>
												<th>الرقم</th>
												<th>المدرسة</th>
												<th>الصف الدراسي</th>
												<th>الجوال</th>
												<th>البريد الالكتروني</th>
												<th>الحالة</th>
											</tr>
										</tfoot>
										<tbody>
											<tr>
												<th><input type="checkbox" name="check1" id="check1"></th>
												<td>محمد ابراهيم</td>
												<td>95175</td>
												<td>951753852</td>
												<td>خميس مشيط</td>
												<td>الابتدائي</td>
												<td>021558964752</td>
												<td>testmail@gmail.com</td>
												<td>3</td>
											</tr>
											<tr>
											<th><input type="checkbox" name="check2" id="check2"></th>
											<td>ادهم ابراهيم</td>
											<td>95175</td>
											<td>951753852</td>
											<td>خميس مشيط</td>
											<td>الابتدائي</td>
											<td>021558964752</td>
											<td>testmail@gmail.com</td>
											<td>3</td>
											</tr>
										</tr>
										<tr>
										<th><input type="checkbox" name="check3" id="check3"></th>
										<td>محمد احمد</td>
										<td>95175</td>
										<td>951753852</td>
										<td>خميس مشيط</td>
										<td>الابتدائي</td>
										<td>021558964752</td>
										<td>testmail@gmail.com</td>
										<td>3</td>
										</tr>
										</tbody>
									</table>
								</div>
								</div>
								<div class="text-center mt-30">
								<button class="btn  btn-primary">قبول المحدد</button>
								<button class="btn  btn-primary">رفض المحدد</button>
								<button class="btn  btn-primary">قبول مبدئي للمحدد</button>
								<button class="btn  btn-primary">رفض مبدئي للمحدد</button>
								<button class="btn  btn-primary">تفعيل المحدد</button>
								<button class="btn  btn-primary">ارسال بيانات الدخول بالبريد</button>
								</div>
								
								</div>
								</div>
							</div>
				</div>
				<!-- Row -->


			@endsection