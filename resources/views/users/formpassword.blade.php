@extends('layouts.layout')
@section('content')
  <div class="container">
      @include('users.temp.header')
      <div class="col-md-12">
          @include('users.temp.panel')
          <div class="col-md-8 panel panel-default">

              @if(session()->has('save'))
                  <div class="alert alert-success text-center alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                      </button>{{session('save')}}
                  </div>
              @endif
              @if(count($errors)>0)
                  <div class="alert alert-danger text-center alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                      </button>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </div>
              @endif

               {{Form::open(['url'=>'savepassword'])}}
              <div class="col-md-12 panel btn btn-default"> عوض کردن رمز ورود</div>
                  <div class="form-group">
                      <label>رمز ورود جدید</label>
                  <div class="form-group col-md-12">

                      <input type="password" name="password" class="form-control" placeholder="لطفارمز ورود خود را وارد کنید">
                  </div>
                      <label>تکرا رمز ورود</label>
                      <div class="form-group col-md-12">

                          <input type="password" name="password_confirm" class="form-control" placeholder="لطفا رمز خود را تکرارکنید">
                      </div>

                  <div class="form-group">
                      <input type="submit" name="submit" class="form-control btn btn-primary" value="ثبت اطلاعات">
                  </div>
              </div>
            {{Form::close()}}
          </div>
      </div>
  </div>
@endsection