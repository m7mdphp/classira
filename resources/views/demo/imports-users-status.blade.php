@extends('layouts.body')
@section('title', 'تحديث حالة الطلاب')
@section('content')
					<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">تحديث حالة الطلاب</h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="#"><span>تحديث حالة الطلاب</span></a></li>
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
							<h6 class="panel-title txt-dark">تحديث حالة الطلاب</h6>
						</div>
						<div class="clearfix"></div>
						</div>
					<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<p>
							
							لاستيراد بيانات الطلاب يرجي الالتزام بنفس التنسيق الخاص بالملف ادناه. في حال عدم توافر اي معلومة فقط اترك
								 العمود فارغاً .لاتقم باضافة او حذف اي اعمده من الملف 
								 <br />
								ملاحظة: عمود "Number" في ملف النموذج يجب تعبئته برقم هوية الطالب المسجل في النظام
						</p>
						<a href="#" class="block text-success mt-30">
								انقر هنا لتحميل نموذج الملف بتنسيق اكسل
							</a>
						
						<span class="block mt-10 mb-20">
							نموذج الملف (Excel)
						</span>
						<div class="row">
						<div class="col-md-6">
						<div class="table-wrap">
						<div class="table-responsive">
							<table  class="table-custom table table-bordered mb-0 p-0" >
								<thead>
									<tr class="active">
										<th>الرقم</th>	
										<th>الحالة</th>	
										<th>Restrict_Login</th>	
										<th>Block_Report</th>	
									</tr>
								</thead>
								
								<tbody>
									<tr>
										<td>1565656</td>
										<td>2</td>
										<td>0</td>
										<td>0</td>
									</tr>
									
								</tbody>
							</table>
						</div>
						</div>
					</div>
					</div>

					<div class="row">
							<div class="col-md-3">
								<span class="block mt-20 mb-20">
									رقم الحالات
								</span>
							<div class="table-wrap">
							<div class="table-responsive">
								<table  class="table-custom table table-bordered mb-0 p-0" >
									<thead>
										<tr class="active">
											<th>الرقم</th>	
											<th>الحالة</th>	
										</tr>
									</thead>
									
									<tbody>
									<tr>
										<td>نشط</td>
										<td>1</td>
									</tr>
									<tr>
									<td>محذوف</td>
									<td>2</td>
									</tr>
									<tr>
									<td>محجوب</td>
									<td>3</td>
									</tr>
									<tr>
									<td>منقول</td>
									<td>5</td>
									</tr>
									<tr>
									<td>معلق</td>
									<td>8</td>
									</tr>
									<tr>
									<td>خريج</td>
									<td>9</td>
									</tr>	
									<tr>
									<td>تسجيل معلق</td>
									<td>14</td>
									</tr>
									</tbody>
								</table>
							</div>
							</div>
						</div>
						</div>

					<div class="form-wrap mt-30">
					<form class="form-inline">
					<input type="file" id="input-file-now" class="dropify" required />
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