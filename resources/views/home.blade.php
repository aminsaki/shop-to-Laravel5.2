@extends('layouts.layout')
@section('content')
    <div class="container-fluid">
        @include('temp.header')
        @include('temp.serach')
        <div class="container ">
            @include('temp.slide')
            <div class="row">
                <!---/.start......-->
                 @if(!empty($product1))
             <div class="col-md-12 btn content-prodcut"><a href="#" class="pull-right">{{$title1}}</a></div>

                <div class="col-md-12  panel panel-default tops">
                    @foreach($product1 as $row)
                        <div class="col-md-3" style="margin-top: 10px;">
                            <div class="col-md-14 borderimg">
                                <div class="hovereffect">

                                    <img src="{{$row->img}}" class="img-responsive col-md-14 timg" id="bnt"style="height: 210px;">

                                    <div class="overlay">
                                        <div class="form-group">پرداخت شما  </div>
                                        <div class="form-group text-success ">{{$row->originalprice}}</div>
                                        <table class="table table-responsive">
                                            <tr>
                                                <td>{{$row->pricesbefore}}</td>
                                                <td>%{{$row->discountprice}}</td>
                                            </tr>
                                            <tr>
                                                <td> ارزش واقعی</td>
                                                <td> تخفیف</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <a href="readmore/{{$row->id}}">
                                                        <input type="submit" class="btn btn-primary col-md-pull-8"
                                                               value="مشاهد pedoff">
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <hr>
                                </div>
                                <ul class="bg">
                                    <li> <i style="color:#F5AB35"class="glyphicon glyphicon-triangle-left"></i> {{$row->titles}}</li>
                                </ul>
                                <br>
                                <ul>
                                    <li><span class="glyphicon glyphicon-map-marker text-capitalize text-success"><strike>قیمت قبل  {{$row->pricesbefore}}</strike>  </span></li>
                                </ul>

                                <table class="table table-bordered tablproduct">
                                    <tr>
                                        <td class="col-md-2 " style="background-color: #F5AB35;font-size: 16px; ">
                                            <p >%{{$row->discountprice}}</p>
                                        </td>
                                        <td class="price t"style="background-color: #1EBAA9;" >
                                            <p class="text-center" style="font-size:16px;">  {{$row->originalprice}}ریال</p>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    @endforeach
                </div>
             @endif
                @if(!empty($product2))
                <div class="col-md-12 btn content-prodcut"><a href="#" class="pull-right">{{$title2}}</a></div>
                <div class="col-md-12  panel panel-default ">
                    @foreach($product2 as $row)
                        <div class="col-md-3">dsdsd
                            <div class="col-md-14 borderimg">
                                <div class="hovereffect">

                                    <img src="{{$row->img}}" class="img-responsive col-md-14 timg" id="bnt"style="height: 210px;">

                                    <div class="overlay">
                                        <div class="form-group">پرداخت شما  </div>
                                        <div class="form-group text-success ">{{$row->originalprice}}</div>
                                        <table class="table table-responsive">
                                            <tr>
                                                <td>{{$row->pricesbefore}}</td>
                                                <td>%{{$row->discountprice}}</td>
                                            </tr>
                                            <tr>
                                                <td> ارزش واقعی</td>
                                                <td> تخفیف</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <a href="readmore/{{$row->id}}">
                                                        <input type="submit" class="btn btn-primary col-md-pull-8"
                                                               value="مشاهد pedoff">
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <hr>
                                </div>
                                <ul class="bg">
                                    <li> <i style="color:#F5AB35"class="glyphicon glyphicon-triangle-left"></i> {{$row->titles}}</li>
                                </ul>
                                <br>
                                <ul>
                                    <li><span class="glyphicon glyphicon-map-marker text-capitalize text-success"><strike>قیمت قبل  {{$row->pricesbefore}}</strike>  </span></li>
                                </ul>

                                <table class="table table-bordered tablproduct">
                                    <tr>
                                        <td class="col-md-2 " style="background-color: #F5AB35;font-size: 16px; ">
                                            <p >%{{$row->discountprice}}</p>
                                        </td>
                                        <td class="price t"style="background-color: #1EBAA9;" >
                                            <p class="text-center" style="font-size:16px;">  {{$row->originalprice}}ریال</p>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    @endforeach
                </div>
              @endif
                    @if(!empty($product3))
                <div class="col-md-12 btn content-prodcut"><a href="#" class="pull-right">{{$title3}}</a></div>

                <div class="col-md-12  panel panel-default tops">
                    @foreach($product3 as $row)
                        <div class="col-md-3" style="margin-top: 10px;">
                            <div class="col-md-14 borderimg">
                                <div class="hovereffect">

                                    <img src="{{$row->img}}" class="img-responsive col-md-14 timg" id="bnt"style="height: 210px;">

                                    <div class="overlay">
                                        <div class="form-group">پرداخت شما  </div>
                                        <div class="form-group text-success ">{{$row->originalprice}}</div>
                                        <table class="table table-responsive">
                                            <tr>
                                                <td>{{$row->pricesbefore}}</td>
                                                <td>%{{$row->discountprice}}</td>
                                            </tr>
                                            <tr>
                                                <td> ارزش واقعی</td>
                                                <td> تخفیف</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <a href="readmore/{{$row->id}}">
                                                        <input type="submit" class="btn btn-primary col-md-pull-8"
                                                               value="مشاهد pedoff">
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <hr>
                                </div>
                                <ul class="bg">
                                    <li> <i style="color:#F5AB35"class="glyphicon glyphicon-triangle-left"></i> {{$row->titles}}</li>
                                </ul>
                                <br>
                                <ul>
                                    <li><span class="glyphicon glyphicon-map-marker text-capitalize text-success"><strike>قیمت قبل  {{$row->pricesbefore}}</strike>  </span></li>
                                </ul>

                                <table class="table table-bordered tablproduct">
                                    <tr>
                                        <td class="col-md-2 " style="background-color: #F5AB35;font-size: 16px; ">
                                            <p >%{{$row->discountprice}}</p>
                                        </td>
                                        <td class="price t"style="background-color: #1EBAA9;" >
                                            <p class="text-center" style="font-size:16px;">  {{$row->originalprice}}ریال</p>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    @endforeach
                </div>
                @endif
                @if(!empty($product4))
              <div class="col-md-12 btn content-prodcut"><a href="#" class="pull-right">{{$title4}}</a></div>

                <div class="col-md-12  panel panel-default tops">
                    @foreach($product4 as $row)
                        <div class="col-md-3" style="margin-top: 10px;">
                            <div class="col-md-14 borderimg">
                                <div class="hovereffect">

                                    <img src="{{$row->img}}" class="img-responsive col-md-14 timg" id="bnt"style="height: 210px;">

                                    <div class="overlay">
                                        <div class="form-group">پرداخت شما  </div>
                                        <div class="form-group text-success ">{{$row->originalprice}}</div>
                                        <table class="table table-responsive">
                                            <tr>
                                                <td>{{$row->pricesbefore}}</td>
                                                <td>%{{$row->discountprice}}</td>
                                            </tr>
                                            <tr>
                                                <td> ارزش واقعی</td>
                                                <td> تخفیف</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <a href="readmore/{{$row->id}}">
                                                        <input type="submit" class="btn btn-primary col-md-pull-8"
                                                               value="مشاهد pedoff">
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <hr>
                                </div>
                                <ul class="bg">
                                    <li> <i style="color:#F5AB35"class="glyphicon glyphicon-triangle-left"></i> {{$row->titles}}</li>
                                </ul>
                                <br>
                                <ul>
                                    <li><span class="glyphicon glyphicon-map-marker text-capitalize text-success"><strike>قیمت قبل  {{$row->pricesbefore}}</strike>  </span></li>
                                </ul>

                                <table class="table table-bordered tablproduct">
                                    <tr>
                                        <td class="col-md-2 " style="background-color: #F5AB35;font-size: 16px; ">
                                            <p >%{{$row->discountprice}}</p>
                                        </td>
                                        <td class="price t"style="background-color: #1EBAA9;" >
                                            <p class="text-center" style="font-size:16px;">  {{$row->originalprice}}ریال</p>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    @endforeach
                </div>
                @endif
                @if(!empty($product5))
                <div class="col-md-12 btn content-prodcut"><a href="#" class="pull-right">{{$title5}}</a></div>

                <div class="col-md-12  panel panel-default tops">
                    @foreach($product5 as $row)
                        <div class="col-md-3" style="margin-top: 10px;">
                            <div class="col-md-14 borderimg">
                                <div class="hovereffect">

                                    <img src="{{$row->img}}" class="img-responsive col-md-14 timg" id="bnt"style="height: 210px;">

                                    <div class="overlay">
                                        <div class="form-group">پرداخت شما  </div>
                                        <div class="form-group text-success ">{{$row->originalprice}}</div>
                                        <table class="table table-responsive">
                                            <tr>
                                                <td>{{$row->pricesbefore}}</td>
                                                <td>%{{$row->discountprice}}</td>
                                            </tr>
                                            <tr>
                                                <td> ارزش واقعی</td>
                                                <td> تخفیف</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <a href="readmore/{{$row->id}}">
                                                        <input type="submit" class="btn btn-primary col-md-pull-8"
                                                               value="مشاهد pedoff">
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <hr>
                                </div>
                                <ul class="bg">
                                    <li> <i style="color:#F5AB35"class="glyphicon glyphicon-triangle-left"></i> {{$row->titles}}</li>
                                </ul>
                                <br>
                                <ul>
                                    <li><span class="glyphicon glyphicon-map-marker text-capitalize text-success"><strike>قیمت قبل  {{$row->pricesbefore}}</strike>  </span></li>
                                </ul>

                                <table class="table table-bordered tablproduct">
                                    <tr>
                                        <td class="col-md-2 " style="background-color: #F5AB35;font-size: 16px; ">
                                            <p >%{{$row->discountprice}}</p>
                                        </td>
                                        <td class="price t"style="background-color: #1EBAA9;" >
                                            <p class="text-center" style="font-size:16px;">  {{$row->originalprice}}ریال</p>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    @endforeach
                </div>
                @endif
                @if(!empty($product6))
                <div class="col-md-12 btn content-prodcut"><a href="#" class="pull-right">{{$title6}}</a></div>

                <div class="col-md-12  panel panel-default tops">
                    @foreach($product6 as $row)
                        <div class="col-md-3" style="margin-top: 10px;">
                            <div class="col-md-14 borderimg">
                                <div class="hovereffect">

                                    <img src="{{$row->img}}" class="img-responsive col-md-14 timg" id="bnt"style="height: 210px;">

                                    <div class="overlay">
                                        <div class="form-group">پرداخت شما  </div>
                                        <div class="form-group text-success ">{{$row->originalprice}}</div>
                                        <table class="table table-responsive">
                                            <tr>
                                                <td>{{$row->pricesbefore}}</td>
                                                <td>%{{$row->discountprice}}</td>
                                            </tr>
                                            <tr>
                                                <td> ارزش واقعی</td>
                                                <td> تخفیف</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <a href="readmore/{{$row->id}}">
                                                        <input type="submit" class="btn btn-primary col-md-pull-8"
                                                               value="مشاهد pedoff">
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <hr>
                                </div>
                                <ul class="bg">
                                    <li> <i style="color:#F5AB35"class="glyphicon glyphicon-triangle-left"></i> {{$row->titles}}</li>
                                </ul>
                                <br>
                                <ul>
                                    <li><span class="glyphicon glyphicon-map-marker text-capitalize text-success"><strike>قیمت قبل  {{$row->pricesbefore}}</strike>  </span></li>
                                </ul>

                                <table class="table table-bordered tablproduct">
                                    <tr>
                                        <td class="col-md-2 " style="background-color: #F5AB35;font-size: 16px; ">
                                            <p >%{{$row->discountprice}}</p>
                                        </td>
                                        <td class="price t"style="background-color: #1EBAA9;" >
                                            <p class="text-center" style="font-size:16px;">  {{$row->originalprice}}ریال</p>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    @endforeach
                </div>
              @endif
            </div>


        </div><!--/.container-->
        @include('temp.footer')
    </div><!--/.contlainer-fiuer-->
@stop