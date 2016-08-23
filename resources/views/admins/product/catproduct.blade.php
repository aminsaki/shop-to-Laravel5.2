@extends('layouts.layout')
@section('content')
    <div class="container-fluid">
        @include('admins.temp.nav_top')
        <div class="row">
            <div class="col-md-14">
                @include('admins.temp.meun_right')
                <div class="col-md-7 col-md-offset-1">
                    @if(session()->has('save'))
                        <div class="alert alert-success text-center alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">×</span>
                            </button>{{session('save')}}
                        </div>
                    @endif

                    <div class="showmasse alert-info text-center"></div>
                    <table class="table table-bordered tb tops panel panel-default tops  ">

                        {{Form::open(['url'=>'catsave'])}}
                        <tr>
                            <td colspan="4">

                                <div class="form-inline panel panel-default">
                                    <div class="form-group">
                                        <label> نام دسته خود را وارد کنید</label>
                                        <input type="text" name="title" class="form-control "
                                               placeholder="لطفا نام دسته خود را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" class="btn btn-danger btn-lg"
                                               value="ثبت اطلاعات">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        {{Form::close()}}
                        <tr>
                            <td colspan="4">
                                @if(session()->has('abodydel'))
                                    <div class="alert alert-success text-center alert-dismissible fade in" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>{{session('abodydel')}}
                                    </div>
                                @endif

                            </td>
                        </tr>
                        <tr>
                            <th>ردیف</th>
                            <th> عنوان دسته</th>
                            <th>نمایش</th>
                            <th> عملیات</th>
                        </tr>

                        <?php $i = 1;?>
                        @foreach($cat as $row)
                            {{Form::open(['url'=>'editcatproduct'])}}
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$row->title}}</td>
                                <td>
                                    <select name="nuberid" class="form-control btn btn-default">
                                        @if($row->nuberid==0)
                                            <option value="0"> جزوه هیچ دسته نمی باشد</option>
                                            <option value="1"> جزوه دسته اول باشد</option>
                                            <option value="2"> جزوه دسته دوم باشد</option>
                                            <option value="3"> حزودسته سوم باشد</option>
                                            <option value="4"> حزودسته چهارم باشد</option>
                                            <option value="5"> حزودسته پنجم باشد</option>
                                            <option value="6"> حزودسته ششم" نباشد</option>

                                        @endif
                                        @if($row->nuberid==1)
                                            <option value="1"> جزوه دسته اول باشد</option>
                                            <option value="0"> حزودسته اول نباشد</option>
                                        @endif
                                        @if($row->nuberid==2)
                                            <option value="2"> جزوه دسته دوم باشد</option>
                                            <option value="0"> حزودسته دوم نباشد</option>
                                        @endif
                                        @if($row->nuberid==3)
                                            <option value="3"> جزوه دسته سوم باشد</option>
                                            <option value="0"> حزودسته سوم نباشد</option>
                                        @endif
                                        @if($row->nuberid==4)
                                            <option value="4"> جزوه دسته چهارم باشد</option>
                                            <option value="0"> حزودسته چهارم نباشد</option>
                                        @endif
                                        @if($row->nuberid==5)
                                            <option value="5"> جزوه دسته پنجم باشد</option>
                                            <option value="0"> حزودسته پنجم نباشد</option>
                                        @endif
                                        @if($row->nuberid==6)
                                            <option value="6"> جزوه دسته ششم باشد</option>
                                            <option value="0"> حزودسته ششم نباشد</option>
                                        @endif

                                    </select>
                                         <input type="hidden" name="id" value="{{$row->id}}">
                                </td>
                                <td>
                                    <a href="catproduct/{{$row->id}}" class="btn btn-danger ">حذف</a>
                                    <input type="submit" name="submit" class=" btn btn-primary" value="ثبت کردن">
                                </td>
                            </tr>
                            {{Form::close()}}
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection