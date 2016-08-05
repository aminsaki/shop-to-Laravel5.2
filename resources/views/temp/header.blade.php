<div class="row">
    <div class="col-md-15">
        <nav class="navbar navbar-default navbar-fixed-top  ">


            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">تخفیف انلاین</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbg " id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right actions">
                    <li><a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">تماس با ما <i class="glyphicon glyphicon-log-out"></i>   </a></li>
                    <li><a href="{{url('learn')}}">پداف چطور کار می کند <i class="glyphicon glyphicon-pushpin"></i></a></li>
                    <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">فهرست مکان ها <i class="glyphicon glyphicon-new-window"></i></a></li>
                    <li><a href="#"data-toggle="modal" data-target=".bs-example-modal-lg">فهرست شهرها <i class="glyphicon glyphicon-new-window"></i></a></li>
                    <li><a href="{{url('/')}}">خانه <i class="glyphicon glyphicon-home"></i></a></li>
                   @if(Auth::user())
                        @if(Auth::user()->level==='admin')
                        <li><a href="{{url('/admin')}}">{{Auth::user()->name }} خوش امد</a></li>
                        @endif
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav><!--/.endnave---->
    </div>
</div><!--/.nev---->
    !-- Start Contact Form -->
        <form role="form" id="contactForm" class="contact-form" data-toggle="validator" class="shake">

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title text-right" id="exampleModalLabel">ارسال پیام</h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group text-right">
                                    <label for="recipient-name " class="control-label text-right">:نام ونام خانوادگی </label>
                                    <input type="text" class="form-control" id="recipient-name" placeholder="لطفا نام خود را کامل وارد کنید">
                                </div>
                                <div class="form-group text-right">
                                    <label for="recipient-name " class="control-label text-right"> :ایمیل</label>
                                    <input type="text" class="form-control" id="recipient-name" placeholder="لطفا ایمیل خود را وارد کنید">
                                </div>
                                <div class="form-group text-right">
                                    <label for="recipient-name " class="control-label text-right">شماره تماس</label>
                                    <input type="text" class="form-control" name="tell" id="recipient-name" placeholder="لطفا ایمیل خود را وارد کنید">
                                </div>
                                <div class="form-group text-right">
                                    <label for="recipient-name " class="control-label text-right">:عنوان پیام</label>
                                    <input type="text" class="form-control" id="recipient-name" placeholder="لطفا عنوان پیام خود را بنویسید">
                                </div>
                                <div class="form-group text-right">
                                    <label for="message-text" class="text-right control-label">:پیام</label>
                                    <textarea class="form-control" id="message-text" placeholder="پیغام خود را اینجا بنویسید"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">بسته پنجر</button>
                            <button type="button" class="btn btn-primary">ارسال پیام</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End Contact Form -->
<!-- Large modal -->

<!-- Large modal -->
<!-- Large modal -->


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content"style="height: 122px;">
        <form id="form1" name="FRM" runat="server" >
            <div class="text-center" dir="rtl">
                <br><br>
                استان :&nbsp;
                <select id="Ostan" runat="server" onchange="Func(this.value)" class=" text-center btn btn-info">
                    <option value=""></option>
                    <option value="  ,آذرشهر ,اسکو ,اهر ,بستان‌آباد ,بناب ,تبریز ,جلفا ,چاراویماق ,سراب ,شبستر ,عجب‌شیر ,کلیبر ,مراغه ,مرند ,ملکان ,میانه ,ورزقان ,هریس ,هشترود">آذربایجان شرقی</option>
                    <option value="  ,ارومیه ,اشنویه ,بوکان ,پیرانشهر ,تکاب ,چالدران ,خوی ,سردشت ,سلماس ,شاهین‌دژ ,ماکو ,مهاباد ,میاندوآب ,نقده">آذربایجان غربی</option>
                    <option value="  ,اردبیل ,بیله‌سوار ,پارس‌آباد ,خلخال ,کوثر ,گِرمی ,مِشگین‌شهر ,نَمین ,نیر">اردبیل</option>
                    <option value="  ,آران و بیدگل ,اردستان ,اصفهان ,برخوار و میمه ,تیران و کرون ,چادگان ,خمینی‌شهر ,خوانسار ,سمیرم ,شهرضا ,سمیرم سفلی ,فریدن ,فریدون‌شهر ,فلاورجان ,کاشان ,گلپایگان ,لنجان ,مبارکه ,نائین ,نجف‌آباد ,نطنز">اصفهان</option>
                    <option value="  ,آبدانان ,ایلام ,ایوان ,دره‌شهر ,دهلران ,شیروان و چرداول ,مهران">ایلام</option>
                    <option value="  ,بوشهر ,تنگستان ,جم ,دشتستان ,دشتی,دیر ,دیلم ,کنگان ,گناوه">بوشهر</option>
                    <option value="  ,اسلام‌شهر ,پاکدشت ,تهران ,دماوند ,رباط‌کریم ,ری ,ساوجبلاغ ,شمیرانات ,شهریار ,فیروزکوه ,کرج ,نظرآباد ,ورامین">تهران</option>
                    <option value="  ,اردل ,بروجن ,شهرکرد ,فارسان ,کوهرنگ ,لردگان">چهارمحال و بختیاری</option>
                    <option value="  ,بیرجند ,درمیان ,سرایان ,سربیشه ,فردوس ,قائنات,نهبندان">خراسان جنوبی</option>
                    <option value="  ,بردسکن ,تایباد ,تربت جام ,تربت حیدریه ,چناران ,خلیل‌آباد ,خواف ,درگز ,رشتخوار ,سبزوار ,سرخس ,فریمان ,قوچان ,کاشمر ,کلات ,گناباد ,مشهد ,مه ولات ,نیشابور">خراسان رضوی</option>
                    <option value="  ,اسفراین ,بجنورد ,جاجرم ,شیروان ,فاروج ,مانه و سملقان">خراسان شمالی</option>
                    <option value="  ,آبادان ,امیدیه ,اندیمشک ,اهواز ,ایذه ,باغ‌ملک ,بندر ماهشهر ,بهبهان ,خرمشهر ,دزفول ,دشت آزادگان ,رامشیر ,رامهرمز ,شادگان ,شوش ,شوشتر ,گتوند ,لالی ,مسجد سلیمان,هندیجان ">خوزستان</option>
                    <option value="  ,ابهر ,ایجرود ,خدابنده ,خرمدره ,زنجان ,طارم ,ماه‌نشان">زنجان</option>
                    <option value="  ,دامغان ,سمنان ,شاهرود ,گرمسار ,مهدی‌شهر">سمنان</option>
                    <option value="  ,ایرانشهر ,چابهار ,خاش ,دلگان ,زابل ,زاهدان ,زهک ,سراوان ,سرباز ,کنارک ,نیک‌شهر">سیستان و بلوچستان</option>
                    <option value="  ,آباده ,ارسنجان ,استهبان ,اقلید ,بوانات ,پاسارگاد ,جهرم ,خرم‌بید ,خنج ,داراب ,زرین‌دشت ,سپیدان ,شیراز ,فراشبند ,فسا ,فیروزآباد ,قیر و کارزین ,کازرون ,لارستان ,لامِرد ,مرودشت ,ممسنی ,مهر ,نی‌ریز">فارس</option>
                    <option value="  ,آبیک ,البرز ,بوئین‌زهرا ,تاکستان ,قزوین">قزوین</option>
                    <option value="  ,قم">قم</option>
                    <option value="  ,بانه ,بیجار ,دیواندره ,سروآباد ,سقز ,سنندج ,قروه ,کامیاران ,مریوان">کردستان</option>
                    <option value="  ,بافت ,بردسیر ,بم ,جیرفت ,راور ,رفسنجان ,رودبار جنوب ,زرند ,سیرجان ,شهر بابک ,عنبرآباد ,قلعه گنج ,کرمان ,کوهبنان ,کهنوج ,منوجان">کرمان</option>
                    <option value="  ,اسلام‌آباد غرب ,پاوه ,ثلاث باباجانی ,جوانرود ,دالاهو ,روانسر ,سرپل ذهاب ,سنقر ,صحنه ,قصر شیرین ,کرمانشاه ,کنگاور ,گیلان غرب ,هرسین">کرمانشاه</option>
                    <option value="  ,بویراحمد ,بهمئی ,دنا ,کهگیلویه ,گچساران">کهگیلویه و بویراحمد</option>
                    <option value="  ,آزادشهر ,آق‌قلا ,بندر گز ,ترکمن ,رامیان ,علی‌آباد ,کردکوی ,کلاله ,گرگان ,گنبد کاووس ,مراوه‌تپه ,مینودشت">گلستان</option>
                    <option value="  ,آستارا ,آستانه اشرفیه ,اَملَش ,بندر انزلی ,رشت ,رضوانشهر ,رودبار ,رودسر ,سیاهکل ,شَفت ,صومعه‌سرا ,طوالش ,فومَن ,لاهیجان ,لنگرود ,ماسال">گیلان</option>
                    <option value="  ,ازنا ,الیگودرز ,بروجرد ,پل‌دختر ,خرم‌آباد ,دورود ,دلفان ,سلسله ,کوهدشت">لرستان</option>
                    <option value="  ,آمل ,بابل ,بابلسر ,بهشهر ,تنکابن ,جویبار ,چالوس ,رامسر ,ساری ,سوادکوه ,قائم‌شهر ,گلوگاه ,محمودآباد ,نکا ,نور ,نوشهر">مازندران</option>
                    <option value="  ,آشتیان ,اراک ,تفرش ,خمین ,دلیجان ,زرندیه ,ساوه ,شازند ,کمیجان ,محلات">مرکزی</option>
                    <option value="  ,ابوموسی ,بستک ,بندر عباس ,بندر لنگه ,جاسک ,حاجی‌آباد ,شهرستان خمیر ,رودان  ,قشم ,گاوبندی ,میناب">هرمزگان</option>
                    <option value="  ,اسدآباد ,بهار ,تویسرکان ,رزن ,کبودرآهنگ ,ملایر ,نهاوند ,همدان">همدان</option>
                    <option value="  ,ابرکوه ,اردکان ,بافق ,تفت ,خاتم ,صدوق ,طبس ,مهریز ,مِیبُد ,یزد">یزد</option>
                </select> شهرستان :
                <select id="Shahrestan" runat="server" class="btn btn-info" >
                </select>  <input type="submit" name="insert" class=" btn btn-primary" value="جستجوی کردن">
                &nbsp;
                &nbsp;</div>

        </form>
        </div>
    </div>
</div>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="form-group">
                <br>
                <form method="post" class="col-md-offset-3">
                    <input type="submit" name="sreache"  class="btn btn-primary" value="جستجوی ">
                   <select>
                       <option></option>
                       <option>رستوران ها</option>
                       <option>کافی شارپ</option>
                       <option> تفریحی ورزشی </option>
                       <option> اموزش </option>
                   </select>
                    <label for="city"> فهرست مکان ها</label>
                </form>

            </div>
        </div>
    </div>
</div>
