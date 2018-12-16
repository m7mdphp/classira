@extends('layouts.body')
@section('title', 'الطلاب')
@section('content')
<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">قائمة الطلاب </h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="{{ URL::to('/students/') }}"><span>قائمة الطلاب</span></a></li>
								</ol>
							</div>
							<!-- /Breadcrumb -->
						
						</div>
			<div class="row">
					<div class="col-md-12 mt-15 mb-20">
						<div class="btn-group">
							<a href="{{url('demo/total-students-numbers-in-school')}}" class="btn btn-primary btn-outline">تقرير اعداد الطلاب</a>
							<a href="{{ action('StudentController@create') }}" class="btn btn-primary btn-outline">اضافة طالب</a>
							<a href="{{url('demo/imports-noor')}}" class="btn btn-primary btn-outline">استيراد من نور</a>
							<a href="{{url('demo/excel-imports')}}" class="btn btn-primary btn-outline">استيراد من ملف اكسيل</a>
							<a href="{{url('demo/advanced-students-list')}}" class="btn btn-primary btn-outline">قائمة الطلاب المتقدمة</a>
							<div class="dropdown inline-block">
								<button class="btn btn-primary btn-outline dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								خيارات اخري
								<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
								<li><a href="{{url('demo/imports-users-status')}}"> تحديث حالة الطلاب</a></li>
								<li><a href="{{url('demo/imports-contacts')}}"> استيراد معلومات الاتصال</a></li>
								<li><a href="{{url('demo/registration-approval')}}">  مراجعة طلبات التسجيل </a></li>
								<li><a href="{{url('demo/import-profile-pic')}}"> استيراد صورة الملف الشخصي  </a></li>
								<li><a href="#">   إعادة احتساب النقاط</a></li>
								<li><a href="{{url('demo/detailed-student-area-report')}}"> تقرير مستويات الطلاب  </a></li>
								<li><a href="#2">  البحث في المستخدمين الموجودين من قبل </a></li>
								</ul>
							</div>
						</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-md-12 mt-40 mb-20">
							<div class="btn-group">
								<a href="{{url('students')}}" class="btn btn-primary active">الطلاب</a>
								<a href="{{url('students-without-section')}}" class="btn btn-primary">الطلاب غير المسكنين في فصول</a>
								<a href="{{url('guardians')}}" class="btn btn-primary">اولياءالامور</a>
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
					<label class="control-label mr-10" for="num-id">الرقم:</label>
					<input type="text" class="form-control f-input" id="num-id" data-col-index="0">
					</div>
					<div class="form-group mr-15">
					<label class="control-label mr-10" for="name">الاسم:</label>
					<input type="text" class="form-control f-input" id="name" data-col-index="2">
					</div>
					<div class="form-group mr-15">
					<label class="control-label mr-10" for="user-name">اسم المستخدم:</label>
					<input type="text" class="form-control f-input" id="user-name" data-col-index="3">
					</div>
					<div class="form-group mr-15">
					<label class="control-label mr-10" for="login-name">اسم الدخول:</label>
					<input type="text" class="form-control f-input" id="login-name" data-col-index="4">
					</div>
					<div class="form-group">
						<label class="control-label mr-10">بحث تلقائي:</label>
						<input id="check_box_switch" type="checkbox" data-off-text="مغلق" data-on-text="مفعل"  class="bs-switch">
					</div>
					
					<div class="clearfix"></div>
					<div class="text-center">
					<button type="submit" class="btn btn-danger inline-block btn-anim mt-30 submit">
						<i class="icon-rocket"></i><span class="btn-text ">بحث</span>
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
								<input type="text" class="form-control f-input" id="num-id" >
								</div>
								<div class="form-group mr-15">
								<label class="control-label mr-10" for="name">الاسم:</label>
								<input type="text" class="form-control f-input" id="name" >
								</div>
								<div class="form-group mr-15">
								<label class="control-label mr-10" for="user-name">اسم المستخدم:</label>
								<input type="text" class="form-control f-input" id="user-name" >
								</div>
								<div class="form-group mr-15">
								<label class="control-label mr-10" for="login-name">اسم الدخول:</label>
								<input type="text" class="form-control f-input" id="login-name" >
								</div>
								<div class="form-group mr-15 mt-15">
								<label class="control-label mr-10" for="class">الفصل:</label>
								<input type="text" class="form-control f-input" id="class" data-col-index="9">
								</div>
								<div class="form-group mr-15 mt-15">
								<label class="control-label mr-10" for="email">البريد الالكتروني:</label>
								<input type="text" class="form-control f-input" id="email" data-col-index="8">
								</div>
								<div class="form-group mr-15 mt-15">
								<label class="control-label mr-10" for="gender">الجنس:</label>
								<input type="text" class="form-control f-input" id="gender" data-col-index="5">
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
									<table id="students_table" class="table table-hover display  pb-30" >
										<thead>
											<tr>
												<th>رقم الهوية</th>
												<th>رقم هوية صحيح</th>
												<th>الاسم</th>
												<th>اسم المستخدم</th>
												<th>اسم الدخول</th>
												<th>الجنس</th>
												<th>الجوال</th>
												<th>رقم الملف</th>
												<th>البريد الالكتروني</th>
												<th style=" width:15%">التحكم</th>
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
												<th>رقم الملف</th>
												<th>البريد الالكتروني</th>
												<th style=" width:15%">التحكم</th>
											</tr>
										</tfoot>
										<tbody>
											@foreach ($students as $student)
											<tr>
												<td>{{$student->id_num}}</td>
												<td class="text-center"><i class="fa fa-check-circle text-success"></i></td>
												<td>{{$student->arabic_name}}</td>
												<td>{{$student->name}}</td>
												<td>{{$student->username}}</td>
												<td>{{$student->genders['name']}}</td>
												<td>{{$student->mobile}}</td>
												<td>{{$student->file}}</td>
												<td>{{$student->email}}</td>
												<td><a href="{{ URL::to('/students/' . $student->id . '/edit') }}" class="btn btn-success" style="float: right; margin-left: 5px;"><i class="zmdi zmdi-edit"></i></a>
													<form method="POST" action="{{ URL::to('/students/' . $student->id ) }}">
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
<script src="{{ asset('dist/js/students_table.js') }}"></script>
@endsection
