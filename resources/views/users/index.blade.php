@extends('layouts.layout')
@section('content')
<div class="container">
 <div class="row">
  @include('users.temp.header')
     <div class="col-md-12">
         @include('users.temp.panel')
         
     </div>
 </div>
</div>
@endsection
