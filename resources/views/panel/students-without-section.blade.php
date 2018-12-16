@extends('layouts.body')
@section('title', 'الطلاب غير المسكنين في فصول')
@section('content')
					<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">الطلاب غير المسكنين في فصول</h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="#"><span>الطلاب غير المسكنين في فصول</span></a></li>
								</ol>
							</div>
							<!-- /Breadcrumb -->
						<div class="clearfix"></div>
						<div class="col-md-12 mt-40 mb-20">
							<div class="btn-group">
								<a href="{{url('students')}}" class="btn btn-primary ">الطلاب</a>
								<a href="{{url('students-without-section')}}" class="btn btn-primary active">الطلاب غير المسكنين في فصول</a>
								<a href="{{url('guardians')}}" class="btn btn-primary ">اولياءالامور</a>
								<a href="{{url('teachers')}}" class="btn btn-primary">المعلمين</a>
								<a href="{{url('supervisors')}}" class="btn btn-primary">المشرفين</a>
								<a href="{{url('admins')}}" class="btn btn-primary">الادارة</a>
								<a href="{{url('kcoachs')}}" class="btn btn-primary">مدربي كيجن</a>
						</div>
					</div>
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
					<label class="control-label mr-10" for="num-id">الرقم:</label>
					<input type="text" class="form-control f-input" id="num-id" data-col-index="0">
					</div>
					<div class="form-group mr-15">
					<label class="control-label mr-10" for="name">الاسم:</label>
					<input type="text" class="form-control f-input" id="name" data-col-index="1">
					</div>
					<div class="form-group mr-15">
					<label class="control-label mr-10" for="status">الحالة:</label>
					<select class="form-control" id="status">
						<option>مفعل</option>
						<option>غير مفعل</option>
					</select>
					</div>
					<div class="form-group mr-15">
					<label class="control-label mr-10" for="report-status">حالة حجب التقارير:</label>
					<select class="form-control" id="report-status">
						<option>متوفر</option>
						<option>غير متوفر</option>
					</select>
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
									<table id="stud_sec" class="table table-hover display  pb-30" >
										<thead>
											<tr>
												<th>الرقم</th>
												<th>الاسم</th>
												<th>الحالة</th>
												<th>الصف الدراسي</th>
												<th>التحكم</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>الرقم</th>
												<th>الاسم</th>
												<th>الحالة</th>
												<th>الصف الدراسي</th>
												<th>التحكم</th>
											</tr>
										</tfoot>
										<tbody>
											@foreach ($students as $student)
											<tr>
												<td>{{$student->id_num}}</td>
												<td>{{$student->arabic_name}}</td>
												<td>1</td>
												<td>الخامس الابتدائي</td>
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
<script src="{{ asset('dist/js/stud_sec.js') }}"></script>
			@endsection