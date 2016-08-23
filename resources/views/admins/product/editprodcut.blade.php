@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        @include('admins.temp.nav_top')
        <div class="row">
            <div class="col-md-14">
                @include('admins.temp.meun_right')
                <div class="col-md-7 col-md-offset-1 panel panel-default" >
                    @if(session()->has('edit'))
                        <div class="alert alert-success text-center alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>{{session('edit')}}
                        </div>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger text-center alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>
                            @foreach ($errors->all() as $error)
                                <i>{{ $error }}</i><br>
                            @endforeach
                        </div>
                        @endif

                        {{Form::model($product,['url'=>'editproduct'])}}
                                <!-- <input type="text" class="form-control btn btn-primary"-->

                        <div class="form-group">
                            <label>عنوان محصولا</label>
                            {{Form::text('title',null,['class'=>'form-control'])}}
                        </div>
                        <hr>
                        <div class="form-inline">
                            <div class="form-group">
                                <label> قیمت اول </label>
                                {{Form::text('originalprice',null)}}
                            </div>
                            <div class="form-group">
                                <label> قیمت تخفیف</label>
                                {{Form::text('discountprice',null)}}
                            </div>
                            <div class="form-group">
                                <label> قیمت قبلی  </label>
                                {{Form::text('pricesbefore',null)}}
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label> نام دسته خود وارد کنید</label>
                            <select class="form-control btn btn-success" name="catproducts">
                                <option value="1"> پرفروش</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>ویژگی</label>
                            {{Form::textarea('property',null,['class'=>'form-control'])}}
                        </div>
                        <div class="form-group">
                            <label> توضخیات</label>
                            {{Form::textarea('commit',null,['class'=>'form-control'])}}
                        </div>
                        <hr>
                        <div class="form-group">
                            <label> مشخصات فروشنده</label>
                        </div>
                        <div class="form-group">
                            <label> ادرس  فرشنده</label>
                            {{Form::text('address',null,['class'=>'form-control'])}}
                        </div>
                        <div class="form-group">
                            <label>شماره تماس</label>
                            {{Form::text('tell',null,['class'=>'form-control'])}}
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" value="ارسال محصولات">
                        </div>
                                {{Form::hidden('id',null)}}
                        {{Form::close()}}
                </div>

            </div>
        </div>
    </div>
@endsection
