@extends('layouts.body')
@section('title', 'قائمة المعلمين')
@section('content')

					<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">المعلمين</h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="{{ URL::to('/teachers/') }}"><span>المعلمين</span></a></li>
								</ol>
							</div>
							<!-- /Breadcrumb -->
						
						</div>
						<div class="row">
					<div class="col-md-12 mt-15 mb-20">
						<div class="btn-group">
							<a href="{{url('teachers/create')}}" class="btn btn-primary btn-outline">اضافة معلم</a>
							<a href="{{url('demo/imports-teachers')}}" class="btn btn-primary btn-outline">استيراد المعلمين من نور</a>
							<a href="{{url('demo/teacher_detail')}}" class="btn btn-primary btn-outline">احصائيات المعلمين</a>
							<a href="{{url('demo/workload_report')}}" class="btn btn-primary btn-outline">تقرير انصبة المعلمين</a>
							<a href="{{url('demo/overall_school_schedule')}}" class="btn btn-primary btn-outline">الجدول المدرسي</a>
							<div class="dropdown inline-block">
								<button class="btn btn-primary btn-outline dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								خيارات اخري
								<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
								<li><a href="#"> إعادة احتساب النقاط</a></li>
								</ul>
							</div>
						</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-md-12 mt-40 mb-20">
							<div class="btn-group">
								<a href="{{url('students')}}" class="btn btn-primary ">الطلاب</a>
								<a href="{{url('students-without-section')}}" class="btn btn-primary">الطلاب غير المسكنين في فصول</a>
								<a href="{{url('guardians')}}" class="btn btn-primary">اولياءالامور</a>
								<a href="{{url('teachers')}}" class="btn btn-primary active">المعلمين</a>
								<a href="{{url('supervisors')}}" class="btn btn-primary">المشرفين</a>
								<a href="{{url('admins')}}" class="btn btn-primary">الادارة</a>
								<a href="{{url('kcoachs')}}" class="btn btn-primary">مدربي كيجن</a>
						</div>
					</div>
				</div>
<div class="row">
					<div class="col-sm-12">
					<div class="panel panel-default card-view">
					<div class="panel-wrapper collapse in">
					<div class="panel-body">
					<div class="form-wrap">
					<form class="form-inline">
					<div class="form-group mr-15">
					<label class="control-label mr-10" for="num-id">الرقم:</label>
					<input type="text" class="form-control f-input" id="num-id" data-col-index="0">
					</div>
					<div class="form-group mr-15">
					<label class="control-label mr-10" for="name">الاسم:</label>
					<input type="text" class="form-control f-input" id="name" data-col-index="2">
					</div>
					<div class="form-group mr-15">
						<label class="control-label mr-10" for="status">الحالة:</label>
						<select class="form-control" id="status">
							<option>نشط</option>
							<option>غير نشط</option>
						</select>
					</div>
					<div class="form-group mr-15">
					<label class="control-label mr-10" for="specialization">التخصص:</label>
					<input type="text" class="form-control" id="specialization">
					</div>
					
					<div class="form-group">
						<label class="control-label mr-10">بحث تلقائي:</label>
						<input id="check_box_switch" type="checkbox" data-off-text="مغلق" data-on-text="مفعل"  class="bs-switch">
					</div>
					
					<div class="clearfix"></div>
					<div class="text-center">
							<button type="submit" class="btn btn-danger inline-block btn-anim mt-30 submit">
								<i class="icon-rocket"></i><span class="btn-text">بحث</span>
							</button>
							<button type="button" class="btn btn-danger inline-block mt-30" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_1" aria-expanded="true">
							<span class="btn-text">بحث متقدم</span>
							</button>
					</div>
					</form>
					<div id="collapse_1" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
						<div class="panel-body pa-15">
						<form class="form-inline">
								<div class="form-group mr-15">
								<label class="control-label mr-10" for="num-id">الرقم:</label>
								<input type="text" class="form-control f-input" id="num-id">
								</div>
								<div class="form-group mr-15">
								<label class="control-label mr-10" for="name">الاسم:</label>
								<input type="text" class="form-control f-input" id="name" >
								</div>
								<div class="form-group mr-15">
								<label class="control-label mr-10" for="user-name">اسم المستخدم:</label>
								<input type="text" class="form-control f-input" id="user-name" data-col-index="3">
								</div>
								<div class="form-group mr-15">
								<label class="control-label mr-10" for="login-name">اسم الدخول:</label>
								<input type="text" class="form-control f-input" id="login-name" data-col-index="4">
								</div>
								<div class="form-group mr-15 mt-15">
								<label class="control-label mr-10" for="class">الفصل:</label>
								<input type="text" class="form-control f-input" id="class">
								</div>
								<div class="form-group mr-15 mt-15">
								<label class="control-label mr-10" for="email">البريد الالكتروني:</label>
								<input type="text" class="form-control f-input" id="email" data-col-index="8">
								</div>
								<div class="form-group mr-15 mt-15">
								<label class="control-label mr-10" for="gender">الجنس:</label>
								<input type="text" class="form-control f-input" id="gender" data-col-index="6">
								</div>
								<button type="submit" class="btn btn-danger btn-anim mt-15 submit">
									<i class="icon-rocket"></i><span class="btn-text">بحث</span>
								</button>
						</form>
						</div>
					</div>
					
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
									<table id="teachers_table" class="table table-hover display  pb-30" >
										<thead>
											<tr>
												<th>رقم الهوية</th>
												<th>رقم هوية صحيح</th>
												<th>الاسم</th>
												<th>اسم المستخدم</th>
												<th>اسم الدخول</th>
												<th>الجنس</th>
												<th>الجوال</th>
												<th>الرقم الوظيفي</th>
												<th>البريد الالكتروني</th>
												<th>التحكم</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>رقم الهوية</th>
												<th>رقم هوية صحيح</th>
												<th>الاسم</th>
												<th>اسم المستخدم</th>
												<th>اسم الدخول</th>
												<th>الجنس</th>
												<th>الجوال</th>
												<th>الرقم الوظيفي</th>
												<th>البريد الالكتروني</th>
												<th style=" width:15%">التحكم</th>
											</tr>
										</tfoot>
										<tbody>
											@foreach ($teachers as $teacher)
											<tr>
												<td>{{$teacher->id_num}}</td>
												<td class="text-center"><i class="fa fa-check-circle text-success"></i></td>
												<td>{{$teacher->arabic_name}}</td>
												<td>{{$teacher->name}}</td>
												<td>{{$teacher->username}}</td>
												<td>{{$teacher->genders['name']}}</td>
												<td>{{$teacher->mobile}}</td>
												<td>{{$teacher->job_num}}</td>
												<td>{{$teacher->email}}</td>
												<td><a href="{{ URL::to('/teachers/' . $teacher->id . '/edit') }}" class="btn btn-success" style="float: right; margin-left: 5px;"><i class="zmdi zmdi-edit"></i></a>
													<form method="POST" action="{{ URL::to('/teachers/' . $teacher->id ) }}">
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
				@section('js')
<script src="{{ asset('dist/js/teachers_table.js') }}"></script>
@endsection