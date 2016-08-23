@extends('layouts.layout')
 @section('content')
 <div class="container-fluid">
     @include('admins.temp.nav_top')
     <div class="col-md-14">
         @include('admins.temp.meun_right')
         <div class="col-md-7 col-md-offset-1 panel panel-default" style="margin-top: 50px;">
             @if(session()->has('save'))
                 <div class="alert alert-success text-center alert-dismissible fade in" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                     </button>{{session('save')}}
                 </div>
             @endif

             @if (count($errors) > 0)
                 <div class="alert alert-danger text-center alert-dismissible fade in" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                     </button>
                     @foreach ($errors->all() as $error)
                         <i>{{ $error }}</i><br>
                     @endforeach
                 </div>
             @endif
             {{ Form::model($user,['url'=>'chanepassword'])}}
             <div class=" text-center bg-nav  col-md-12" style="color:white">
                 <h4> فرم تعییرات رمز ورود و پسورد</h4>
             </div>

             <div class="form-group ">
                 <label>نام کاربری</label>
                  {{Form::text('email',null,['class'=>'form-control'])}}
              </div>
             <div class="form-group ">
                 <label> پسورد جدید</label>
                 <input type="password" name="password" class="form-control" placeholder="لطفا رمز جدید را وارد کنید">
             </div>
                {{Form::hidden('id')}}
             <div class="form-group">
                <div class="col-md-6">
                  <input type="submit"  name="submit"  value="ثبت اطلاعات" class="form-control btn btn-primary col-md-3">
                </div>
                <div class="col-md-6 btn btn-default pull-left" >
                  <a href={{url('showuser')}}> بازگشت به صفحه قبل </a>
                </div>
             </div>
          {{Form::close()}}
         </div>
     </div>
 </div>
@endsection