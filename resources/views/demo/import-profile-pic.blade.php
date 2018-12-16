@extends('layouts.body')
@section('title', 'استيراد صور الملف الشخصي')
@section('content')
					<div class="row heading-bg">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<h5 class="txt-dark">استيراد صور الملف الشخصي</h5>
							</div>
						
							<!-- Breadcrumb -->
							<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
								<ol class="breadcrumb">
									<li><a href="{{ URL::to('/home/') }}">الرئيسيه</a></li>
									<li class="active"><a href="#"><span>استيراد صور الملف الشخصي</span></a></li>
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
							<h6 class="panel-title txt-dark">استيراد صور الملف الشخصي</h6>
						</div>
						<div class="clearfix"></div>
						</div>
					<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<p>
							-يجب ان يكون الملف المرفوع مضغوط بصيغة zip يحتوي علي الصور الشخصيه المراد رفعها
						</p>
						<p>
							- يجب تسمية الصوره الشخصية للمستخدم بنفس رقم الهويه المعرف بالنظام للمستخدم الذي تريد تحديث صورته بالملف الشخصي مثال :15815.jpg
						</p>
						<p>
							- رقم الهوية يجب ان يكون مطابق لرقم الهوية المعرف للمستخدم في النظام لتحديث الصورة بنجاح
						</p>
						<p>
							- يجب ان يكون نوع ملف الصوره jpg هذا النوع من ملفات الصور هو المقبول فقط
						</p>
						<p>
							- سوف يتم تحديث صور الملفات الشخصيه للمستخدمين المتطابقين في المدرسة الحاليه فقط
						</p>
					<div class="form-wrap mt-30">
					<form class="form-inline">
					<input type="file" id="input-file-now" class="dropify" required />
					<div class="clearfix"></div>
					<div class="text-center">
					<button type="submit" class="btn btn-danger inline-block mt-30">
						<span class="btn-text">التالي</span>
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