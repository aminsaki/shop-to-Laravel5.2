<div class="col-md-3  nav-right">
    <div class="panel-group" id="accordion">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title text-right">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            </span> ارسال مطلب  </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
               <div class="panel-body">
                   @if(\Illuminate\Support\Facades\Auth::user()->level==='admin')
                    <table class="table">
                        <tr>
                            <td><a href="{{url('/commit')}}">ارسال مطلب ها</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <a href="{{url('/upload')}}">اسلایدر</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                          <a href="{{url('contact')}}">پیام ها</a>
                           </td>
                        </tr>
                    </table>
                   @endif
                </div>
            </div>

        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title text-right">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span
                                class="glyphicon glyphicon-th">
                            </span>محصولات</a>
                </h4>
            </div>

            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        @if(\Illuminate\Support\Facades\Auth::user()->level==='write'or Auth::user()->level==='admin')
                        <tr>
                            <td>
                                <a href="{{url('porduct')}}">ارسال محصولا</a> <span
                                        class="label label-success"></span>
                            </td>
                        </tr>
                     @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->level==='admin')
                        <tr>
                            <td>
                                <a href="{{url('porductshow')}}">مشاهد محصولا</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{url('/catproduct')}}">دسته ها</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://www.jquery2dotnet.com">Tex</a>
                            </td>
                        </tr>
                     @endif
                    </table>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title text-right">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span
                                class="glyphicon glyphicon-user">
                            </span>کاربران</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    @if(\Illuminate\Support\Facades\Auth::user()->level==='admin')
                    <table class="table">
                        <tr>
                            <td>
                                <a href="{{url('/showuser')}}">مدیریت کاربران</a>
                            </td>
                        </tr>


                    </table>
                    @endif
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title text-right">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span
                                class="glyphicon glyphicon-file">
                            </span>Reports</a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                    @if(\Illuminate\Support\Facades\Auth::user()->level==='admin')

                    <table class="tables">
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-usd"></span><a
                                        href="http://www.jquery2dotnet.com">Sales</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-user"></span><a
                                        href="http://www.jquery2dotnet.com">Customers</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-tasks"></span><a
                                        href="http://www.jquery2dotnet.com">Products</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-shopping-cart"></span><a
                                        href="http://www.jquery2dotnet.com">Shopping Cart</a>
                            </td>
                        </tr>
                    </table>
                        @endif
                </div>
            </div>
        </div>

    </div>
</div>