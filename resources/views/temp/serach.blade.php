<div class="row topsnave   " style="margin-top:53px;">
    <div class="col-md-2">
        <div class="form-inline" style="margin-top:40px;">
            @if(Auth::user())
                @if(Auth::user()->level=='admin' || Auth::user()->level=='write')
                    <div class="form-group panel btn btn-primary"><a href="{{url('/admin')}}" style="color:white">پنل کاربری</a></div>
                    <div class="form-group panel btn btn-danger"><a href="{{url('/logout')}}"  style="color:white">خروج</a></div>
                @endif
                @if(Auth::user()->level==='user')
                    <div class="form-group  panel btn btn-primary"><a href="{{url('/user')}}"  style="color:white">پنل کاربری</a></div>
                    <div class="form-group panel btn btn-danger"><a href="{{url('/logout')}}"  style="color:white">خروج</a></div>
                @endif
            @else
            <div class="form-group">
                <a href="{{url('/login')}}" class="btn btn-primary form-control col-md-6 "> فرم ورود</a>
            </div>
            <div class="form-group">
                <a href="{{url('/register')}}" class="btn btn-success form-control col-amd-6"> عضویت</a>
            </div>
         @endif
        </div>
    </div>
    <div class="col-md-7 ">
        <div class="input-group col-md-offset-5  "   style="margin-top:50px;" id="adv-search">
            <input type="text" class="form-control col-md-4" placeholder="جستجوی" />
            <div class="input-group-btn">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </div>
        </div>

    </div>
</div>
<div class="col-md-3">
    <img src="{{URL::asset('assety/img/logo.png')}}" class="img-responsive">
</div>
</div><!--/.sarech--><br>