@extends('layouts.body')
@section('title', 'قائمة الطلاب المتقدمه')
@section('content')
					<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">قائمة الطلاب المتقدمه</h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="#"><span>قائمة الطلاب المتقدمه</span></a></li>
								</ol>
							</div>
							<!-- /Breadcrumb -->
						
						</div>
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
												<th>رقم الهوية</th>
												<th>اسم الطالب</th>
												<th>الاسم باللغه العربيه</th>
												<th>الصف الدراسي</th>
												<th>الفصل</th>
												<th>تاريخ الميلاد</th>
												<th>البريد الالكتروني</th>
												<th>الجوال</th>
												<th>رقم هوية ولي الامر</th>
												<th>اسم ولي الامر</th>
												<th>جوال الاب</th>
												<th>جوال الام</th>
												<th>جواز السفر</th>
												<th>اسم المدرسة السابقة</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>رقم الهوية</th>
												<th>اسم الطالب</th>
												<th>الاسم باللغه العربيه</th>
												<th>الصف الدراسي</th>
												<th>الفصل</th>
												<th>تاريخ الميلاد</th>
												<th>البريد الالكتروني</th>
												<th>الجوال</th>
												<th>رقم هوية ولي الامر</th>
												<th>اسم ولي الامر</th>
												<th>جوال الاب</th>
												<th>جوال الام</th>
												<th>جواز السفر</th>
												<th>اسم المدرسة السابقة</th>
											</tr>
										</tfoot>
										<tbody>
											<tr>
												<td>12345652</td>
												<td>محمد ابراهيم</td>
												<td>محمد احمد محمد ابراهيم</td>
												<td>الخامس</td>
												<td>1</td>
												<td>10-12-2007</td>
												<td>testmail@gmail.com</td>
												<td>0666582451</td>
												<td>52956295252</td>
												<td>احمد محمد ابراهيم</td>
												<td>0969292925</td>
												<td>0966558478</td>
												<td>1245649</td>
												<td>الجبيل الجديده</td>
											</tr>
											<tr>
												<td>999999</td>
												<td>محمد ابراهيم</td>
												<td>محمد احمد محمد ابراهيم</td>
												<td>الخامس</td>
												<td>1</td>
												<td>10-12-2007</td>
												<td>testmail@gmail.com</td>
												<td>0666582451</td>
												<td>52956295252</td>
												<td>احمد محمد ابراهيم</td>
												<td>0969292925</td>
												<td>0966558478</td>
												<td>1245649</td>
												<td>الجبيل الجديده</td>
											</tr>
											<tr>
												<td>44444</td>
												<td>محمد ابراهيم</td>
												<td>محمد احمد محمد ابراهيم</td>
												<td>الخامس</td>
												<td>1</td>
												<td>10-12-2007</td>
												<td>testmail@gmail.com</td>
												<td>0666582451</td>
												<td>52956295252</td>
												<td>احمد محمد ابراهيم</td>
												<td>0969292925</td>
												<td>0966558478</td>
												<td>1245649</td>
												<td>الجبيل الجديده</td>
											</tr>
											<tr>
												<td>888888</td>
												<td>محمد ابراهيم</td>
												<td>محمد احمد محمد ابراهيم</td>
												<td>الخامس</td>
												<td>1</td>
												<td>10-12-2007</td>
												<td>testmail@gmail.com</td>
												<td>0666582451</td>
												<td>52956295252</td>
												<td>احمد محمد ابراهيم</td>
												<td>0969292925</td>
												<td>0966558478</td>
												<td>1245649</td>
												<td>الجبيل الجديده</td>
											</tr>
											<tr>
												<td>66666666</td>
												<td>محمد ابراهيم</td>
												<td>محمد احمد محمد ابراهيم</td>
												<td>الخامس</td>
												<td>1</td>
												<td>10-12-2007</td>
												<td>testmail@gmail.com</td>
												<td>0666582451</td>
												<td>52956295252</td>
												<td>احمد محمد ابراهيم</td>
												<td>0969292925</td>
												<td>0966558478</td>
												<td>1245649</td>
												<td>الجبيل الجديده</td>
											</tr>
										</tbody>
									</table>
								</div>
								</div>
								</div>
								</div>
							</div>
				</div>
				<!-- Row -->

@endsection