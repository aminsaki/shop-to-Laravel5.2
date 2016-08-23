@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        @include('temp.header')
        @include('temp.serach')
        <div class="container">
         <div class="row"> <div class="col-md-12 btn btn-default"><a href="{{url('/')}}" class="pull-right">  <i class="glyphicon glyphicon-home"></i> خانه/</a> <span class="pull-right">{{$titles}}</span></div></div>
          @foreach($product as $row)
           <div class="row tops" >
             <div class="col-md-12 panel panel-default">
                 <div class="col-md-12 text-center"><h4 class="text-primary">{{$row->titles}}</h4></div>
                 <div class="col-md-12 text-center"><h4>{{$row->titles}}  تخفیف{{$row->discountprice}}%  وتنهابا پرداخت  {{$row->originalprice}}تومان </h4></div>
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="col-md-12">
                          <table class="table table-bordered">
                              <tr>
                                  <td> پرداخت شما</td>
                                  <td> {{$row->originalprice}}تومان </td>
                              </tr>
                              <tr>
                                  <td> تخفیف شما</td>
                                  <td>{{$row->discountprice}}</td>
                              </tr>
                              </table>
                             <table class="table table-bordered">
                                 <tr>
                                     <td> اشترک در شبگه ها اجتماعی </td>
                                     <td> فسیوک.</td>
                                 </tr>
                             </table>
                            <table class="table table-bordered">
                              <tr>
                                  <td><a href="#" class="btn btn-success"> اضافه به سید خرید</a> </td>
                                  <td><a href="#" class="btn btn-primary"> خریدن کردن</a> </td>
                              </tr>
                          </table>
                        </div>
                    </div>
                    <div class="col-md-8" >
                        <img src="{{URL::asset($row->img)}}" class="img-responsive" style="width:800px;" >
                    </div>
                </div>
             </div>

         </div><!--/.endrow--->
              <div class="row tops panel panel-default">
                  <div class="col-md-12 ">
                      <div class="col-md-4 text-center">
                          مشخصات فروشنده
                          <hr>
                          <div class="col-md-12">
                             <div class="col-md-12">
                                  <label> ادرسی </label>
                                 <p>{{$row->address}} </p>
                             </div>
                              <div>
                                  <label> شماره تماس</label>
                                  <p>{{$row->tell}}</p>
                              </div>
                          </div>
                         </div>
                      <div class="col-md-4 text-center">شرایط استفاده
                          <hr>
                          <div class="col-md-12">
                              <p style="text-wrap:break-word;">
                                  {{$row->commit}}
                              </p>
                          </div>
                      </div>
                      <div class="col-md-4 text-center">ویژگی ها
                      <hr>
                          <div class="col-md-12">
                              <p style="text-wrap: break-word;">
                                  {{$row->property}}
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-12 panel  panel-success tops datas">
                      <div class="text-center form-inline ">
                          <div class="form-group pull-left">
                              تاریخ انتشاره :{{$row->data}}
                         </div>
                         <div class="form-group pull-right">
           نام نویسنده: {{$user}}
                         </div>
                      </div>
                  </div>
              </div>
         @endforeach



        @if(Auth::user())
        @if(Auth::user()->level==='user' || Auth::user()->level=='admin')
             <div class="row">
                     <script type="text/javascript" src="{{URL::asset('assety/jquery.min.js')}}"></script>
                     <script type="text/javascript">
                         $(document).ready(function () {
                             $('input[name=submit]').click(function (e) {
                                 if($("#username").val()==null ||$('#email').val()==null || $("#text").val()==null) {
                                     alert('شما باید ایمیل و شماره تماس ومتن خود را وارد کنید');
                                     e.preventDefault();
                                 }
                                 else {
                                    e.preventDefault();
                                     $.ajax({
                                         url: '{{url('message')}}',
                                         type: "post",
                                         data: {
                                             'username': $("#username").val(),
                                             '_token': $('input[name=_token]').val(),
                                             'email': $("#email").val(),
                                             'tell': $("#tell").val(),
                                             'text': $("#text").val(),
                                             'catid': $('input[name=catid]').val()
                                         },
                                         success: function (data) {
                                             console.log(data);
                                             $(".showmasse").text(data);
                                             alert('با تشگر پیام شما  پس تایید مدیریت پیام شما نمایش داده میشود');
                                         },
                                         error: function (data) {
                                             console.log(data);
                                         }
                                     });
                                 }
                             });
                         });

                     </script>

                     <div class=" btn btn-default col-md-12"><p class="text-right"> فرم نظردهید کاربران</p> </div>
                <div class="col-md-12 panel panel-default tops">
                    <div class="showmasse">

                    </div>
                    <form method="#">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-inline tops">
                        <div class="form-group">
                            <label> نام کاربری</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="نام کاربری خود را وارد کنید">
                        </div>
                             <input type="hidden" name="catid" value="{{$productid}}">
                        <div class="form-group">
                            <label>ایمیل</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="وارد کردن ایمیل اجبار می باشد">
                        </div>
                        <div class="form-group">
                            <label> شماره تماس</label>
                            <input type="text" class="form-control" id="tell" name="tell" placeholder="وارد کردن شماره تماس اجباری می باشد">
                        </div>
                    </div>
                    <div class="form-group tops">
                        <textarea name="text" id="text" class="form-control"  rows="8" cols="5" placeholder="وارد کردن متن اجباری می باشد"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit"  name="submit"  class="btn btn-primary " value="ارسال نظر">
                    </div>
                </form>
                </div>
            </div>
           @endif
         @else
         <div class="row panel panel-default">
             <div class="col-md-12  panel btn-default"  style="line-height: 20px;"><p class="text-center"> برای نظردهید با عضوی باشید</p></div>
             <div class="col-md-12 ">

                 <div class="col-md-6  col-md-offset-1 ">
                     <a href="{{url('/register')}}" class="btn btn-default"> عضویت</a>
                     <a href="{{url('/login')}}" class="btn btn-success">ورود </a>
                 </div>
             </div>
         </div>
        @endif
            <div class="col-md-12 panel panel-default">
            @foreach($coomit as $row)
                <div class="form-group">
                     <p class="text-right text-danger" style="line-height:40px; font-size: 20px;">{{$row->username}}</p>
                </div>
                 <hr>
                 <div class="form-group">
                     <p class="text-right">
                         {{$row->text}}
                     </p>
                 </div>
             @endforeach
            </div>
        </div><!--/.endcontrainter--->
        @include('temp.footer')
    </div><!--/.endcontirentfiue-->
@endsection














