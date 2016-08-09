@extends('layouts.layout')
@section('content')

@include('admins.temp.nav_top')
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-14">
             @include('admins.temp.meun_right')
             <div class="col-md-9  panel panel-body">
                 @if(session()->has('abodydel'))
                     <div class="alert alert-success text-center alert-dismissible fade in" role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                         </button>{{session('abodydel')}}
                     </div>
                 @endif
                 <table class="table table-bordered tb">
                   <tr>
                       <th>ردیف</th>
                       <th>نام کاربری</th>
                       <th>عنوان پیام</th>
                       <th>پیام</th>
                       <th> وضعیت پیام</th>
                       <th>عملیات</th>
                   </tr>
                     <?php $i=1;?>
                   @foreach($contacts  as $row)
                       <tr>
                            <td>{{$i++}}</td>
                           <td>{{$row->username}}</td>
                           <td>{{$row->title}}</td>
                           <td>{{ $row->commit }}</td>
                           <td> @if( $row->flag=='1')  خوانده @else  خواند نشده @endif </td>
                           <td>
                               <a href="contact/{{$row->id}}" class="btn btn-primary">مشاهد </a>


                           </td>
                       </tr>
                    @endforeach
               </table>
             </div>
         </div>
     </div>
 </div>
@endsection