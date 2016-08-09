@extends('layouts.layout')
@section('content')
    @include('admins.temp.nav_top')
    <div class="container-fluid">
        <div class="row">
           <div class="col-md-14 ">
              @include('admins.temp.meun_right')
               <br>


               <div class="col-md-7 col-md-offset-1 panel panel-body" >
                   @if(session()->has('flags'))
                       <div class="alert alert-success text-center alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>{{session('flags')}}
                       </div>
                   @endif
                   @if(count($errors) > 0)
                       <div class="alert alert-danger text-center alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>  @foreach ($errors->all() as $error){{ $error }} @endforeach
                       </div>
                   @endif
                   <br><br><br>
                       {{Form::open(['url'=>'sendup','files'=>true])}}
                   <div class="form-group col-md-8 col-md-offset-3">
                       <label>اپلود عکس</label>
                       <input type="file"  name="img" class="form-control btn btn-info"><br>


                   </div>

                   <div class="form-group col-md-8 col-md-offset-3">
                       <label>اپلود عکس</label>

                       <input type="file"  name="imgo" class="form-control btn btn-info"><br>


                   </div>

                   <div class="form-group col-md-8 col-md-offset-3">
                       <label>اپلود عکس</label>

                       <input type="file"  name="imgt" class="form-control btn btn-info"><br>

                       <br><br>
                       <input type="submit" class="form-control btn-primary" value="ارسال فایل">
                   </div>

                       {{Form::close()}}

               </div>
               <div class="col-md-8">
                   <a href="{{url('showimg')}}" class="btn btn-primary"> مشاهد عکس اپلود شد</a>
               </div>
            </div>
         </div>
    </div>

@endsection