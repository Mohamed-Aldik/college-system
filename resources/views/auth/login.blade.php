@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('مجلس الكليات')])

@section('content')
  <div class="container" style="height: auto;">
    <div class="row align-items-center">
      <div class="col-md-9 ml-auto mr-auto mb-3 text-center">

      </div>
      <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
        <form class="form" method="POST" action="{{ route('login') }}">
          @csrf

          <div class="card card-login card-hidden mb-3">
            <div class="card-header card-header-info text-center">
              <h4 class="card-title"><strong>{{ __('تسجيل الدخول') }}</strong></h4>

            </div>
            <div class="card-body">
              {{--<p class="card-description text-center">{{ __('Or Sign in with ') }} <strong>admin@material.com</strong> {{ __(' and the password ') }}<strong>secret</strong> </p>--}}
              <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                <div class="input-group has-success" >
                  <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                  </div>
                  <input type="email" name="email"  class="form-control" placeholder="{{ __('Email...') }}" value="{{ old('email', 'admin@material.com') }}" required>
                </div>
                @if ($errors->has('email'))
                  <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">

                    <strong>اسم المستخدم أو كلمة المرور خاطئة</strong>
                  </div>
                @endif
              </div>
              <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
                <div class="input-group has-success">
                  <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                  </div>
                  <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}" value="{{ !$errors->has('password') ? "secret" : "" }}" required>
                </div>
                @if ($errors->has('password'))
                  <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                    <strong>{{ $errors->first('password') }}</strong>
                  </div>
                @endif
              </div>
              <div class="form-check mr-auto ml-3 mt-3">
              
              </div>
            </div>
            <div class="card-footer justify-content-center">
              <button type="submit" class="btn btn-info btn-lg">{{ __('الدخول') }}</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
@endsection
