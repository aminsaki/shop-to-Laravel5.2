@extends('layouts.layout')
@section('content')
@include('admins.temp.nav_top')
    <div class="row">
        <div class="col-md-14">
            @include('admins.temp.meun_right')<br><br>
              <div class="col-md-7 col-md-offset-2">
                <div class="list-group">
                   @foreach($row as $row)
                       @if(!empty($row->img))
                      <a href="duploads/{{$row->id}}" class="list-group-item col-md-9" title="برای حذف عکس کلیک کنید"><img src="{{$row->img}}" class="col-md-12" style="height:280px; "title="برای حذف عکس کلیک کنید"> </a>
                      @endif
                     @if(!empty($row->imgo))
                      <a href="duploads/{{$row->id}}" class="list-group-item col-md-9" title="برای حذف عکس کلیک کنید"><img src="{{$row->imgo}}" class="col-md-12" style="height:280px; "title="برای حذف عکس کلیک کنید"> </a>
                     @endif
                      @if($row->imgt)
                       <a href="duploads/{{$row->id}}" class="list-group-item col-md-9" title="برای حذف عکس کلیک کنید"><img src="{{$row->imgt}}" class="col-md-12" style="height:280px; "title="برای حذف عکس کلیک کنید"> </a>
                     @endif
                  @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection