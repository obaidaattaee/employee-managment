<div class="page-sidebar-wrapper" data-keep-expanded="false">
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse" >
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu" data-keep-expanded="true" data-auto-scroll="true" data-slide-speed="200">
            {{-- <li class="start active ">
                <a href="{{route('dash_index')}}">
                <i class="icon-home"></i>
                <span class="title">لوحه التحكم</span>
                </a>
            </li>

            <li>
                <a href="javascript:;">
                <i class="icon-diamond"></i>
                <span class="title">ادارة الموظفين</span>
                <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('dash_emp')}}">
                        نسبة الموظف</a>
                    </li>
                    <li>
                        <a href="{{route('dash_emp_show1')}}">
                            انجازات الموظف</a>
                    </li>
                    <li>
                        <a href="{{route('dash_emp_show')}}">
                            تقييم العملاء للموظف</a>
                    </li>
                    <li>
                        <a href="{{route('dash_emp_hour')}}">
                            ساعات العمل الاضافيه للموظف</a>
                    </li>

                </ul>
            </li> --}}
            {{-- <li>
                <a href="{{route('dash_cust')}}">
                <i class="icon-puzzle"></i>
                <span class="title">العملاء</span>
                </a>
            </li>
            <!-- BEGIN ANGULARJS LINK -->
            <li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="AngularJS version demo">
                <a href="angularjs" target="_blank">
                <i class="icon-paper-plane"></i>
                <span class="title">
                التقارير الشهريه </span>

                </a>
            </li> --}}
            <!-- END ANGULARJS LINK -->

            <li>
                <a href="javascript:;">
                <i class="icon-settings"></i>
                <span class="title">التقارير السنوية</span>
                </a>
            </li>
            {{-- <li>
                <a href="javascript:;">
                <i class="icon-diamond"></i>
                <span class="title"> اعدادت عامة</span>
                <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('company.settings.index' , ['type' => 'services'])}}">
                        الخدمات </a>
                    </li>
                    <li>
                        <a href="{{route('company.settings.index' , ['type' => 'slider'])}}">
                        السلايدر </a>
                    </li>
                    <li>
                        <a href="{{route('company.settings.index' , ['type' => 'abouts'])}}">
                        نبذة تعريفية </a>
                    </li>
                    <li>
                        <a href="{{route('company.settings.index' , ['type' => 'projects'])}}">
                        اعمالنا </a>
                    </li>
                </ul>
            </li> --}}

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
