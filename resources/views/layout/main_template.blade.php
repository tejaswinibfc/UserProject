<!doctype html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" loader="disable">


<!-- Mirrored from laravelui.spruko.com/vexel/index by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 11:22:25 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="vexel – Laravel Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin panel template, admin dashboard template, admin panel, bootstrap admin template, dashboard, laravel, bootstrap dashboard, admin dashboard, admin panel laravel template, laravel framework, admin laravel, laravel admin panel.">

    <!-- TITLE -->
    <title>Vexel – Laravel Bootstrap 5 Admin &amp; Dashboard Template </title>

    <!-- Favicon -->
    <link rel="icon" href="build/assets/images/brand/favicon.ico" type="image/x-icon">

    <!-- ICONS CSS -->
    <link href="build/assets/iconfonts/icons.css" rel="stylesheet">

    <!-- Main Theme Js -->
    <script src="build/assets/main.js"></script>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="build/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Choices JS -->
    <script src="build/assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Simplebar Css -->
    <link href="build/assets/libs/simplebar/simplebar.min.css" rel="stylesheet">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="build/assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="build/assets/libs/%40simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="build/assets/libs/choices.js/public/assets/styles/choices.min.css">
    <!-- APP CSS & APP SCSS -->
    <link rel="preload" as="style" href="build/assets/app-e29e56ca.css" />
    <link rel="stylesheet" href="build/assets/app-e29e56ca.css" />

</head>

<body class="app sidebar-mini">

    <!-- Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fe fe-x fs-18"></i></button>
        </div>
        <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                    <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home" type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                    <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile" type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab" tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-light-theme">
                                        Light
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-dark-theme">
                                        Dark
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-ltr">
                                        LTR
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-rtl">
                                        RTL
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-sm-4 col-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-vertical">
                                        Vertical
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical" checked>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-horizontal">
                                        Horizontal
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style" id="switcher-horizontal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-click">
                                        Menu Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-menu-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-hover">
                                        Menu Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-menu-hover">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-click">
                                        Icon Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-icon-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-hover">
                                        Icon Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-icon-hover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-default-menu">
                                        Default Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-default-menu" checked>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-closed-menu">
                                        Closed Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-closed-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icontext-menu">
                                        Icon Text
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-icontext-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-overlay">
                                        Icon Overlay
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-icon-overlay">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-detached">
                                        Detached
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-detached">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-double-menu">
                                        Double Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-double-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-regular">
                                        Regular
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-classic">
                                        Classic
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-sm-4 col-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-full-width">
                                        Full Width
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width" checked>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-boxed">
                                        Boxed
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-sm-4 col-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed" checked>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-sm-4 col-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions" id="switcher-header-fixed" checked>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions" id="switcher-header-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Loader:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-enable">
                                        Enable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader" id="switcher-loader-enable" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-disable">
                                        Disable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader" id="switcher-loader-disable" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors" id="switcher-menu-light">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors" id="switcher-menu-dark" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors" id="switcher-menu-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors" id="switcher-menu-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu" type="radio" name="menu-colors" id="switcher-menu-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Light Header" type="radio" name="header-colors" id="switcher-header-light" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Dark Header" type="radio" name="header-colors" id="switcher-header-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Color Header" type="radio" name="header-colors" id="switcher-header-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors" id="switcher-header-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors" id="switcher-header-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-1" type="radio" name="theme-primary" id="switcher-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-2" type="radio" name="theme-primary" id="switcher-primary1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary" id="switcher-primary2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary" id="switcher-primary3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary" id="switcher-primary4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"></div>
                                    <div class="pickr-container-primary"></div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-1" type="radio" name="theme-background" id="switcher-background">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-2" type="radio" name="theme-background" id="switcher-background1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background" id="switcher-background2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-4" type="radio" name="theme-background" id="switcher-background3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-5" type="radio" name="theme-background" id="switcher-background4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"></div>
                                    <div class="pickr-container-background"></div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">Menu With Background Image:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img1" type="radio" name="theme-background" id="switcher-bg-img">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img2" type="radio" name="theme-background" id="switcher-bg-img1">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background" id="switcher-bg-img2">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img4" type="radio" name="theme-background" id="switcher-bg-img3">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img5" type="radio" name="theme-background" id="switcher-bg-img4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center canvas-footer flex-wrap">
                    <a href="https://themeforest.net/item/vexel-laravel-admin-dashboard-bootstrap-template/49495937" target="_blank" class="btn btn-primary m-1">Buy Now</a>
                    <a href="https://themeforest.net/user/spruko/portfolio" class="btn btn-secondary m-1" target="_blank">Our Portfolio</a>
                    <a href="javascript:void(0);" id="reset-all" class="btn btn-danger m-1">Reset</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End switcher -->

    <!-- GLOBAL-LOADER -->
    <div id="loader">
        <img src="build/assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- Main-Header -->
            <header class="app-header header sticky">

                <!-- Start::main-header-container -->
                <div class="main-header-container container-fluid">

                    <!-- Start::header-content-left -->
                    <div class="header-content-left align-items-center">

                        <div class="header-element">
                            <div class="horizontal-logo">
                                <a href="index.html" class="header-logo">
                                    <img src="build/assets/images/brand/desktop-logo.png" alt="logo" class="desktop-logo">
                                    <img src="build/assets/images/brand/toggle-logo.png" alt="logo" class="toggle-logo">
                                    <img src="build/assets/images/brand/desktop-dark.png" alt="logo" class="desktop-dark">
                                    <img src="build/assets/images/brand/toggle-dark.png" alt="logo" class="toggle-dark">
                                </a>
                            </div>
                        </div>
                        <!-- Start::header-element -->
                        <div class="header-element">
                            <!-- Start::header-link -->
                            <a href="javascript:void(0);" class="sidemenu-toggle header-link" data-bs-toggle="sidebar">
                                <span class="open-toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 24 24">
                                        <path d="M24 0v24H0V0h24z" fill="none" opacity=".87" />
                                        <path d="M18.41 16.59L13.82 12l4.59-4.59L17 6l-6 6 6 6 1.41-1.41zM6 6h2v12H6V6z" />
                                    </svg>
                                </span>
                                <span class="close-toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 24 24" fill="#000000">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
                                    </svg>
                                </span>
                            </a>
                            <!-- End::header-link -->
                        </div>
                        <!-- End::header-element -->


                        <div class="main-header-center  d-none d-lg-block  header-link">
                            <input type="text" class="form-control" id="typehead" placeholder="Search for results..." autocomplete="off">
                            <button class="btn pe-1"><i class="fe fe-search" aria-hidden="true"></i></button>
                            <div id="headersearch" class="header-search">
                                <div class="p-3">
                                    <div class="">
                                        <p class="fw-semibold text-muted mb-2 fs-13">Recent Searches</p>
                                        <div class="ps-2">
                                            <a href="javascript:void(0);" class="search-tags"><i class="fe fe-search me-2"></i>People<span></span></a>
                                            <a href="javascript:void(0);" class="search-tags"><i class="fe fe-search me-2"></i>Pages<span></span></a>
                                            <a href="javascript:void(0);" class="search-tags"><i class="fe fe-search me-2"></i>Articles<span></span></a>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="fw-semibold text-muted mb-2 fs-13">Apps and pages</p>
                                        <ul class="ps-2">
                                            <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                                                <a href="calendar2.html"><span><i class='bi bi-calendar me-2 fs-14 bg-primary-transparent avatar rounded-circle '></i>Calendar</span></a>
                                            </li>
                                            <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                                                <a href="email-inbox.html"><span><i class='bi bi-envelope me-2 fs-14 bg-primary-transparent avatar rounded-circle'></i>Mail</span></a>
                                            </li>
                                            <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                                                <a href="buttons.html"><span><i class='bi bi-dice-1 me-2 fs-14 bg-primary-transparent avatar rounded-circle '></i>Buttons</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-3">
                                        <p class="fw-semibold text-muted mb-2 fs-13">Links</p>
                                        <ul class="ps-2">
                                            <li class="p-1 align-items-center text-muted mb-1 search-app">
                                                <a href="javascript:void(0);" class="text-primary"><u>http://spruko/html/spruko.com</u></a>
                                            </li>
                                            <li class="p-1 align-items-center text-muted mb-1 search-app">
                                                <a href="javascript:void(0);" class="text-primary"><u>http://spruko/demo/spruko.com</u></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="py-3 border-top px-0">
                                    <div class="text-center">
                                        <a href="javascript:void(0);" class="text-primary text-decoration-underline fs-15">View all</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- header search -->



                    </div>
                    <!-- End::header-content-left -->

                    <!-- Start::header-content-right -->
                    <div class="header-content-right">
                        <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                        </button>
                        <div class="navbar navbar-collapse responsive-navbar p-0">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                <div class="d-flex align-items-center">
                                    <!-- Start::header-element -->
                                    <!-- Start::country select collapse -->
                                    <!-- <div class="header-element country-dropdown dropdown-center"> -->
                                    <!-- Start::header-link|dropdown-toggle -->
                                    <!-- <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="build/assets/images/flags-img/us_flag.jpg" class="rounded-circle header-link-icon" alt="img">
                                        </a> -->
                                    <!-- End::header-link|dropdown-toggle -->
                                    <!-- Start::main-header-dropdown -->
                                    <!-- <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                                            <ul class="mb-0">
                                                <li class="dropdown-item mb-1">
                                                    <div class="d-flex align-items-center">
                                                        <div class="pe-2">
                                                            <img src="build/assets/images/flags-img/india_flag.jpg" class="rounded-circle country-img" alt="img">
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="mb-0 fs-15">India</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-item mb-1">
                                                    <div class="d-flex align-items-center">
                                                        <div class="pe-2">
                                                            <img src="build/assets/images/flags-img/malaysia.jpg" class="rounded-circle country-img" alt="img">
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="mb-0 fs-15">Malaysia</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-item mb-1">
                                                    <div class="d-flex align-items-center">
                                                        <div class="pe-2">
                                                            <img src="build/assets/images/flags-img/italy_flag.jpg" class="rounded-circle country-img" alt="img">
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="mb-0 fs-15">Italy</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-item mb-1">
                                                    <div class="d-flex align-items-center">
                                                        <div class="pe-2">
                                                            <img src="build/assets/images/flags-img/argentina.jpg" class="rounded-circle country-img" alt="img">
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="mb-0 fs-15">Argentina</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-item active mb-1">
                                                    <div class="d-flex align-items-center">
                                                        <div class="pe-2">
                                                            <img src="build/assets/images/flags-img/us_flag.jpg" class="rounded-circle country-img" alt="img">
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="mb-0 fs-15">USA</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-item mb-1">
                                                    <div class="d-flex align-items-center">
                                                        <div class="pe-2">
                                                            <img src="build/assets/images/flags-img/turkey.jpg" class="rounded-circle country-img" alt="img">
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="mb-0 fs-15">Turkey</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> -->
                                    <!-- End::main-header-dropdown -->
                                    <!-- </div> -->
                                    <!-- End::country select collapse -->

                                    <!-- Start::header-element -->
                                    <!-- <div class="header-element header-theme-mode"> -->
                                    <!-- Start::header-link|layout-setting -->
                                    <!-- <a href="javascript:void(0);" class="header-link layout-setting">
                                            <span class="light-layout"> -->
                                    <!-- Start::header-link-icon -->
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="header-link-icon" viewBox="0 0 24 24">
                                                    <g>
                                                        <rect fill="none" height="24" width="24" />
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M19.78,17.51c-2.47,0-6.57-1.33-8.68-5.43C8.77,7.57,10.6,3.6,11.63,2.01C6.27,2.2,1.98,6.59,1.98,12 c0,0.14,0.02,0.28,0.02,0.42C2.61,12.16,3.28,12,3.98,12c0,0,0,0,0,0c0-3.09,1.73-5.77,4.3-7.1C7.78,7.09,7.74,9.94,9.32,13 c1.57,3.04,4.18,4.95,6.8,5.86c-1.23,0.74-2.65,1.15-4.13,1.15c-0.5,0-1-0.05-1.48-0.14c-0.37,0.7-0.94,1.27-1.64,1.64 c0.98,0.32,2.03,0.5,3.11,0.5c3.5,0,6.58-1.8,8.37-4.52C20.18,17.5,19.98,17.51,19.78,17.51z" />
                                                            <path d="M7,16l-0.18,0C6.4,14.84,5.3,14,4,14c-1.66,0-3,1.34-3,3s1.34,3,3,3c0.62,0,2.49,0,3,0c1.1,0,2-0.9,2-2 C9,16.9,8.1,16,7,16z" />
                                                        </g>
                                                    </g>
                                                </svg> -->
                                    <!-- End::header-link-icon -->
                                    <!-- </span>
                                            <span class="dark-layout"> -->
                                    <!-- Start::header-link-icon -->
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="header-link-icon" viewBox="0 0 24 24">
                                                    <rect fill="none" height="24" width="24" />
                                                    <path d="M12,9c1.65,0,3,1.35,3,3s-1.35,3-3,3s-3-1.35-3-3S10.35,9,12,9 M12,7c-2.76,0-5,2.24-5,5s2.24,5,5,5s5-2.24,5-5 S14.76,7,12,7L12,7z M2,13l2,0c0.55,0,1-0.45,1-1s-0.45-1-1-1l-2,0c-0.55,0-1,0.45-1,1S1.45,13,2,13z M20,13l2,0c0.55,0,1-0.45,1-1 s-0.45-1-1-1l-2,0c-0.55,0-1,0.45-1,1S19.45,13,20,13z M11,2v2c0,0.55,0.45,1,1,1s1-0.45,1-1V2c0-0.55-0.45-1-1-1S11,1.45,11,2z M11,20v2c0,0.55,0.45,1,1,1s1-0.45,1-1v-2c0-0.55-0.45-1-1-1C11.45,19,11,19.45,11,20z M5.99,4.58c-0.39-0.39-1.03-0.39-1.41,0 c-0.39,0.39-0.39,1.03,0,1.41l1.06,1.06c0.39,0.39,1.03,0.39,1.41,0s0.39-1.03,0-1.41L5.99,4.58z M18.36,16.95 c-0.39-0.39-1.03-0.39-1.41,0c-0.39,0.39-0.39,1.03,0,1.41l1.06,1.06c0.39,0.39,1.03,0.39,1.41,0c0.39-0.39,0.39-1.03,0-1.41 L18.36,16.95z M19.42,5.99c0.39-0.39,0.39-1.03,0-1.41c-0.39-0.39-1.03-0.39-1.41,0l-1.06,1.06c-0.39,0.39-0.39,1.03,0,1.41 s1.03,0.39,1.41,0L19.42,5.99z M7.05,18.36c0.39-0.39,0.39-1.03,0-1.41c-0.39-0.39-1.03-0.39-1.41,0l-1.06,1.06 c-0.39,0.39-0.39,1.03,0,1.41s1.03,0.39,1.41,0L7.05,18.36z" />
                                                </svg> -->
                                    <!-- End::header-link-icon -->
                                    <!-- </span>
                                        </a> -->
                                    <!-- End::header-link|layout-setting -->
                                    <!-- </div> -->
                                    <!-- End::header-element -->

                                    <!-- Start::header-element -->
                                    <div class="header-element header-search ">
                                        <!-- Start::header-link -->
                                        <a href="javascript:void(0);" class="header-link d-lg-none d-block" data-bs-toggle="modal" data-bs-target="#searchModal">
                                            <!-- <i class="bi bi-search-alt-2   ps-0"></i> -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 24 24" width="24px">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                                            </svg>
                                        </a>
                                        <!-- End::header-link -->
                                    </div>
                                    <!-- End::header-element -->

                                    <!-- Start::header-element -->
                                    <!-- <div class="header-element dropdown-center cart-dropdown"> -->
                                    <!-- Start::header-link|dropdown-toggle -->
                                    <!-- <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                            </svg>
                                            <span class="badge bg-primary rounded-pill header-icon-badge" id="cart-icon-badge">5</span>
                                        </a> -->
                                    <!-- End::header-link|dropdown-toggle -->
                                    <!-- Start::main-header-dropdown -->
                                    <!-- <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                                            <div class="p-3 border-bottom">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="mb-0 fs-15 fw-semibold">Cart Items</p>
                                                    <span class="badge bg-secondary-transparent" id="cart-data">5
                                                        Items</span>
                                                </div>
                                            </div>
                                            <ul class="mb-0 overflow-auto" id="header-cart-items-scroll">
                                                <li class="dropdown-item">
                                                    <div class="d-flex align-items-start cart-dropdown-item">
                                                        <img src="build/assets/images/products/8.jpg" alt="img" class="avatar avatar-md br-5 me-3">
                                                        <div class="flex-grow-1">
                                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                                <div class="mb-0 fs-14 fw-semibold">
                                                                    <a href="cart.html" class="text-dark">White Tshirt</a>
                                                                </div>
                                                                <div>
                                                                    <span class="fs-15 mb-1">$1,299.00</span>
                                                                    <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                                <ul class="header-product-item">
                                                                    <li>Quantity: 1</li>
                                                                    <li>Size: XL</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-item">
                                                    <div class="d-flex align-items-start cart-dropdown-item">
                                                        <img src="build/assets/images/products/2.jpg" alt="img" class="avatar avatar-md br-5 me-3">
                                                        <div class="flex-grow-1">
                                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                                <div class="mb-0 fs-14 text-dark fw-semibold">
                                                                    <a href="cart.html" class="text-dark">Canvas Shoes</a>
                                                                </div>
                                                                <div>
                                                                    <span class="fs-15 mb-1">$179.29</span>
                                                                    <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                                <ul class="header-product-item">
                                                                    <li>Quantity: 2</li>
                                                                    <li>Size: L</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-item">
                                                    <div class="d-flex align-items-start cart-dropdown-item">
                                                        <img src="build/assets/images/products/1.jpg" alt="img" class="avatar avatar-md br-5 me-3">
                                                        <div class="flex-grow-1">
                                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                                <div class="mb-0 fs-14 text-dark fw-semibold">
                                                                    <a href="cart.html" class="text-dark">Photo
                                                                        Frame</a>
                                                                </div>
                                                                <div>
                                                                    <span class="fs-15 mb-1">$29.00</span>
                                                                    <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                                <ul class="header-product-item">
                                                                    <li>Quantity: 5</li>
                                                                    <li>Size: M</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-item">
                                                    <div class="d-flex align-items-start cart-dropdown-item">
                                                        <img src="build/assets/images/products/3.jpg" alt="img" class="avatar avatar-md br-5 me-3">
                                                        <div class="flex-grow-1">
                                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                                <div class="mb-0 fs-14 text-dark fw-semibold">
                                                                    <a href="cart.html" class="text-dark">Flower pot</a>
                                                                </div>
                                                                <div>
                                                                    <span class="fs-15 mb-1">$4,999.00</span>
                                                                    <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                                <ul class="header-product-item">
                                                                    <li>Quantity: 2</li>
                                                                    <li>Size: XXL</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-item">
                                                    <div class="d-flex align-items-start cart-dropdown-item">
                                                        <img src="build/assets/images/products/5.jpg" alt="img" class="avatar avatar-md br-5 me-3">
                                                        <div class="flex-grow-1">
                                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                                <div class="mb-0 fs-14 text-dark fw-semibold">
                                                                    <a href="cart.html" class="text-dark">Kikon Camera</a>
                                                                </div>
                                                                <div>
                                                                    <span class="fs-15 mb-1">$129.00</span>
                                                                    <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                                <ul class="header-product-item">
                                                                    <li>Quantity: 4</li>
                                                                    <li>Size: XS</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="p-3 empty-header-item border-top">
                                                <div class="d-grid">
                                                    <a href="checkout.html" class="btn btn-primary">Proceed to
                                                        checkout</a>
                                                </div>
                                            </div>
                                            <div class="p-5 empty-item d-none">
                                                <div class="text-center">
                                                    <span class="avatar avatar-xl rounded-2 bg-warning-transparent">
                                                        <i class="ri-shopping-cart-2-line fs-2"></i>
                                                    </span>
                                                    <h6 class="fw-bold mb-1 mt-3">Your Cart is Empty</h6>
                                                    <a href="shop.html" class="btn btn-primary btn-wave btn-sm m-1" data-abc="true">Back to Shop <i class="bi bi-arrow-right ms-1"></i></a>
                                                </div>
                                            </div>
                                        </div> -->
                                    <!-- End::main-header-dropdown -->
                                    <!-- </div> -->
                                    <!-- End::header-element -->

                                    <!-- Start::header-element -->
                                    <!-- <div class="header-element dropdown-center notifications-dropdown"> -->
                                    <!-- Start::header-link|dropdown-toggle -->
                                    <!-- <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z" />
                                            </svg>
                                            <span class="badge bg-secondary rounded-pill header-icon-badge pulse pulse-secondary" id="notification-icon-badge">4</span>
                                        </a> -->
                                    <!-- End::header-link|dropdown-toggle -->
                                    <!-- Start::main-header-dropdown -->
                                    <!-- <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none"> -->
                                    <!-- <div class="p-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="mb-0 fs-15 fw-semibold">Notifications</p>
                                                    <a href="javascript:void(0);" class="badge bg-secondary-transparent" id="notifiation-data">4 Items</a>
                                                </div>
                                            </div>
                                            <div class="dropdown-divider my-0"></div>
                                            <ul class="list-unstyled mb-0">
                                                <li class="dropdown-item mb-1">
                                                    <div class="d-flex align-items-start">
                                                        <div class="pe-2">
                                                            <span class="avatar avatar-md bg-primary rounded-circle"><i class="ti ti-gift fs-18"></i></span>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <div>
                                                                    <a href="notify-list.html" class="mb-0 fs-13 font-weight-semibold text-dark">Nile
                                                                        Robetz send to a HTML file for Upload</a>
                                                                    <div class="p-1 text-warning">
                                                                        <span class="fs-12 me-2"><i class="bi bi-folder2-open me-1 fs-14"></i>HTML
                                                                            File</span>
                                                                        <span class="fs-13"><i class="bi bi-download"></i></span>
                                                                    </div>
                                                                </div>
                                                                <a href="javascript:void(0);" class="min-w-fit-content text-muted text-opacity-75 ms-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-item mb-1">
                                                    <div class="d-flex align-items-start">
                                                        <div class="pe-2">
                                                            <span class="avatar avatar-md bg-secondary rounded-circle"><i class="ti ti-discount-2 fs-18"></i></span>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <div>
                                                                    <a href="notify-list.html" class="mb-0 fs-13 font-weight-semibold text-dark">Conference
                                                                        meeting about client project</a>
                                                                    <div class="p-1">
                                                                        <span class="fs-11 text-muted me-3"><i class="bi bi-calendar me-1"></i>Monday -
                                                                            11:00 AM - 45 minutes</span>
                                                                    </div>
                                                                    <a href="profile.html" class="d-flex align-items-center mt-1">
                                                                        <span class="avatar avatar-sm brround">
                                                                            <img src="build/assets/images/users/1.jpg" class="brround" alt="img">
                                                                        </span>
                                                                        <span class="ms-2 fs-13 text-gray-600">Nile
                                                                            Rebort</span>
                                                                    </a>
                                                                </div>
                                                                <a href="javascript:void(0);" class="min-w-fit-content text-muted text-opacity-75 ms-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-item mb-1">
                                                    <div class="d-flex align-items-start">
                                                        <div class="pe-2">
                                                            <span class="avatar avatar-md bg-pink rounded-circle"><i class="ti ti-user-check fs-18"></i></span>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <a href="notify-list.html" class="mb-0 fs-13 font-weight-semibold text-dark">Taylor
                                                                    invite to a design channel</a>
                                                                <a href="javascript:void(0);" class="min-w-fit-content text-muted text-opacity-75 ms-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                                            </div>
                                                            <div class="fs-12">
                                                                <small class="text-muted fs-12">Hi, can i change my
                                                                    commission amount?</small>
                                                                <div class="mt-2">
                                                                    <button type="button" class="btn btn-primary-light btn-sm me-1 fs-11">Accept</button>
                                                                    <button type="button" class="btn btn-danger-light btn-sm fs-11">Reject</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-item mb-1">
                                                    <div class="d-flex align-items-start">
                                                        <div class="pe-2">
                                                            <span class="avatar avatar-md bg-warning rounded-circle"><i class="ti ti-circle-check fs-18"></i></span>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <a href="notify-list.html" class="mb-0 fs-13 font-weight-semibold text-dark">Order
                                                                    Placed <span class="text-primary">ID:
                                                                        #1116773</span></a>
                                                                <a href="javascript:void(0);" class="min-w-fit-content text-muted text-opacity-75 ms-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                                            </div>
                                                            <div class="d-flex align-items-center justify-conent-between fs-12">
                                                                <span class="text-muted">Order Placed
                                                                    Successfully</span>
                                                                <span class="align-self-end min-w-fit-content text-muted mg-s-5">12:46</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul> -->
                                    <!-- <div class="dropdown-divider"></div> -->
                                    <!-- <div class="p-3 empty-header-item1">
                                                <div class="d-grid">
                                                    <a href="notify-list.html" class="btn btn-primary">View All</a>
                                                </div>
                                            </div>
                                            <div class="p-5 empty-item1 d-none">
                                                <div class="text-center">
                                                    <span class="avatar avatar-xl rounded-2 bg-secondary-transparent">
                                                        <i class="ri-notification-off-line fs-2"></i>
                                                    </span>
                                                    <h6 class="fw-semibold mt-3">No New Notifications</h6>
                                                </div>
                                            </div> -->
                                    <!-- </div> -->
                                    <!-- End::main-header-dropdown -->
                                    <!-- </div> -->
                                    <!-- End::header-element -->

                                    <!-- Start::header-element -->
                                    <!-- <div class="header-element dropdown-center header-shortcuts-dropdown"> -->
                                    <!-- Start::header-link|dropdown-toggle -->
                                    <!-- <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" id="notificationDropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z" />
                                            </svg>
                                        </a> -->
                                    <!-- End::header-link|dropdown-toggle -->
                                    <!-- Start::main-header-dropdown -->
                                    <!-- <div class="main-header-dropdown header-shortcuts-dropdown dropdown-menu pb-0 dropdown-menu-end" aria-labelledby="notificationDropdown">
                                            <div class="p-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="mb-0 fs-17 fw-semibold">Related Apps</p>
                                                </div>
                                            </div>
                                            <div class="dropdown-divider my-0"></div>
                                            <div class="main-header-shortcuts py-1 px-4" id="header-shortcut-scroll">
                                                <div class="row">
                                                    <div class="col-4 p-1 mt-0">
                                                        <a href="chat.html">
                                                            <div class="text-center p-3 related-app border rounded-2">
                                                                <span>
                                                                    <i class="mdi mdi-message-outline text-primary fs-24"></i>
                                                                </span>
                                                                <span class="d-block fs-12 text-dark">Chat</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-4 p-1 mt-0">
                                                        <a href="file-manager.html">
                                                            <div class="text-center p-3 related-app border rounded-2">
                                                                <span>
                                                                    <i class="mdi mdi-file-multiple-outline text-info fs-24"></i>
                                                                </span>
                                                                <span class="d-block fs-12 text-dark">Files</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-4 p-1 mt-0">
                                                        <a href="calendar2.html">
                                                            <div class="text-center p-3 related-app border rounded-2">
                                                                <span>
                                                                    <i class="mdi mdi-calendar-range-outline text-warning fs-24"></i>
                                                                </span>
                                                                <span class="d-block fs-12 text-dark">Calendar</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-4 p-1 mt-0">
                                                        <a href="settings.html">
                                                            <div class="text-center p-3 related-app border rounded-2">
                                                                <span>
                                                                    <i class="mdi mdi-cog-outline text-info fs-24"></i>
                                                                </span>
                                                                <span class="d-block fs-12 text-dark">Settings</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-4 p-1 mt-0">
                                                        <a href="faq.html">
                                                            <div class="text-center p-3 related-app border rounded-2">
                                                                <span>
                                                                    <i class="mdi mdi-help-circle-outline text-success fs-24"></i>
                                                                </span>
                                                                <span class="d-block fs-12 text-dark">Help</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-4 p-1 mt-0">
                                                        <a href="profile.html">
                                                            <div class="text-center p-3 related-app border rounded-2">
                                                                <span>
                                                                    <i class="mdi mdi-account-outline text-primary fs-24"></i>
                                                                </span>
                                                                <span class="d-block fs-12 text-dark">Profile</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-4 p-1 mt-0">
                                                        <a href="about.html">
                                                            <div class="text-center p-3 related-app border rounded-2">
                                                                <span>
                                                                    <i class="mdi mdi-phone text-primary fs-24"></i>
                                                                </span>
                                                                <span class="d-block fs-12 text-dark">Contact</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-4 p-1 mt-0">
                                                        <a href="rating.html">
                                                            <div class="text-center p-3 related-app border rounded-2">
                                                                <span>
                                                                    <i class="mdi mdi-comment-quote-outline text-secondary fs-24"></i>
                                                                </span>
                                                                <span class="d-block fs-12 text-dark">Feeback</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-4 p-1 mt-0">
                                                        <a href="login.html">
                                                            <div class="text-center p-3 related-app border rounded-2">
                                                                <span>
                                                                    <i class="mdi mdi-logout text-warning fs-24 "></i>
                                                                </span>
                                                                <span class="d-block fs-12 text-dark">Logout</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-3 border-top">
                                                <div class="d-grid">
                                                    <a href="javascript:void(0);" class="btn btn-primary">View All</a>
                                                </div>
                                            </div>
                                        </div> -->
                                    <!-- End::main-header-dropdown -->
                                    <!-- </div> -->
                                    <!-- End::header-element -->

                                    <!-- Start::header-element -->
                                    <div class="header-element header-fullscreen">
                                        <!-- Start::header-link -->
                                        <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon full-screen-open" viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" class="header-link-icon full-screen-close d-none" viewBox="0 0 24 24" width="24px" fill="none">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path d="M5 16h3v3h2v-5H5v2zm3-8H5v2h5V5H8v3zm6 11h2v-3h3v-2h-5v5zm2-11V5h-2v5h5V8h-3z" />
                                            </svg>
                                        </a>
                                        <!-- End::header-link -->
                                    </div>
                                    <!-- End::header-element -->

                                    <!-- Start::header-element|main-profile-user -->
                                    <div class="header-element main-profile-user">
                                        <!-- Start::header-link|dropdown-toggle -->
                                        <a href="javascript:void(0);" class="header-link dropdown-toggle d-flex align-items-center" id="mainHeaderProfile" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="me-2">
                                                <img src="build/assets/images/users/21.jpg" alt="img" width="30" height="30" class="rounded-circle">
                                            </span>
                                            <div class="d-xl-block d-none lh-1">
                                                <h6 class="fs-13 font-weight-semibold mb-0">{{Auth::user()->name}}</h6>
                                                <!-- <span class="op-8 fs-10">Web Designer</span> -->
                                            </div>
                                        </a>
                                        <!-- End::header-link|dropdown-toggle -->
                                        <ul class="dropdown-menu pt-0 overflow-hidden dropdown-menu-end mt-1" aria-labelledby="mainHeaderProfile">
                                            <li><a class="dropdown-item" href="{{route('profile')}}"><i class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile</a></li>
                                            <li><a class="dropdown-item" href="{{route('dashboard')}}"><i class="ti ti-inbox fs-18 me-2 op-7"></i>Dashboard</a></li>

                                            <li><a class="dropdown-item" href="{{route('logout')}}"><i class="ti ti-power fs-18 me-2 op-7"></i>Sign Out</a></li>
                                            <li>
                                                <hr class="dropdown-divider my-0">
                                            </li>

                                        </ul>
                                    </div>
                                    <!-- End::header-element|main-profile-user -->


                                </div>
                            </div>
                        </div>
                        <!-- Start::header-element -->
                        <div class="header-element">
                            <!-- Start::header-link|switcher-icon -->
                            <a href="javascript:void(0);" class="header-link switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="header-link-icon fa-spin">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" />
                                </svg>
                            </a>
                            <!-- End::header-link|switcher-icon -->
                        </div>
                        <!-- End::header-element -->

                    </div>
                    <!-- End::header-content-right -->
                </div>
                <!-- End::main-header-container -->

            </header>
            <!-- End Main-Header -->

            <!--Main-Sidebar-->
            <aside class="app-sidebar sticky" id="sidebar">

                <!-- Start::main-sidebar-header -->
                <div class="main-sidebar-header">
                    <a href="index.html" class="header-logo">
                        <img src="build/assets/images/brand/desktop-logo.png" alt="logo" class="desktop-logo">
                        <img src="build/assets/images/brand/toggle-logo.png" alt="logo" class="toggle-logo">
                        <img src="build/assets/images/brand/desktop-dark.png" alt="logo" class="desktop-dark">
                        <img src="build/assets/images/brand/toggle-dark.png" alt="logo" class="toggle-dark">
                    </a>
                </div>
                <!-- End::main-sidebar-header -->

                <!-- Start::main-sidebar -->
                <div class="main-sidebar" id="sidebar-scroll">

                    <!-- Start::nav -->
                    <nav class="main-menu-container nav nav-pills flex-column sub-open">
                        <div class="slide-left" id="slide-left">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                            </svg>
                        </div>
                        <ul class="main-menu">
                            <!-- Start::slide__category -->
                            <li class="slide__category"><span class="category-name">Main</span></li>
                            <!-- End::slide__category -->

                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="index.html" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z" />
                                    </svg>
                                    <span class="side-menu__label">Dashboard</span>
                                </a>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide__category -->
                            <!-- <li class="slide__category"><span class="category-name">PAGES</span></li> -->
                            <!-- End::slide__category -->

                            <!-- Start::slide -->
                            <!-- <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="side-menu__icon">
                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                        <path d="M11.99 18.54l-7.37-5.73L3 14.07l9 7 9-7-1.63-1.27zM12 16l7.36-5.73L21 9l-9-7-9 7 1.63 1.27L12 16zm0-11.47L17.74 9 12 13.47 6.26 9 12 4.53z">
                                        </path>
                                    </svg>
                                    <span class="side-menu__label">Pages</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0);">Pages</a>
                                    </li>
                                    <li class="slide">
                                        <a href="profile.html" class="side-menu__item">Profile</a>
                                    </li>
                                    <li class="slide">
                                        <a href="notify-list.html" class="side-menu__item">Notification List</a>
                                    </li>
                                    <li class="slide">
                                        <a href="email-inbox.html" class="side-menu__item">Mail-Inbox</a>
                                    </li>
                                    <li class="slide">
                                        <a href="gallery.html" class="side-menu__item">Gallery</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Extension
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="about.html" class="side-menu__item">About Company</a>
                                            </li>
                                            <li class="slide">
                                                <a href="faq.html" class="side-menu__item">FAQS</a>
                                            </li>
                                            <li class="slide">
                                                <a href="terms.html" class="side-menu__item">Terms</a>
                                            </li>
                                            <li class="slide">
                                                <a href="invoice.html" class="side-menu__item">Invoice</a>
                                            </li>
                                            <li class="slide">
                                                <a href="pricing.html" class="side-menu__item">Pricing Tables</a>
                                            </li>
                                            <li class="slide">
                                                <a href="settings.html" class="side-menu__item">Settings</a>
                                            </li>
                                            <li class="slide">
                                                <a href="blog.html" class="side-menu__item">Blog</a>
                                            </li>
                                            <li class="slide">
                                                <a href="blog-details.html" class="side-menu__item">Blog Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="blog-post.html" class="side-menu__item">Blog Post</a>
                                            </li>
                                            <li class="slide">
                                                <a href="emptypage.html" class="side-menu__item">Empty Page</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">File Manager
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="file-manager.html" class="side-menu__item">File Manager</a>
                                            </li>
                                            <li class="slide">
                                                <a href="filemanager-list.html" class="side-menu__item">File Manager
                                                    List</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Ecommerce
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="shop.html" class="side-menu__item">Shop</a>
                                            </li>
                                            <li class="slide">
                                                <a href="shop-description.html" class="side-menu__item">Product
                                                    Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="cart.html" class="side-menu__item">Shopping Cart</a>
                                            </li>
                                            <li class="slide">
                                                <a href="add-product.html" class="side-menu__item">Add Product</a>
                                            </li>
                                            <li class="slide">
                                                <a href="wishlist.html" class="side-menu__item">Wishlist</a>
                                            </li>
                                            <li class="slide">
                                                <a href="checkout.html" class="side-menu__item">Checkout</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <!-- <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" class="side-menu__icon" fill="#000000">
                                        <path d="M11 15h2v2h-2v-2zm0-8h2v6h-2V7zm.99-5C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z">
                                        </path>
                                    </svg>
                                    <span class="side-menu__label">Authentication</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0);">Authentication</a>
                                    </li>
                                    <li class="slide">
                                        <a href="login.html" class="side-menu__item">LogIn</a>
                                    </li>
                                    <li class="slide">
                                        <a href="register.html" class="side-menu__item">Register</a>
                                    </li>
                                    <li class="slide">
                                        <a href="forgot-password.html" class="side-menu__item">Forgot Password</a>
                                    </li>
                                    <li class="slide">
                                        <a href="lockscreen.html" class="side-menu__item">Lock Screen</a>
                                    </li>
                                    <li class="slide">
                                        <a href="under-maintenance.html" class="side-menu__item">Under Maintenance</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Error Pages
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="error400.html" class="side-menu__item">400</a>
                                            </li>
                                            <li class="slide">
                                                <a href="error401.html" class="side-menu__item">401</a>
                                            </li>
                                            <li class="slide">
                                                <a href="error403.html" class="side-menu__item">403</a>
                                            </li>
                                            <li class="slide">
                                                <a href="error404.html" class="side-menu__item">404</a>
                                            </li>
                                            <li class="slide">
                                                <a href="error500.html" class="side-menu__item">500</a>
                                            </li>
                                            <li class="slide">
                                                <a href="error503.html" class="side-menu__item">503</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <!-- <li class="slide">
                                <a href="widgets.html" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 -960 960 960" fill="#000000">
                                        <path d="M679-466 466-679l213-213 213 213-213 213Zm-559-72v-301h301v301H120Zm418 418v-301h301v301H538Zm-418 0v-301h301v301H120Zm60-478h181v-181H180v181Zm502 51 129-129-129-129-129 129 129 129Zm-84 367h181v-181H598v181Zm-418 0h181v-181H180v181Zm181-418Zm192-78ZM361-361Zm237 0Z" />
                                    </svg>
                                    <span class="side-menu__label">Widgets</span>
                                </a>
                            </li> -->
                            <!-- End::slide -->

                            <!-- Start::slide__category -->
                            <!-- <li class="slide__category"><span class="category-name">GENERAL</span></li> -->
                            <!-- End::slide__category -->

                            <!-- Start::slide -->
                            <!-- <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                        <g>
                                            <rect fill="none" height="24" width="24" />
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M12,2C6.48,2,2,6.48,2,12c0,5.52,4.48,10,10,10s10-4.48,10-10 C22,6.48,17.52,2,12,2z M12,20c-4.41,0-8-3.59-8-8c0-4.41,3.59-8,8-8s8,3.59,8,8C20,16.41,16.41,20,12,20z" fill-rule="evenodd" />
                                                <path d="M13.49,11.38c0.43-1.22,0.17-2.64-0.81-3.62c-1.11-1.11-2.79-1.3-4.1-0.59 l2.35,2.35l-1.41,1.41L7.17,8.58c-0.71,1.32-0.52,2.99,0.59,4.1c0.98,0.98,2.4,1.24,3.62,0.81l3.41,3.41c0.2,0.2,0.51,0.2,0.71,0 l1.4-1.4c0.2-0.2,0.2-0.51,0-0.71L13.49,11.38z" fill-rule="evenodd" />
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="side-menu__label">UI Kit</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0);">UI Kit</a>
                                    </li>
                                    <li class="slide">
                                        <a href="alerts.html" class="side-menu__item">Alerts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="buttons.html" class="side-menu__item">Buttons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="colors.html" class="side-menu__item">Colors</a>
                                    </li>
                                    <li class="slide">
                                        <a href="avatars.html" class="side-menu__item">Avatars</a>
                                    </li>
                                    <li class="slide">
                                        <a href="dropdown.html" class="side-menu__item">Dropdowns</a>
                                    </li>
                                    <li class="slide">
                                        <a href="listgroup.html" class="side-menu__item">Listgroup</a>
                                    </li>
                                    <li class="slide">
                                        <a href="tags.html" class="side-menu__item">Tags</a>
                                    </li>
                                    <li class="slide">
                                        <a href="pagination.html" class="side-menu__item">Pagination</a>
                                    </li>
                                    <li class="slide">
                                        <a href="navigation.html" class="side-menu__item">Navigation</a>
                                    </li>
                                    <li class="slide">
                                        <a href="typography.html" class="side-menu__item">Typography</a>
                                    </li>
                                    <li class="slide">
                                        <a href="breadcrumbs.html" class="side-menu__item">Breadcrumbs</a>
                                    </li>
                                    <li class="slide">
                                        <a href="badge.html" class="side-menu__item">Badges / Pills</a>
                                    </li>
                                    <li class="slide">
                                        <a href="offcanvas.html" class="side-menu__item">Offcanvas</a>
                                    </li>
                                    <li class="slide">
                                        <a href="toast.html" class="side-menu__item">Toast</a>
                                    </li>
                                    <li class="slide">
                                        <a href="scrollspy.html" class="side-menu__item">Scrollspy</a>
                                    </li>
                                    <li class="slide">
                                        <a href="mediaobject.html" class="side-menu__item">Media Object</a>
                                    </li>
                                    <li class="slide">
                                        <a href="accordion.html" class="side-menu__item">Accordions</a>
                                    </li>
                                    <li class="slide">
                                        <a href="tabs.html" class="side-menu__item">Tabs</a>
                                    </li>
                                    <li class="slide">
                                        <a href="modal.html" class="side-menu__item">Modal</a>
                                    </li>
                                    <li class="slide">
                                        <a href="tooltipandpopover.html" class="side-menu__item">Tooltip and Popover</a>
                                    </li>
                                    <li class="slide">
                                        <a href="progress.html" class="side-menu__item">Progress</a>
                                    </li>
                                    <li class="slide">
                                        <a href="carousel.html" class="side-menu__item">Carousels</a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <!-- <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000" class="side-menu__icon">
                                        <g>
                                            <rect fill="none" height="24" width="24" />
                                        </g>
                                        <g>
                                            <g />
                                            <g>
                                                <circle cx="15.5" cy="9.5" r="1.5" />
                                                <circle cx="8.5" cy="9.5" r="1.5" />
                                                <path d="M12,18c2.28,0,4.22-1.66,5-4H7C7.78,16.34,9.72,18,12,18z" />
                                                <path d="M11.99,2C6.47,2,2,6.48,2,12c0,5.52,4.47,10,9.99,10C17.52,22,22,17.52,22,12C22,6.48,17.52,2,11.99,2z M12,20 c-4.42,0-8-3.58-8-8c0-4.42,3.58-8,8-8s8,3.58,8,8C20,16.42,16.42,20,12,20z" />
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="side-menu__label">Icons</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0);">Icons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="icons.html" class="side-menu__item">Font Awesome Icons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="icons2.html" class="side-menu__item">Material Design Icons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="icons3.html" class="side-menu__item">Simple Line Icons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="icons4.html" class="side-menu__item">Feather Icons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="icons5.html" class="side-menu__item">Ionic Icons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="icons6.html" class="side-menu__item">Flag Icons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="icons7.html" class="side-menu__item">Pe7 Icons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="icons8.html" class="side-menu__item">Typicon Icons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="icons9.html" class="side-menu__item">Weather Icons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="icons10.html" class="side-menu__item">Bootstrap Icons</a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <!-- <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                        <path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z">
                                        </path>
                                    </svg>
                                    <span class="side-menu__label">Admin UI</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0);">Admin UI</a>
                                    </li>
                                    <li class="slide">
                                        <a href="cards.html" class="side-menu__item">Cards Design</a>
                                    </li>
                                    <li class="slide">
                                        <a href="calendar2.html" class="side-menu__item">Full Calendar</a>
                                    </li>
                                    <li class="slide">
                                        <a href="chat.html" class="side-menu__item">Chat</a>
                                    </li>
                                    <li class="slide">
                                        <a href="notify.html" class="side-menu__item">Notifications</a>
                                    </li>
                                    <li class="slide">
                                        <a href="sweetalert.html" class="side-menu__item">Sweet alerts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="rangeslider.html" class="side-menu__item">Range slider</a>
                                    </li>
                                    <li class="slide">
                                        <a href="scroll.html" class="side-menu__item">Content Scroll bar</a>
                                    </li>
                                    <li class="slide">
                                        <a href="loaders.html" class="side-menu__item">Loaders</a>
                                    </li>
                                    <li class="slide">
                                        <a href="rating.html" class="side-menu__item">Rating</a>
                                    </li>
                                    <li class="slide">
                                        <a href="timeline.html" class="side-menu__item">Timeline</a>
                                    </li>
                                    <li class="slide">
                                        <a href="treeview.html" class="side-menu__item">Treeview</a>
                                    </li>
                                    <li class="slide">
                                        <a href="ribbons.html" class="side-menu__item">Ribbons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="swiper.html" class="side-menu__item">Swiper Js</a>
                                    </li>
                                    <li class="slide">
                                        <a href="users-list.html" class="side-menu__item">User List</a>
                                    </li>
                                    <li class="slide">
                                        <a href="search.html" class="side-menu__item">Search</a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <!-- <li class="slide">
                                <a href="landing-page.html" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="#000000">
                                        <g>
                                            <rect fill="none" height="24" width="24" />
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M6,15c-0.83,0-1.58,0.34-2.12,0.88C2.7,17.06,2,22,2,22s4.94-0.7,6.12-1.88C8.66,19.58,9,18.83,9,18C9,16.34,7.66,15,6,15 z M6.71,18.71c-0.28,0.28-2.17,0.76-2.17,0.76s0.47-1.88,0.76-2.17C5.47,17.11,5.72,17,6,17c0.55,0,1,0.45,1,1 C7,18.28,6.89,18.53,6.71,18.71z M17.42,13.65L17.42,13.65c6.36-6.36,4.24-11.31,4.24-11.31s-4.95-2.12-11.31,4.24l-2.49-0.5 C7.21,5.95,6.53,6.16,6.05,6.63L2,10.69l5,2.14L11.17,17l2.14,5l4.05-4.05c0.47-0.47,0.68-1.15,0.55-1.81L17.42,13.65z M7.41,10.83L5.5,10.01l1.97-1.97l1.44,0.29C8.34,9.16,7.83,10.03,7.41,10.83z M13.99,18.5l-0.82-1.91 c0.8-0.42,1.67-0.93,2.49-1.5l0.29,1.44L13.99,18.5z M16,12.24c-1.32,1.32-3.38,2.4-4.04,2.73l-2.93-2.93 c0.32-0.65,1.4-2.71,2.73-4.04c4.68-4.68,8.23-3.99,8.23-3.99S20.68,7.56,16,12.24z M15,11c1.1,0,2-0.9,2-2s-0.9-2-2-2s-2,0.9-2,2 S13.9,11,15,11z" />
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="side-menu__label">Landing Page</span>
                                </a>
                            </li> -->
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <!-- <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                        <path d="M11 7h6v2h-6zm0 4h6v2h-6zm0 4h6v2h-6zM7 7h2v2H7zm0 4h2v2H7zm0 4h2v2H7zM20.1 3H3.9c-.5 0-.9.4-.9.9v16.2c0 .4.4.9.9.9h16.2c.4 0 .9-.5.9-.9V3.9c0-.5-.5-.9-.9-.9zM19 19H5V5h14v14z">
                                        </path>
                                    </svg>
                                    <span class="side-menu__label">Nested Menu</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0);">Nested Menu</a>
                                    </li>
                                    <li class="slide">
                                        <a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Nested-2
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="javascript:void(0);" class="side-menu__item">Nested-2-1</a>
                                            </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item">Nested-2-2
                                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                <ul class="slide-menu child3">
                                                    <li class="slide">
                                                        <a href="javascript:void(0);" class="side-menu__item">Nested-2-2-1</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="javascript:void(0);" class="side-menu__item">Nested-2-2-2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- End::slide -->

                            <!-- Start::slide__category -->
                            <!-- <li class="slide__category"><span class="category-name">Forms & Tables</span></li> -->
                            <!-- End::slide__category -->

                            <!-- Start::slide -->
                            <!-- <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000" class="side-menu__icon">
                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                        <path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z">
                                        </path>
                                    </svg>
                                    <span class="side-menu__label">Forms</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1 mega-menu">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0);">Forms</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form-elements.html" class="side-menu__item">Form Elements</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form-layouts.html" class="side-menu__item">Form Layouts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form-advanced.html" class="side-menu__item">Form Advanced</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form-editor.html" class="side-menu__item">Form Editor</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form-validation.html" class="side-menu__item">Form Validation</a>
                                    </li>
                                    <li class="slide">
                                        <a href="form-input-spinners.html" class="side-menu__item">Form Input
                                            Spinners</a>
                                    </li>
                                    <li class="slide">
                                        <a href="select-2.html" class="side-menu__item">Select-2</a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <!-- <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="#000000">
                                        <g>
                                            <rect fill="none" height="24" width="24" />
                                        </g>
                                        <g>
                                            <g>
                                                <g>
                                                    <path d="M3,3v8h8V3H3z M9,9H5V5h4V9z M3,13v8h8v-8H3z M9,19H5v-4h4V19z M13,3v8h8V3H13z M19,9h-4V5h4V9z M13,13v8h8v-8H13z M19,19h-4v-4h4V19z" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="side-menu__label">Tables</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0);">Tables</a>
                                    </li>
                                    <li class="slide">
                                        <a href="tables.html" class="side-menu__item">Default Tables</a>
                                    </li>
                                    <li class="slide">
                                        <a href="datatable.html" class="side-menu__item">Data Tables</a>
                                    </li>
                                    <li class="slide">
                                        <a href="grid-tables.html" class="side-menu__item">Grid Tables</a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- End::slide -->

                            <!-- Start::slide__category -->
                            <!-- <li class="slide__category"><span class="category-name">Maps & Charts</span></li> -->
                            <!-- End::slide__category -->

                            <!-- Start::slide -->
                            <!-- <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000" class="side-menu__icon">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 12c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm6-1.8C18 6.57 15.35 4 12 4s-6 2.57-6 6.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14zM12 2c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C4 5.22 7.8 2 12 2z">
                                        </path>
                                    </svg>
                                    <span class="side-menu__label">Maps</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0);">Maps</a>
                                    </li>
                                    <li class="slide">
                                        <a href="maps1.html" class="side-menu__item">Leaflet Maps</a>
                                    </li>
                                    <li class="slide">
                                        <a href="maps2.html" class="side-menu__item">Google Maps</a>
                                    </li>
                                    <li class="slide">
                                        <a href="maps.html" class="side-menu__item">Vector Maps</a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <!-- <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000" class="side-menu__icon">
                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z">
                                        </path>
                                    </svg>
                                    <span class="side-menu__label">Charts</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0);">Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="chart-chartist.html" class="side-menu__item">Chart Js</a>
                                    </li>
                                    <li class="slide">
                                        <a href="chart-echart.html" class="side-menu__item">ECharts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="chart-apex.html" class="side-menu__item">Apex-Charts</a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- End::slide -->

                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                                </path>
                            </svg></div>
                    </nav>
                    <!-- End::nav -->

                </div>
                <!-- End::main-sidebar -->

            </aside>
            <!-- End Main-Sidebar-->
            <!-- @section('sidebar') -->

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                 
                   @yield('content')
                   <!-- dashboard -->
                   
                   
                <!-- enddashboard -->

            </div>
            <!-- END APP-CONTENT -->

        </div>
        <!--app-content closed-->

        <!-- Country-selector modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <span class="input-group">
                            <input type="search" class="form-control px-2 " placeholder="Search..." aria-label="Username">
                            <a href="javascript:void(0);" class="input-group-text bg-primary text-white" id="Search-Grid"><i class="fe fe-search header-link-icon tx-fixed-white fs-18"></i></a>
                        </span>
                        <div class="mt-3">
                            <div class="">
                                <p class="fw-semibold text-muted mb-2 fs-13">Recent Searches</p>
                                <div class="ps-2">
                                    <a href="javascript:void(0);" class="search-tags"><i class="fe fe-search me-2"></i>People<span></span></a>
                                    <a href="javascript:void(0);" class="search-tags"><i class="fe fe-search me-2"></i>Pages<span></span></a>
                                    <a href="javascript:void(0);" class="search-tags"><i class="fe fe-search me-2"></i>Articles<span></span></a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p class="fw-semibold text-muted mb-2 fs-13">Apps and pages</p>
                                <ul class="ps-2">
                                    <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                                        <a href="calendar2.html"><span><i class="bi bi-calendar me-2 fs-14 bg-primary-transparent avatar rounded-circle"></i>Calendar</span></a>
                                    </li>
                                    <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                                        <a href="email-inbox.html"><span><i class="bi bi-envelope me-2 fs-14 bg-primary-transparent avatar rounded-circle"></i>Mail</span></a>
                                    </li>
                                    <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                                        <a href="buttons.html"><span><i class="bi bi-dice-1 me-2 fs-14 bg-primary-transparent avatar rounded-circle"></i>Buttons</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-3">
                                <p class="fw-semibold text-muted mb-2 fs-13">Links</p>
                                <ul class="ps-2">
                                    <li class="p-1 align-items-center  mb-1 search-app">
                                        <a href="javascript:void(0);" class="text-primary"><u>http://spruko/html/spruko.com</u></a>
                                    </li>
                                    <li class="p-1 align-items-center mb-1 search-app">
                                        <a href="javascript:void(0);" class="text-primary"><u>http://spruko/demo/spruko.com</u></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-block">
                        <div class="text-center">
                            <a href="javascript:void(0);" class="text-primary text-decoration-underline fs-15">View all
                                results</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Country-selector modal -->

        <!-- Footer opened -->

        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © <span id="year"></span> <a href="javascript:void(0);">BFC</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"> BFC </a> All
                        rights reserved.
                    </div>
                </div>
            </div>
        </footer> <!-- End Footer -->



    </div>
    <!-- END PAGE-->

    <!-- SCRIPTS -->
    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="fa fa-angle-up fs-20"></i></span>
    </div>
    <!-- Scroll To Top -->

    <div id="responsive-overlay"></div>

    <!-- Popper JS -->
    <script src="build/assets/libs/%40popperjs/core/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="build/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Node Waves JS-->
    <script src="build/assets/libs/node-waves/waves.min.js"></script>

    <!-- Simplebar JS -->
    <script src="build/assets/libs/simplebar/simplebar.min.js"></script>
    <link rel="modulepreload" href="build/assets/simplebar-635bad04.js" />
    <script type="module" src="build/assets/simplebar-635bad04.js"></script>
    <!-- Color Picker JS -->
    <script src="build/assets/libs/%40simonwep/pickr/pickr.es5.min.js"></script>


    <!-- INTERNAL APEXCHART JS -->
    <script src="build/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Color Picker JS -->
    <script src="build/assets/libs/%40simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Checkbox selectall JS -->
    <link rel="modulepreload" href="build/assets/checkbox-selectall-e4a9d358.js" />
    <script type="module" src="build/assets/checkbox-selectall-e4a9d358.js"></script>
    <!-- INTERNAL INDEX JS -->
    <link rel="modulepreload" href="build/assets/index1-ad56c451.js" />
    <script type="module" src="build/assets/index1-ad56c451.js"></script>

    <!-- Sticky JS -->
    <script src="build/assets/sticky.js"></script>

    <!-- APP JS-->
    <link rel="modulepreload" href="build/assets/app-6df099bd.js" />
    <link rel="modulepreload" href="build/assets/defaultmenu-7feba3a7.js" />
    <script type="module" src="build/assets/app-6df099bd.js"></script>
    @include('toaster')
    <!-- END SCRIPTS -->

</body>


<!-- Mirrored from laravelui.spruko.com/vexel/index by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 11:23:40 GMT -->

</html>