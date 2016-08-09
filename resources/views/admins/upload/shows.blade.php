@extends('layouts.layout')
@section('content')
@include('admins.temp.nav_top')
    <div class="row">
        <div class="col-md-14">
            @include('admins.temp.meun_right')<br><br>
              <div class="col-md-7 col-md-offset-2">
                  <h1 class="btn-success text-center pull-left"> برای حذف کردن فقط روی عکس کلید کنید</h1>
                <div class="list-group">
                   @foreach($row as $row)
                       @if(!empty($row->img))
                      <a href="duploads/{{$row->id}}" class="list-group-item col-md-9"><img src="{{$row->img}}" class="col-md-12" style="height:280px; "> </a>
                      @endif
                     @if(!empty($row->imgo))
                      <a href="duploads/{{$row->id}}" class="list-group-item col-md-9" ><img src="{{$row->imgo}}" class="col-md-12" style="height:280px; "> </a>
                     @endif
                      @if($row->imgt)
                       <a href="duploads/{{$row->id}}" class="list-group-item col-md-9"><img src="{{$row->imgt}}" class="col-md-12" style="height:280px; "> </a>
                     @endif
                  @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection