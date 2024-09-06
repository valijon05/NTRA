<?php

declare(strict_types=1);
loadPartials(path: 'header', loadFromPublic: false);
?>
<body class="font-body text-base text-black dark:text-white dark:bg-slate-900">
<!-- Loader Start -->
<!-- <div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div> -->
<!-- Loader End -->


<div class="page-wrapper toggled">
    <!-- sidebar-wrapper -->
    <nav id="sidebar" class="sidebar-wrapper sidebar-dark">
        <div class="sidebar-content">
            <div class="sidebar-brand">
                <a href="index.html"><img src="/dashboard/assets/images/logo-light.png" alt=""></a>
            </div>

            <ul class="sidebar-menu border-t border-white/10" data-simplebar style="height: calc(100% - 70px);">
                <li>
                    <a href="/admin"><i class="mdi mdi-chart-bell-curve-cumulative me-2"></i>Dashboard</a>
                </li>

                <li>
                    <a href="/admin/ads"><i class="mdi mdi-home-city me-2"></i>E'lonlar</a>
                </li>

                <li>
                    <a href="/admin/branches"><i class="mdi mdi-home-heart me-2"></i>Filiallar</a>
                </li>

                <li>
                    <a href="/admin/users"><i class="mdi mdi-home-plus me-2"></i>Foydalanuvchilar</a>
                </li>
            </ul>
            <!-- sidebar-menu  -->
        </div>
    </nav>
    <!-- sidebar-wrapper  -->

    <!-- Start Page Content -->
    <main class="page-content bg-gray-50 dark:bg-slate-800">
        <!-- Top Header -->
        <div class="top-header">
            <div class="header-bar flex justify-between">
                <div class="flex items-center space-x-1">
                    <!-- Logo -->
                    <a href="#" class="xl:hidden block me-2">
                        <img src="/dashboard/assets/images/logo-icon-32.png" class="md:hidden block" alt="">
                        <span class="md:block hidden">
                                    <img src="/dashboard/assets/images/logo-dark.png" class="inline-block dark:hidden" alt="">
                                    <img src="/dashboard/assets/images/logo-light.png" class="hidden dark:inline-block" alt="">
                                </span>
                    </a>
                    <!-- Logo -->

                    <!-- show or close sidebar -->
                    <a id="close-sidebar"
                       class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md"
                       href="javascript:void(0)">
                        <i data-feather="menu" class="size-4"></i>
                    </a>
                    <!-- show or close sidebar -->

                    <!-- Searchbar -->
                    <div class="ps-1.5">
                        <div class="form-icon relative sm:block hidden">
                            <i class="mdi mdi-magnify absolute top-1/2 -translate-y-1/2 mt-[1px] start-3"></i>
                            <input type="text"
                                   class="form-input w-56 ps-9 py-2 px-3 h-8 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-md outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 bg-white"
                                   name="s" id="searchItem" placeholder="Search...">
                        </div>
                    </div>
                    <!-- Searchbar -->
                </div>

                <ul class="list-none mb-0 space-x-1">
                    <!-- Country Dropdown -->
                    <li class="dropdown inline-block relative">
                        <button data-dropdown-toggle="dropdown"
                                class="dropdown-toggle size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md"
                                type="button">
                            <img src="/dashboard/assets/images/flags/usa.png" class="size-6 rounded-md" alt="">
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-36 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden"
                             onclick="event.stopPropagation();">
                            <ul class="list-none py-2 text-start">
                                <li class="my-1">
                                    <a href=""
                                       class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><img
                                                src="/dashboard/assets/images/flags/germany.png"
                                                class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt="">
                                        German</a>
                                </li>
                                <li class="my-1">
                                    <a href=""
                                       class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><img
                                                src="/dashboard/assets/images/flags/italy.png"
                                                class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt="">
                                        Italian</a>
                                </li>
                                <li class="my-1">
                                    <a href=""
                                       class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><img
                                                src="/dashboard/assets/images/flags/russia.png"
                                                class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt="">
                                        Russian</a>
                                </li>
                                <li class="my-1">
                                    <a href=""
                                       class="flex items-center text-[15px] font-medium py-1.5 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><img
                                                src="/dashboard/assets/images/flags/spain.png"
                                                class="size-6 rounded-md me-2 shadow dark:shadow-gray-700" alt="">
                                        Spanish</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Country Dropdown -->

                    <!-- Notification Dropdown -->
                    <li class="dropdown inline-block relative">
                        <button data-dropdown-toggle="dropdown"
                                class="dropdown-toggle size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md"
                                type="button">
                            <i data-feather="bell" class="size-4"></i>
                            <span class="absolute top-0 end-0 flex items-center justify-center bg-red-600 text-white text-[10px] font-bold rounded-md size-2 after:content-[''] after:absolute after:h-2 after:w-2 after:bg-red-600 after:top-0 after:end-0 after:rounded-md after:animate-ping"></span>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-64 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden"
                             onclick="event.stopPropagation();">
                                    <span class="px-4 py-4 flex justify-between">
                                        <span class="font-semibold">Notifications</span>
                                        <span class="flex items-center justify-center bg-red-600/20 text-red-600 text-[10px] font-bold rounded-md w-5 max-h-5 ms-1">3</span>
                                    </span>
                            <ul class="py-2 text-start h-64 border-t border-gray-100 dark:border-gray-800"
                                data-simplebar>
                                <li>
                                    <a href="#!" class="block font-medium py-1.5 px-4">
                                        <div class="flex items-center">
                                            <div class="size-10 rounded-md shadow shadow-green-600/10 dark:shadow-gray-700 bg-green-600/10 dark:bg-slate-800 text-green-600 dark:text-white flex items-center justify-center">
                                                <i data-feather="shopping-cart" class="size-4"></i>
                                            </div>
                                            <div class="ms-2">
                                                <span class="text-[15px] font-medium block">Order Complete</span>
                                                <small class="text-slate-400">15 min ago</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="block font-medium py-1.5 px-4">
                                        <div class="flex items-center">
                                            <img src="/dashboard/assets/images/client/04.jpg"
                                                 class="size-10 rounded-md shadow dark:shadow-gray-700" alt="">
                                            <div class="ms-2">
                                                <span class="text-[15px] font-medium block"><span class="font-semibold">Message</span> from Luis</span>
                                                <small class="text-slate-400">1 hour ago</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="block font-medium py-1.5 px-4">
                                        <div class="flex items-center">
                                            <div class="size-10 rounded-md shadow shadow-green-600/10 dark:shadow-gray-700 bg-green-600/10 dark:bg-slate-800 text-green-600 dark:text-white flex items-center justify-center">
                                                <i data-feather="dollar-sign" class="size-4"></i>
                                            </div>
                                            <div class="ms-2">
                                                <span class="text-[15px] font-medium block"><span class="font-semibold">One Refund Request</span></span>
                                                <small class="text-slate-400">2 hour ago</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="block font-medium py-1.5 px-4">
                                        <div class="flex items-center">
                                            <div class="size-10 rounded-md shadow shadow-green-600/10 dark:shadow-gray-700 bg-green-600/10 dark:bg-slate-800 text-green-600 dark:text-white flex items-center justify-center">
                                                <i data-feather="truck" class="size-4"></i>
                                            </div>
                                            <div class="ms-2">
                                                <span class="text-[15px] font-medium block">Deliverd your Order</span>
                                                <small class="text-slate-400">Yesterday</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="block font-medium py-1.5 px-4">
                                        <div class="flex items-center">
                                            <img src="/dashboard/assets/images/client/05.jpg"
                                                 class="size-10 rounded-md shadow dark:shadow-gray-700" alt="">
                                            <div class="ms-2">
                                                <span class="text-[15px] font-medium block"><span class="font-semibold">Cally</span> started following you</span>
                                                <small class="text-slate-400">2 days ago</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li><!--end dropdown-->
                    <!-- Notification Dropdown -->

                    <!-- User/Profile Dropdown -->
                    <li class="dropdown inline-block relative">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                            <span class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md"><img
                                        src="/dashboard/assets/images/client/07.jpg" class="rounded-md" alt=""></span>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden"
                             onclick="event.stopPropagation();">
                            <ul class="py-2 text-start">
                                <li>
                                    <a href="profile.html"
                                       class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i
                                                class="mdi mdi-account-outline me-2"></i>Profile</a>
                                </li>
                                <li>
                                    <a href="chat.html"
                                       class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i
                                                class="mdi mdi-chat-outline me-2"></i>Chat</a>
                                </li>
                                <li>
                                    <a href="profile-setting.html"
                                       class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i
                                                class="mdi mdi-cog-outline me-2"></i>Settings</a>
                                </li>
                                <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                                <li>
                                    <a href="lock-screen.html"
                                       class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i
                                                class="mdi mdi-lock-outline me-2"></i>Lockscreen</a>
                                </li>
                                <li>
                                    <a href="login.html"
                                       class="block py-1 px-4 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><i
                                                class="mdi mdi-logout me-2"></i>Logout</a>
                                </li>
                            </ul>
                        </div>
                    </li><!--end dropdown-->
                    <!-- User/Profile Dropdown -->
                </ul>
            </div>
        </div>
        <!-- Top Header -->

        <div class="container-fluid relative px-3">
            <div class="layout-specing">
                <!-- Start Content -->
                <div class="md:flex justify-between items-center">
                    <h5 class="text-lg font-semibold">E'lonlar</h5>

                    <ul class="tracking-[0.5px] inline-block sm:mt-0 mt-3">
                        <li class="inline-block capitalize text-[16px] font-medium duration-500 dark:text-white/70 hover:text-green-600 dark:hover:text-white"><a href="/admin">Dashboard</a></li>
                        <li class="inline-block text-base text-slate-950 dark:text-white/70 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
                        <li class="inline-block capitalize text-[16px] font-medium text-green-600 dark:text-white" aria-current="page">E'lonlar</li>
                    </ul>
                </div>

                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 mt-6">
                    <?php
                    /**
                     * @var $ads
                     */
                    foreach ($ads as $ad):?>
                        <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                            <div class="relative">
                                <img src="../assets/images/ads/<?= $ad->image?>" alt="">

                                <div class="absolute top-4 end-4">
                                    <a href="javascript:void(0)"
                                       class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i
                                            class="mdi mdi-heart text-[20px]"></i></a>
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="pb-6">
                                    <a href="/ads/<?= $ad->id ?>"
                                       class="text-lg hover:text-green-600 font-medium ease-in-out duration-500"><?= $ad->title; ?></a>
                                </div>

                                <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                    <li class="flex items-center me-4">
                                        <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                        <span>8000sqf</span>
                                    </li>

                                    <li class="flex items-center me-4">
                                        <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                        <span>4 Beds</span>
                                    </li>

                                    <li class="flex items-center">
                                        <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                        <span>4 Baths</span>
                                    </li>
                                </ul>

                                <ul class="pt-6 flex justify-between items-center list-none">
                                    <li>
                                        <span class="text-slate-400">Price</span>
                                        <p class="text-lg font-medium">$ <?= $ad->price ?></p>
                                    </li>

                                </ul>
                            </div>
                        </div><!--end property content-->
                    <?php
                    endforeach; ?>
                </div><!--en grid-->


                <!-- End Content -->
            </div>
        </div><!--end container-->

        <!-- Footer Start -->
        <footer class="shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 px-6 py-4">
            <div class="container-fluid">
                <div class="grid grid-cols-1">
                    <div class="sm:text-start text-center mx-md-2">
                        <p class="mb-0 text-slate-400">©
                            <script>document.write(new Date().getFullYear())</script>
                            NTRA. Design with <i class="mdi mdi-heart text-red-600"></i> by <a
                                    href="https://najottalim.uz" target="_blank" class="text-reset">PHP Bootcamp N1</a>.
                        </p>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- End -->
    </main>
    <!--End page-content" -->
</div>
<!-- page-wrapper -->

<!-- Switcher -->
<div class="fixed top-[30%] -end-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk"/>
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8"
                       for="chk">
                    <i data-feather="moon" class="size-[18px] text-yellow-500"></i>
                    <i data-feather="sun" class="size-[18px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] size-7"></span>
                </label>
            </span>
</div>
<!-- Switcher -->

<!-- LTR & RTL Mode Code -->
<div class="fixed top-[40%] -end-3 z-50">
    <a href="" id="switchRtl">
        <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-700 font-bold rtl:block ltr:hidden">LTR</span>
        <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-700 font-bold ltr:block rtl:hidden">RTL</span>
    </a>
</div>
<!-- LTR & RTL Mode Code -->

<?php
loadPartials(path: 'footer', loadFromPublic: false);
?>