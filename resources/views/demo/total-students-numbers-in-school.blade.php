@extends('layouts.body')
@section('title', 'تقرير اعداد الطلاب')
@section('content')
					<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">تقرير اعداد الطلاب</h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="#"><span>تقرير اعداد الطلاب</span></a></li>
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
					<div class="panel-wrapper collapse in">
					<div class="panel-body">
					<div class="form-wrap">
					<form class="form-inline">

					<div class="form-group mr-15">
					<label class="control-label mr-10" for="status">المدرسة:</label>
					<select class="form-control" id="status">
						<option>الاندلس بنين</option>
						<option>الجبيل الصناعيه بنين</option>
					</select>
					</div>
					
					<div class="clearfix"></div>
					<div class="text-center">
					<button type="submit" class="btn btn-danger inline-block btn-anim mt-30">
						<i class="icon-rocket"></i><span class="btn-text">بحث</span>
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
												<th>المراحل الدراسيه</th>
												<th>عدد الطلاب</th>
												<th>الصفوف</th>
												<th>عدد الطلاب</th>
												<th>الفصول</th>
												<th>عدد الطلاب</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>المراحل الدراسيه</th>
												<th>عدد الطلاب</th>
												<th>الصفوف</th>
												<th>عدد الطلاب</th>
												<th>الفصول</th>
												<th>عدد الطلاب</th>
											</tr>
										</tfoot>
										<tbody>
											<tr>
												<td rowspan="3">المرحلة الابتدائيه</td>
												<td rowspan="3">55253</td>
												<td rowspan="3">الثالث الابتدائي</td>
												<td rowspan="3">154</td>
												<td>
												<tr>
												<td>
													1
													السعه:50 الشواغر:28
												</td>
												</tr>
												<tr>
													<td>
														1
														السعه:50 الشواغر:28
													</td>
												</tr>
												</td>
												<td>166</td>
											</tr>
											
										</tbody>
									</table>
								</div>
								</div>
								<div class="clearfix"></div>
								<table border="1" class="table table-hover display  pb-30">
										
										<!-- First row -->
										
										<tr>
										<td>1</td>
										<td colspan="2">2 and 3</td>
										<td>4</td>
										</tr>
										
										<!-- Second row -->
										
										<tr>
										<td rowspan="3">5, 9 and 13</td>
										<td>6</td>
										<td>7</td>
										<td>8</td>
										</tr>
										
										<!-- Third row -->
										
										<tr>
										<td>10</td>
										<td>11</td>
										<td>12</td>
										</tr>
										
										<!-- Fourth row -->
										
										<tr>
										<td colspan="3">14, 15 and 16</td>
										</tr>
										
										</table>
								</div>
								</div>
							</div>
				</div>
				<!-- Row -->


			@endsection