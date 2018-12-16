@extends('layouts.body')
@section('title', 'الجدول الدراسي للمدرسة')
@section('content')
<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">الجدول الدراسي للمدرسة</h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="#"><span>الجدول الدراسي للمدرسة</span></a></li>
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
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="mt-40">
											<table class="tablesaw table-striped table-hover table-bordered table" data-tablesaw-mode="columntoggle">
												<thead>
													<tr>
													  <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist"> </th>
													  <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">الاولى</th>
													  <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">الثانية</th>
													  <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">الثالثة</th>
													  <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">  الرابعة و الفسحة</th>
													  <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">  الخامسة </th>
													  <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4"> السادسة</th>
													  <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">  السابعة </th>
													  <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">  الثامنة - الصلاة</th>
													</tr>
												</thead>
												<tbody>
												<tr>
												  <td class="title"><a href="javascript:void(0)">الاحد</a></td>
												  <td>عربي</td>
												  <td>انجليزي</td>
												  <td>الماني</td>
												  <td>رياضيات</td>
												  <td>علوم</td>
												  <td>لغتي الجميلة</td>
												  <td>فرنسي </td>
												  <td>روسي </td>
												</tr>
												<tr>
												  <td class="title"><a href="javascript:void(0)">الاثنين</a></td>
												  <td>عربي</td>
												  <td>انجليزي</td>
												  <td>الماني</td>
												  <td>رياضيات</td>
												  <td>علوم</td>
												  <td>لغتي الجميلة</td>
												  <td>فرنسي </td>
												  <td>روسي </td>
												</tr>
												<tr>
												  <td class="title"><a href="javascript:void(0)"> الثلاثاء</a></td>
												  <td>عربي</td>
												  <td>انجليزي</td>
												  <td>الماني</td>
												  <td>رياضيات</td>
												  <td>علوم</td>
												  <td>لغتي الجميلة</td>
												  <td>فرنسي </td>
												  <td>روسي </td>
												</tr>
												<tr>
												  <td class="title"><a href="javascript:void(0)">الاربعاء</a></td>
												  <td>عربي</td>
												  <td>انجليزي</td>
												  <td>الماني</td>
												  <td>رياضيات</td>
												  <td>علوم</td>
												  <td>لغتي الجميلة</td>
												  <td>فرنسي </td>
												  <td>روسي </td>
												</tr>
												<tr>
												  <td class="title"><a href="javascript:void(0)">الخميس</a></td>
												  <td>عربي</td>
												  <td>انجليزي</td>
												  <td>الماني</td>
												  <td>رياضيات</td>
												  <td>علوم</td>
												  <td>لغتي الجميلة</td>
												  <td>فرنسي </td>
												  <td>روسي </td>
												</tr>
												</tbody>
											</table>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Row -->
@endsection