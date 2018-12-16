@extends('layouts.body')
@section('title', 'اضافة مدربي كيجي')
@section('content')
<div class="container-fluid pt-25">
					<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">اضافة مدربي كيجي</h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="#"><span>اضافة اضافة مدرب</span></a></li>
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
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">اضافة مشرف</h6>
						</div>
						<div class="clearfix"></div>
						</div>
					<div class="panel-wrapper collapse in">
					<div class="panel-body">
						
					<div class="form-wrap mt-30">
					<form data-toggle="validator" role="form" class="form-horizontal"method="POST" action="{{ action('KcoachController@store') }}" enctype="multipart/form-data">
						<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
					<div class="form-group">
						<div class="col-md-6">
							<label class="control-label mb-10">رقم الهوية<span class="help text-danger"> *</span></label>
							<input type="text" class="form-control" placeholder="رقم الهوية" required  name="id_num" value="{{ old('id_num') }}">
						</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">اسم المستخدم<span class="help text-danger"> *</span></label>
								<input type="text" class="form-control" placeholder="اسم المستخدم" required name="name" value="{{ old('name') }}">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">اسم الدخول<span class="help text-danger"> *</span></label>
								<input type="text" class="form-control" placeholder="اسم الدخول" required value="{{ old('username') }}" name="username">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">كلمة المرور<span class="help text-danger"> *</span></label>
								<input type="password" class="form-control" placeholder="" required>
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">الاسم الاول<span class="help text-danger"> *</span></label>
								<input type="text" class="form-control" placeholder="الاسم الاول" required value="{{ old('first_name') }}" name="first_name">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">اسم الاب</label>
								<input type="text" class="form-control" placeholder="اسم الاب" value="{{ old('father_name') }}" name="father_name">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">اسم الجد</label>
								<input type="text" class="form-control" placeholder="اسم الجد"  value="{{ old('grandfather_name') }}" name="grandfather_name">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">اسم العائله<span class="help text-danger"> *</span></label>
								<input type="text" class="form-control" placeholder="اسم العائله" required  value="{{ old('family_name') }}" name="family_name">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">الجنس<span class="help text-danger"> *</span></label>
								<select class="form-control" required name="gender">

									@foreach ($genders as $gender)
    									<option value="{{$gender->id}}">{{$gender->name}}</option>
									@endforeach
									</select>
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">تاريخ الميلاد</label>
								<input type="text" class="form-control" data-mask="99/99/9999" placeholder=""  value="{{ old('born_date') }}" name="born_date">
								<span class="text-muted">dd/mm/yyyy</span>
							</div>
					</div>


					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">مكان الميلاد</label>
								<input type="text" class="form-control" placeholder="" value="{{ old('born_place') }}" name="born_place">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">العنوان</label>
								<textarea class="form-control" rows="5" name="adress">{{ old('adress') }}</textarea>
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">رقم الهاتف</label>
								<input type="text" class="form-control" placeholder="" value="{{ old('phone') }}" name="phone">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">الجوال</label>
								<input type="text" class="form-control" placeholder="" value="{{ old('mobile') }}" name="mobile">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">البريد الالكتروني</label>
								<input type="email" class="form-control" placeholder="" value="{{ old('email') }}" name="email">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">التخصص </label>
								<input type="email" class="form-control" placeholder="" value="{{ old('section') }}" name="section">
							</div>
					</div>


						<div class="form-group">
								<div class="col-md-6">
									<label class="control-label mb-10">الجنسية</label>
									<select class="form-control" name="nation">
										@foreach ($nations as $nation)
    									<option value="{{$nation->id}}">{{$nation->name}}</option>
									@endforeach
											
										</select>
								</div>
						</div>	

					<div class="form-group">
					<div class="col-md-6">
					<label class="control-label mb-10">الصورة الشخصيه</label>
					<input type="file" id="input-file" class="form-control" name="image" />
					</div>
					</div>	
					<div class="clearfix"></div>
					<div class="text-center">
					<button type="submit" class="btn btn-danger inline-block mt-30">
						<span class="btn-text">تسليم</span>
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
@endsection