@extends('layouts.layout')
@section('content')
    <div class="container-fluid">
        @include('admins.temp.nav_top')
        <div class="row">
          <div class="col-md-14">
            @include('admins.temp.meun_right')
          </div>
        </div>
    </div>
@endsection