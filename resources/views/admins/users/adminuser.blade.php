@extends('layouts.layout')
@section('content')
<div class="container-fluid">
    @include('admins.temp.nav_top')
    <div class="row">
       <div class="col-md-14">
            @include('admins.temp.meun_right')
            <div class="col-md-8 col-md-offset-1" style="margin-top: 50px;">
                <div class="list-group">
                    <a href="#" class="list-group-item disabled btn-primary " style="color:white;">
                       توضیحات
                    </a>
                    <a href="#" class="list-group-item">شما در اینجاه می توانید حق دسترس به پنل مدیریت یا پنل کاربران یا لغو حق دسترس بدهی ویا تعیین نویسنده کنید</a>
                    <a href="#" class="list-group-item"> دسترسی user برای اجاز داشت برای رفت پنل کاربری می باشد</a>
                    <a href="#" class="list-group-item">دسترسیadminبرای اجاز داشت برای رفت پنل مدیریت وب سایت می باشد</a>
                    <a href="#" class="list-group-item">دسترسیwrite برای فقط ارسال  مطلب به وب سایت می باشد  </a>
                </div>
                @if(session()->has('deletes'))
                    <div class="alert alert-success text-center alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>{{session('deletes')}}
                    </div>
                @endif
                <table class="table table-bordered panel panel-default tb">
                   <tr>
                        <th>نام کاربر</th>
                        <th> تعیین سطح دسترسی</th>
                        <th>عملیات</th>
                    </tr>
                     @foreach($user as $row)
                         {{Form::open(['url'=>'saveuser'])}}
                             <input type="hidden" name="id" value="{{$row->id}}">
                       <tr>
                           <td>{{$row->name}}</td>
                            <td>
                               <select name="level" class="btn btn-default col-md-12">
                                   @if($row->level==='admin')
                                   <option value="admin">admin</option>
                                   <option value="user">user</option>
                                   <option value="write">write</option>
                                   @elseif($row->level==='user')
                                       <option value="user">user</option>
                                       <option value="admin">admin</option>
                                       <option value="write">write</option>
                                   @elseif($row->level==='write')
                                       <option value="write">write</option>
                                       <option value="admin">admin</option>
                                       <option value="user">user</option>
                                   @endif

                              </select>
                              </td>
                           <td>
                                <a href="deleteuser/{{$row->id}}" id="id" class="btn btn-danger col-md-4 text-left">حذف</a>
                                 <input  type="submit" name="submit" value="ثبت اطلاعات" class="btn btn-primary col-md-4 text-center">
                                <a href="userpass/{{$row->id}}" class="btn btn-success col-md-4 text-center"> تعییرنام کاربری رمز ورود</a>
                           </td>
                       </tr>
                      {{Form::close()}}
                   @endforeach
                    <tr>
                        <td colspan="6"> {{ $user->links() }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>



@endsection