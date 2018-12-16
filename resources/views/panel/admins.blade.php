@extends('layouts.body')
@section('title', 'الادارة')
@section('content')
					<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">الادارة</h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="#"><span>الادارة</span></a></li>
								</ol>
							</div>
							<!-- /Breadcrumb -->
						
						</div>
				<!-- Row -->
				<!-- Row -->
<div class="row">
					<div class="col-md-12 mt-15 mb-20">
							<a href="{{url('admins/create')}}" class="btn btn-primary">اضافة مستخدم</a>
					</div>
						<div class="clearfix"></div>
						<div class="col-md-12 mt-40 mb-20">
							<div class="btn-group">
								<a href="{{url('students')}}" class="btn btn-primary ">الطلاب</a>
								<a href="{{url('students-without-section')}}" class="btn btn-primary">الطلاب غير المسكنين في فصول</a>
								<a href="{{url('guardians')}}" class="btn btn-primary">اولياءالامور</a>
								<a href="{{url('teachers')}}" class="btn btn-primary">المعلمين</a>
								<a href="{{url('supervisors')}}" class="btn btn-primary">المشرفين</a>
								<a href="{{url('admins')}}" class="btn btn-primary active">الادارة</a>
								<a href="{{url('kcoachs')}}" class="btn btn-primary">مدربي كيجن</a>
						</div>
					</div>
				</div>
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
					<div class="panel panel-default card-view">
					<div class="panel-wrapper collapse in">
					<div class="panel-body">
					<div class="form-wrap">
					<form class="form-inline">
					<div class="form-group mr-15">
					<label class="control-label mr-10" for="name">الاسم:</label>
					<input type="text" class="form-control f-input" id="name" data-col-index="0">
					</div>
					<div class="form-group mr-15">
							<label class="control-label mr-10" for="status">الحاله:</label>
							<select class="form-control f-input" id="status">
								<option>نشط</option>
								<option>غير نشط</option>
							</select>
							</div>
					<div class="form-group mr-15">
					<label class="control-label mr-10" for="group">مجموعة:</label>
					<select class="form-control f-input" id="group">
						<option>الكل</option>
						<option>المشرف المشرفين</option>
					</select>
					</div>
					<div class="form-group">
					<div class="checkbox checkbox-primary ">
							<input id="sr-group" type="checkbox" class="f-input">
							<label for="sr-group">
								البحث في المجموعه
							</label>
						</div>
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
									<table id="users" class="table table-hover display  pb-30" >
										<thead>
											<tr>
												<th>الاسم</th>
												<th>المجموعه</th>
												
												<th>التحكم</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>الاسم</th>
												<th>المجموعه</th>
												
												<th>التحكم</th>
											</tr>
										</tfoot>
										<tbody>
											@foreach ($admins as $admins)
											<tr>
												<td>{{$admins->name}}</td>
												<td>{{$admins->groups['name']}}</td>
												
												<td><a href="{{ URL::to('/admins/' . $admins->id . '/edit') }}" class="btn btn-success" style="float: right; margin-left: 5px;"><i class="zmdi zmdi-edit"></i></a>
													<form method="POST" action="{{ URL::to('/admins/' . $admins->id ) }}">
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
<script src="{{ asset('dist/js/users.js') }}"></script>
@endsection