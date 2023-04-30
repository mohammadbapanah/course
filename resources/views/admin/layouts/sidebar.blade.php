<aside id="sidebar" class="sidebar">
    <section class="sidebar-container">
        <section class="sidebar-wrapper">
            <section class="sidebar-part-title">بخش محتوی</section>
            <a href="{{ route('categories.index') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>دسته بندی</span>
            </a>
            <a href="{{ route('posts.index') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>پست ها</span>
            </a>
            <a href="{{ route('posts.index') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>مدیریت تگ ها</span>
            </a>
           {{-- <a href="" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>نظرات</span>
            </a>
            <a href="" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>منو</span>
            </a>--}}

            <section class="sidebar-part-title">بخش کاربران</section>
                        <a href="{{ route('users.index') }}" class="sidebar-link">
                            <i class="fas fa-bars"></i>
                            <span>مدیریت کاربران</span>
                        </a>
{{--        <a href="" class="sidebar-link">--}}
{{--                <i class="fas fa-bars"></i>--}}
{{--                <span>مراجعین</span>--}}
{{--            </a>--}}
{{--            <a href="" class="sidebar-link">--}}
{{--                <i class="fas fa-bars"></i>--}}
{{--                <span>پزشکان</span>--}}
{{--            </a>--}}
{{--            <a href="" class="sidebar-link">--}}
{{--                <i class="fas fa-bars"></i>--}}
{{--                <span>بیماران</span>--}}
{{--            </a>--}}
            <a href="{{ route('roles.index') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>سطوح دسترسی</span>
            </a>

{{--        <section class="sidebar-part-title">تیکت ها</section>--}}
{{--            <a href="" class="sidebar-link">--}}
{{--                <i class="fas fa-bars"></i>--}}
{{--                <span>تیکت های جدید</span>--}}
{{--            </a>--}}
{{--            <a href="" class="sidebar-link">--}}
{{--                <i class="fas fa-bars"></i>--}}
{{--                <span>تیکت های باز</span>--}}
{{--            </a>--}}
{{--            <a href="" class="sidebar-link">--}}
{{--                <i class="fas fa-bars"></i>--}}
{{--                <span>تیکت های بسته</span>--}}
{{--            </a>--}}


{{--            <section class="sidebar-part-title">اطلاع رسانی</section>--}}
            {{--            <a href="{{ route('admin.notify.email.index') }}" class="sidebar-link">
                            <i class="fas fa-bars"></i>
                            <span>اعلامیه ایمیلی</span>
                        </a>--}}
           {{-- <a href="" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>اعلامیه پیامکی</span>
            </a>--}}

            <section class="sidebar-part-title">تنظیمات</section>
            <section class="sidebar-group-link">
                <section class="sidebar-dropdown-toggle">
                    <i class="fas fa-cogs icon"></i>
                    <a href="" style="text-decoration: none;color: white">
                        <span>تنظیمات </span>
                    </a>
                </section>
            </section>
        </section>
    </section>
</aside>
