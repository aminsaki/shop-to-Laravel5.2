@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            @include('users.temp.header')
            <div class="col-md-12">
                @include('users.temp.panel')
                <div class="col-md-8 panel panel-default tops">
                   @foreach($users as $row)

                      <div class="form-inline">
                          <div class="form-group">
                              <label>    <i class="glyphicon glyphicon-user"></i>نام کاربری</label>
                              <label style="color:red;color:red;font-size: 12px;">{{$row->name}}</label>

                          </div>

                      </div>
                        <div class="form-inline">
                            <div class="form-group">
                                <label>  <i class="glyphicon glyphicon-envelope"></i>ایمیل </label>
                                <label style="color:red;color:red;font-size: 12px; ">{{$row->email}}</label>
                            </div>
                        </div>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
