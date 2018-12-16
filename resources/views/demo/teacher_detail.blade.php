@extends('layouts.body')
@section('title', 'احصائيات المعلمين')
@section('content')
<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">احصائيات المعلمين</h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="#"><span>احصائيات المعلمين</span></a></li>
								</ol>
							</div>
							<!-- /Breadcrumb -->
						<div class="col-md-12 mt-15 mb-20">
							<a href="#button" class="btn btn-primary">احصائيات أدوات التواصل</a>
					</div>
						</div>
				<!-- Row -->

				<!-- Row -->
			<div class="row">
					<div class="col-lg-12 col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div  class="tab-struct custom-tab-1 mt-40">
										<ul role="tablist" class="nav nav-tabs" id="myTabs_7">
											<li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="home_tab_7" href="#home_7">إحصائيات عامة</a></li>
											<li role="presentation" class=""><a  data-toggle="tab" id="profile_tab_7" role="tab" href="#profile_7" aria-expanded="false">عرض إحصائيات مع نسبة تفاعل الطلاب</a></li>
											
										</ul>
										<div class="tab-content" id="myTabContent_7">
											<div  id="home_7" class="tab-pane fade active in" role="tabpanel">
												<div class="row">
                                                    <div class="col-lg-6 col-sm-12">
                                                        <div class="form-group mr-15">
                                                            <label  class="control-label mr-10 mb-10" for="group">من:</label>
                                                            <input type="text" class="form-control f-input" id="name" data-col-index="0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-12">
                                                        <div  class="form-group mr-15">
                                                            <label  class="control-label mr-10 mb-10" for="group">إلى:</label>
                                                            <input type="text" class="form-control f-input" id="name" data-col-index="0">
                                                        </div>
                                                    </div>
                                                </div>
                                                        <!-- Row -->
                                                <div class="clearfix"></div>
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-danger inline-block btn-anim mb-30 submit">
                                                        <i class="icon-rocket"></i><span class="btn-text">بحث</span>
                                                    </button>
                                                </div>
                                                 <div class="clearfix"></div>
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
                                                                                <th> المعلم</th>
                                                                                <th>التحاضير</th>
                                                                                <th>الاختبارات</th>
                                                                                <th>الانشطة/الواجبات</th>
                                                                                <th>محاضرات القيديو </th>
                                                                                <th>المرفقات</th>
                                                                                <th>مكتبة الفيديو</th>
                                                                                <th> مكتبة الوثائق</th>
                                                                                <th> مكتبة الفلاشات التعليمية</th>
                                                                                <th> مكتبة  الصوتيات</th>
                                                                                <th> مكتبة  البرامج</th>
                                                                                <th> مكتبة  الصور</th>
                                                                                <th> مكتبة  العروض</th>
                                                                                <th> مكتبة  المواقع</th>
                                                                                <th> عدد  مرات أخذ الحضور</th>
                                                                                <th> المجموع</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tfoot>
                                                                            <tr>
                                                                                <th> المعلم</th>
                                                                                <th>التحاضير</th>
                                                                                <th>الاختبارات</th>
                                                                                <th>الانشطة/الواجبات</th>
                                                                                <th>محاضرات القيديو </th>
                                                                                <th>المرفقات</th>
                                                                                <th>مكتبة الفيديو</th>
                                                                                <th> مكتبة الوثائق</th>
                                                                                <th> مكتبة الفلاشات التعليمية</th>
                                                                                <th> مكتبة  الصوتيات</th>
                                                                                <th> مكتبة  البرامج</th>
                                                                                <th> مكتبة  الصور</th>
                                                                                <th> مكتبة  العروض</th>
                                                                                <th> مكتبة  المواقع</th>
                                                                                <th> عدد  مرات أخذ الحضور</th>
                                                                                <th> المجموع</th>
                                                                            </tr>
                                                                        </tfoot>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>محمد احمد محمد ابراهيم</td>
                                                                                <td>3/3/2018</td>
                                                                                <td>0</td>
                                                                                <td>50.74%</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>15</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>ساره احمد محمد ابراهيم</td>
                                                                                <td>3/3/2018</td>
                                                                                <td>0</td>
                                                                                <td>50.74%</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>15</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>يوسف احمد محمد ابراهيم</td>
                                                                                <td>3/3/2018</td>
                                                                                <td>0</td>
                                                                                <td>50.74%</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>15</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>محمد محمد ابراهيم</td>
                                                                                <td>3/3/2018</td>
                                                                                <td>0</td>
                                                                                <td>50.74%</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>15</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                 <div class="clearfix"></div>
                                               
											</div>
											<div  id="profile_7" class="tab-pane fade" role="tabpanel">
													<div class="row">
                                                    <div class="col-lg-6 col-sm-12">
                                                        <div data-brackets-id="66530" class="form-group mr-15">
                                                            <label data-brackets-id="66531" class="control-label mr-10 mb-10" for="group">من:</label>
                                                            <input type="text" class="form-control f-input" id="name" data-col-index="0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-12">
                                                        <div data-brackets-id="66530" class="form-group mr-15">
                                                            <label data-brackets-id="66531" class="control-label mr-10 mb-10" for="group">إلى:</label>
                                                            <input type="text" class="form-control f-input" id="name" data-col-index="0">
                                                        </div>
                                                    </div>
                                                </div>
                                                        <!-- Row -->
                                                <div class="clearfix"></div>
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-danger inline-block btn-anim mb-30 submit">
                                                        <i class="icon-rocket"></i><span class="btn-text">بحث</span>
                                                    </button>
                                                </div>
                                                 <div class="clearfix"></div>
                                                 <!-- Row -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel panel-default border-panel  card-view">
                                                        <div class="panel-body">
                                                        <div class="table-wrap">
                                                                <div class="table-responsive">
                                                                    <table id="teachers_details" class="table table-hover display  pb-30" >
                                                                        <thead>
                                                                            <tr>
                                                                                <th> المعلم</th>
                                                                                <th>التحاضير</th>
                                                                                <th>الاختبارات</th>
                                                                                <th>الانشطة/الواجبات</th>
                                                                                <th>محاضرات القيديو </th>
                                                                                <th>المرفقات</th>
                                                                                <th>مكتبة الفيديو</th>
                                                                                <th> مكتبة الوثائق</th>
                                                                                <th> مكتبة الفلاشات التعليمية</th>
                                                                                <th> مكتبة  الصوتيات</th>
                                                                                <th> مكتبة  البرامج</th>
                                                                                <th> مكتبة  الصور</th>
                                                                                <th> مكتبة  العروض</th>
                                                                                <th> مكتبة  المواقع</th>
                                                                                <th> عدد  مرات أخذ الحضور</th>
                                                                                <th> المجموع</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tfoot>
                                                                            <tr>
                                                                                <th> المعلم</th>
                                                                                <th>التحاضير</th>
                                                                                <th>الاختبارات</th>
                                                                                <th>الانشطة/الواجبات</th>
                                                                                <th>محاضرات القيديو </th>
                                                                                <th>المرفقات</th>
                                                                                <th>مكتبة الفيديو</th>
                                                                                <th> مكتبة الوثائق</th>
                                                                                <th> مكتبة الفلاشات التعليمية</th>
                                                                                <th> مكتبة  الصوتيات</th>
                                                                                <th> مكتبة  البرامج</th>
                                                                                <th> مكتبة  الصور</th>
                                                                                <th> مكتبة  العروض</th>
                                                                                <th> مكتبة  المواقع</th>
                                                                                <th> عدد  مرات أخذ الحضور</th>
                                                                                <th> المجموع</th>
                                                                            </tr>
                                                                        </tfoot>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>محمد احمد محمد ابراهيم</td>
                                                                                <td>3/3/2018</td>
                                                                                <td>0</td>
                                                                                <td>50.74%</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>15</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>ساره احمد محمد ابراهيم</td>
                                                                                <td>3/3/2018</td>
                                                                                <td>0</td>
                                                                                <td>50.74%</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>15</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>يوسف احمد محمد ابراهيم</td>
                                                                                <td>3/3/2018</td>
                                                                                <td>0</td>
                                                                                <td>50.74%</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>15</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>محمد محمد ابراهيم</td>
                                                                                <td>3/3/2018</td>
                                                                                <td>0</td>
                                                                                <td>50.74%</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>0</td>
                                                                                <td>15</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                 <div class="clearfix"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
				<!-- Row -->
@endsection