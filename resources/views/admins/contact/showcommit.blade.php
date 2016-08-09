@extends('layouts.layout')
@section('content')
    @include('admins.temp.nav_top')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-14">
                @include('admins.temp.meun_right')
                <div class="col-md-5 col-md-offset-2 panel panel-body">
                    @if(session()->has('abodydel'))
                        <div class="alert alert-success text-center alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>{{session('abodydel')}}
                        </div>
                    @endif
                    <div class="form-area">
                        {{Form::model($cid)}}
                        <br style="clear:both">
                        <h3 style=" text-align: center;">پیام کاربران</h3>
                        <div class="form-group" >
                            <label> نام کابران</label>
                            {{Form::text('username',null,['class'=>"form-control"])}}
                        </div>
                        <div class="form-group">
                            <label> ایمیل</label>
                            {{Form::text('email',null,['class'=>'form-control'])}}
                        </div>
                        <div class="form-group">
                            <label> شماره تماس</label>
                            {{Form::text('tell',null,['class'=>'form-control'])}}
                        </div>
                        <div class="form-group">
                            <label> عنوان پیام</label>
                            {{ Form::text('title',null,['class'=>'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{Form::textarea('commit',null,['classs'=>'form-control'])}}

                        </div>

                        {{Form::close()}}
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">پاسخ دهید</a>
                        <a href="{{url('/delcontact').'/'.$cid->id}}" class="btn btn-danger pull-left">حذف پیام</a>
                        <a href="{{url('/contact')}}" class="btn btn-info">بازگشت</a>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="@fat"> پاسخ داده شده</a>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog" role="document" style="margin: 187px auto; margin-left:200px; float:left; ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel">پاسخ</h4>
                            </div>
                            {{Form::open(['url'=>'send'])}}
                            <div class="modal-body">

                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">:ایمیل کاربر</label>
                                        <input type="text"  name="email" class="form-control"  value="{{$cid->email}}" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="control-label">پیام:</label>
                                        <textarea class="form-control" name="commit" id="message-text"></textarea>
                                    </div>
                                <input type="hidden" name="uid" value="{{$cid->id}}">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">بسته پنجره</button>
                                <button type="submit" class="btn btn-primary">ارسال پیام</button>
                            </div>
                            {{Form::close()}}
                        </div>
                    </div>
                </div>
                  <!---//pscal---->
                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel">پاسخ پیام</h4>
                            </div>

                            <div class="modal-body">
                                 <div class="form-group">
                                        <label for="message-text" class="control-label">متن پیام</label>
                                        <textarea class="form-control">@foreach($read as  $row) {{ $row->commit }} @endforeach</textarea>
                                 </div>
                             </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


        </div>
    </div>
    </div>

@endsection