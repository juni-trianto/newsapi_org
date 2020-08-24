<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>The News Paper - <?= $title; ?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets'); ?>/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="<?= base_url('assets'); ?>/img/core-img/logo.png" alt=""></a>
                            </div>

                            <!-- Login Search Area -->
                            <div class="login-search-area d-flex align-items-center">
                                <div class="search-form">
                                    <form action="<?= base_url('Search/searching'); ?>" method="post">
                                        <input type="search" name="search" autocomplete="off" class="form-control" placeholder="Search">
                                        <button type="submit" name="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="newspaper-main-menu" id="stickyMenu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newspaperNav">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="<?= base_url('assets'); ?>/img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li <?php if($title == 'Home'): ?> class="active" <?php endif; ?>><a href="<?= base_url('/') ?>">Home</a></li>
                                    <li <?php if ($title == 'business') : ?> class="active" <?php endif; ?>><a href="<?= base_url('categories/category'); ?>/business">Business</a></li>
                                    <li <?php if ($title == 'entertainment') : ?> class="active" <?php endif; ?>><a href="<?= base_url('categories/category'); ?>/entertainment">Entertainment</a></li>
                                    <li <?php if ($title == 'general') : ?> class="active" <?php endif; ?>><a href="<?= base_url('categories/category'); ?>/general">General</a></li>
                                    <li <?php if ($title == 'health') : ?> class="active" <?php endif; ?>><a href="<?= base_url('categories/category'); ?>/health">Health</a></li>
                                    <li <?php if ($title == 'science') : ?> class="active" <?php endif; ?>><a href="<?= base_url('categories/category'); ?>/science">Science</a></li>
                                    <li <?php if ($title == 'sports') : ?> class="active" <?php endif; ?>><a href="<?= base_url('categories/category'); ?>/sports">Sports</a></li>
                                    <li <?php if ($title == 'technology') : ?> class="active" <?php endif; ?>><a href="<?= base_url('categories/category'); ?>/technology">Technology</a></li>
                                    <li><a href="#">country</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="catagories-post.html">Catagories</a></li>
                                            <li><a href="single-post.html">Single Articles</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->