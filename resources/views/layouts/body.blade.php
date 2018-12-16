<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ANPT') }} - @yield('title')</title>
	<meta name="description" content="Doodle is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Doodle Admin, Doodleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
	<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
	
	<!-- Bootstrap Datetimepicker CSS -->
	<link href="{{ asset('vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css"/>
	<!-- Data table CSS -->
	<link href="{{ asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
	
	<link href="{{ asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">
	<!-- select2 CSS -->
	<link href="{{ asset('vendors/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>	
	<!-- Bootstrap Switches CSS -->
	<link href="{{ asset('vendors/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css"/>
	
	<!-- Custom CSS -->
	<link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('dist/css/custom.css') }}" rel="stylesheet" type="text/css">
	@yield('css')
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper theme-1-active pimary-color-red">
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="{{url('/')}}">
							<img class="brand-img" src="{{ asset('dist/img/logo.png') }}" alt="brand"/>
							<span class="brand-text">ANTP</span>
						</a>
					</div>
				</div>	
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
				<!-- date and time div	 -->
				<div class="input-group" id="timeNow"></div>
				<!-- date and time div	 -->
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">
					<li>
						<a id="open_right_sidebar" href="#"><i class="zmdi zmdi-settings top-nav-icon"></i></a>
					</li>
					<li class="dropdown alert-drp">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-notifications top-nav-icon"></i><span class="top-nav-icon-badge">5</span></a>
						<ul  class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
							<li>
								<div class="notification-box-head-wrap">
									<span class="notification-box-head pull-left inline-block">الاشعارات</span>
									<a class="txt-danger pull-right clear-notifications inline-block" href="javascript:void(0)">جعلها كمقرواءه</a>
									<div class="clearfix"></div>
									<hr class="light-grey-hr ma-0"/>
								</div>
							</li>
							<li>
								<div class="streamline message-nicescroll-bar">
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-green">
												<i class="zmdi zmdi-flag"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications">
												اشعار جديد من الاداره التعليميه</span>
												<span class="inline-block font-11  pull-right notifications-time">2م</span>
												<div class="clearfix"></div>
												<p class="truncate">تجربة اضافة اشعار جديد من الاداره التعليمه بالمنطقه الشرقيه</p>
											</div>
										</a>	
									</div>
									<hr class="light-grey-hr ma-0"/>
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-yellow">
												<i class="zmdi zmdi-trending-down"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications">
												اشعار جديد من الاداره التعليميه</span>
												<span class="inline-block font-11  pull-right notifications-time">2م</span>
												<div class="clearfix"></div>
												<p class="truncate">تجربة اضافة اشعار جديد من الاداره التعليمه بالمنطقه الشرقيه</p>
											</div>
										</a>	
									</div>
									<hr class="light-grey-hr ma-0"/>
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-blue">
												<i class="zmdi zmdi-email"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications">
												اشعار جديد من الاداره التعليميه</span>
												<span class="inline-block font-11  pull-right notifications-time">2م</span>
												<div class="clearfix"></div>
												<p class="truncate">تجربة اضافة اشعار جديد من الاداره التعليمه بالمنطقه الشرقيه</p>
											</div>
										</a>	
									</div>
									<hr class="light-grey-hr ma-0"/>
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-blue">
												<i class="zmdi zmdi-email"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications">
												اشعار جديد من الاداره التعليميه</span>
												<span class="inline-block font-11  pull-right notifications-time">2م</span>
												<div class="clearfix"></div>
												<p class="truncate">تجربة اضافة اشعار جديد من الاداره التعليمه بالمنطقه الشرقيه</p>
											</div>
										</a>	
									</div>
								</div>
							</li>
							<li>
								<div class="notification-box-bottom-wrap">
									<hr class="light-grey-hr ma-0"/>
									<a class="block text-center read-all" href="javascript:void(0)"> قراءة الكل </a>
									<div class="clearfix"></div>
								</div>
							</li>
						</ul>
					</li>
					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="{{ asset('dist/img/user1.png') }}" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							<li>
								<a href="{{url('demo/profile')}}"><i class="zmdi zmdi-account"></i><span>تعديل الملف الشخصي</span></a>
							</li>
							
							<li>
								<a href="inbox.html"><i class="zmdi zmdi-email"></i><span>الملف العام </span></a>
							</li>
							<li>
								<a href="#"><i class="zmdi zmdi-settings"></i><span>دليل المستخدم</span></a>
							</li>
							<li class="divider"></li>
                            <li>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label mb-10 row pl-10">حجم الخط</label>
                                        <div class="radio-list">
                                            <div class="radio-inline pl-0 col-md-3">
                                                <span class="radio radio-info">
                                                    <input type="radio" name="radio5" id="radio_5" value="عادي">
                                            <label for="radio_5"> عادي</label>
                                            </span>
                                            </div>
                                            <div class="radio-inline col-md-3">
                                                <span class="radio radio-info">
                                                    <input type="radio" name="radio5" id="radio_6" value="كبير">
                                            <label for="radio_6"> كبير </label>
                                            </span>
                                            </div>
                                            <div class="radio-inline col-md-3">
                                                <span class="radio radio-info">
                                                    <input type="radio" name="radio5" id="radio_7" value=" كبير جدا">
                                            <label for="radio_7">  كبير جدا </label>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
							<li class="divider"></li>
                            <li class="pl-10">  
                                <input id="check_box_switch" type="checkbox" data-off-text="E" data-on-text="ع"  class="bs-switch">
                            </li>
							<li class="divider"></li>
							<li>
								<a href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i><span>تسجيل الخروج</span></a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
							</li>
						</ul>
					</li>
				</ul>
			</div>	
		</nav>
		<!-- /Top Menu Items -->
		
	
        <!-- Left Sidebar Menu -->
		<!-- Left Sidebar Menu -->
        <div class="fixed-sidebar-left">

            <ul class="nav navbar-nav side-nav nicescroll-bar">
                <li>
                    <div class="form-group">
                        <select class="form-control select2">
                            <option>الاندلس بنين ابتدائي</option>
                            <optgroup>
                                <option value="AK">الاندلس بنين متوسط</option>
                                <option value="HI">الاندلس بنين ثانوي</option>
                            </optgroup>
                        </select>
                    </div>
                </li>

                <li>
                    <div class="form-group">
                        <select class="form-control select2">
                            <option>الفصل الدراسي الأول 38 – 1439ھـ</option>
                            <optgroup>
                                <option value="AK">الفصل الدراسي الثاني 38 – 1439ھـ</option>
                                <option value="HI">الفصل الدراسي الأول 37 – 1438ھـ</option>
                            </optgroup>
                        </select>
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        <select class="form-control select2">
                            <option>مدير النظام</option>
                            <optgroup>
                                <option value="AK">مدير</option>
                            </optgroup>

                        </select>
                    </div>
                </li>
				<li>
					<a  class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#id1">
						<div class="pull-left">
							<i class="fa  fa-home mr-20"></i>
							<span class="right-nav-text">الرئيسية</span>
						</div>
						<div class="pull-right">
							<i class="zmdi zmdi-caret-down"></i>
						</div>
						<div class="clearfix">
						</div>
						<ul id="id1" class="collapse collapse-level-1 two-col-list ul-collapse">
							<li>
								<a href="#">ما يحدث الان</a>
							</li>
							<li>
								<a href="#">المتواجدون الأن</a>
							</li>
							<li>
								<a href="#">أﻧﺸﻄﺔ اﻟﻤﻌﻠﻤﯿﻦ ﻋﻠﻰ ﻣﺴﺘﻮى المجموعة</a>
							</li>
							<li>
								<a href="{{url('students')}}">نقاط الطلاب</a>
							</li>
							<li>
								<a href="teachers-dont-take-attendance.html">تقرير رصد المعلمين</a>
							</li>
						</ul>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#id2">
						<div class="pull-left">
							<i class="fa  fa-users mr-20"></i>
							<span class="right-nav-text">المستخدمين</span>
						</div>
						<div class="pull-right">
							<i class="zmdi zmdi-caret-down"></i>
						</div>
						<div class="clearfix">
						</div>
					</a>
					<ul id="id2" class="collapse collapse-level-1 two-col-list ul-collapse">
						<li>
							<a href="{{url('students')}}">الطلاب
								
								<div class="clearfix">
								</div>
							</a>
						</li>
						<li><a href="{{url('students-without-section')}}">الطلاب غير المسكنين في فصول</a></li>
						<li>
							<a href="{{url('guardians')}}">أولياء الامور
								<div class="clearfix">
								</div>
							</a>
						</li>
						<li>
							<a href="{{url('teachers')}}">المعلمين
								<div class="clearfix">
								</div>
							</a>
						</li>
						<li>
							<a href="{{url('supervisors')}}">المشرفين
                                <div class="clearfix">
								</div>
							</a>
						</li>
						<li>
							<a href="{{url('admins')}}">الادارة
								<div class="clearfix">
								</div>
							</a>
						</li>
						<li>
							<a href="{{url('kcoachs')}}">مدربي كيجن
								<div class="clearfix">
								</div>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="">
						<div class="pull-left">
                            <i class="ti-comment mr-20"></i>
							<span class="right-nav-text">غرف النقاش</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="pull-left">
							<i class="fa fa-bullhorn  mr-20"></i>
							<span class="right-nav-text">الاعلانات</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="{{url('stages')}}">
						<div class="pull-left">
							<i class="ti-bar-chart-alt mr-20"></i>
							<span class="right-nav-text">المراحل الدراسية</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#id11">
						<div class="pull-left">
							<i class="ti-layout-sidebar-right mr-20"></i>
							<span class="right-nav-text">المواد</span>
						</div>
						<div class="pull-right">
							<i class="zmdi zmdi-caret-down"></i>
						</div>
						<div class="clearfix">
						</div>
					</a>
					<ul id="id11" class="collapse collapse-level-1 two-col-list ul-collapse">
						<li>
							<a href="javascript:void(0);" data-toggle="collapse" data-target="#id12">المواد
								<div class="pull-right">
									<i class="zmdi zmdi-caret-down"></i>
								</div>
								<div class="clearfix">
								</div>
							</a>
							<ul id="id12" class="collapse collapse-level-1 two-col-list">
								<li><a href="#">اضافة مادة</a></li>
								<li><a href="#">تعيين القييم المعتمدة</a></li>
							</ul>
						</li>
						<li>
							<a href="#">الخطة الاسبوعية</a>
						</li>
						<li>
							<a href="javascript:void(0);" data-toggle="collapse" data-target="#id13">أدوات التقييم
								<div class="pull-right">
									<i class="zmdi zmdi-caret-down"></i>
								</div>
								<div class="clearfix">
								</div>
							</a>
							<ul id="id13" class="collapse collapse-level-1 two-col-list ul-collapse">
								<li><a href="#">اضافة تقويم</a></li>
								<li><a href="#">نسخ من قالب</a></li>
							</ul>
						</li>
						<li>
							<a href="#">مقارنة درجات الاختبارات</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">
						<div class="pull-left">
							<i class="fa fa-signal mr-20"></i>
							<span class="right-nav-text">تقارير الدرجات</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#id15">
						<div class="pull-left">
							<i class="zmdi zmdi-book mr-20"></i>
							<span class="right-nav-text">الدورات التدربية</span>
						</div>
						<div class="pull-right">
							<i class="zmdi zmdi-caret-down"></i>
						</div>
						<div class="clearfix">
						</div>
					</a>
					<ul id="id15" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="javascript:void(0);" data-toggle="collapse" data-target="#id16">الدورات التدريبية
								<div class="pull-right">
									<i class="fa fa-th-large mr-20"></i>
								</div>
								<div class="clearfix">
								</div>
							</a>
							<ul id="id16" class="collapse collapse-level-1 two-col-list">
								<li><a href="#">اضافة محاضرة تدريبية</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:void(0);" data-toggle="collapse" data-target="#id17">مواد الدورات
								التدريبية
								<div class="pull-right">
									<i class="zmdi zmdi-caret-down"></i>
								</div>
								<div class="clearfix">
								</div>
							</a>
							<ul id="id17" class="collapse collapse-level-1 two-col-list">
								<li><a href="#">اضافة مادة دورة تدريبية</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:void(0);" data-toggle="collapse" data-target="#id18">حالة المواد

								<div class="pull-right">
									<i class="zmdi zmdi-caret-down"></i>
								</div>
								<div class="clearfix">
								</div>
							</a>
							<ul id="id18" class="collapse collapse-level-1 two-col-list ul-collapse">
								<li><a href="#">حالة جديدة</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:void(0);" data-toggle="collapse" data-target="#id19">اماكن المدرسة

								<div class="pull-right">
									<i class="zmdi zmdi-caret-down"></i>
								</div>
								<div class="clearfix">
								</div>
							</a>
							<ul id="id19" class="collapse collapse-level-1 two-col-list ul-collapse">
								<li><a href="#">اضافة مكان جديد</a></li>
								<li><a href="#">قائمة الاماكن</a></li>
							</ul>
						</li>
						<li>
							<a href="#">دوراتي التدريبية</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">
						<div class="pull-left">
							<i class="fa fa-shopping-bag mr-20"></i>
							<span class="right-nav-text">الحصص</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="pull-left">
							<i class="fa fa-calendar mr-20"></i>
							<span class="right-nav-text">الأعوام</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#id23">
						<div class="pull-left">
							<i class="ti-pencil-alt mr-20"></i>
							<span class="right-nav-text">السلوك</span>
						</div>
						<div class="pull-right">
							<i class="zmdi zmdi-caret-down"></i>
						</div>
						<div class="clearfix">
						</div>
					</a>
					<ul id="id23" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="javascript:void(0);" data-toggle="collapse" data-target="#id24">السلوك
								<div class="pull-right">
									<i class="zmdi zmdi-caret-down"></i>
								</div>
								<div class="clearfix">
								</div>
							</a>
							<ul id="id24" class="collapse collapse-level-1 two-col-list ul-collapse">
								<li><a href="#">اضافة سلوك</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:void(0);" data-toggle="collapse" data-target="#id25">مجموعات السلوك
								<div class="pull-right">
									<i class="zmdi zmdi-caret-down"></i>
								</div>
								<div class="clearfix">
								</div>
							</a>
							<ul id="id25" class="collapse collapse-level-1 two-col-list">
								<li><a href="#">اضافة مجموعة</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:void(0);" data-toggle="collapse" data-target="#id26">الاجرائات
								<div class="pull-right">
									<i class="zmdi zmdi-caret-down"></i>
								</div>
								<div class="clearfix">
								</div>
							</a>
							<ul id="id26" class="collapse collapse-level-1 two-col-list ul-collapse">
								<li><a href="#">اضافة اجراء</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">
						<div class="pull-left">
                            <i class="fa fa-lightbulb-o mr-20"></i>
							<span class="right-nav-text">برامج الارشاد</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#id29">
						<div class="pull-left">
							<i class="fa fa-check-square-o mr-20"></i>
							<span class="right-nav-text">الغيابات</span>
						</div>
						<div class="pull-right">
							<i class="zmdi zmdi-caret-down"></i>
						</div>
						<div class="clearfix">
						</div>
						<ul id="id29" class="collapse collapse-level-1 two-col-list ul-collapse">
							<li>
								<a href="#">تقرير مفصل لغيابات يوم كامل</a>
							</li>
							<li>
								<a href="#">تقرير مفصل لغيابات الحصص اليومية</a>
							</li>
						</ul>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#id30">
						<div class="pull-left">
							<i class="fa fa-bolt mr-20"></i>
							<span class="right-nav-text">العمليات</span>
						</div>
						<div class="pull-right">
							<i class="zmdi zmdi-caret-down"></i>
						</div>
						<div class="clearfix">
						</div>
						<ul id="id30" class="collapse collapse-level-1 two-col-list ul-collapse">
							<li>
								<a href="#">سجل العمليات</a>
							</li>
							<li>
								<a href="#">سجل الرسائل</a>
							</li>
							<li>
								<a href="#">سجل الملفات</a>
							</li>
						</ul>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#id31">
						<div class="pull-left">
							<i class="fa fa-envelope mr-20"></i>
							<span class="right-nav-text">صندوق البريد</span>
						</div>
						<div class="pull-right">
							<i class="zmdi zmdi-caret-down"></i>
						</div>
						<div class="clearfix">
						</div>
					</a>
					<ul id="id31" class="collapse collapse-level-1 two-col-list ul-collapse">
						<li>
							<a href="javascript:void(0);" data-toggle="collapse" data-target="#id32">صندوق الوارد
								<div class="pull-right">
									<i class="zmdi zmdi-caret-down"></i>
								</div>
								<div class="clearfix">
								</div>
							</a>
						</li>
                        <li><a href="#">كتابة رسالة</a></li>
						<li>
							<a href="#">الرسائل المرسلة</a>
						</li>
						<li>
							<a href="#">المسودات</a>
						</li>
						<li>
							<a href="#">الارشيف</a>
						</li>
						<li>
							<a href="#">المهملات</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#id33">
						<div class="pull-left">
							<i class="fa fa-send mr-20"></i>
							<span class="right-nav-text">الرسائل القصيرة</span>
						</div>
						<div class="pull-right">
							<i class="zmdi zmdi-caret-down"></i>
						</div>
						<div class="clearfix">
						</div>
					</a>
					<ul id="id33" class="collapse collapse-level-1 two-col-list ul-collapse">
						<li>
							<a href="javascript:void(0);" data-toggle="collapse" data-target="#id34">ارسال رسالة قصيرة
								<div class="pull-right">
									<i class="zmdi zmdi-caret-down"></i>
								</div>
								<div class="clearfix">
								</div>
							</a>
						</li>
                        	<li><a href="#">قوالب الرسائل القصيرة</a></li>
						<li>
							<a href="#">ارسال رسائل قصيرة</a>
						</li>
						<li>
							<a href="#">تقرير الرسائل القصيرة</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#id35">
						<div class="pull-left">
							<i class="zmdi zmdi-book mr-20"></i>
							<span class="right-nav-text">تقرير المستخدمين</span>
						</div>
						<div class="pull-right">
							<i class="zmdi zmdi-caret-down"></i>
						</div>
						<div class="clearfix">
						</div>
						<ul id="id35" class="collapse collapse-level-1 two-col-list ul-collapse">
							<li>
								<a href="#">المشرفين</a>
							</li>
							<li>
								<a href="#">مدراء المدارس</a>
							</li>
							<li>
								<a href="#">مدرب كيجن</a>
							</li>
							<li>
								<a href="#">المدراء</a>
							</li>
							<li>
								<a href="#">المرشدين</a>
							</li>
							<li>
								<a href="#">مشرفي الأدوار</a>
							</li>
							<li>
								<a href="#">أوليا الأمور</a>
							</li>
						</ul>
					</a>
				</li>
				<li>
					<a href="">
						<div class="pull-left">
							<i class="fa fa-wpforms mr-20"></i>
							<span class="right-nav-text">تقارير ادارية</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="pull-left">
							<i class="fa fa-book mr-20"></i>
							<span class="right-nav-text">المكتبات المخصصة</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="">
						<div class="pull-left">
							<i class="fa fa-table mr-20"></i>
							<span class="right-nav-text">الجدول الكامل</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#id37">
						<div class="pull-left">
							<i class="zmdi zmdi-book mr-20"></i>
							<span class="right-nav-text">المكتبة</span>
						</div>
						<div class="pull-right">
							<i class="zmdi zmdi-caret-down"></i>
						</div>
						<div class="clearfix">
						</div>
						<ul id="id37" class="collapse collapse-level-1 two-col-list ul-collapse">
							<li>
								<a href="#">الكل</a>
							</li>
							<li>
								<a href="#">ملفاتي</a>
							</li>
							<li>
								<a href="#">المكتبات المخصصة</a>
							</li>
						</ul>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="pull-left">
							<i class="fa fa-check-circle-o mr-20"></i>
							<span class="right-nav-text">استبيانات | التقييمات</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="">
						<div class="pull-left">
							<i class="fa fa-certificate mr-20"></i>
							<span class="right-nav-text">الشهادات | الخطابات</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="">
						<div class="pull-left">
							<i class="zmdi zmdi-book mr-20"></i>
							<span class="right-nav-text">الاعدادات</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="">
						<div class="pull-left">
							<i class="fa fa-file-text mr-20"></i>
							<span class="right-nav-text">ملف الانجاز</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="">
						<div class="pull-left">
							<i class="zmdi zmdi-book mr-20"></i>
							<span class="right-nav-text">مراجعة ملف الانجاز</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="">
						<div class="pull-left">
							<i class="fa fa-calendar mr-20"></i>
							<span class="right-nav-text">التقويم</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="">
						<div class="pull-left">
							<i class="fa fa-google mr-20"></i>
							<span class="right-nav-text">مستند جوجل</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="">
						<div class="pull-left">
							<i class="fa fa-star-o mr-20"></i>
							<span class="right-nav-text">الفصول الذكية</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="">
						<div class="pull-left">
							<i class="zmdi zmdi-book mr-20"></i>
							<span class="right-nav-text">تصدير حسابات </span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="">
						<div class="pull-left">
							<i class="fa fa-users mr-20"></i>
							<span class="right-nav-text">الاجتماعات الافتراضية</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="">
						<div class="pull-left">
							<i class="fa fa-lightbulb-o mr-20"></i>
							<span class="right-nav-text">شاركنا افكارك</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="pull-left">
							<i class="zmdi zmdi-book mr-20"></i>
							<span class="right-nav-text">الدعم الفني</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="">
						<div class="pull-left">
							<i class="fa fa-thumbs-up mr-20"></i>
							<span class="right-nav-text">شركاء النجاح</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="">
						<div class="pull-left">
							<i class="fa fa fa-credit-card-alt mr-20"></i>
							<span class="right-nav-text">بطاقتي</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="">
						<div class="pull-left">
							<i class="fa fa-bullhorn mr-20"></i>
							<span class="right-nav-text">المسابقات و الانشطة</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>
				<li>
					<a href="">
						<div class="pull-left">
							<i class="zmdi zmdi-book mr-20"></i>
							<span class="right-nav-text">روابط سريعة</span>
						</div>
						<div class="clearfix">
						</div>
					</a>
				</li>


			</ul>
		</div>
		<!-- /Left Sidebar Menu -->
		<!-- /Left Sidebar Menu -->
		
		<!-- Right Sidebar Menu -->
		<div class="fixed-sidebar-right">
			<ul class="right-sidebar">
				<li>
					<div  class="tab-struct custom-tab-1">
						<ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
                        <li class="" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="messages_tab_btn" href="#messages_tab">messages</a></li>

						</ul>
						<div class="tab-content" id="right_sidebar_content">
								
							<div id="messages_tab" class="tab-pane fade" role="tabpanel">
								<div class="message-box-wrap">
									<div class="msg-search">
										<a href="javascript:void(0)" class="inline-block txt-grey">
											<i class="zmdi zmdi-more"></i>
										</a>	
										<span class="inline-block txt-dark">messages</span>
										<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-search"></i></a>
										<div class="clearfix"></div>
									</div>
									<div class="set-height-wrap">
										<div class="streamline message-box nicescroll-bar">
											<a href="javascript:void(0)">
												<div class="sl-item unread-message">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="dist/img/user.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Clay Masse</span>
														<span class="inline-block font-11  pull-right message-time">12:28 AM</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Themeforest message sent via your envato market profile</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="{{ asset('dist/img/user1.png') }}" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Evie Ono</span>
														<span class="inline-block font-11  pull-right message-time">1 Feb</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Pogody theme support</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="{{ asset('dist/img/user2.png') }}" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Madalyn Rascon</span>
														<span class="inline-block font-11  pull-right message-time">31 Jan</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Congratulations from design nominees</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item unread-message">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="{{ asset('dist/img/user3.png') }} alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Ezequiel Merideth</span>
														<span class="inline-block font-11  pull-right message-time">29 Jan</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Themeforest item support message</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item unread-message">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="{{ asset('dist/img/user4.png') }}" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Jonnie Metoyer</span>
														<span class="inline-block font-11  pull-right message-time">27 Jan</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Help with beavis contact form</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="{{ asset('dist/img/user.png') }}" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Priscila Shy</span>
														<span class="inline-block font-11  pull-right message-time">19 Jan</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Your uploaded theme is been selected</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="{{ asset('dist/img/user1.png') }}" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Linda Stack</span>
														<span class="inline-block font-11  pull-right message-time">13 Jan</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject"> A new rating has been received</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
                        </div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<!-- /Right Sidebar Menu -->

		<!-- Main Content -->
		<div class="page-wrapper">
			<div class="container-fluid pt-25">



				@yield('content')

				</div>
			
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2017 &copy; </p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<!-- Data table JavaScript -->
	<!-- you can change titles searche - next - last from buttons.html5.min.js -->
	<script src="{{ asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
	<script src="{{ asset('vendors/bower_components/jszip/dist/jszip.min.js') }}"></script>
	<script src="{{ asset('vendors/bower_components/pdfmake/build/pdfmake.min.js') }}"></script>
	<script src="{{ asset('vendors/bower_components/pdfmake/build/vfs_fonts.js') }}"></script>
	<!-- you can change titles buttons pdf-csv-copy from buttons.html5.min.js -->
	<script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
	<!-- Slimscroll JavaScript -->
	<script src="{{ asset('dist/js/jquery.slimscroll.js') }}"></script>
	<!-- Sparkline JavaScript -->
	<script src="{{ asset('vendors/jquery.sparkline/dist/jquery.sparkline.min.js') }}"></script>
	<!-- Moment JavaScript -->
	<script type="text/javascript" src="{{ asset('vendors/bower_components/moment/min/moment-with-locales.min.js') }}"></script>
	<!-- Bootstrap Datetimepicker JavaScript -->
	<script type="text/javascript" src="{{ asset('vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
	<!-- Switchery JavaScript -->
	<script src="{{ asset('vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>
	<!-- Bootstrap Switch JavaScript -->
	<script src="{{ asset('vendors/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js') }}"></script>
	<!-- Select2 JavaScript -->
	<script src="{{ asset('vendors/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
	<!-- Init JavaScript -->
	<!-- <script src="dist/js/init.js"></script> -->
	<script src="{{ asset('dist/js/custom-js.js') }}"></script>
	@yield('js')
</body>

</html>
