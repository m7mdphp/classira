@extends('layouts.body')
@section('title', 'أولياء الامور')
@section('content')
<!-- Row -->
<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">قائمة أولياء الامور</h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="{{ URL::to('/guardians/') }}"><span>قائمة أولياء الامور</span></a></li>
								</ol>
							</div>
							<!-- /Breadcrumb -->
						
						</div>
				<div class="row">
					<div class="col-md-12 mt-15 mb-20">
							<a href="{{ action('GuardianController@create') }}" class="btn btn-primary">اضافة ولي امر</a>
					</div>
						<div class="clearfix"></div>
						<div class="col-md-12 mt-40 mb-20">
							<div class="btn-group">
								<a href="{{url('students')}}" class="btn btn-primary">الطلاب</a>
								<a href="{{url('students-without-section')}}" class="btn btn-primary">الطلاب غير المسكنين في فصول</a>
								<a href="{{url('guardians')}}" class="btn btn-primary active">اولياءالامور</a>
								<a href="{{url('teachers')}}" class="btn btn-primary">المعلمين</a>
								<a href="{{url('supervisors')}}" class="btn btn-primary">المشرفين</a>
								<a href="{{url('admins')}}" class="btn btn-primary">الادارة</a>
								<a href="{{url('kcoachs')}}" class="btn btn-primary">مدربي كيجن</a>
						</div>
					</div>
				</div>
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
					<label class="control-label mr-10" for="num-id">رقم الهوية:</label>
					<input type="text" class="form-control" id="num-id">
					</div>
					<div class="form-group mr-15">
					<label class="control-label mr-10" for="name">الاسم:</label>
					<input type="text" class="form-control" id="name">
					</div>
					<div class="form-group mr-15">
						<label class="control-label mr-10" for="phone">الجوال:</label>
						<input type="text" class="form-control" id="phone">
					</div>
					<div class="form-group mr-15">
					<label class="control-label mr-10" for="status">الحالة:</label>
					<select class="form-control" id="status">
						<option>مفعل</option>
						<option>غير مفعل</option>
					</select>
					</div>
					
					<div class="form-group">
						<label class="control-label mr-10">بحث تلقائي:</label>
						<input id="check_box_switch" type="checkbox" data-off-text="مغلق" data-on-text="مفعل"  class="bs-switch">
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
												<th>الرقم</th>
												<th>الاسم</th>
												<th>الجوال</th>
												<th>الجنس</th>
												<th>الجنسية</th>
												<th>التحكم</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>الرقم</th>
												<th>الاسم</th>
												<th>الجوال</th>
												<th>الجنس</th>
												<th>الجنسية</th>
												<th>التحكم</th>
											</tr>
										</tfoot>
										<tbody>
											@foreach ($guardians as $guardian)
											<tr>
												<td>{{$guardian->id_num}}</td>
												<td>{{$guardian->name}}</td>
												<td>{{$guardian->phone}}</td>
												<td>{{$guardian->genders['name']}}</td>
												<td>{{$guardian->nations['name']}}</td>
												<td><a href="{{ URL::to('/guardians/' . $guardian->id . '/edit') }}" class="btn btn-success" style="float: right; margin-left: 5px;"><i class="zmdi zmdi-edit"></i></a>
													<form method="POST" action="{{ URL::to('/guardians/' . $guardian->id) }}">
        											{{ csrf_field() }}
        											{{ method_field('DELETE') }}

       												<button type="submit" class="btn btn-danger" style="">
  													<i class="zmdi zmdi-delete"></i>
													</button>
    												</form>
												</td>
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