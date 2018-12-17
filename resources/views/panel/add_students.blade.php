@extends('layouts.body')
@section('title', 'أضافة طالب')
@section('content')
<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">أضافة طالب</h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="#"><span>أضافة طالب</span></a></li>
								</ol>
							</div>
							<!-- /Breadcrumb -->
<div class="row">
				<div class="col-md-12 mt-15 mb-20">
						<a href="{{ action('StudentController@index') }}" class="btn btn-primary">قائمة الطلاب</a>
				</div>
				</div>
				<!-- Row -->
<div class="row">
					<div class="col-sm-12">
					<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">اضافة طالب</h6>
						</div>
						<div class="clearfix"></div>
						</div>
					<div class="panel-wrapper collapse in">
					<div class="panel-body">
						
					<div class="form-wrap mt-30">
					<form data-toggle="validator" role="form" class="form-horizontal" method="POST" action="{{ action('StudentController@store') }}" enctype="multipart/form-data">
						<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
					<div class="form-group">
						<div class="col-md-6">
							<label class="control-label mb-10">رقم الهوية<span class="help text-danger"> *</span></label>
							<input type="text" class="form-control" placeholder="رقم الهوية" required name="id_num" value="{{ old('id_num') }}">
						</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">رقم الجواز<span class="help text-danger"> *</span></label>
								<input type="text" class="form-control" placeholder="رقم الجواز" required name="passport" value="{{ old('passport') }}">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">رقم الملف <span class="help text-danger"> *</span></label>
								<input type="text" class="form-control" placeholder="رقم الملف" required name="file" value="{{ old('file') }}">
							</div>
					</div>
                        <div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">سنة القبول<span class="help text-danger"> *</span></label>
							
									<input type="text" class="form-control" required name="enter_year" value="{{ old('enter_year') }}">
									
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
								<input type="text" class="form-control" placeholder="اسم الدخول" required name="username" value="{{ old('username') }}">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">كلمة المرور<span class="help text-danger"> *</span></label>
								<input type="password" class="form-control" placeholder="" required name="password">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">الاسم الاول<span class="help text-danger"> *</span></label>
								<input type="text" class="form-control" placeholder="الاسم الاول " required name="first_name" value="{{ old('first_name') }}">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">اسم الاب</label>
								<input type="text" class="form-control" placeholder="اسم الاب"  name="father_name" value="{{ old('father_name') }}">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">اسم الجد</label>
								<input type="text" class="form-control" placeholder="اسم الجد" name="grandfather_name" value="{{ old('grandfather_name') }}">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">الاسم الاخير<span class="help text-danger"> *</span></label>
								<input type="text" class="form-control" placeholder="الاسم الاخير " required name="family_name" value="{{ old('family_name') }}">
							</div>
					</div>

					<div class="form-group">
						<div class="col-md-6">
							<label class="control-label mb-10">الاسم باللغه العربيه</label>
							<input type="text" class="form-control" placeholder="الاسم باللغه العربيه"  name="arabic_name" value="{{ old('arabic_name') }}">
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
								<input type="date" class="form-control" data-mask="99/99/9999" placeholder="" name="born_date" value="{{ old('born_date') }}">
								<span class="text-muted">dd/mm/yyyy</span>
							</div>
					</div>


					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">مكان الميلاد</label>
								<input type="text" class="form-control" placeholder="مكان الميلاد" name="born_place" value="{{ old('born_place') }}">
							</div>
					</div>
                        <div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">  مكان الميلاد (بالعربي)</label>
								<input type="text" class="form-control" placeholder="مكان الميلاد (بالعربي)" name="arabic_born_place" value="{{ old('arabic_born_place') }}">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">العنوان</label>
								<textarea class="form-control" rows="5" name="adress" value="{{ old('adress') }}">العنوان</textarea>
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">رقم الهاتف</label>
								<input type="text" class="form-control" placeholder="رقم الهاتف"  name="phone" value="{{ old('phone') }}">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">الجوال</label>
								<input type="text" class="form-control" placeholder="الجوال" name="mobile" value="{{ old('mobile') }}">
							</div>
					</div>

					<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">البريد الالكتروني</label>
								<input type="email" class="form-control" placeholder="البريد الالكتروني"  name="email" value="{{ old('email') }}">
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
									<label class="control-label mb-10">الفصل الدراسي</label>
									<select class="form-control" name="semester">
											@foreach ($semesters as $semester)
    									<option value="{{$semester->id}}">{{$semester->name}}</option>
									@endforeach
										</select>
								</div>
						</div>	
                        <div class="form-group">
								<div class="col-md-6">
									<label class="control-label mb-10">الفصل</label>
									<select class="form-control" name="class">
										<option value="0">الفصل</option>
											@foreach ($classes as $class)
    									<option value="{{$class->id}}">{{$class->name}}</option>
									@endforeach
										</select>
								</div>
						</div>	

						<div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">المدرسة السابقة</label>
								<input type="text" class="form-control" placeholder="المدرسة السابقة" name="ex_school" value="{{ old('ex_school') }}">
							</div>
					</div>
                        <div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10">  المدرسة السابقة (بالعربي)</label>
								<input type="text" class="form-control" placeholder="المدرسة السابقة (بالعربي)" name="arabic_ex_school" value="{{ old('arabic_ex_school') }}">
							</div>
					</div>
                        <div class="form-group">
							<div class="col-md-6">
								<label class="control-label mb-10"> تاريخ الالتحاق</label>
								<input type="date" class="form-control" placeholder="" name="enter_date" value="{{ old('enter_date') }}" id="enter_date">
							</div>
					</div>
                        
					<div class="checkbox checkbox-primary">
						<input type="hidden" name="father_account" value="0">
							<input id="checkbox2" type="checkbox" name="father_account" value="1">
							<label for="checkbox2">
								إنشاء حساب أب 
							</label>
						</div>
                        
					<div class="checkbox checkbox-primary">
						<input type="hidden" name="mother_account" value="0">
							<input id="checkbox3" type="checkbox" name="mother_account" value="1">
							<label for="checkbox3">
								إنشاء حساب أم
							</label>
						</div>

					<div class="form-group">
                        <div class="col-md-6">
                        <label class="control-label mb-10">الصورة الشخصيه</label>
                            <input type="file" id="input-file" class="form-control" name="image" />
                        </div>
					</div>	
                    
					<div class="checkbox checkbox-primary">
						<input type="hidden" name="reports" value="0">
							<input id="checkbox4" type="checkbox" name="reports" value="1">
							<label for="checkbox4">
								حجب التقارير لهذا الطالب
							</label>
						</div>
                        <div class="checkbox checkbox-primary">
                        	<input type="hidden" name="login" value="0">
							<input id="checkbox5" type="checkbox" name="login" value="1">
							<label for="checkbox5">
								منع الحساب من تسجيل الدخول
							</label>
						</div>
                        <div class="checkbox checkbox-primary">
                        	<input type="hidden" name="welcome" value="0">
							<input id="checkbox6" type="checkbox" name="welcome" value="1">
							<label for="checkbox6">
								ارسال رسالة ترحيب
							</label>
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
@section('js')
<script type="text/javascript">
         $(function() {
            $( "#enter_year" ).datepicker({dateFormat: 'yy'});
         });
      </script>
@endsection