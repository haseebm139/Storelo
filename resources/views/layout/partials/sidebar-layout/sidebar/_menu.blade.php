<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <!--begin::Menu wrapper-->
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true"
        data-kt-scroll-activate="true" data-kt-scroll-height="auto"
        data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
        data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
        <!--begin::Menu-->
        <div class="menu menu-column menu-rounded menu-sub-indention px-3 fw-semibold fs-6" id="#kt_app_sidebar_menu"
            data-kt-menu="true" data-kt-menu-expand="false">
            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                    href="{{ route('dashboard') }}">
                    <span class="menu-icon">{!! getIcon('home', 'fs-2') !!}</span>
                    <span class="menu-title"> Dashboard</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            {{-- <div class="menu-item pt-5">
                <!--begin:Menu content-->
                <div class="menu-content">
                    <span class="menu-heading fw-bold text-uppercase fs-7">Apps</span>
                </div>
                <!--end:Menu content-->
            </div> --}}
            <!--end:Menu item-->
            <!--begin:Menu item-->
            {{-- <div data-kt-menu-trigger="click"
                class="menu-item menu-accordion {{ request()->routeIs('user-management.*') ? 'here show' : '' }}">
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-icon">{!! getIcon('abstract-28', 'fs-2') !!}</span>
                    <span class="menu-title">User Management</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ request()->routeIs('user-management.users.*') ? 'active' : '' }}"
                            href="{{ route('user-management.users.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Users</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ request()->routeIs('user-management.roles.*') ? 'active' : '' }}"
                            href="{{ route('user-management.roles.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Roles</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ request()->routeIs('user-management.permissions.*') ? 'active' : '' }}"
                            href="{{ route('user-management.permissions.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Permissions</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div> --}}
            <!--begin:Menu item-->
            <div class="menu-item pt-5">
                <!--begin:Menu content-->
                <div class="menu-content">
                    <span class="menu-heading fw-bold text-uppercase fs-7">Product </span>
                </div>
                <!--end:Menu content-->
            </div>
            <!--end:Menu item-->
            <!--begin:Product Registration -->

            <div data-kt-menu-trigger="click"
                class="menu-item menu-accordion {{ request()->routeIs('product-management.*') ? 'here show' : '' }}">
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-icon">{!! getIcon('abstract-28', 'fs-2') !!}</span>
                    <span class="menu-title">Product Management</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ request()->routeIs('product-management.menu.*') ? 'active' : '' }}"
                            href="{{ route('product-management.menu.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Menu</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ request()->routeIs('product-management.category.*') ? 'active' : '' }}"
                            href="{{ route('product-management.category.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Category</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ request()->routeIs('product-management.product.*') ? 'active' : '' }}"
                            href="{{ route('product-management.product.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Products</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->


                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ request()->routeIs('product-management.special-products.*') ? 'active' : '' }}"
                            href="{{ route('product-management.special-products.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Special Products</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->




                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Product Registration-->

            <!--begin:Order Registration -->

            <div data-kt-menu-trigger="click"
                class="menu-item menu-accordion {{ request()->routeIs('order-management.*') ? 'here show' : '' }}">
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-icon">{!! getIcon('abstract-28', 'fs-2') !!}</span>
                    <span class="menu-title">Order Management</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ request()->routeIs('order-management.order.*') ? 'active' : '' }}"
                            href="{{ route('order-management.order.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Orders</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->




                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Order Registration-->

            <!--begin:Order Registration -->

            <div data-kt-menu-trigger="click"
                class="menu-item menu-accordion {{ request()->routeIs('website-management.*') ? 'here show' : '' }}">
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-icon">{!! getIcon('abstract-28', 'fs-2') !!}</span>
                    <span class="menu-title">Website Management</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ request()->routeIs('website-management.awards.*') ? 'active' : '' }}"
                            href="{{ route('website-management.awards.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Award</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ request()->routeIs('website-management.website.*') ? 'active' : '' }}"
                            href="{{ route('website-management.website.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Website</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ request()->routeIs('website-management.video.*') ? 'active' : '' }}"
                            href="{{ route('website-management.video.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Video</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    {{-- <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ request()->routeIs('website-management.slider.*') ? 'active' : '' }}"
                            href="{{ route('website-management.slider.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Slider</span>
                        </a>
                        <!--end:Menu link-->
                    </div> --}}
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ request()->routeIs('website-management.events.*') ? 'active' : '' }}"
                            href="{{ route('website-management.events.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Events</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->


                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Order Registration-->






        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
</div>
<!--end::sidebar menu-->
