@extends('layouts.body')
@section('title', 'المرحلة')
@section('content')
<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">المرحلة </h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="#"><span>المرحلة </span></a></li>
								</ol>
							</div>
							<!-- /Breadcrumb -->
						
						</div>
				<!-- Row -->
				<!-- Row -->
                	<div class="row">
					<div class="col-md-12 mt-15 mb-20">
                        <a href="{{ URL::to('/stages') }}" class="btn btn-primary mr-20">قائمة المراحل الدراسية</a>
					</div>
						<div class="clearfix"></div>
				</div>

				<!-- Row -->
                	<div class="row">
					<div class="col-md-12">
							
						<div class="panel panel-default border-panel  card-view">
                                    <div class="panel-wrapper collapse in"></div>
                                        <div class="panel-body">
						                      <div class="table-wrap">
								                <div class="table-responsive">
									               <table id="stages" class="table table-hover display  pb-30" >
											<thead>
											  <tr>
												<th>العنوان</th>
												<th class="text-nowrap"></th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td> رقم:</td>
												<td>127</td>
											  </tr>
                                              <tr>
												<td> العنوان:</td>
												<td>المرحلة الابتدائية</td>
											  </tr>
                                                <tr>
												<td> المدرسة:</td>
												<td>الاندلس بنين جدة ابتدائي</td>
											  </tr>
											</tbody>
										  </table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Bordered Table -->
					
				</div>
				<!-- Row -->
@endsection