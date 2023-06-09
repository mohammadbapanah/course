@extends('client.client-layout.master')

@section('content')
    <div id="main-wrapper">


        <!-- ============================ Hero Banner  Start================================== -->
        <div class="hero_banner image-cover image_bottom h4_bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="simple-search-wrap text-right">
                            <div class="hero_search-2">
                                <h1 class="banner_title mb-4 font-2">در مسیر پیشرفت، در کنار شما هستیم...</h1>
                                <p class="font-lg mb-4">مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                                    مورد
                                    نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                <div class="input-group simple_search">
                                    <i class="fa fa-search ico"></i>
                                    <input type="text" class="form-control" placeholder="جستجو دوره آموزش...">
                                    <div class="input-group-append">
                                        <button class="btn theme-bg" type="button">جستجو</button>
                                    </div>
                                </div>
                                <div class="crs_trio_info">
                                    <div class="crs_trio">
                                        <h4 class="ctr"><span class="rt_count">72</span> کاربر</h4>
                                        <span class="pol_title">موفق و راضی</span>
                                    </div>
                                    <div class="crs_trio">
                                        <h4 class="ctr"><span class="rt_count">100</span> مدرس</h4>
                                        <span class="pol_title">باتجربه و عالی</span>
                                    </div>
                                    <div class="crs_trio">
                                        <h4 class="ctr"><span class="rt_count">5.2</span> دوره</h4>
                                        <span class="pol_title">آموزش آنلاین</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="side_block">
                            <img src="{{asset('client/assets/img/side-2.png')}}" class="img-fluid" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================ Hero Banner End ================================== -->

        <!-- ================================ Tag Award ================================ -->
        <section class="p-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="crp_box fl_color ovr_top">
                            <div class="row align-items-center">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class="dro_140">
                                        <div class="dro_141"><i class="fa fa-journal-whills"></i></div>
                                        <div class="dro_142">
                                            <h6>200+ دوره آموزشی</h6>
                                            <p>جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                                                گیرد.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class="dro_140">
                                        <div class="dro_141 st-1"><i class="fa fa-business-time"></i></div>
                                        <div class="dro_142">
                                            <h6>پشتیبانی مادام العمر</h6>
                                            <p>جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                                                گیرد.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class="dro_140">
                                        <div class="dro_141 st-3"><i class="fa fa-user-shield"></i></div>
                                        <div class="dro_142">
                                            <h6>800 هنرجو</h6>
                                            <p>جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                                                گیرد.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ================================ Tag Award ================================ -->

        <!-- ============================ Featured Categories Start ================================== -->
        <section class="min">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8">
                        <div class="sec-heading center">
                            <h3 class="font-2">محورهای آموزشی <span class="theme-cl">منتخب</span></h3>
                            <p>با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ
                                پیشرو در
                                زبان فارسی ایجاد کرد.</p>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-center">
                    <!-- Single Category -->
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="crs_cate_wrap style_2">
                            <a href="grid-layout-with-sidebar.html" class="crs_cate_box">
                                <div class="crs_cate_icon"><i class="fa fa-code"></i></div>
                                <div class="crs_cate_caption"><span>برنامه نویسی</span></div>
                                <div class="crs_cate_count"><span>22 دوره</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="crs_cate_wrap style_2">
                            <a href="grid-layout-with-sidebar.html" class="crs_cate_box">
                                <div class="crs_cate_icon"><i class="fa fa-window-restore"></i></div>
                                <div class="crs_cate_caption"><span>مهندسی نرم افزار</span></div>
                                <div class="crs_cate_count"><span>22 دوره</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="crs_cate_wrap style_2">
                            <a href="grid-layout-with-sidebar.html" class="crs_cate_box">
                                <div class="crs_cate_icon"><i class="fa fa-leaf"></i></div>
                                <div class="crs_cate_caption"><span>سبک زندگی</span></div>
                                <div class="crs_cate_count"><span>22 دوره</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="crs_cate_wrap style_2">
                            <a href="grid-layout-with-sidebar.html" class="crs_cate_box">
                                <div class="crs_cate_icon"><i class="fa fa-heartbeat"></i></div>
                                <div class="crs_cate_caption"><span>علوم انسانی</span></div>
                                <div class="crs_cate_count"><span>22 دوره</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="crs_cate_wrap style_2">
                            <a href="grid-layout-with-sidebar.html" class="crs_cate_box">
                                <div class="crs_cate_icon"><i class="fa fa-landmark"></i></div>
                                <div class="crs_cate_caption"><span>بورس و بازار سهام</span></div>
                                <div class="crs_cate_count"><span>22 دوره</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="crs_cate_wrap style_2">
                            <a href="grid-layout-with-sidebar.html" class="crs_cate_box">
                                <div class="crs_cate_icon"><i class="fa fa-photo-video"></i></div>
                                <div class="crs_cate_caption"><span>طراحی و گرافیک</span></div>
                                <div class="crs_cate_count"><span>22 دوره</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="crs_cate_wrap style_2">
                            <a href="grid-layout-with-sidebar.html" class="crs_cate_box">
                                <div class="crs_cate_icon"><i class="fa fa-stamp"></i></div>
                                <div class="crs_cate_caption"><span>مالی و حسابداری</span></div>
                                <div class="crs_cate_count"><span>22 دوره</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="crs_cate_wrap style_2">
                            <a href="grid-layout-with-sidebar.html" class="crs_cate_box">
                                <div class="crs_cate_icon"><i class="fa fa-school"></i></div>
                                <div class="crs_cate_caption"><span>نگارش آکادمیک</span></div>
                                <div class="crs_cate_count"><span>22 دوره</span></div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <div class="clearfix"></div>
        <!-- ============================ Featured Categories End ================================== -->

        <!-- ============================ Latest Cources Start ================================== -->
        <section class="gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8">
                        <div class="sec-heading center">
                            <h3 class="font-2">دوره های آموزشی <span class="theme-cl">رایـگان</span></h3>
                            <p>با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ
                                پیشرو در
                                زبان فارسی ایجاد کرد.</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">

                    <!-- Single Grid -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="crs_grid">
                            <div class="crs_grid_thumb">
                                <a href="course-detail.html" class="crs_detail_link">
                                    <img src="{{ asset('client/assets/img/cr-2.jpg') }}" class="img-fluid rounded"
                                         alt=""/>
                                </a>
                                <div class="crs_video_ico">
                                    <i class="fa fa-play"></i>
                                </div>
                                <div class="crs_locked_ico">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="crs_grid_caption">
                                <div class="crs_flex">
                                    <div class="crs_fl_first">
                                        <div class="crs_cates"><span>برنامه نویسی</span></div>
                                    </div>
                                    <div class="crs_fl_last">
                                        <div class="crs_price"><h2><span class="theme-cl">149</span><span
                                                    class="currency">تومان</span>
                                            </h2></div>
                                    </div>
                                </div>
                                <div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">آموزش
                                            ASP.Net
                                            - ساخت سایت شخصی</a></h4></div>
                                <div class="crs_info_detail">
                                    <ul>
                                        <li><i class="fa fa-clock text-danger"></i><span>2ساعت 5دقیقه</span></li>
                                        <li><i class="fa fa-video text-success"></i><span>67 دوره</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="crs_grid_foot">
                                <div class="crs_flex">
                                    <div class="crs_fl_first">
                                        <div class="crs_tutor">
                                            <div class="crs_tutor_thumb"><a href="instructor-detail.blade.php"><img
                                                        src="{{ asset('client/assets/img/team-5.jpg') }}"
                                                        class="img-fluid circle"
                                                        alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crs_fl_last">
                                        <div class="foot_list_info">
                                            <ul class="light">
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-user text-danger"></i></div>
                                                    <div class="elsio_tx">4.7k</div>
                                                </li>
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-eye text-success"></i></div>
                                                    <div class="elsio_tx">42.4k</div>
                                                </li>
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-star text-warning"></i></div>
                                                    <div class="elsio_tx">4.7</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Grid -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="crs_grid">
                            <div class="crs_grid_thumb">
                                <a href="course-detail.html" class="crs_detail_link">
                                    <img src="{{ asset('client/assets/img/cr-3.jpg') }}" class="img-fluid rounded"
                                         alt=""/>
                                </a>
                                <div class="crs_video_ico">
                                    <i class="fa fa-play"></i>
                                </div>
                                <div class="crs_locked_ico">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="crs_grid_caption">
                                <div class="crs_flex">
                                    <div class="crs_fl_first">
                                        <div class="crs_cates cl_3"><span>حسابداری</span></div>
                                    </div>
                                    <div class="crs_fl_last">
                                        <div class="crs_price"><h2><span class="theme-cl">129</span><span
                                                    class="currency">تومان</span>
                                            </h2></div>
                                    </div>
                                </div>
                                <div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">دوره
                                            حضوری
                                            عالی پرورش مدیر مالی</a></h4></div>
                                <div class="crs_info_detail">
                                    <ul>
                                        <li><i class="fa fa-clock text-danger"></i><span>15 ساعت</span></li>
                                        <li><i class="fa fa-video text-success"></i><span>27 دوره</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="crs_grid_foot">
                                <div class="crs_flex">
                                    <div class="crs_fl_first">
                                        <div class="crs_tutor">
                                            <div class="crs_tutor_thumb"><a href="instructor-detail.blade.php"><img
                                                        src="{{ asset('client/assets/img/team-5.jpg') }}"
                                                        class="img-fluid circle"
                                                        alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crs_fl_last">
                                        <div class="foot_list_info">
                                            <ul class="light">
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-user text-danger"></i></div>
                                                    <div class="elsio_tx">4.7k</div>
                                                </li>
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-eye text-success"></i></div>
                                                    <div class="elsio_tx">42.4k</div>
                                                </li>
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-star text-warning"></i></div>
                                                    <div class="elsio_tx">4.7</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Grid -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="crs_grid">
                            <div class="crs_grid_thumb">
                                <a href="course-detail.html" class="crs_detail_link">
                                    <img src="{{ asset('client/assets/img/cr-4.jpg') }}" class="img-fluid rounded"
                                         alt=""/>
                                </a>
                                <div class="crs_video_ico">
                                    <i class="fa fa-play"></i>
                                </div>
                                <div class="crs_locked_ico">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="crs_grid_caption">
                                <div class="crs_flex">
                                    <div class="crs_fl_first">
                                        <div class="crs_cates cl_4"><span>فیزیک</span></div>
                                    </div>
                                    <div class="crs_fl_last">
                                        <div class="crs_price"><h2><span class="theme-cl">99</span><span
                                                    class="currency">تومان</span>
                                            </h2></div>
                                    </div>
                                </div>
                                <div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">تدریس
                                            کامل
                                            کلاس فیزیک جامع کنکور تجربی</a></h4></div>
                                <div class="crs_info_detail">
                                    <ul>
                                        <li><i class="fa fa-clock text-danger"></i><span>20 ساعت</span></li>
                                        <li><i class="fa fa-video text-success"></i><span>32 دوره</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="crs_grid_foot">
                                <div class="crs_flex">
                                    <div class="crs_fl_first">
                                        <div class="crs_tutor">
                                            <div class="crs_tutor_thumb"><a href="instructor-detail.blade.php"><img
                                                        src="{{ asset('client/assets/img/team-5.jpg') }}"
                                                        class="img-fluid circle"
                                                        alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crs_fl_last">
                                        <div class="foot_list_info">
                                            <ul class="light">
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-user text-danger"></i></div>
                                                    <div class="elsio_tx">4.7k</div>
                                                </li>
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-eye text-success"></i></div>
                                                    <div class="elsio_tx">42.4k</div>
                                                </li>
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-star text-warning"></i></div>
                                                    <div class="elsio_tx">4.7</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Grid -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="crs_grid">
                            <div class="crs_grid_thumb">
                                <a href="course-detail.html" class="crs_detail_link">
                                    <img src="{{ asset('client/assets/img/cr-5.jpg') }}" class="img-fluid rounded"
                                         alt=""/>
                                </a>
                                <div class="crs_video_ico">
                                    <i class="fa fa-play"></i>
                                </div>
                                <div class="crs_locked_ico">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="crs_grid_caption">
                                <div class="crs_flex">
                                    <div class="crs_fl_first">
                                        <div class="crs_cates cl_5"><span>پروژه محور</span></div>
                                    </div>
                                    <div class="crs_fl_last">
                                        <div class="crs_price"><h2><span class="theme-cl">139</span><span
                                                    class="currency">تومان</span>
                                            </h2></div>
                                    </div>
                                </div>
                                <div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">آموزش
                                            ساخت
                                            فروشگاه دیجی استایل با لاراول</a></h4></div>
                                <div class="crs_info_detail">
                                    <ul>
                                        <li><i class="fa fa-clock text-danger"></i><span>6ساعت 2دقیقه</span></li>
                                        <li><i class="fa fa-video text-success"></i><span>28 دوره</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="crs_grid_foot">
                                <div class="crs_flex">
                                    <div class="crs_fl_first">
                                        <div class="crs_tutor">
                                            <div class="crs_tutor_thumb"><a href="instructor-detail.blade.php"><img
                                                        src="{{ asset('client/assets/img/team-5.jpg') }}"
                                                        class="img-fluid circle"
                                                        alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crs_fl_last">
                                        <div class="foot_list_info">
                                            <ul class="light">
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-user text-danger"></i></div>
                                                    <div class="elsio_tx">4.7k</div>
                                                </li>
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-eye text-success"></i></div>
                                                    <div class="elsio_tx">42.4k</div>
                                                </li>
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-star text-warning"></i></div>
                                                    <div class="elsio_tx">4.7</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Grid -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="crs_grid">
                            <div class="crs_grid_thumb">
                                <a href="course-detail.html" class="crs_detail_link">
                                    <img src="{{ asset('client/assets/img/cr-6.jpg') }}" class="img-fluid rounded"
                                         alt=""/>
                                </a>
                                <div class="crs_video_ico">
                                    <i class="fa fa-play"></i>
                                </div>
                                <div class="crs_locked_ico">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="crs_grid_caption">
                                <div class="crs_flex">
                                    <div class="crs_fl_first">
                                        <div class="crs_cates cl_6"><span>گرافیک</span></div>
                                    </div>
                                    <div class="crs_fl_last">
                                        <div class="crs_price"><h2><span class="theme-cl">99</span><span
                                                    class="currency">تومان</span>
                                            </h2></div>
                                    </div>
                                </div>
                                <div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">آموزش
                                            پریمیر
                                            - تدوین و میکس ویدئو با Premier</a></h4></div>
                                <div class="crs_info_detail">
                                    <ul>
                                        <li><i class="fa fa-clock text-danger"></i><span>5ساعت 8دقیقه</span></li>
                                        <li><i class="fa fa-video text-success"></i><span>18 دوره</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="crs_grid_foot">
                                <div class="crs_flex">
                                    <div class="crs_fl_first">
                                        <div class="crs_tutor">
                                            <div class="crs_tutor_thumb"><a href="instructor-detail.blade.php"><img
                                                        src="{{ asset('client/assets/img/team-5.jpg') }}"
                                                        class="img-fluid circle"
                                                        alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crs_fl_last">
                                        <div class="foot_list_info">
                                            <ul class="light">
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-user text-danger"></i></div>
                                                    <div class="elsio_tx">4.7k</div>
                                                </li>
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-eye text-success"></i></div>
                                                    <div class="elsio_tx">42.4k</div>
                                                </li>
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-star text-warning"></i></div>
                                                    <div class="elsio_tx">4.7</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Grid -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="crs_grid">
                            <div class="crs_grid_thumb">
                                <a href="course-detail.html" class="crs_detail_link">
                                    <img src="{{ asset('client/assets/img/cr-7.jpg') }}" class="img-fluid rounded"
                                         alt=""/>
                                </a>
                                <div class="crs_video_ico">
                                    <i class="fa fa-play"></i>
                                </div>
                                <div class="crs_locked_ico">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="crs_grid_caption">
                                <div class="crs_flex">
                                    <div class="crs_fl_first">
                                        <div class="crs_cates cl_7"><span>نرم افزار</span></div>
                                    </div>
                                    <div class="crs_fl_last">
                                        <div class="crs_price"><h2><span class="theme-cl">199</span><span
                                                    class="currency">تومان</span>
                                            </h2></div>
                                    </div>
                                </div>
                                <div class="crs_title"><h4><a href="course-detail.html" class="crs_title_link">آموزش
                                            برنامه
                                            نویسی پایتون Python - مقدماتی</a></h4></div>
                                <div class="crs_info_detail">
                                    <ul>
                                        <li><i class="fa fa-clock text-danger"></i><span>125 ساعت</span></li>
                                        <li><i class="fa fa-video text-success"></i><span>74 دوره</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="crs_grid_foot">
                                <div class="crs_flex">
                                    <div class="crs_fl_first">
                                        <div class="crs_tutor">
                                            <div class="crs_tutor_thumb"><a href="instructor-detail.blade.php"><img
                                                        src="{{ asset('client/assets/img/team-5.jpg') }}"
                                                        class="img-fluid circle"
                                                        alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crs_fl_last">
                                        <div class="foot_list_info">
                                            <ul class="light">
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-user text-danger"></i></div>
                                                    <div class="elsio_tx">4.7k</div>
                                                </li>
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-eye text-success"></i></div>
                                                    <div class="elsio_tx">42.4k</div>
                                                </li>
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-star text-warning"></i></div>
                                                    <div class="elsio_tx">4.7</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8 mt-2">
                        <div class="text-center"><a href="grid-layout-with-sidebar.html"
                                                    class="btn btn-md theme-bg-light theme-cl">همه آموزش ها</a></div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ============================ Latest Cources End ================================== -->

        <!-- ============================ Work Process Start ================================== -->
        <section class="imageblock">
            <div class="imageblock__content">
                <div class="background-image-holder"
                     style="background: url({{ asset('client/assets/img/side-1.jpg') }});">
                    <img alt="image" src="{{ asset('client/assets/img/side-1.jpg') }}">
                </div>
            </div>
            <div class="container">

                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                        <div class="lmp_caption">
                            <h2 class="mb-3 font-2">معرفی بهترین مربیان در شهر شما</h2>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است.
                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                            <div class="mb-3 ml-4 mr-lg-0 ml-lg-4">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <h6 class="mb-0 mr-3">دسترسی کاملا مادام العمر</h6>
                                </div>
                            </div>
                            <div class="mb-3 ml-4 mr-lg-0 ml-lg-4">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <h6 class="mb-0 mr-3">بیش از 20 منبع قابل دانلود</h6>
                                </div>
                            </div>
                            <div class="mb-3 ml-4 mr-lg-0 ml-lg-4">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <h6 class="mb-0 mr-3">ارائه مدرک معتبر</h6>
                                </div>
                            </div>
                            <div class="mb-3 ml-4 mr-lg-0 ml-lg-4">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="rounded-circle bg-light-success theme-cl p-2 small d-flex align-items-center justify-content-center">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <h6 class="mb-0 mr-3">آزمایشی رایگان 7 روز</h6>
                                </div>
                            </div>
                            <div class="text-right mt-4"><a href="#" class="btn btn-md text-light theme-bg">شروع ثبت
                                    نام</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="imageblock pt-m-0">
            <div class="imageblock__content right">
                <div class="background-image-holder"
                     style="background: url({{ asset('client/assets/img/side-2.jpg') }});">
                    <img alt="image" src="{{ asset('client/assets/img/side-1.jpg') }}">
                </div>
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-end">
                    <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                        <div class="lmp_caption">
                            <ol class="list-unstyled p-0">
                                <li class="d-flex align-items-start my-3 my-md-4">
                                    <div
                                        class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center gray">
                                        <div class="position-absolute theme-cl h5 mb-0"><i
                                                class="fa fa-photo-video"></i>
                                        </div>
                                    </div>
                                    <div class="mr-3 mr-md-4">
                                        <h4 class="font-2">آپلود دوره های آموزشی</h4>
                                        <p>
                                            برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی
                                            ایجاد
                                            کرد.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start my-3 my-md-4">
                                    <div
                                        class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center gray">
                                        <div class="position-absolute theme-cl h5 mb-0"><i class="fa fa-edit"></i></div>
                                    </div>
                                    <div class="mr-3 mr-md-4">
                                        <h4 class="font-2">سفارشی سازی آسان</h4>
                                        <p>
                                            برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی
                                            ایجاد
                                            کرد.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start my-3 my-md-4">
                                    <div
                                        class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center gray">
                                        <div class="position-absolute theme-cl h5 mb-0"><i
                                                class="fa fa-question-circle"></i></div>
                                    </div>
                                    <div class="mr-3 mr-md-4">
                                        <h4 class="font-2">پرسش سوالات نامحدود</h4>
                                        <p>
                                            برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی
                                            ایجاد
                                            کرد.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start my-3 my-md-4">
                                    <div
                                        class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center gray">
                                        <div class="position-absolute theme-cl h5 mb-0"><i class="fa fa-thumbs-up"></i>
                                        </div>
                                    </div>
                                    <div class="mr-3 mr-md-4">
                                        <h4 class="font-2">100% رضایت کاربر</h4>
                                        <p>
                                            سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                            با
                                            هدف بهبود ابزارهای کاربردی می باشد.
                                        </p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <div class="clearfix"></div>
        <!-- ============================ Work Process End ================================== -->

        <!-- ============================ Our Instructor Start ================================== -->
        <section class="gray">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-10 text-center">
                        <div class="sec-heading center mb-4">
                            <h3 class="font-2">لیست مدرسین <span class="theme-cl">پیشنهادی</span></h3>
                            <p>با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ
                                پیشرو در
                                زبان فارسی ایجاد کرد.</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="tutor-slide">

                            <!-- Single Item -->
                            <div class="lios_item">
                                <div class="crs_trt_grid shadow_none brd">
                                    <div class="crs_trt_thumb">
                                        <a href="instructor-detail.blade.php" class="crs_trt_thum_link"><img
                                                src="{{ asset('client/assets/img/t-1.png') }}" class="img-fluid"
                                                alt=""/></a>
                                    </div>
                                    <div class="crs_trt_caption large">
                                        <div class="instructor_tag"><span>مدرس برتر ریاضیات و فیزیک</span></div>
                                        <div class="instructor_title"><h4><a href="instructor-detail.blade.php">مصطفی
                                                    اسلامی</a></h4></div>
                                        <div class="trt_rate_inf">
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star-half filled"></i>
                                            <span class="alt_rates">(244 نظر ثبت شده)</span>
                                        </div>
                                    </div>
                                    <div class="crs_trt_footer">
                                        <div class="crs_flex">
                                            <div class="crs_fl_first">
                                                <div class="crs_trt_ent"><i class="fa fa-user"></i> 2.5 شرکت کننده</div>
                                            </div>
                                            <div class="crs_fl_last">
                                                <div class="foot_list_info">
                                                    <div class="crs_linkview"><a href="course-detail.html"
                                                                                 class="btn btn_view_detail theme-bg text-light">ثبت
                                                            نام</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Item -->
                            <div class="lios_item">
                                <div class="crs_trt_grid shadow_none brd">
                                    <div class="crs_trt_thumb">
                                        <a href="instructor-detail.blade.php" class="crs_trt_thum_link"><img
                                                src="{{ asset('client/assets/img/t-2.png') }}" class="img-fluid"
                                                alt=""/></a>
                                    </div>
                                    <div class="crs_trt_caption large">
                                        <div class="instructor_tag"><span>مدرس برتر ریاضی و فیزیک</span></div>
                                        <div class="instructor_title"><h4><a href="instructor-detail.blade.php">نادیا
                                                    ناصری</a></h4></div>
                                        <div class="trt_rate_inf">
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star-half filled"></i>
                                            <span class="alt_rates">(244 نظر ثبت شده)</span>
                                        </div>
                                    </div>
                                    <div class="crs_trt_footer">
                                        <div class="crs_flex">
                                            <div class="crs_fl_first">
                                                <div class="crs_trt_ent"><i class="fa fa-user"></i> 2.5 شرکت کننده</div>
                                            </div>
                                            <div class="crs_fl_last">
                                                <div class="foot_list_info">
                                                    <div class="crs_linkview"><a href="course-detail.html"
                                                                                 class="btn btn_view_detail theme-bg text-light">ثبت
                                                            نام</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Item -->
                            <div class="lios_item">
                                <div class="crs_trt_grid shadow_none brd">
                                    <div class="crs_trt_thumb">
                                        <a href="instructor-detail.blade.php" class="crs_trt_thum_link"><img
                                                src="{{ asset('client/assets/img/t-3.png') }}" class="img-fluid"
                                                alt=""/></a>
                                    </div>
                                    <div class="crs_trt_caption large">
                                        <div class="instructor_tag"><span>مدرس برتر شیمی</span></div>
                                        <div class="instructor_title"><h4><a href="instructor-detail.blade.php">سروش
                                                    نجفی
                                                    نژاد</a></h4></div>
                                        <div class="trt_rate_inf">
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star-half filled"></i>
                                            <span class="alt_rates">(244 نظر ثبت شده)</span>
                                        </div>
                                    </div>
                                    <div class="crs_trt_footer">
                                        <div class="crs_flex">
                                            <div class="crs_fl_first">
                                                <div class="crs_trt_ent"><i class="fa fa-user"></i> 2.5 شرکت کننده</div>
                                            </div>
                                            <div class="crs_fl_last">
                                                <div class="foot_list_info">
                                                    <div class="crs_linkview"><a href="course-detail.html"
                                                                                 class="btn btn_view_detail theme-bg text-light">ثبت
                                                            نام</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Item -->
                            <div class="lios_item">
                                <div class="crs_trt_grid shadow_none brd">
                                    <div class="crs_trt_thumb">
                                        <a href="instructor-detail.blade.php" class="crs_trt_thum_link"><img
                                                src="{{ asset('client/assets/img/t-4.png') }}" class="img-fluid"
                                                alt=""/></a>
                                    </div>
                                    <div class="crs_trt_caption large">
                                        <div class="instructor_tag"><span>دکترای آموزش زبان انگلیسی</span></div>
                                        <div class="instructor_title"><h4><a href="instructor-detail.blade.php">نرگس
                                                    حسینی</a></h4></div>
                                        <div class="trt_rate_inf">
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star-half filled"></i>
                                            <span class="alt_rates">(244 نظر ثبت شده)</span>
                                        </div>
                                    </div>
                                    <div class="crs_trt_footer">
                                        <div class="crs_flex">
                                            <div class="crs_fl_first">
                                                <div class="crs_trt_ent"><i class="fa fa-user"></i> 2.5 شرکت کننده</div>
                                            </div>
                                            <div class="crs_fl_last">
                                                <div class="foot_list_info">
                                                    <div class="crs_linkview"><a href="course-detail.html"
                                                                                 class="btn btn_view_detail theme-bg text-light">ثبت
                                                            نام</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Item -->
                            <div class="lios_item">
                                <div class="crs_trt_grid shadow_none brd">
                                    <div class="crs_trt_thumb">
                                        <a href="instructor-detail.blade.php" class="crs_trt_thum_link"><img
                                                src="{{ asset('client/assets/img/t-5.png') }}" class="img-fluid"
                                                alt=""/></a>
                                    </div>
                                    <div class="crs_trt_caption large">
                                        <div class="instructor_tag"><span>مدرس برتر پایتون / جاوا اسکریپت</span></div>
                                        <div class="instructor_title"><h4><a href="instructor-detail.blade.php">متین
                                                    کفاشیان</a></h4></div>
                                        <div class="trt_rate_inf">
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star-half filled"></i>
                                            <span class="alt_rates">(244 نظر ثبت شده)</span>
                                        </div>
                                    </div>
                                    <div class="crs_trt_footer">
                                        <div class="crs_flex">
                                            <div class="crs_fl_first">
                                                <div class="crs_trt_ent"><i class="fa fa-user"></i> 2.5 شرکت کننده</div>
                                            </div>
                                            <div class="crs_fl_last">
                                                <div class="foot_list_info">
                                                    <div class="crs_linkview"><a href="course-detail.html"
                                                                                 class="btn btn_view_detail theme-bg text-light">ثبت
                                                            نام</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Item -->
                            <div class="lios_item">
                                <div class="crs_trt_grid shadow_none brd">
                                    <div class="crs_trt_thumb">
                                        <a href="instructor-detail.blade.php" class="crs_trt_thum_link"><img
                                                src="{{ asset('client/assets/img/t-6.png') }}" class="img-fluid"
                                                alt=""/></a>
                                    </div>
                                    <div class="crs_trt_caption large">
                                        <div class="instructor_tag"><span>مؤلف و مدرس شیمی کنکور</span></div>
                                        <div class="instructor_title"><h4><a href="instructor-detail.blade.php">مرضیه
                                                    قاسمی
                                                    نیا</a></h4></div>
                                        <div class="trt_rate_inf">
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star-half filled"></i>
                                            <span class="alt_rates">(244 نظر ثبت شده)</span>
                                        </div>
                                    </div>
                                    <div class="crs_trt_footer">
                                        <div class="crs_flex">
                                            <div class="crs_fl_first">
                                                <div class="crs_trt_ent"><i class="fa fa-user"></i> 2.5 شرکت کننده</div>
                                            </div>
                                            <div class="crs_fl_last">
                                                <div class="foot_list_info">
                                                    <div class="crs_linkview"><a href="course-detail.html"
                                                                                 class="btn btn_view_detail theme-bg text-light">ثبت
                                                            نام</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ============================ Our Instructor End ================================== -->




    </div>
@endsection


@section('js')
    <!-- Morris.js charts -->
    <script src="{{ asset('client/assets/js/raphael.min.js') }}"></script>
    <script src="{{ asset('client/assets/js/morris.min.js') }}"></script>

    <!-- Custom Morrisjs JavaScript -->
    <script src="{{ asset('client/assets/js/morris.js') }}"></script>


@endsection
