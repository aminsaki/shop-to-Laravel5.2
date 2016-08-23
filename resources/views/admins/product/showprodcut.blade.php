@extends('layouts.layout')
@section('content')
    <div class="container-fluid">
        @include('admins.temp.nav_top')
        <div class="col-md-14">
           @include('admins.temp.meun_right')
           <div class="col-md-9  panel panel-default">
               @if(session()->has('del'))
                   <div class="alert alert-success text-center alert-dismissible fade in" role="alert">
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                       </button>{{session('del')}}
                   </div>
               @endif
              <table class=" table table-bordered tb">
                  <tr>
                      <th>ردیف</th>
                      <th> عنوان محصولا</th>
                      <th>تاریخ ارسال محصولا</th>
                      <th>دسته</th>
                      <Th>عملیات</Th>
                  </tr>
                  <?php $i=1; ?>
                 @foreach($product as $row)
                     <tr>
                         <td>{{$i++}}</td>
                         <td>{{$row->titles}}</td>
                         <td>{{$row->data}}</td>
                         <td>{{$row->catproducts}}</td>
                         <td>
                             <a href="editproduct/{{$row->id}}" class="btn btn-primary "> ویرایش</a>
                             <a href="delproduct/{{$row->id}}" class="btn btn-danger ">حدف</a>
                             <a href="mass/{{$row->id}}" class="btn btn-danger ">نظرات داده</a>

                         </td>

                     </tr>
                 @endforeach
              </table>
           </div>
        </div>
    </div>
@endsection