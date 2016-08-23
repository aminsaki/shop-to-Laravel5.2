@extends('layouts.layout')
@section('content')
    <div class="container-fluid">
      @include('admins.temp.nav_top')
        <div class="row">
            <div class="col-md-14">
                @include('admins.temp.meun_right')
               <div class="col-md-8">
                  <table class="table table-bordered tb">
                      <tr>
                          <th>ردیف</th>
                          <td>پیام </td>
                      </tr>
                  </table>
               </div>
            </div>
        </div>
    </div>
@endsection