@extends('layouts.layout')
@section('content')
<div class="container-fluid">
   @include('temp.header')
    @include('temp.serach')
<div class="container ">
    <div class="row">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                 @foreach($upload as $row)
                <!-- Wrapper for slides -->
                <div class="carousel-inner " role="listbox">
                    <div class="item active" >
                        <img src="{{$row->img}}" class="col-md-12 imgslider" alt="...">
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img src="{{$row->imgo}}" class="col-lg-12 imgslider" alt="...">
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img src="{{$row->imgt}}" class="col-lg-12 imgslider" alt="...">
                        <div class="carousel-caption">

                        </div>
                    </div>
                </div>
          @endforeach
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div><!--/.endslide-->
    <br>
    <div class="row">
        <div class="col-md-12 titleproduct panel panel-default bgtitle">
            <h4> اخرین محصولان</h4>
        </div>
    </div>
    <div class="row ">
        <div class="col-lg-12 ">

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-responsive img-circle"  src="https://miketricking.github.io/dist/images/p26.jpg" alt="">
                    <div class="overlay ">
                        <div class="tables">
                            <div class="col-md-12 text-center" >
                                <h5> پرداخت شما</h5>
                                <h5> 180000 تومان</h5>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-6"> ارزش واقعیت 20000000</div>
                                <div class="col-md-6"> ارزش واقعیت 20000000</div>
                            </div>
                            <div class="col-md-12 text-center">
                                <a href="#"> پرداخت </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-responsive img-circle"  src="https://miketricking.github.io/dist/images/p26.jpg" alt="">
                    <div class="overlay">
                        <h2>Hover effect 4v2</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel panel-body mypanel">
                    sffddsdsfsd
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-responsive img-circle"  src="https://miketricking.github.io/dist/images/p26.jpg" alt="">

                    <div class="overlay">
                        <h2>Hover effect 4v2</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel panel-body mypanel">
                    sffddsdsfsd
                </div>
            </div>
        </div>
    </div><!--/.row-->
    <br>
    <div class="row">
        <div class="col-md-12 titleproduct panel panel-default bgtitle">
            <h4> اخرین محصولان</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 ">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-responsive img-circle"  src="https://miketricking.github.io/dist/images/p26.jpg" alt="">

                    <div class="overlay">
                        <h2>Hover effect 4v2</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel panel-body mypanel">
                    sffddsdsfsd
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-responsive img-circle"  src="https://miketricking.github.io/dist/images/p26.jpg" alt="">
                    <div class="overlay">
                        <h2>Hover effect 4v2</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel panel-body mypanel">
                    sffddsdsfsd
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-responsive img-circle"  src="https://miketricking.github.io/dist/images/p26.jpg" alt="">
                    <div class="overlay">
                        <h2>Hover effect 4v2</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel panel-body mypanel">
                    sffddsdsfsd
                </div>
            </div>

        </div>
    </div><!--/.row4-->
    <br>
    <div class="row">
        <div class="col-md-12 titleproduct panel panel-default bgtitle">
            <h4> اخرین محصولان</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 ">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-responsive img-circle"  src="https://miketricking.github.io/dist/images/p26.jpg" alt="">

                    <div class="overlay">
                        <h2>Hover effect 4v2</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel panel-body mypanel">
                    sffddsdsfsd
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-responsive img-circle"  src="https://miketricking.github.io/dist/images/p26.jpg" alt="">

                    <div class="overlay">
                        <h2>Hover effect 4v2</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel panel-body mypanel">
                    sffddsdsfsd
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 "  >
                <div class="hovereffect">
                    <img class="img-responsive img-circle"  src="https://miketricking.github.io/dist/images/p26.jpg" alt="">

                    <div class="overlay">
                        <h2>Hover effect 4v2</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel panel-body mypanel">
                    sffddsdsfsd
                </div>
            </div>
        </div>
    </div><!--/.row5-->

</div><!--/.container-->
@include('temp.footer')
</div><!--/.container-fiuer-->


@stop
