<!DOCTYPE html>
<html lang="en">
<?php
    $settings=settings();
     $user=\App\Models\User::find(1);
    \App::setLocale($user->lang);
?>

<head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(env('APP_NAME')); ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <meta name="author" content="<?php echo e(!empty($settings['app_name'])?$settings['app_name']:env('APP_NAME')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(!empty($settings['app_name'])?$settings['app_name']:env('APP_NAME')); ?> - <?php echo $__env->yieldContent('page-title'); ?> </title>

    <meta name="title" content="<?php echo e($settings['meta_seo_title']); ?>">
    <meta name="keywords" content="<?php echo e($settings['meta_seo_keyword']); ?>">
    <meta name="description" content="<?php echo e($settings['meta_seo_description']); ?>">


    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(env('APP_URL')); ?>">
    <meta property="og:title" content="<?php echo e($settings['meta_seo_title']); ?>">
    <meta property="og:description" content="<?php echo e($settings['meta_seo_description']); ?>">
    <meta property="og:image" content="<?php echo e(asset(Storage::url('upload/seo')).'/'.$settings['meta_seo_image']); ?>">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo e(env('APP_URL')); ?>">
    <meta property="twitter:title" content="<?php echo e($settings['meta_seo_title']); ?>">
    <meta property="twitter:description" content="<?php echo e($settings['meta_seo_description']); ?>">
    <meta property="twitter:image" content="<?php echo e(asset(Storage::url('upload/seo')).'/'.$settings['meta_seo_image']); ?>">

    <!-- shortcut icon-->
    <link rel="icon" href="<?php echo e(asset(Storage::url('upload/logo')).'/'.$settings['company_favicon']); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset(Storage::url('upload/logo')).'/'.$settings['company_favicon']); ?>"
          type="image/x-icon">

    <!-- shortcut icon-->
    <link rel="shortcut icon" href="<?php echo e(asset(Storage::url('upload/logo')).'/favicon.png'); ?>" type="image/x-icon">
    <!-- Fonts css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Font awesome -->
    <link href="<?php echo e(asset('assets/css/vendor/font-awesome.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/vendor/icoicon/icoicon.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('assets/css/vendor/slider/slick-slider/slick.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/vendor/slider/slick-slider/slick-theme.css')); ?>" rel="stylesheet">
    <!-- animat css-->
    <link href="<?php echo e(asset('assets/css/vendor/animate.css')); ?>" rel="stylesheet">
    <!-- Bootstrap css-->
    <link href="<?php echo e(asset('assets/css/vendor/bootstrap.css')); ?>" rel="stylesheet">
    <!-- Custom css-->

    <?php
        $style=$settings['theme_color']=='color1'?'style.css':$settings['theme_color'].'.css';
        if($settings['color_type']=='custom'){
            $style='style.css';
        }
    ?>
    <link href="<?php echo e(asset('assets/css/'.$style)); ?>" id="customstyle" rel="stylesheet">
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
</head>

<body class="<?php echo e($settings['layout_direction']); ?> <?php echo e($settings['layout_mode']); ?>">
<!-- header start-->
<header class="land-header fixed">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-contain position-relative">
                    <div class="codex-brand">
                        <a href="javascript:void(0);">
                            <img class="img-fluid dark-logo landing-logo"
                                 src="<?php echo e(asset(Storage::url('upload/logo')).'/'.$settings['landing_logo']); ?>"
                                 alt="">
                        </a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="menu-block">
                            <ul class="menu-list">
                                <li class="d-xl-none">
                                    <a class="close-menu" href="javascript:void(0);">
                                        <div class="menu-brand">
                                            <img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo.png')); ?>"
                                                 alt=""><i data-feather="x"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="menu-item"><a href="#demos"><?php echo e(__('Home')); ?></a></li>
                               
                                <li class="menu-item"><a href="#faq"><?php echo e(__('FAQs')); ?></a></li>

                                <li class="menu-item">
                                    <a class="btn btn-primary me-2" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?> </a>
                                    <?php if($settings['register_page']=='on'): ?>
                                        <a class="btn btn-primary" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?> </a>
                                    <?php endif; ?>

                                </li>

                            </ul>
                            <a class="menu-action d-xl-none" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end-->

<!-- intro start-->
<section class="intro" id="demos">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-lg-7">
                <div class="intro-contain">
                    <div>
                        <h1 class="wow fadeInLeft"
                            data-wow-duration="1s"><?php echo e(__('Foreign Employees  - Tracking System ')); ?></h1>
                        <p class="wow fadeInLeft"
                           data-wow-duration="1.5s"><?php echo e(__('A foreign employment tracking system is a digital solution designed to monitor and manage information related to individuals working abroad. This system can be crucial for governments, recruitment agencies, and employers to ensure the safety, compliance, and well-being of workers employed in foreign countries. Here’s a basic outline of what such a system might include:

 ')); ?></p>
                        <a class="btn btn-primary" href="<?php echo e(route('login')); ?>" data-wow-duration="1.8s"><i
                                class="fa fa-television" aria-hidden="true"></i><?php echo e(__('Get Started')); ?> </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="landing_dash">
        <img class="" src="<?php echo e(asset('assets/images/landing/1.jpg')); ?>" alt="">
    </div>
</section>
<!-- intro end-->
<!-- demo start-->


<!-- innderpages end-->

<!-- header otpion start-->

<!-- header otpion start-->
<section class="landheader-comp space-py-100 overflow-visible" id="faq">
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
            <div class="land-title">
                <h2 class="wow fadeInLeft"><?php echo e(__('Frequently Asked Questions')); ?></h2>
            </div>
        </div>
    </div>
    <div class="row pricing-grid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4><?php echo e(__('Installation Questions')); ?></h4>
                </div>
                <div class="card-body">
                    <div class="codex-accordion accordion accordion-flush" id="install-que">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <?php echo e(__('What are the system requirements for installation?')); ?>

                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#install-que">
                                <div class="accordion-body">
                                    <?php echo e(__('The system requires a web server with PHP 7.4 or higher, a MySQL database, and a modern web browser. Detailed requirements can be found in the documentation.')); ?>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <?php echo e(__('How do I install the migration tracking system?')); ?>

                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#install-que">
                                <div class="accordion-body">
                                    <?php echo e(__('To install the migration tracking system, follow the steps outlined in the installation guide. This includes downloading the package, setting up the database, and configuring the environment settings.')); ?>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <?php echo e(__('Can I install the system on a shared hosting environment?')); ?>

                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#install-que">
                                <div class="accordion-body">
                                    <?php echo e(__('Yes, the system can be installed on a shared hosting environment as long as it meets the system requirements. Please refer to the documentation for specific instructions.')); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">
                    <h4><?php echo e(__('General Questions')); ?></h4>
                </div>
                <div class="card-body">
                    <div class="codex-accordion accordion accordion-flush" id="general-que">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <?php echo e(__('What is the migration tracking system?')); ?>

                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#general-que">
                                <div class="accordion-body">
                                    <?php echo e(__('The migration tracking system is a tool designed to help organizations track and manage the migration of employees or individuals to different locations. It provides features for tracking migration status, managing documents, and generating reports.')); ?>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <?php echo e(__('How do I add a new employee to the system?')); ?>

                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#general-que">
                                <div class="accordion-body">
                                    <?php echo e(__('To add a new employee, navigate to the "Employees" section and click on "Add New Employee". Fill in the required details and save the information. The new employee will be added to the system.')); ?>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <?php echo e(__('Can I generate reports from the system?')); ?>

                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#general-que">
                                <div class="accordion-body">
                                    <?php echo e(__('Yes, the system provides various reporting features. You can generate reports on migration status, employee details, and other relevant data. Navigate to the "Reports" section to access these features.')); ?>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    <?php echo e(__('Is there a user manual available?')); ?>

                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#general-que">
                                <div class="accordion-body">
                                    <?php echo e(__('Yes, a comprehensive user manual is available in the documentation section. It provides detailed instructions on how to use the system and its various features.')); ?>

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
<!-- header otpion End-->
<!-- footer start-->
<footer class="lan-footer space-py-10">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="support-contain">
                    <div class="codex-brand">
                        <p class="mt-20 mb-20"><?php echo e(__('Copyright')); ?> <?php echo e(date('Y')); ?> <?php echo e(env('APP_NAME')); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end-->
<!-- tap to top start-->
<div class="scroll-top"><i class="fa fa-angle-double-up"></i></div>
<!-- tap to top end-->
<!-- main jquery-->
<script src="<?php echo e(asset('assets/js/jquery.js')); ?>"></script>
<!-- Feather iocns js-->
<script src="<?php echo e(asset('assets/js/icons/feather-icon/feather.js')); ?>"></script>
<!-- Wow js-->
<script src="<?php echo e(asset('assets/js/vendors/wow.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/vendors/slider/slick-sldier/slick.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/vendors/slider/slick-sldier/slick-custom.js')); ?>"></script>

<!-- Bootstrap js-->
<script src="<?php echo e(asset('assets/js/bootstrap.bundle.js')); ?>"></script>
<script>
    //*** Header Js ***//
    $(window).scroll(function () {
        if ($(window).scrollTop() > 100) {
            $('header').addClass('sticky');
        } else {
            $('header').removeClass('sticky');
        }
    });

    //*** Menu Js ***//
    $(document).on("click", '.menu-action', function () {
        $('.menu-list').toggleClass('open');
    });
    $(document).on("click", '.close-menu', function () {
        $('.menu-list').removeClass('open');
    });

    //*** BACK TO TOP START ***//
    $(window).scroll(function () {
        if ($(window).scrollTop() > 450) {
            $('.scroll-top').addClass('show');
        } else {
            $('.scroll-top').removeClass('show');
        }
    });
    $(document).ready(function () {
        $(document).on("click", '.scroll-top', function () {
            $('html, body').animate({scrollTop: 0}, '450');
        });
    });

    //*** WOW Js ***//
    new WOW().init();
</script>
</body>
</html>
<?php /**PATH /home/manmohan/Desktop/migration-tracking-system/resources/views/layouts/landing.blade.php ENDPATH**/ ?>