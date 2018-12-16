@extends('layouts.app')
@section('title', 'استعادة بيانات الدخول')
@section('css')
 <link href="{{ asset('vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="preloader-it">
            <div class="la-anim-1"></div>
        </div>
        <!--/Preloader-->
        
        <div class="wrapper pa-0">
            <!-- Main Content -->
            <div class="page-wrapper pa-0 ma-0 auth-page">
                <div class="container-fluid">
                    <!-- Row -->
                    <div class="table-struct full-width full-height">
                        <div class="table-cell vertical-align-middle auth-form-wrap">
                            <div class="auth-form  ml-auto mr-auto no-float">
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="sp-logo-wrap text-center pa-0 mb-30">
                                            <a href="index.html">
                                                <img class="brand-img mr-10" src="{{ asset('dist/img/logo.png') }}" alt="brand"/>
                                                <span class="brand-text">LMS</span>
                                            </a>
                                        </div>
                                        <div class="mb-30">
                                            <h3 class="text-center txt-dark mb-10">هل فقدت كلمة المرور الخاصه بك</h3>
                                            <h6 class="text-center txt-grey nonecase-font">قم بأدخال بريدك الالكتروني المسجل لدينا</h6>
                                        </div>  
                                        <div class="form-wrap">
                                            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                                            <form method="POST" action="{{ route('password.email') }}">
                                                
                                             @csrf
                                            


                                                <div class="form-group">
                                                    <label class="control-label mb-10" for="exampleInputEmail_2">البريد الالكتروني</label>
                                                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required="" id="exampleInputEmail_2" placeholder="ادخل البريد الالكتروني">
                                                </div>
                                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                                <div class="form-group text-center">
                                                    <button type="submit" class="btn btn-info btn-rounded">استرجاع كلمة المرور</button>
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