@extends('layouts.body')
@section('title', 'اضافة مستخدم')
@section('content')
<div class="container-fluid pt-25">
					<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">اضافة مستخدم</h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="#"><span>اضافة مستخدم</span></a></li>
								</ol>
							</div>
							<!-- /Breadcrumb -->
						
						</div>
				<!-- Row -->

				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
					<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">اضافة مستخدم</h6>
						</div>
						<div class="clearfix"></div>
						</div>
					<div class="panel-wrapper collapse in">
					<div class="panel-body">
						
					<div class="form-wrap mt-30">
					<form data-toggle="validator" role="form" class="form-horizontal" method="POST" action="{{ route('admins.update', ['id' => $admins->id]) }}" enctype="multipart/form-data">
						{{ method_field('PUT') }}
						<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
					<div class="form-group">
						<div class="col-md-6">
							<label class="control-label mb-10">رقم الهوية<span class="help text-danger"> *</span></label>
							<input type="text" class="form-control" placeholder="رقم الهوية" required name="id_num" value="{{$admins->id_num}}">
						</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">اسم المستخدم<span class="help text-danger"> *</span></label>
								<input type="text" class="form-control" placeholder="اسم المستخدم" required name="name" value="{{$admins->name}}">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">اسم الدخول<span class="help text-danger"> *</span></label>
								<input type="text" class="form-control" placeholder="اسم الدخول" required name="username" value="{{$admins->username}}">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">كلمة المرور<span class="help text-danger"> *</span></label>
								<input type="password" class="form-control" placeholder="" name="password">
							</div>
					</div>
                    <div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">مجموعة<span class="help text-danger"> *</span></label>
								<select class="form-control" required name="group">
										@foreach ($groups as $groups)
    									
    									<option value="{{$groups->id}}" {{ $groups->id == $admins->group ? 'selected':'' }}>{{$groups->name}}</option>
									@endforeach
									</select>
							</div>
					</div>


					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">الاسم الاول<span class="help text-danger"> *</span></label>
								<input type="text" class="form-control" placeholder="الاسم الاول " required name="first_name" value="{{$admins->first_name}}">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">اسم الاب</label>
								<input type="text" class="form-control" placeholder="اسم الاب"  name="father_name" value="{{$admins->father_name}}">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">اسم الجد</label>
								<input type="text" class="form-control" placeholder="اسم الجد" name="grandfather_name" value="{{$admins->grandfather_name}}">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">الاسم الاخير<span class="help text-danger"> *</span></label>
								<input type="text" class="form-control" placeholder="الاسم الاخير " required name="family_name" value="{{$admins->family_name}}">
							</div>
					</div>

					<div class="form-group">
						<div class="col-md-6">
							<label class="control-label mb-10">الاسم باللغه العربيه</label>
							<input type="text" class="form-control" placeholder="الاسم باللغه العربيه"  name="arabic_name" value="{{$admins->arabic_name}}">
						</div>
					</div>
					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">الجنس<span class="help text-danger"> *</span></label>
								<select class="form-control" required name="gender">
										@foreach ($genders as $gender)
    									
    									<option value="{{$gender->id}}" {{ $gender->id == $admins->gender ? 'selected':'' }}>{{$gender->name}}</option>
									@endforeach
									</select>
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">تاريخ الميلاد</label>
								<input type="date" class="form-control" data-mask="99/99/9999" placeholder="" name="born_date" value="{{$admins->born_date}}">
								<span class="text-muted">dd/mm/yyyy</span>
							</div>
					</div>


					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">مكان الميلاد</label>
								<input type="text" class="form-control" placeholder="مكان الميلاد" name="born_place" value="{{$admins->born_place}}">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">العنوان</label>
								<textarea class="form-control" rows="5" name="adress">{{$admins->adress}}</textarea>
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">رقم الهاتف</label>
								<input type="text" class="form-control" placeholder="رقم الهاتف"  name="phone" value="{{$admins->phone}}">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">الجوال</label>
								<input type="text" class="form-control" placeholder="الجوال" name="mobile" value="{{$admins->mobile}}">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">البريد الالكتروني</label>
								<input type="email" class="form-control" placeholder="البريد الالكتروني"  name="email" value="{{$admins->email}}">
							</div>
					</div>


					<div class="checkbox checkbox-primary">
						<input type="hidden" name="login" value="0">
						@if ($admins->login == 1)
<input id="checkbox2" type="checkbox" name="login" value="1" checked>
@elseif ($admins->login == 0)
<input id="checkbox2" type="checkbox" name="login" value="1">
						@endif
							<label for="checkbox2">
								منع الحساب من تسجيل الدخول
							</label>
						</div>


					<div class="form-group">
								<div class="col-md-6">
									<label class="control-label mb-10">الجنسية</label>
									<select class="form-control" name="nation">
											@foreach ($nations as $nation)
    									
    									<option value="{{$nation->id}}" {{ $nation->id == $admins->nation ? 'selected':'' }}>{{$nation->name}}</option>
									@endforeach
										</select>
								</div>
						</div>
                        <div class="form-group">
                         <div class="col-md-6">
                            <label class="control-label mb-10">المدرسة</label>
									<select class="form-control" name="school">
                                @foreach ($schools as $schools)
    									
    									<option value="{{$schools->id}}" {{ $schools->id == $admins->school ? 'selected':'' }}>{{$schools->name}}</option>
									@endforeach
                            </select>
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