@extends('layouts.body')
@section('title', 'الفصول')
@section('content')
<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">الفصول</h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="#"><span>الفصول</span></a></li>
								</ol>
							</div>
							<!-- /Breadcrumb -->
						
						</div>
				<!-- Row -->
				<!-- Row -->

				<!-- Row -->
				<div class="row">
					<div class="col-md-12 mt-15 mb-20">
                        <a href="{{url('classes/create')}}" class="btn btn-primary mr-20">إنشاء فئة فصل  </a>
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
                                                    الفصول
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
												<th>لتحكم</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>العنوان </th>
												<th>التحكم</th>
											</tr>
										</tfoot>
										<tbody>
											@foreach ($classes as $classes)
											<tr>
												<td>{{$classes->name}}</td>
												<td><a href="{{ URL::to('/classes/' . $classes->id . '/edit') }}" class="btn btn-success" style="float: right; margin-left: 5px;"><i class="zmdi zmdi-edit"></i></a>
													<form method="POST" action="{{ URL::to('/classes/' . $classes->id) }}">
        											{{ csrf_field() }}
        											{{ method_field('DELETE') }}

       												<button type="submit" class="btn btn-danger" style="">
  													<i class="zmdi zmdi-delete"></i>
													</button>
    												</form></td>
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