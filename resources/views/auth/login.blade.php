@extends('layouts.app')
@section('title', 'تسجيل الدخول')
@section('css')
<link href="{{ asset('vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

 <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')

        <!--Preloader-->
        <div class="preloader-it">
            <div class="la-anim-1"></div>
        </div>
        <!--/Preloader-->
        
        <div class="wrapper pa-0">
            <header class="sp-header">
                <div class="sp-logo-wrap pull-left">
                    <a href="{{url('/')}}">
                        <img class="brand-img mr-10" src="{{ asset('dist/img/logo.png') }}" alt="brand"/>
                        <span class="brand-text">LMS</span>
                    </a>
                </div>
                
            </header>
            
            <!-- Main Content -->
            <div class="page-wrapper pa-0 ma-0 auth-page">
                <div class="container-fluid">
                    <!-- Row -->
                    <div class="table-struct full-width full-height">
                        <div class="table-cell vertical-align-middle auth-form-wrap">
                            <div class="auth-form  ml-auto mr-auto no-float">
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="mb-30">
                                            <h3 class="text-center txt-dark mb-10">تسجيل الدخول</h3>
                                            <h6 class="text-center nonecase-font txt-grey">من فضلك قم بأدخال تفاصيل حسابك</h6>
                                        </div>  
                                        <div class="form-wrap">
                                            <form method="POST" action="{{ route('login') }}">
                        @csrf
                                                <div class="form-group">
                                                    <label class="control-label mb-10" for="exampleInputEmail_2">اسم الدخول</label>
                                                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required="" id="exampleInputEmail_2" placeholder="ادخل اسم الدخول" name="username" value="{{ old('name') }}">
                                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                                </div>
                                                <div class="form-group">
                                                    <label class="pull-left control-label mb-10" for="exampleInputpwd_2">كلمة المرور</label>
                                                    <a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="{{ route('password.request') }}">فقدت كلمة المرور ؟</a>
                                                    <div class="clearfix"></div>
                                                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required="" id="exampleInputpwd_2" placeholder="ادخل كلمة المرور" name="password">
                                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="checkbox checkbox-primary pr-10 pull-left">
                                                        <input id="checkbox_2" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label for="checkbox_2"> تذكرني</label>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-group text-center">
                                                    <button type="submit" class="btn btn-info btn-rounded">دخــول</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->   
                </div>
                
            </div>
            <!-- /Main Content -->
        
        </div>
        <!-- /#wrapper -->
        

@endsection


@section('js')
<script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') }}"></script>
        
        <!-- Slimscroll JavaScript -->
        <script src="{{ asset('dist/js/jquery.slimscroll.js') }}"></script>
        
        <!-- Init JavaScript -->
        <script src="{{ asset('dist/js/init.js') }}"></script>
@endsection