<div class="row">
    <div class="col-md-14">
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
                    <img src="{{$row->img}}" class="col-lg-12 imgslider" alt="...">
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
         
        </div>
    </div>
</div><!--/.endslide-->
