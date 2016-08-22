@extends('layouts.layout')
@section('content')
    <div class="container-fluid">
        @include('admins.temp.nav_top')
        <div class="row">
             <div class="col-md-14">
                @include('admins.temp.meun_right')
               <div class="col-md-8 panel panel-default tops col-md-offset-1">
                   @if(session()->has('mass'))
                       <div class="alert alert-success text-center alert-dismissible fade in" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                           </button>{{session('mass')}}
                       </div>
                   @endif
                   <div class="btn btn-danger panel panel-info text-danger col-md-12"> پیام کاربران درمورد محصولات</div><br><br><br>
                   @foreach($users as $row)
                       {{Form::open(['url'=>'massjes'])}}
                   <div class="form-inline">
                       <div class="form-group">
                           <label>نام کاربری</label>
                           {{Form::text('username',$row->username,['class'=>'form-control'])}}
                       </div>
                       <div class="form-group">
                           <label>ایمیل</label>
                           {{Form::text('eamil',$row->email,null,['class'=>'form-control'])}}
                       </div>
                       <input type="hidden" name="id" value="{{$row->id}}">
                       <div class="form-group">
                           <label>شماره تماس</label>
                           {{Form::text('tell',$row->tell,null,['class'=>'form-control'])}}
                       </div>
                   </div>
                   <div class="form-group">
                       {{Form::textarea('text',$row->text,null,['class'=>'form-control'])}}
                   </div>
                    <div class="form-group">
                        <select name="flag">
                           @if($row->flag==0)
                             <option value="0">عدم نمایش پیام</option>
                                <option value="1">نمایش پیام</option>
                           @endif
                            @if($row->flag==1)
                               <option value="1">نمایش پیام</option>
                                <option value="0">عدم نمایش پیام</option>
                            @endif
                        </select>
                    </div>
                   <div class="form-inline">
                       <input type="submit" name="submit" class="form-control btn btn-primary" value="تایید پیام">
                        <a href="{{url('porductshow')}}" class="form-control btn btn-success">بازگشت به صفحه قبل</a>
                       <a href="delmass/{{$row->id}} " class="form-control btn btn-info">حذف </a>
                       <a href="#" class="form-control btn btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">پاسخ پیام</a>

                   </div>
                   {{Form::close()}}
                   @endforeach
               </div>
            </div>
        </div>
                  <!---commituser---->
        <script type="text/javascript" src="{{URL::asset('assety/jquery.min.js')}}"></script>
        <script>
            $(document).ready(function () {
               $("#submit").click(function (e) {

                   e.preventDefault();
                $.ajax({
                    url: "{{url('/snedusers')}}",
                    type:"post",
                    data:{'text':$("#text").val(),'_token':$('input[name=_token]').val()},
                    success: function (data) {
                            $(".showmasse").text(data);
                        console.log(data);
                    },
                    error: function (data) {
                        console.log(data);
                    }
                });
               });
            });
        </script>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <div class="showmasse alert-danger text-center"></div>
                        <h4 class="modal-title" id="exampleModalLabel"> پاسخ به پیام کاربر</h4>
                    </div>
                    <form method="#">
                    <div class="modal-body">

                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                            <div class="form-group">
                                <label for="message-text" class="control-label">پاسخ کاربر:</label>
                                <textarea class="form-control" name="text" id="text"></textarea>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">بسته پنجری</button>
                        <button type="submit" id="submit" class="btn btn-primary">ارسال پیام</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection