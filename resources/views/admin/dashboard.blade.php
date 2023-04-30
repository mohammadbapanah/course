@extends('admin.layouts.master')

@section('section')
    <section class="gray pt-4">
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-3 col-md-3">
                    <div class="dashboard-navbar">

                        <div class="d-user-avater">
                            <img src="assets/img/user-3.jpg" class="img-fluid avater" alt="">
                            <h4>مهرداد محمدی</h4>
                            <span>برنامه نویس ارشد</span>
                            <div class="elso_syu89">
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="elso_syu77">
                                <div class="one_third">
                                    <div class="one_45ic text-warning bg-light-warning"><i class="fas fa-star"></i>
                                    </div>
                                    <span>امتیازات</span></div>
                                <div class="one_third">
                                    <div class="one_45ic text-success bg-light-success"><i
                                            class="fas fa-file-invoice"></i></div>
                                    <span>دوره ها</span></div>
                                <div class="one_third">
                                    <div class="one_45ic text-purple bg-light-purple"><i class="fas fa-user"></i></div>
                                    <span>هنرجویان</span></div>
                            </div>
                        </div>

                        <div class="d-navigation">
                            <ul id="side-menu">
                                <li class="active"><a href="dashboard.html"><i class="fas fa-th"></i>پیشخوان</a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);"><i class="fas fa-shopping-basket"></i>دوره های
                                        آموزش<span class="ti-angle-left"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li><a href="manage-course.html">لیست دوره ها</a></li>
                                        <li><a href="add-new-course.html">افزودن دوره جدید</a></li>
                                        <li><a href="course-category.html">دسته بندی دوره</a></li>
                                        <li><a href="coupons.html">تخفیفات</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);"><i class="fas fa-gem"></i>ثبت نام ها<span
                                            class="ti-angle-left"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li><a href="enroll-history.html">تاریخچه</a></li>
                                        <li><a href="enroll-student.html">ثبت نام هنرجو</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);"><i class="fas fa-archive"></i>گزارشات<span
                                            class="ti-angle-left"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li><a href="admin-revenue.html">درآمد ادمین</a></li>
                                        <li><a href="instructor-revenue.html">درآمد مربی</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);"><i class="fas fa-user-shield"></i>مدیرها<span
                                            class="ti-angle-left"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li><a href="manage-admins.html">لیست مدیرها</a></li>
                                        <li><a href="add-admin.html">افزودن مدیر جدید</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);"><i class="fas fa-toolbox"></i>مدرسین<span
                                            class="ti-angle-left"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li><a href="manage-instructor.html">لیست مدرس</a></li>
                                        <li><a href="add-instructor.html">ثبت مدرس جدید</a></li>
                                        <li><a href="instructor-payout.html">لیست پرداخت ها</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);"><i class="fas fa-user"></i>هنرجویان<span
                                            class="ti-angle-left"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li><a href="manage-students.html">لیست هنرجویان</a></li>
                                        <li><a href="add-students.html">ثبت هنرجو جدید</a></li>
                                    </ul>
                                </li>
                                <li><a href="addon-manager.html"><i class="fas fa-layer-group"></i>افزونه های من</a>
                                </li>
                                <li><a href="themes.html"><i class="fas fa-paint-brush"></i>قالب ها</a></li>
                                <li><a href="messages.html"><i class="fas fa-comments"></i>پیام ها</a></li>
                                <li><a href="my-profile.html"><i class="fas fa-address-card"></i>پروفایل کاربری</a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);"><i class="fas fa-cog"></i>تنظیمات<span
                                            class="ti-angle-left"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li><a href="website-settings.html">وب سایت</a></li>
                                        <li><a href="system-settings.html">سئو</a></li>
                                        <li><a href="payment_settings.html">پرداخت</a></li>
                                        <li><a href="social-login.html">شبکه های اجتماعی</a></li>
                                        <li><a href="smtp-setting.html">ایمیل SMTP</a></li>
                                        <li><a href="dash-about.html">درباره اپلیکیشن</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-lg-9 col-md-9 col-sm-12">

                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">خانه</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">پیشخوان</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- /Row -->

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0 font-2">درآمد مدیریت امسال</h4>
                                </div>
                                <div class="card-body">
                                    <div class="chart" id="extra-area-chart" style="height: 300px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Row -->
                    <div class="row">

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap">
                                <div
                                    class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center theme-bg mb-2">
                                    <div class="position-absolute text-white h5 mb-0"><i class="fas fa-book"></i></div>
                                </div>
                                <div class="dashboard_stats_wrap_content"><h4>607</h4> <span>تعداد دوره ها</span></div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap">
                                <div
                                    class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-primary mb-2">
                                    <div class="position-absolute text-white h5 mb-0"><i class="fas fa-video"></i></div>
                                </div>
                                <div class="dashboard_stats_wrap_content"><h4>5.2</h4> <span>تعداد ویدئو ها</span></div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap">
                                <div
                                    class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-warning mb-2">
                                    <div class="position-absolute text-white h5 mb-0"><i class="fas fa-users"></i></div>
                                </div>
                                <div class="dashboard_stats_wrap_content"><h4>78</h4> <span>تعداد هنرجویان</span></div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap">
                                <div
                                    class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-purple mb-2">
                                    <div class="position-absolute text-white h5 mb-0"><i class="fas fa-gem"></i></div>
                                </div>
                                <div class="dashboard_stats_wrap_content"><h4>32</h4> <span>تعداد شرکت کنندگان</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /Row -->

                    <!-- Row -->
                    <div class="row">

                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <h5>دوره های ویژه</h5>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="grousp_crs">
                                        <div class="grousp_crs_left">
                                            <div class="grousp_crs_thumb"><img src="assets/img/c-7.png"
                                                                               class="img-fluid" alt=""/></div>
                                            <div class="grousp_crs_caption"><h4>Adobe Photoshop cc 2021 - آموزش رایگان
                                                    Assential</h4></div>
                                        </div>
                                        <div class="grousp_crs_right">
                                            <div class="frt_125"><i class="fas fa-fire text-warning ml-1"></i>8.7</div>
                                            <div class="frt_but"><a href="#" class="btn text-white theme-bg">مشاهده
                                                    دوره</a></div>
                                        </div>
                                    </div>
                                    <div class="grousp_crs">
                                        <div class="grousp_crs_left">
                                            <div class="grousp_crs_thumb"><img src="assets/img/c-6.png"
                                                                               class="img-fluid" alt=""/></div>
                                            <div class="grousp_crs_caption"><h4>Adobe Photoshop cc 2021 - آموزش رایگان
                                                    Assential</h4></div>
                                        </div>
                                        <div class="grousp_crs_right">
                                            <div class="frt_125"><i class="fas fa-fire text-warning ml-1"></i>8.7</div>
                                            <div class="frt_but"><a href="#" class="btn text-white theme-bg">مشاهده
                                                    دوره</a></div>
                                        </div>
                                    </div>
                                    <div class="grousp_crs">
                                        <div class="grousp_crs_left">
                                            <div class="grousp_crs_thumb"><img src="assets/img/c-5.png"
                                                                               class="img-fluid" alt=""/></div>
                                            <div class="grousp_crs_caption"><h4>Adobe Photoshop cc 2021 - آموزش رایگان
                                                    Assential</h4></div>
                                        </div>
                                        <div class="grousp_crs_right">
                                            <div class="frt_125"><i class="fas fa-fire text-warning ml-1"></i>8.7</div>
                                            <div class="frt_but"><a href="#" class="btn text-white theme-bg">مشاهده
                                                    دوره</a></div>
                                        </div>
                                    </div>
                                    <div class="grousp_crs">
                                        <div class="grousp_crs_left">
                                            <div class="grousp_crs_thumb"><img src="assets/img/c-4.png"
                                                                               class="img-fluid" alt=""/></div>
                                            <div class="grousp_crs_caption"><h4>Adobe Photoshop cc 2021 - آموزش رایگان
                                                    Assential</h4></div>
                                        </div>
                                        <div class="grousp_crs_right">
                                            <div class="frt_125"><i class="fas fa-fire text-warning ml-1"></i>8.7</div>
                                            <div class="frt_but"><a href="#" class="btn text-white theme-bg">مشاهده
                                                    دوره</a></div>
                                        </div>
                                    </div>
                                    <div class="grousp_crs">
                                        <div class="grousp_crs_left">
                                            <div class="grousp_crs_thumb"><img src="assets/img/c-3.png"
                                                                               class="img-fluid" alt=""/></div>
                                            <div class="grousp_crs_caption"><h4>Adobe Photoshop cc 2021 - آموزش رایگان
                                                    Assential</h4></div>
                                        </div>
                                        <div class="grousp_crs_right">
                                            <div class="frt_125"><i class="fas fa-fire text-warning mr-1"></i>8.7</div>
                                            <div class="frt_but"><a href="#" class="btn text-white theme-bg">مشاهده
                                                    دوره</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h6>پیام ها</h6>
                                </div>
                                <div class="ground-list ground-hover-list">
                                    <div class="ground ground-list-single">
                                        <div
                                            class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-success">
                                            <div class="position-absolute text-success h5 mb-0"><i
                                                    class="fas fa-user"></i></div>
                                        </div>

                                        <div class="ground-content">
                                            <h6><a href="#">مریم حسینی</a></h6>
                                            <small class="text-fade">کاربر جدیدی که در پایتون ثبت نام کرده است</small>
                                            <span class="small">هم اکنون</span>
                                        </div>
                                    </div>

                                    <div class="ground ground-list-single">
                                        <div
                                            class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-danger">
                                            <div class="position-absolute text-danger h5 mb-0"><i
                                                    class="fas fa-comments"></i></div>
                                        </div>

                                        <div class="ground-content">
                                            <h6><a href="#">علی مرادی</a></h6>
                                            <small class="text-fade">برگزاری دوره های جدید تابستانی</small>
                                            <span class="small">2 دقیقه پیش</span>
                                        </div>
                                    </div>

                                    <div class="ground ground-list-single">
                                        <div
                                            class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-info">
                                            <div class="position-absolute text-info h5 mb-0"><i
                                                    class="fas fa-grin-squint-tears"></i></div>
                                        </div>

                                        <div class="ground-content">
                                            <h6><a href="#">کارگزاری مفید</a></h6>
                                            <small class="text-fade">استخدام کارشناس فروش و بازاریابی(آقا)</small>
                                            <span class="small">10 دقیقه پیش</span>
                                        </div>
                                    </div>

                                    <div class="ground ground-list-single">
                                        <div
                                            class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-purple">
                                            <div class="position-absolute text-purple h5 mb-0"><i
                                                    class="fas fa-briefcase"></i></div>
                                        </div>

                                        <div class="ground-content">
                                            <h6><a href="#">زهرا قاسمی</a></h6>
                                            <small class="text-fade">جلسه بعدی سه شنبه..</small>
                                            <span class="small">15 دقیقه پیش</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /Row -->

                </div>

            </div>

        </div>
    </section>
@endsection
