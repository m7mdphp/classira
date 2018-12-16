@extends('layouts.body')
@section('title', 'استيراد معلومات الاتصال')
@section('content')
					<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">استيراد معلومات الاتصال</h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="#"><span>استيراد معلومات الاتصال</span></a></li>
								</ol>
							</div>
							<!-- /Breadcrumb -->
						
						</div>
				<!-- Row -->

			

				<!-- Row -->
				<div class="row">
						<div class="col-sm-12">
						<div class="panel panel-default card-view">
						<div class="panel-heading">
							<div class="pull-left">
								<h6 class="panel-title txt-dark">استيراد معلومات الاتصال</h6>
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
							
							<span class="block text-danger mt-10">
									تم تحديث الملف من فضلك قم بتحميل الملف لكي تتعرف علي التحديثات 
							</span>
							<span class="block mt-10 mb-20">
									نموذج الملف 
							</span>
	
							<div class="table-wrap">
							<div class="table-responsive">
								<table  class="table-custom table table-bordered mb-0 p-0" >
									<thead>
										<tr class="active">
											<th>الرقم </th>	
											<th>الجوال </th>	
											<th>البريد الالكتروني</th>	
											<th>parent mobile1</th>	
											<th>parent email</th>	
											<th>parent2 mobile</th>	
											<th>parent2 email</th>	
											<th>جواز السفر</th>	
											<th>اسم المدرسة السابقة</th>
											<th>تاريخ الالتحاق</th>
											<th>رقم هوية ولي الامر</th>
											<th>اسم ولي الامر</th>
											<th>جوال الاب</th>
											<th>جوال الام</th>
										</tr>
									</thead>
									
									<tbody>
										<tr>
											<td>1565656</td>
											<td>ahmed mohamed</td>
											<td>احمد محمد</td>
											<td>الصف الاول المتوسط</td>
											<td>1</td>
											<td>1-1-1988</td>
											<td>tetst@tetst.com</td>
											<td>09254824245</td>
											<td>95543525</td>
											<td>محمد ابراهيم</td>
											<td>9292828277</td>
											<td>1966652452</td>
											<td>الجبيل</td>
											<td>1-1-2017</td>
										</tr>
										
									</tbody>
								</table>
							</div>
							</div>
	
						<div class="form-wrap mt-30">
						<form class="form-inline">
						<input type="file" id="input-file-now" class="dropify" required />
						<div class="clearfix"></div>
						<div class="radio radio-info mt-20">
							<input type="radio" name="radio" id="radio1" value="option1" checked="">
							<label for="radio1">
								الطلاب في المدرسة الحاليه
							</label>
						</div>
						<div class="radio radio-info mt-20">
							<input type="radio" name="radio" id="radio2" value="option2">
							<label for="radio2">
								الطلاب في مجموعة المدارس الحاليه
							</label>
						</div>
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