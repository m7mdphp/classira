@extends('layouts.body')
@section('title', 'المراحل الدراسية')
@section('content')
<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">المراحل الدراسية</h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="#"><span>المراحل الدراسية</span></a></li>
								</ol>
							</div>
							<!-- /Breadcrumb -->
						
						</div>
				<!-- Row -->
				<!-- Row -->

				<!-- Row -->
				<div class="row">
					<div class="col-md-12 mt-15 mb-20">
                       <a href="{{url('stages/create')}}" class="btn btn-primary mr-20">مرحلة جديدة</a>
                        <a href="{{url('classes')}}" class="btn btn-primary">ادارة فئات الفصول</a>
					</div>
						<div class="clearfix"></div>
				</div>

				<!-- Row -->

				<!-- Row -->
				<div class="row">
					<div class="col-md-12">
							
						<div class="panel panel-default border-panel  card-view">
							
									<div class="panel-heading">
											<div class="pull-left">
												<h6 class="panel-title txt-dark">
                                                    المراحل الدراسية
                                                </h6>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="panel-wrapper collapse in"></div>
								<div class="panel-body">
						<div class="table-wrap">
								<div class="table-responsive">
									<table id="example" class="table table-hover display  pb-30" >
										<thead>
											<tr>
												<th>العنوان </th>
												<th></th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>العنوان </th>
												<th></th>
											</tr>
										</tfoot>
										<tbody>
											@foreach ($stages as $stages)
											<tr>
                                                <td>{{$stages->arabic}}</td>
                                                <td class="text-nowrap"><a href="{{ URL::to('/stages/' . $stages->id ) }}" class="mr-25" data-toggle="tooltip" data-original-title="show"> <i class="fa  fa-eye text-inverse m-r-10"></i> </a></td>
											</tr>
											@endforeach
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