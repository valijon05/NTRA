
<div class="container relative flex justify-between items-center">
    <!-- Start Logo container -->
    <a class="logo" href="index.html">
            <span class="inline-block dark:hidden">
                <img src="assets/images/logo-dark.png" class="l-dark" height="24" alt="Logo Dark">
                <img src="assets/images/logo-light.png" class="l-light" height="24" alt="Logo Light">
            </span>
        <img src="assets/images/logo-light.png" height="24" class="hidden dark:inline-block" alt="Logo Light">
    </a>
    <!-- End Logo container -->

    <!-- Start Mobile Toggle -->
    <div class="menu-extras lg:hidden">
        <div class="menu-item">
            <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </div>
    </div>
    <!-- End Mobile Toggle -->

    <!-- Navigation & Buttons -->
    <div class="hidden lg:flex justify-between items-center w-full">
        <!-- Start Navigation Menu -->
        <ul class="navigation-menu list-none flex items-center mb-0 space-x-4">
            <li>
                <a href="/branches" class="text-gray-700 dark:text-white hover:text-green-600 transition">Branches</a>
            </li>

        </ul>
        <!-- End Navigation Menu -->

        <!-- Login Button Start -->
        <ul class="buy-button list-none mb-0 flex items-center space-x-2">
            <li>
                <a href="#" class="btn btn-icon bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full p-2 transition">
                    <i data-feather="user" class="size-4 stroke-[3]"></i>
                </a>
            </li>
            <li class="sm:inline ps-1 mb-0 hidden">
                <?php
                    $url = (new \App\Session())->getName() ? '/logout' : '/login';
                    $text = (new \App\Session())->getName() ? 'logout' : 'login';
                    ?>
                <a href="<?=$url?>"
                   class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full"><?=$text ?></a>
            </li>

        </ul>
        <!-- Login Button End -->
    </div>
</div><!-- end container -->
</nav><!-- end header -->
php artisan make:migration create_your_table_name_table
