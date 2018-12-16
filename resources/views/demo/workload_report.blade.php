@extends('layouts.body')
@section('title', 'تقرير انصبة المعلمين')
@section('content')
<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">تقرير انصبة المعلمين</h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="#"><span>تقرير انصبة المعلمين</span></a></li>
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
							
									
										<div class="panel-wrapper collapse in"></div>
								<div class="panel-body">
						<div class="table-wrap">
								<div class="table-responsive">
									<table id="example" class="table table-hover display  pb-30" >
										<thead>
											<tr>
												<th>الرقم</th>
												<th>الاسم</th>
												<th>النصاب </th>
												<th>الاجراء</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>الرقم</th>
												<th>الاسم</th>
												<th>النصاب </th>
												<th>الاجراء</th>
											</tr>
										</tfoot>
										<tbody>
											<tr>
												<td>14656565656</td>
												<td>حسين محمد محمدابراهيم</td>
												<td>0</td>
												<td><a href="#">عرض الجدول</a></td>
											</tr>
											<tr>
                                                <td>14656565656</td>
												<td>احمد محمد محمدابراهيم</td>
                                                <td>0</td>
												<td><a href="#">عرض الجدول</a></td>
											</tr>
											<tr>
                                                <td>14656565656</td>
												<td>محمد محمد محمدابراهيم</td>
                                                <td>0</td>
												<td><a href="#">عرض الجدول</a></td>
											</tr>
											<tr>
                                                <td>14656565656</td>
												<td>يوسف محمد محمدابراهيم</td>
                                                <td>0</td>
												<td><a href="#">عرض الجدول</a></td>
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