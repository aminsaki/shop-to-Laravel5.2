@extends('layouts.layout')
@section('content')
@include('admins.temp.nav_top')
   <div class="container-fluid">
      <div class="row">
        <div class="col-md-14">
     @include('admins.temp.meun_right')
    <div class="panel panel-p col-md-8 col-xs-offset-1 ">
        <div class="panel panel-default">

            <div class="panel-heading text-right">ارسال مطلب</div><br>
            @if(session()->has('status'))
                <div class="alert alert-success text-center alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>{{session('status')}}
                </div>
            @endif
            <div class="panel-body">
                 {!! Form::open(['url'=>'commit'])!!}

                    <div class="form-group text-right"> <!-- Subject field -->
                        <label class="control-label " for="subject">عنوان پیام</label>
                        <input class="form-control" id="subject" name="title" type="text"/>
                    </div>

                    <div class="form-group text-right"> <!-- Message field -->
                        <label class="control-label text-right " for="message">پیام</label>
                        <textarea  class="ckeditor" id="editor1" name="commit" ></textarea>
                    </div>
                     <div class="form-group text-center"> <!-- Message field -->
                          <select name="catpost">
                              <option>  </option>
                              <option>درباره ما </option>
                              <option> درباره pedoff</option>
                              <option> راهنمایی خرید از وب سایت</option>
                              <option>پدافت چطور کار می کند </option>
                              <option> سوالات متداول</option>
                          </select>
                         <label class="control-label text-right " for="message">لطفا ناحیه وب سایت مشخصی کنید</label>

                     </div>
                    <div class="form-group">
                        <button class="btn btn-primary" value="submit" name="submit" type="submit">ارسال مطالب</button>
                    </div>
                 {!! Form::close() !!}
            </div>
        </div>
</div>
        </div>
        </div>
    </div>
  <script  src="{{ URL::asset('ckeditor/ckeditor.js') }}"></script>
<script>


    CKEDITOR.replace( 'editor1', {
        uiColor:'#3FA3C5',
        language: 'fa',


    });

</script>
@endsection
