<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Management System</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="admin dashboard template,admin panel html,bootstrap dashboard,admin dashboard,html template,template dashboard html,html css,bootstrap 5 admin template,bootstrap admin template,bootstrap 5 dashboard,admin panel html template,dashboard template bootstrap,admin dashboard html template,bootstrap admin panel,simple html template,admin dashboard bootstrap">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/brand-logos/favicon.ico') }}" type="image/x-icon">

    <!-- Choices JS -->
    <script src="{{ asset('libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <!-- Main Theme Js -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" >

    <!-- Style Css -->
    <link href="{{ asset('css/styles.min.css') }}" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="{{ asset('libs/node-waves/waves.min.css') }}" rel="stylesheet" >

    <!-- Simplebar Css -->
    <link href="{{ asset('libs/simplebar/simplebar.min.css') }}" rel="stylesheet" >

    <!-- Color Picker Css -->
    <link href="{{ asset('libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('libs/@simonwep/pickr/themes/nano.min.css') }}" rel="stylesheet" >

    <!-- Choices Css -->
    <link href="{{ asset('libs/choices.js/public/assets/styles/choices.min.css') }}" rel="stylesheet" >

    <!-- Jsvector Maps -->
    <link href="{{ asset('libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" >
</head>

<body>
    <!-- Start Switcher -->
    @include('switcher')
    <!-- End Switcher -->

    <!-- Loader -->
    <div id="loader" >
        <img src="{{ asset('images/media/loader.svg') }}" alt="">
    </div>
    <!-- Loader -->

    <div class="page">
        <!-- app-header -->
        <header class="app-header">

           <!-- Start::main-header-container -->
           <div class="main-header-container container-fluid">

               <!-- Start::header-content-left -->
               <div class="header-content-left">

                   <!-- Start::header-element -->
                   <div class="header-element">
                       <div class="horizontal-logo">
                           <a href="index.html" class="header-logo">
                               <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                               <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                               <img src="../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                               <img src="../assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                           </a>
                       </div>
                   </div>
                   <!-- End::header-element -->

                   <!-- Start::header-element -->
                   <div class="header-element">
                       <!-- Start::header-link -->
                       <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);">
                           <i class="header-icon fe fe-align-left"></i>
                       </a>
                       <div class="main-header-center d-none d-lg-block">
                           <input class="form-control" placeholder="Search for anything..." type="search"> <button class="btn"><i class="fa fa-search d-none d-md-block"></i></button>
                       </div>
                       <!-- End::header-link -->
                   </div>
                   <!-- End::header-element -->

               </div>
               <!-- End::header-content-left -->

               <!-- Start::header-content-right -->
               <div class="header-content-right">

                   <div class="header-element Search-element d-block d-lg-none">
                       <!-- Start::header-link|dropdown-toggle -->
                       <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"  class="header-link-icon"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
                       </a>
                       <!-- End::header-link|dropdown-toggle -->
                       <ul class="main-header-dropdown dropdown-menu dropdown-menu-end Search-element-dropdown" data-popper-placement="none">
                           <li>
                               <div class="input-group w-100 p-2">
                                   <input type="text" class="form-control" placeholder="Search....">
                                   <div class="btn btn-primary">
                                       <i class="fa fa-search" aria-hidden="true"></i>
                                   </div>
                               </div>
                           </li>
                       </ul>
                   </div>

                   <!-- Start::header-element -->
                   <div class="header-element country-selector">
                       <!-- Start::header-link|dropdown-toggle -->
                       <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="flag-icon1"> <circle cx="256" cy="256" r="256" fill="#f0f0f0"></circle> <g fill="#0052b4"> <path d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178L52.92 100.142zM503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.176zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075H8.819zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177l89.076-89.075zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005l-89.076 89.074zM189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075V8.819zM322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.176zM370.005 322.784l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076H370.005z"></path> </g> <g fill="#d80027"> <path d="M509.833 222.609H289.392V2.167A258.556 258.556 0 00256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 000 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0066.783 0V289.392h220.442A258.533 258.533 0 00512 256c0-11.317-.744-22.461-2.167-33.391z"></path> <path d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0015.048-16.435l-97.802-97.802h-31.482v.001zM189.217 322.784h-.002L74.98 437.019a256.636 256.636 0 0016.435 15.048l97.802-97.804v-31.479zM189.217 189.219v-.002L74.981 74.98a256.636 256.636 0 00-15.048 16.435l97.803 97.803h31.481zM322.783 189.219L437.02 74.981a256.328 256.328 0 00-16.435-15.047l-97.802 97.803v31.482z"></path> </g> </svg>
                       </a>
                       <!-- End::header-link|dropdown-toggle -->
                       <ul class="main-header-dropdown dropdown-menu dropdown-menu-end country-dropdown" data-popper-placement="none">
                           <li>
                               <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                   <span>
                                       <img src="../assets/images/flags/french_flag.jpg" alt="img" class="avatar avatar-xs lh-1 me-2">
                                   </span>
                                   French
                               </a>
                           </li>
                           <li>
                               <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                   <span>
                                       <img src="../assets/images/flags/germany_flag.jpg" alt="img" class="avatar avatar-xs lh-1 me-2">
                                   </span>
                                   German
                               </a>
                           </li>
                           <li>
                               <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                   <span>
                                       <img src="../assets/images/flags/italy_flag.jpg" alt="img" class="avatar avatar-xs lh-1 me-2">
                                   </span>
                                   Italian
                               </a>
                           </li>
                           <li>
                               <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                   <span>
                                       <img src="../assets/images/flags/russia_flag.jpg" alt="img" class="avatar avatar-xs lh-1 me-2">
                                   </span>
                                   Russian
                               </a>
                           </li>
                           <li>
                               <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                   <span>
                                       <img src="../assets/images/flags/spain_flag.jpg" alt="img" class="avatar avatar-xs lh-1 me-2">
                                   </span>
                                   Spanish
                               </a>
                           </li>
                       </ul>
                   </div>
                   <!-- End::header-element -->

                   <!-- Start::header-element -->
                   <div class="header-element header-theme-mode">
                       <!-- Start::header-link|layout-setting -->
                       <a href="javascript:void(0);" class="header-link layout-setting">
                           <span class="light-layout">
                               <!-- Start::header-link-icon -->
                               <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24" viewBox="0 -960 960 960" width="24"><path d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Zm0-80q88 0 158-48.5T740-375q-20 5-40 8t-40 3q-123 0-209.5-86.5T364-660q0-20 3-40t8-40q-78 32-126.5 102T200-480q0 116 82 198t198 82Zm-10-270Z"/></svg>
                               <!-- End::header-link-icon -->
                           </span>
                           <span class="dark-layout">
                               <!-- Start::header-link-icon -->
                               <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" fill="currentColor" height="24" viewBox="0 -960 960 960" width="24"><path d="M480-360q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35Zm0 80q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Zm326-268Z"/></svg>
                               <!-- End::header-link-icon -->
                           </span>
                       </a>
                       <!-- End::header-link|layout-setting -->
                   </div>
                   <!-- End::header-element -->

                   <!-- Start::header-element -->
                   <div class="header-element messages-dropdown">
                       <!-- Start::header-link|dropdown-toggle -->
                       <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                           <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/></svg>
                           <span class="pulse-danger"></span>
                       </a>
                       <!-- End::header-link|dropdown-toggle -->
                       <!-- Start::main-header-dropdown -->
                       <div class="main-header-dropdown dropdown-menu dropdown-menu-end main-header-message" data-popper-placement="none">
                           <div class="menu-header-content bg-primary text-fixed-white">
                               <div class="d-flex align-items-center justify-content-between">
                                   <h6 class="mb-0 fs-15 fw-semibold text-fixed-white">Messages</h6>
                                   <span class="badge rounded-pill bg-warning pt-1 text-fixed-black">Mark All Read</span>
                               </div>
                               <p class="dropdown-title-text subtext mb-0 text-fixed-white op-6 pb-0 fs-12 ">You have 4 unread messages</p>
                           </div>
                           <div><hr class="dropdown-divider"></div>
                           <ul class="list-unstyled mb-0" id="header-cart-items-scroll">
                               <li class="dropdown-item">
                                   <div class="d-flex messages">
                                       <span class="avatar avatar-md me-2 online avatar-rounded flex-shrink-0">
                                           <img src="../assets/images/faces/12.jpg" alt="img">
                                       </span>
                                       <div>
                                           <div class="d-flex">
                                               <a href="chat.html"><h6 class="mb-1 name">Petey Cruiser</h6></a>
                                           </div>
                                           <p class="mb-0 fs-12 desc">I'm sorry but i'm not sure how to help you with that......</p>
                                           <p class="time mb-0 text-start float-start ms-2 mt-2">Mar 15 3:55 PM</p>
                                       </div>
                                   </div>
                               </li>
                               <li class="dropdown-item">
                                   <div class="d-flex messages">
                                       <span class="avatar avatar-md me-2 online avatar-rounded flex-shrink-0">
                                           <img src="../assets/images/faces/3.jpg" alt="img">
                                       </span>
                                       <div>
                                           <div class="d-flex">
                                               <a href="chat.html"><h6 class="mb-1 name">Jimmy Changa</h6></a>
                                           </div>
                                           <p class="mb-0 fs-12 desc">All set ! Now, time to get to you now......</p>
                                           <p class="time mb-0 text-start float-start ms-2 mt-2">Mar 06 01:12 AM</p>
                                       </div>
                                   </div>
                               </li>
                               <li class="dropdown-item">
                                   <div class="d-flex messages">
                                       <span class="avatar avatar-md me-2 online avatar-rounded flex-shrink-0">
                                           <img src="../assets/images/faces/5.jpg" alt="img">
                                       </span>
                                       <div>
                                           <div class="d-flex">
                                               <a href="chat.html"><h6 class="mb-1 name">Graham Cracker</h6></a>
                                           </div>
                                           <p class="mb-0 fs-12 desc">Are you ready to pickup your Delivery...</p>
                                           <p class="time mb-0 text-start float-start ms-2 mt-2">Feb 25 10:35 AM</p>
                                       </div>
                                   </div>
                               </li>
                               <li class="dropdown-item">
                                   <div class="d-flex messages">
                                       <span class="avatar avatar-md me-2 online avatar-rounded flex-shrink-0">
                                           <img src="../assets/images/faces/4.jpg" alt="img">
                                       </span>
                                       <div>
                                           <div class="d-flex">
                                               <a href="chat.html"><h6 class="mb-1 name">Donatella Nobatti</h6></a>
                                           </div>
                                           <p class="mb-0 fs-12 desc">Here are some products ...</p>
                                           <p class="time mb-0 text-start float-start ms-2 mt-2">Feb 12 05:12 PM</p>
                                       </div>
                                   </div>
                               </li>
                               <li class="dropdown-item">
                                   <div class="d-flex messages">
                                       <span class="avatar avatar-md me-2 online avatar-rounded flex-shrink-0">
                                           <img src="../assets/images/faces/1.jpg" alt="img">
                                       </span>
                                       <div>
                                           <div class="d-flex">
                                               <a href="chat.html"><h6 class="mb-1 name">Anne Fibbiyon</h6></a>
                                           </div>
                                           <p class="mb-0 fs-12 desc">I'm sorry but i'm not sure how...</p>
                                           <p class="time mb-0 text-start float-start ms-2 mt-2">Jan 29 03:16 PM</p>
                                       </div>
                                   </div>
                               </li>
                           </ul>
                           <div class="text-center dropdown-footer">
                               <a href="checkout.html" class="text-primary fs-13">VIEW ALL</a>
                           </div>
                       </div>
                       <!-- End::main-header-dropdown -->
                   </div>
                   <!-- End::header-element -->

                   <!-- Start::header-element -->
                   <div class="header-element notifications-dropdown main-header-notification">
                       <!-- Start::header-link|dropdown-toggle -->
                       <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">
                           <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon"  height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z"/></svg>
                           <span class="pulse-success"></span>
                       </a>
                       <!-- End::header-link|dropdown-toggle -->
                       <!-- Start::main-header-dropdown -->
                       <div class="main-header-dropdown dropdown-menu dropdown-menu-end main-header-message" data-popper-placement="none">
                           <div class="menu-header-content bg-primary text-fixed-white">
                               <div class="d-flex align-items-center justify-content-between">
                                   <h6 class="mb-0 fs-15 fw-semibold text-fixed-white">Notifications</h6>
                                   <span class="badge rounded-pill bg-warning pt-1 text-fixed-black">Mark All Read</span>
                               </div>
                               <p class="dropdown-title-text subtext mb-0 text-fixed-white op-6 pb-0 fs-12 ">You have 4 unread Notifications</p>
                           </div>
                           <div><hr class="dropdown-divider"></div>
                           <ul class="list-unstyled mb-0" id="header-notification-scroll">
                               <li class="dropdown-item px-3">
                                   <div class="d-flex">
                                       <span class="avatar avatar-md me-2 avatar-rounded flex-shrink-0 bg-pink">
                                           <i class="la la-file-alt fs-20"></i>
                                       </span>
                                       <div class="ms-3">
                                           <a href="mail.html"><h5 class="notification-label text-dark mb-1">New files available</h5></a>
                                           <div class="notification-subtext">10 hour ago</div>
                                       </div>
                                       <div class="ms-auto" >
                                           <a href="mail.html"><i class="las la-angle-right text-end text-muted icon"></i></a>
                                       </div>
                                   </div>
                               </li>
                               <li class="dropdown-item px-3">
                                   <div class="d-flex">
                                       <span class="avatar avatar-md me-2 avatar-rounded flex-shrink-0 bg-purple">
                                           <i class="la la-gem fs-20"></i>
                                       </span>
                                       <div class="ms-3">
                                           <a href="mail.html"><h5 class="notification-label text-dark mb-1">Updates Available</h5></a>
                                           <div class="notification-subtext">2 days ago</div>
                                       </div>
                                       <div class="ms-auto" >
                                           <a href="mail.html"><i class="las la-angle-right text-end text-muted icon"></i></a>
                                       </div>
                                   </div>
                               </li>
                               <li class="dropdown-item px-3">
                                   <div class="d-flex">
                                       <span class="avatar avatar-md me-2 avatar-rounded flex-shrink-0 bg-success">
                                           <i class="la la-shopping-basket fs-20"></i>
                                       </span>
                                       <div class="ms-3">
                                           <a href="mail.html"><h5 class="notification-label text-dark mb-1">New Order Received</h5></a>
                                           <div class="notification-subtext">1 hour ago</div>
                                       </div>
                                       <div class="ms-auto" >
                                           <a href="mail.html"><i class="las la-angle-right text-end text-muted icon"></i></a>
                                       </div>
                                   </div>
                               </li>
                               <li class="dropdown-item px-3">
                                   <div class="d-flex">
                                       <span class="avatar avatar-md me-2 avatar-rounded flex-shrink-0 bg-warning">
                                           <i class="la la-envelope-open fs-20 text-fixed-white"></i>
                                       </span>
                                       <div class="ms-3">
                                           <a href="mail.html"><h5 class="notification-label text-dark mb-1">New review received</h5></a>
                                           <div class="notification-subtext">1 day ago</div>
                                       </div>
                                       <div class="ms-auto" >
                                           <a href="mail.html"><i class="las la-angle-right text-end text-muted icon"></i></a>
                                       </div>
                                   </div>
                               </li>
                               <li class="dropdown-item px-3">
                                   <div class="d-flex">
                                       <span class="avatar avatar-md me-2 avatar-rounded flex-shrink-0 bg-danger">
                                           <i class="la la-user-check fs-20"></i>
                                       </span>
                                       <div class="ms-3">
                                           <a href="mail.html"><h5 class="notification-label text-dark mb-1">22 verified registrations</h5></a>
                                           <div class="notification-subtext">2 hour ago</div>
                                       </div>
                                       <div class="ms-auto" >
                                           <a href="mail.html"><i class="las la-angle-right text-end text-muted icon"></i></a>
                                       </div>
                                   </div>
                               </li>
                               <li class="dropdown-item px-3">
                                   <div class="d-flex">
                                       <span class="avatar avatar-md me-2 avatar-rounded flex-shrink-0 bg-primary">
                                           <i class="la la-check-circle fs-20"></i>
                                       </span>
                                       <div class="ms-3">
                                           <a href="mail.html"><h5 class="notification-label text-dark mb-1">Project has been approved</h5></a>
                                           <div class="notification-subtext">4 hour ago</div>
                                       </div>
                                       <div class="ms-auto" >
                                           <a href="mail.html"><i class="las la-angle-right text-end text-muted icon"></i></a>
                                       </div>
                                   </div>
                               </li>
                           </ul>
                           <div class="text-center dropdown-footer">
                               <a href="checkout.html" class="text-primary fs-13">VIEW ALL</a>
                           </div>
                       </div>
                       <!-- End::main-header-dropdown -->
                   </div>
                   <!-- End::header-element -->

                   <!-- Start::header-element -->
                   <div class="header-element header-fullscreen">
                       <!-- Start::header-link -->
                       <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                           <svg xmlns="http://www.w3.org/2000/svg" class="full-screen-open full-screen-icon header-link-icon" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/></svg>
                           <svg xmlns="http://www.w3.org/2000/svg" class="full-screen-close full-screen-icon header-link-icon d-none" fill="currentColor" height="24" viewBox="0 -960 960 960" width="24"><path d="M320-200v-120H200v-80h200v200h-80Zm240 0v-200h200v80H640v120h-80ZM200-560v-80h120v-120h80v200H200Zm360 0v-200h80v120h120v80H560Z"/></svg>
                       </a>
                       <!-- End::header-link -->
                   </div>
                   <!-- End::header-element -->

                   <!-- Start::header-element -->
                   <div class="header-element header-sidebar">
                       <!-- Start::header-link-->
                       <a href="javascript:void(0);" class="header-link" data-bs-toggle="offcanvas" data-bs-target="#header-sidebar">
                           <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                       </a>
                       <!-- End::header-link-->
                   </div>
                   <!-- End::header-element -->

                   <!-- Start::header-element -->
                   <div class="header-element headerProfile-dropdown">
                       <!-- Start::header-link|dropdown-toggle -->
                       <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                           <img src="../assets/images/faces/6.jpg" alt="img" width="37" height="37" class="rounded-circle">
                       </a>
                       <!-- End::header-link|dropdown-toggle -->
                       <ul class="main-header-dropdown dropdown-menu pt-0 header-profile-dropdown dropdown-menu-end main-profile-menu" aria-labelledby="mainHeaderProfile">
                           <li>
                               <div class="main-header-profile bg-primary menu-header-content text-fixed-white">
                                   <div class="my-auto">
                                       <h6 class="mb-0 lh-1 text-fixed-white">Petey Cruiser</h6><span class="fs-11 op-7 lh-1">Premium Member</span>
                                   </div>
                               </div>
                           </li>
                           <li><a class="dropdown-item d-flex" href="profile.html"><i class="bx bx-user-circle fs-18 me-2 op-7"></i>Profile</a></li>
                           <li><a class="dropdown-item d-flex" href="editprofile.html"><i class="bx bx-cog fs-18 me-2 op-7"></i>Edit Profile </a></li>
                           <li><a class="dropdown-item d-flex border-block-end" href="mail.html"><i class="bx bxs-inbox fs-18 me-2 op-7"></i>Inbox</a></li>
                           <li><a class="dropdown-item d-flex" href="chat.html"><i class="bx bx-envelope fs-18 me-2 op-7"></i>Messages</a></li>
                           <li><a class="dropdown-item d-flex border-block-end" href="editprofile.html"><i class="bx bx-slider-alt fs-18 me-2 op-7"></i>Account Settings</a></li>
                           <li><a class="dropdown-item d-flex" href="signin.html"><i class="bx bx-log-out fs-18 me-2 op-7"></i>Sign Out</a></li>
                       </ul>
                   </div>
                   <!-- End::header-element -->

                   <!-- Start::header-element -->
                   <div class="header-element">
                       <!-- Start::header-link|switcher-icon -->
                       <a href="javascript:void(0);" class="header-link switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                           <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z"></path><path d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z"></path></svg>
                       </a>
                       <!-- End::header-link|switcher-icon -->
                   </div>
                   <!-- End::header-element -->

               </div>
               <!-- End::header-content-right -->

           </div>
           <!-- End::main-header-container -->

       </header>
       <!-- /app-header -->

       <!-- Start::Off-canvas sidebar-->
       <div class="offcanvas offcanvas-end" tabindex="-1" id="header-sidebar" aria-labelledby="sidebarLabel">
           <div class="offcanvas-header rounded-0">
               <h5 class="fs-14 text-uppercase mb-0 fw-semibold" id="sidebarLabel">Notifications</h5>
               <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
           </div>
           <div class="offcanvas-body rounded-0 p-0">
               <ul class="nav nav-tabs tab-style-1 d-block" role="tablist">
                   <li class="nav-item" role="presentation">
                       <a class="nav-link" data-bs-toggle="tab" data-bs-target="#chat" aria-current="page" href="#chat" aria-selected="false" role="tab" tabindex="-1"><i class="fe fe-message-circle fs-15 me-2"></i>Chat</a>
                   </li>
                   <li class="nav-item" role="presentation">
                       <a class="nav-link" data-bs-toggle="tab" data-bs-target="#notifications" href="#notifications" aria-selected="false" role="tab" tabindex="-1"><i class="fe fe-bell fs-15 me-2"></i> Notifications</a>
                   </li>
                   <li class="nav-item mb-0" role="presentation">
                       <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#friends" href="#friends" aria-selected="true" role="tab"><i class="fe fe-users fs-15 me-2"></i>Friends</a>
                   </li>
               </ul>
               <div class="tab-content">
                   <div class="tab-pane border-start-0 border-end-0 rounded-0 p-0" id="chat" role="tabpanel">
                       <div class="list d-flex align-items-center border-bottom p-3">
                           <div class="">
                               <span class="avatar bg-primary rounded-circle avatar-md">CH</span>
                           </div>
                           <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                               <p class="mb-0 d-flex ">
                                   <b>New Websites is Created</b>
                               </p>
                               <div class="d-flex justify-content-between align-items-center">
                                   <div class="d-flex align-items-center">
                                       <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                       <small class="text-muted ms-auto">30 mins ago</small>
                                       <p class="mb-0"></p>
                                   </div>
                               </div>
                           </a>
                       </div>
                       <div class="list d-flex align-items-center border-bottom p-3">
                           <div class="">
                               <span class="avatar bg-danger rounded-circle avatar-md">N</span>
                           </div>
                           <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                               <p class="mb-0 d-flex ">
                                   <b>Prepare For the Next Project</b>
                               </p>
                               <div class="d-flex justify-content-between align-items-center">
                                   <div class="d-flex align-items-center">
                                       <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                       <small class="text-muted ms-auto">2 hours ago</small>
                                       <p class="mb-0"></p>
                                   </div>
                               </div>
                           </a>
                       </div>
                       <div class="list d-flex align-items-center border-bottom p-3">
                           <div class="">
                               <span class="avatar bg-info rounded-circle avatar-md">S</span>
                           </div>
                           <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                               <p class="mb-0 d-flex ">
                                   <b>Decide the live Discussion</b>
                               </p>
                               <div class="d-flex justify-content-between align-items-center">
                                   <div class="d-flex align-items-center">
                                       <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                       <small class="text-muted ms-auto">3 hours ago</small>
                                       <p class="mb-0"></p>
                                   </div>
                               </div>
                           </a>
                       </div>
                       <div class="list d-flex align-items-center border-bottom p-3">
                           <div class="">
                               <span class="avatar bg-warning rounded-circle avatar-md">K</span>
                           </div>
                           <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                               <p class="mb-0 d-flex ">
                                   <b>Meeting at 3:00 pm</b>
                               </p>
                               <div class="d-flex justify-content-between align-items-center">
                                   <div class="d-flex align-items-center">
                                       <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                       <small class="text-muted ms-auto">4 hours ago</small>
                                       <p class="mb-0"></p>
                                   </div>
                               </div>
                           </a>
                       </div>
                       <div class="list d-flex align-items-center border-bottom p-3">
                           <div class="">
                               <span class="avatar bg-success rounded-circle avatar-md">R</span>
                           </div>
                           <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                               <p class="mb-0 d-flex ">
                                   <b>Prepare for Presentation</b>
                               </p>
                               <div class="d-flex justify-content-between align-items-center">
                                   <div class="d-flex align-items-center">
                                       <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                       <small class="text-muted ms-auto">1 day ago</small>
                                       <p class="mb-0"></p>
                                   </div>
                               </div>
                           </a>
                       </div>
                       <div class="list d-flex align-items-center border-bottom p-3">
                           <div class="">
                               <span class="avatar bg-pink rounded-circle avatar-md">MS</span>
                           </div>
                           <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                               <p class="mb-0 d-flex ">
                                   <b>Prepare for Presentation</b>
                               </p>
                               <div class="d-flex justify-content-between align-items-center">
                                   <div class="d-flex align-items-center">
                                       <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                       <small class="text-muted ms-auto">1 day ago</small>
                                       <p class="mb-0"></p>
                                   </div>
                               </div>
                           </a>
                       </div>
                       <div class="list d-flex align-items-center border-bottom p-3">
                           <div class="">
                               <span class="avatar bg-purple rounded-circle avatar-md">L</span>
                           </div>
                           <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                               <p class="mb-0 d-flex ">
                                   <b>Prepare for Presentation</b>
                               </p>
                               <div class="d-flex justify-content-between align-items-center">
                                   <div class="d-flex align-items-center">
                                       <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                       <small class="text-muted ms-auto">45 minutes ago</small>
                                       <p class="mb-0"></p>
                                   </div>
                               </div>
                           </a>
                       </div>
                       <div class="list d-flex align-items-center p-3">
                           <div class="">
                               <span class="avatar bg-blue rounded-circle avatar-md">U</span>
                           </div>
                           <a class="wrapper w-100 ms-3" href="javascript:void(0);" >
                               <p class="mb-0 d-flex ">
                                   <b>Prepare for Presentation</b>
                               </p>
                               <div class="d-flex justify-content-between align-items-center">
                                   <div class="d-flex align-items-center">
                                       <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                       <small class="text-muted ms-auto">2 days ago</small>
                                       <p class="mb-0"></p>
                                   </div>
                               </div>
                           </a>
                       </div>
                   </div>
                   <div class="tab-pane border-start-0 border-end-0 rounded-0 p-0" id="notifications" role="tabpanel">
                       <div class="list-group list-group-flush ">
                           <div class="list-group-item d-flex  align-items-center">
                               <span class="avatar avatar-lg online avatar-rounded flex-shrink-0">
                                   <img src="../assets/images/faces/1.jpg" alt="img">
                               </span>
                               <div class="ms-3">
                                   <strong>Madeleine</strong> Hey! there I' am available....
                                   <div class="small text-muted">
                                       3 hours ago
                                   </div>
                               </div>
                           </div>
                           <div class="list-group-item d-flex  align-items-center">
                               <span class="avatar avatar-lg online avatar-rounded flex-shrink-0">
                                   <img src="../assets/images/faces/2.jpg" alt="img">
                               </span>
                               <div class="ms-3">
                                   <strong>Anthony</strong> New product Launching...
                                   <div class="small text-muted">
                                       5 hour ago
                                   </div>
                               </div>
                           </div>
                           <div class="list-group-item d-flex  align-items-center">
                               <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                                   <img src="../assets/images/faces/3.jpg" alt="img">
                               </span>
                               <div class="ms-3">
                                   <strong>Olivia</strong> New Schedule Realease......
                                   <div class="small text-muted">
                                       45 minutes ago
                                   </div>
                               </div>
                           </div>
                           <div class="list-group-item d-flex  align-items-center">
                               <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                                   <img src="../assets/images/faces/4.jpg" alt="img">
                               </span>
                               <div class="ms-3">
                                   <strong>Madeleine</strong> Hey! there I' am available....
                                   <div class="small text-muted">
                                       3 hours ago
                                   </div>
                               </div>
                           </div>
                           <div class="list-group-item d-flex  align-items-center">
                               <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                                   <img src="../assets/images/faces/5.jpg" alt="img">
                               </span>
                               <div class="ms-3">
                                   <strong>Anthony</strong> New product Launching...
                                   <div class="small text-muted">
                                       5 hour ago
                                   </div>
                               </div>
                           </div>
                           <div class="list-group-item d-flex  align-items-center">
                               <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                                   <img src="../assets/images/faces/6.jpg" alt="img">
                               </span>
                               <div class="ms-3">
                                   <strong>Olivia</strong> New Schedule Realease......
                                   <div class="small text-muted">
                                       45 minutes ago
                                   </div>
                               </div>
                           </div>
                           <div class="list-group-item d-flex  align-items-center">
                               <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                                   <img src="../assets/images/faces/7.jpg" alt="img">
                               </span>
                               <div class="ms-3">
                                   <strong>Olivia</strong> Hey! there I' am available....
                                   <div class="small text-muted">
                                       12 minutes ago
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="tab-pane border-start-0 border-end-0 rounded-0 p-0 active show" id="friends" role="tabpanel">
                       <div class="list-group list-group-flush ">
                           <div class="list-group-item d-flex  align-items-center">
                               <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                   <img src="../assets/images/faces/1.jpg" alt="img">
                               </span>
                               <div class="ms-2">
                                   <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Mozelle Belt</div>
                               </div>
                               <div class="ms-auto">
                                   <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                               </div>
                           </div>
                           <div class="list-group-item d-flex  align-items-center">
                               <span class="avatar avatar-md avatar-rounded flex-shrink-0">
                                   <img src="../assets/images/faces/2.jpg" alt="img">
                               </span>
                               <div class="ms-2">
                                   <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
                               </div>
                               <div class="ms-auto">
                                   <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
                               </div>
                           </div>
                           <div class="list-group-item d-flex  align-items-center">
                               <span class="avatar avatar-md avatar-rounded flex-shrink-0">
                                   <img src="../assets/images/faces/5.jpg" alt="img">
                               </span>
                               <div class="ms-2">
                                   <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
                               </div>
                               <div class="ms-auto">
                                   <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                               </div>
                           </div>
                           <div class="list-group-item d-flex  align-items-center">
                               <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                   <img src="../assets/images/faces/6.jpg" alt="img">
                               </span>
                               <div class="ms-2">
                                   <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
                               </div>
                               <div class="ms-auto">
                                   <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                               </div>
                           </div>
                           <div class="list-group-item d-flex  align-items-center">
                               <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                   <img src="../assets/images/faces/8.jpg" alt="img">
                               </span>
                               <div class="ms-2">
                                   <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
                               </div>
                               <div class="ms-auto">
                                   <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                               </div>
                           </div>
                           <div class="list-group-item d-flex  align-items-center">
                               <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                   <img src="../assets/images/faces/8.jpg" alt="img">
                               </span>
                               <div class="ms-2">
                                   <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Mozelle Belt</div>
                               </div>
                               <div class="ms-auto">
                                   <a href="javascript:void(0);" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
                               </div>
                           </div>
                           <div class="list-group-item d-flex  align-items-center">
                               <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                   <img src="../assets/images/faces/9.jpg" alt="img">
                               </span>
                               <div class="ms-2">
                                   <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
                               </div>
                               <div class="ms-auto">
                                   <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                               </div>
                           </div>
                           <div class="list-group-item d-flex  align-items-center">
                               <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                   <img src="../assets/images/faces/10.jpg" alt="img">
                               </span>
                               <div class="ms-2">
                                   <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
                               </div>
                               <div class="ms-auto">
                                   <a href="javascript:void(0);" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
                               </div>
                           </div>
                           <div class="list-group-item d-flex  align-items-center">
                               <span class="avatar avatar-md avatar-rounded flex-shrink-0">
                                   <img src="../assets/images/faces/11.jpg" alt="img">
                               </span>
                               <div class="ms-2">
                                   <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
                               </div>
                               <div class="ms-auto">
                                   <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
                               </div>
                           </div>
                           <div class="list-group-item d-flex  align-items-center">
                               <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                   <img src="../assets/images/faces/12.jpg" alt="img">
                               </span>
                               <div class="ms-2">
                                   <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
                               </div>
                               <div class="ms-auto">
                                   <a href="javascript:void(0);" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
                               </div>
                           </div>
                           <div class="list-group-item d-flex  align-items-center">
                               <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                   <img src="../assets/images/faces/2.jpg" alt="img">
                               </span>
                               <div class="ms-2">
                                   <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
                               </div>
                               <div class="ms-auto">
                                   <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                               </div>
                           </div>
                           <div class="list-group-item d-flex  align-items-center">
                               <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                   <img src="../assets/images/faces/2.jpg" alt="img">
                               </span>
                               <div class="ms-2">
                                   <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
                               </div>
                               <div class="ms-auto">
                                   <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                               </div>
                           </div>
                           <div class="list-group-item d-flex  align-items-center">
                               <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                   <img src="../assets/images/faces/3.jpg" alt="img">
                               </span>
                               <div class="ms-2">
                                   <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
                               </div>
                               <div class="ms-auto">
                                   <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                               </div>
                           </div>
                           <div class="list-group-item d-flex  align-items-center">
                               <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                   <img src="../assets/images/faces/4.jpg" alt="img">
                               </span>
                               <div class="ms-2">
                                   <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
                               </div>
                               <div class="ms-auto">
                                   <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           </div>
       <!-- End::Off-canvas sidebar-->

       <!-- Message Modal -->
       <div class="modal fade" id="chatmodel" tabindex="-1" role="dialog"  aria-hidden="true">
           <div class="modal-dialog modal-dialog-right chatbox" role="document">
               <div class="modal-content chat border-0">
                   <div class="card overflow-hidden mb-0 border-0 shadow-none">
                       <!-- action-header -->
                       <div class="action-header clearfix">
                           <div class="float-start hidden-xs d-flex">
                               <div class="avatar avatar-lg rounded-circle me-3">
                                   <img src="../assets/images/faces/6.jpg" class="rounded-circle user_img" alt="img">
                               </div>
                               <div class="align-items-center mt-2">
                                   <h5 class="text-fixed-white mb-0">Daneil Scott</h5>
                                   <span class="dot-label bg-success"></span><span class="me-3 text-fixed-white">online</span>
                               </div>
                           </div>
                           <ul class="ah-actions actions align-items-center float-end">
                               <li class="call-icon">
                                   <a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal" data-bs-target="#audiomodal">
                                       <i class="fe fe-phone"></i>
                                   </a>
                               </li>
                               <li class="video-icon">
                                   <a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal" data-bs-target="#videomodal">
                                       <i class="fe fe-video"></i>
                                   </a>
                               </li>
                               <li class="dropdown">
                                   <a href="" data-bs-toggle="dropdown" aria-expanded="true">
                                       <i class="fe fe-more-vertical"></i>
                                   </a>
                                   <ul class="dropdown-menu dropdown-menu-end">
                                       <li class="dropdown-item"><i class="fa fa-user-circle"></i> View profile</li>
                                       <li class="dropdown-item"><i class="fa fa-users"></i>Add friends</li>
                                       <li class="dropdown-item"><i class="fa fa-plus"></i> Add to group</li>
                                       <li class="dropdown-item"><i class="fa fa-ban"></i> Block</li>
                                   </ul>
                               </li>
                               <li>
                                   <a href=""  class="" data-bs-dismiss="modal" aria-label="Close">
                                       <i class="fe fe-x-circle text-fixed-white"></i>
                                   </a>
                               </li>
                           </ul>
                       </div>
                       <!-- action-header end -->

                       <!-- msg_card_body -->
                       <div class="card-body msg_card_body">
                           <div class="chat-box-single-line">
                               <abbr class="timestamp">February 1st, 2019</abbr>
                           </div>
                           <div class="d-flex justify-content-start">
                               <div class="img_cont_msg">
                                   <img src="../assets/images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                               </div>
                               <div class="msg_cotainer">
                                   Hi, how are you Jenna Side?
                                   <span class="msg_time">8:40 AM, Today</span>
                               </div>
                           </div>
                           <div class="d-flex justify-content-end ">
                               <div class="msg_cotainer_send">
                                   Hi Connor Paige i am good tnx how about you?
                                   <span class="msg_time_send">8:55 AM, Today</span>
                               </div>
                               <div class="img_cont_msg">
                                   <img src="../assets/images/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                               </div>
                           </div>
                           <div class="d-flex justify-content-start ">
                               <div class="img_cont_msg">
                                   <img src="../assets/images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                               </div>
                               <div class="msg_cotainer">
                                   I am good too, thank you for your chat template
                                   <span class="msg_time">9:00 AM, Today</span>
                               </div>
                           </div>
                           <div class="d-flex justify-content-end ">
                               <div class="msg_cotainer_send">
                                   You welcome Connor Paige
                                   <span class="msg_time_send">9:05 AM, Today</span>
                               </div>
                               <div class="img_cont_msg">
                                   <img src="../assets/images/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                               </div>
                           </div>
                           <div class="d-flex justify-content-start ">
                               <div class="img_cont_msg">
                                   <img src="../assets/images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                               </div>
                               <div class="msg_cotainer">
                                   Yo, Can you update Views?
                                   <span class="msg_time">9:07 AM, Today</span>
                               </div>
                           </div>
                           <div class="d-flex justify-content-end mb-4">
                               <div class="msg_cotainer_send">
                                   But I must explain to you how all this mistaken  born and I will give
                                   <span class="msg_time_send">9:10 AM, Today</span>
                               </div>
                               <div class="img_cont_msg">
                                   <img src="../assets/images/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                               </div>
                           </div>
                           <div class="d-flex justify-content-start ">
                               <div class="img_cont_msg">
                                   <img src="../assets/images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                               </div>
                               <div class="msg_cotainer">
                                   Yo, Can you update Views?
                                   <span class="msg_time">9:07 AM, Today</span>
                               </div>
                           </div>
                           <div class="d-flex justify-content-end mb-4">
                               <div class="msg_cotainer_send">
                                   But I must explain to you how all this mistaken  born and I will give
                                   <span class="msg_time_send">9:10 AM, Today</span>
                               </div>
                               <div class="img_cont_msg">
                                   <img src="../assets/images/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                               </div>
                           </div>
                           <div class="d-flex justify-content-start ">
                               <div class="img_cont_msg">
                                   <img src="../assets/images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                               </div>
                               <div class="msg_cotainer">
                                   Yo, Can you update Views?
                                   <span class="msg_time">9:07 AM, Today</span>
                               </div>
                           </div>
                           <div class="d-flex justify-content-end mb-4">
                               <div class="msg_cotainer_send">
                                   But I must explain to you how all this mistaken  born and I will give
                                   <span class="msg_time_send">9:10 AM, Today</span>
                               </div>
                               <div class="img_cont_msg">
                                   <img src="../assets/images/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                               </div>
                           </div>
                           <div class="d-flex justify-content-start">
                               <div class="img_cont_msg">
                                   <img src="../assets/images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                               </div>
                               <div class="msg_cotainer">
                                   Okay Bye, text you later..
                                   <span class="msg_time">9:12 AM, Today</span>
                               </div>
                           </div>
                       </div>
                       <!-- msg_card_body end -->
                       <!-- card-footer -->
                       <div class="card-footer border-top">
                           <div class="msb-reply d-flex">
                               <div class="input-group">
                                   <input type="text" class="form-control " placeholder="Typing....">
                                   <button type="button" class="btn btn-primary ">
                                       <i class="far fa-paper-plane" aria-hidden="true"></i>
                                   </button>
                               </div>
                           </div>
                       </div><!-- card-footer end -->
                   </div>
               </div>
           </div>
       </div>
       <!--End modal -->

       <!--Video Modal -->
       <div id="videomodal" class="modal fade">
           <div class="modal-dialog" role="document">
               <div class="modal-content bg-fixed-dark border-0">
                   <div class="modal-body mx-auto text-center p-5">
                       <h5 class="text-fixed-white">Valex Video call</h5>
                       <img src="../assets/images/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
                       <h4 class="mb-1 fw-semibold text-fixed-white">Daneil Scott</h4>
                       <h6 class="loading text-fixed-white">Calling...</h6>
                       <div class="mt-5">
                           <div class="row">
                               <div class="col-4">
                                   <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                                       <i class="fas fa-video-slash"></i>
                                   </a>
                               </div>
                               <div class="col-4">
                                   <a class="icon icon-shape rounded-circle text-fixed-white mb-0" href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
                                       <i class="fas fa-phone bg-danger text-fixed-white"></i>
                                   </a>
                               </div>
                               <div class="col-4">
                                   <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                                       <i class="fas fa-microphone-slash"></i>
                                   </a>
                               </div>
                           </div>
                       </div>
                   </div><!-- modal-body -->
               </div>
           </div><!-- modal-dialog -->
       </div>
       <!--End modal -->

       <!-- Audio Modal -->
       <div id="audiomodal" class="modal fade">
           <div class="modal-dialog" role="document">
               <div class="modal-content border-0">
                   <div class="modal-body mx-auto text-center p-5">
                       <h6>Valex Voice call</h6>
                       <img src="../assets/images/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
                       <h5 class="mb-1 fw-medium">Daneil Scott</h5>
                       <h6 class="loading">Calling...</h6>
                       <div class="mt-5">
                           <div class="row">
                               <div class="col-4">
                                   <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                                       <i class="fas fa-volume-up bg-light text-dark"></i>
                                   </a>
                               </div>
                               <div class="col-4">
                                   <a class="icon icon-shape rounded-circle text-fixed-white mb-0" href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
                                       <i class="fas fa-phone text-fixed-white bg-success"></i>
                                   </a>
                               </div>
                               <div class="col-4">
                                   <a class="icon icon-shape  rounded-circle mb-0" href="javascript:void(0);">
                                       <i class="fas fa-microphone-slash bg-light text-dark"></i>
                                   </a>
                               </div>
                           </div>
                       </div>
                   </div><!-- modal-body -->
               </div>
           </div><!-- modal-dialog -->
       </div>
       <!--End modal -->

       <!-- Start::app-sidebar -->
       @include('sidebar')
       <!-- End::app-sidebar -->

       <!-- Start::app-content -->
       <div class="main-content app-content">
           <div class="container-fluid">
               <!-- Page Header -->
               <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                   <div>
                       <h4 class="mb-0">Hi, welcome back!</h4>
                       <p class="mb-0 text-muted">Sales monitoring dashboard template.</p>
                   </div>
                   <div class="main-dashboard-header-right">
                       <div>
                           <label class="fs-13 text-muted">Customer Ratings</label>
                           <div class="main-star">
                               <i class="bi bi-star-fill fs-13 text-warning"></i>
                               <i class="bi bi-star-fill fs-13 text-warning"></i>
                               <i class="bi bi-star-fill fs-13 text-warning"></i>
                               <i class="bi bi-star-fill fs-13 text-warning"></i>
                               <i class="bi bi-star-fill fs-13 text-muted op-8"></i> <span>(14,873)</span>
                           </div>
                       </div>
                       <div>
                           <label class="fs-13 text-muted">Online Sales</label>
                           <h5 class="mb-0 fw-semibold">563,275</h5>
                       </div>
                       <div>
                           <label class="fs-13 text-muted">Offline Sales</label>
                           <h5 class="mb-0 fw-semibold">783,675</h5>
                       </div>
                   </div>
               </div>
               <!-- End Page Header -->

               <!-- row -->
               <div class="row">
                   <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                       <div class="card overflow-hidden sales-card bg-primary-gradient">
                           <div class="px-3 pt-3  pb-2 pt-0">
                               <div >
                                   <h6 class="mb-3 fs-12 text-fixed-white">TODAY ORDERS</h6>
                               </div>
                               <div class="pb-0 mt-0">
                                   <div class="d-flex">
                                       <div >
                                           <h4 class="fs-20 fw-bold mb-1 text-fixed-white">$5,74.12</h4>
                                           <p class="mb-0 fs-12 text-fixed-white op-7">Compared to last week</p>
                                       </div>
                                       <span class="float-end my-auto ms-auto">
                                           <i class="fas fa-arrow-circle-up text-fixed-white"></i>
                                           <span class="text-fixed-white op-7"> +427</span>
                                       </span>
                                   </div>
                               </div>
                           </div>
                           <div id="compositeline"></div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                       <div class="card overflow-hidden sales-card bg-danger-gradient">
                           <div class="px-3 pt-3  pb-2 pt-0">
                               <div >
                                   <h6 class="mb-3 fs-12 text-fixed-white">TODAY EARNINGS</h6>
                               </div>
                               <div class="pb-0 mt-0">
                                   <div class="d-flex">
                                       <div >
                                           <h4 class="fs-20 fw-bold mb-1 text-fixed-white">$1,230.17</h4>
                                           <p class="mb-0 fs-12 text-fixed-white op-7">Compared to last week</p>
                                       </div>
                                       <span class="float-end my-auto ms-auto">
                                           <i class="fas fa-arrow-circle-down text-fixed-white"></i>
                                           <span class="text-fixed-white op-7"> -23.09%</span>
                                       </span>
                                   </div>
                               </div>
                           </div>
                           <div id="compositeline2"></div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                       <div class="card overflow-hidden sales-card bg-success-gradient">
                           <div class="px-3 pt-3  pb-2 pt-0">
                               <div >
                                   <h6 class="mb-3 fs-12 text-fixed-white">TOTAL EARNINGS</h6>
                               </div>
                               <div class="pb-0 mt-0">
                                   <div class="d-flex">
                                       <div >
                                           <h4 class="fs-20 fw-bold mb-1 text-fixed-white">$7,125.70</h4>
                                           <p class="mb-0 fs-12 text-fixed-white op-7">Compared to last week</p>
                                       </div>
                                       <span class="float-end my-auto ms-auto">
                                           <i class="fas fa-arrow-circle-up text-fixed-white"></i>
                                           <span class="text-fixed-white op-7"> 52.09%</span>
                                       </span>
                                   </div>
                               </div>
                           </div>
                           <div id="compositeline3"></div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                       <div class="card overflow-hidden sales-card bg-warning-gradient">
                           <div class="px-3 pt-3  pb-2 pt-0">
                               <div >
                                   <h6 class="mb-3 fs-12 text-fixed-white">PRODUCT SOLD</h6>
                               </div>
                               <div class="pb-0 mt-0">
                                   <div class="d-flex">
                                       <div >
                                           <h4 class="fs-20 fw-bold mb-1 text-fixed-white">$4,820.50</h4>
                                           <p class="mb-0 fs-12 text-fixed-white op-7">Compared to last week</p>
                                       </div>
                                       <span class="float-end my-auto ms-auto">
                                           <i class="fas fa-arrow-circle-down text-fixed-white"></i>
                                           <span class="text-fixed-white op-7"> -152.3</span>
                                       </span>
                                   </div>
                               </div>
                           </div>
                           <div id="compositeline4"></div>
                       </div>
                   </div>
               </div>
               <!-- row closed -->

               <!-- row opened -->
               <div class="row">
                   <div class="col-md-12 col-lg-12 col-xl-7">
                       <div class="card">
                           <div class="card-header pb-0">
                               <div class="d-flex justify-content-between">
                                   <h4 class="card-title mb-0">Order status</h4>
                                   <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light bg-transparent rounded-pill" data-bs-toggle="dropdown"><i
                                       class="fe fe-more-horizontal"></i></a>
                                   <div class="dropdown-menu">
                                       <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                       <a class="dropdown-item" href="javascript:void(0);">Another
                                           Action</a>
                                       <a class="dropdown-item" href="javascript:void(0);">Something Else
                                           Here</a>
                                   </div>
                               </div>
                               <p class="fs-12 text-muted mb-0">Order Status and Tracking. Track your order from ship date to arrival. To begin, enter your order number.</p>
                           </div>
                           <div class="card-body">
                               <div class="total-revenue">
                                   <div>
                                       <h4>120,750</h4>
                                       <label><span class="bg-primary"></span>success</label>
                                   </div>
                                   <div>
                                       <h4>56,108</h4>
                                       <label><span class="bg-danger"></span>Pending</label>
                                   </div>
                                   <div>
                                       <h4>32,895</h4>
                                       <label><span class="bg-warning"></span>Failed</label>
                                   </div>
                                   </div>
                               <div id="Sales-bar" class="sales-bar mt-4"></div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-12 col-xl-5">
                       <div class="card card-dashboard-map-one">
                           <h4 class="card-title">Sales Revenue by Customers in USA</h4>
                           <p class="fs-12 text-muted">Sales Performance of all states in the United States.</p>
                           <div id="us-map1" class="pt-1"></div>
                       </div>
                   </div>
               </div>
               <!-- row closed -->

               <!-- row opened -->
               <div class="row">
                   <div class="col-xl-4 col-md-12 col-lg-12">
                       <div class="card overflow-hidden">
                           <div class="card-header pb-1">
                               <h3 class="card-title mb-2">Recent Customers</h3>
                               <p class="fs-12 mb-0 text-muted">A customer is an individual or business that purchases the goods service has evolved to include real-time</p>
                           </div>
                           <div class="card-body p-0 customers mt-1">
                               <div class="list-group list-lg-group list-group-flush">
                                   <div class="list-group-item list-group-item-action">
                                       <div class="d-flex">
                                           <img class="avatar avatar-md rounded-circle my-auto me-3" src="../assets/images/faces/3.jpg" alt="Image description">
                                           <div class="flex-grow-1">
                                               <div class="d-flex align-items-center">
                                                   <div class="mt-0">
                                                       <h5 class="mb-1 fs-15">Samantha Melon</h5>
                                                       <p class="mb-0 fs-13 text-muted">User ID: #1234 <span class="text-success ms-2 d-inline-block">Paid</span></p>
                                                   </div>
                                                   <div class="ms-auto w-45 fs-16 mt-2">
                                                       <div id="spark1" class="w-100"></div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="list-group-item list-group-item-action br-t-1">
                                       <div class="d-flex">
                                           <img class="avatar avatar-md rounded-circle my-auto me-3" src="../assets/images/faces/11.jpg" alt="Image description">
                                           <div class="flex-grow-1">
                                               <div class="d-flex align-items-center">
                                                   <div class="mt-1">
                                                       <h5 class="mb-1 fs-15">Jimmy Changa</h5>
                                                       <p class="mb-0 fs-13 text-muted">User ID: #1234 <span class="text-danger ms-2 d-inline-block">Pending</span></p>
                                                   </div>
                                                   <div class="ms-auto w-45 fs-16 mt-2">
                                                       <div id="spark2" class="w-100"></div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="list-group-item list-group-item-action br-t-1">
                                       <div class="d-flex">
                                           <img class="avatar avatar-md rounded-circle my-auto me-3" src="../assets/images/faces/17.jpg" alt="Image description">
                                           <div class="flex-grow-1">
                                               <div class="d-flex align-items-center">
                                                   <div class="mt-1">
                                                       <h5 class="mb-1 fs-15">Gabe Lackmen</h5>
                                                       <p class="mb-0 fs-13 text-muted">User ID: #1234 <span class="text-danger ms-2 d-inline-block">Pending</span></p>
                                                   </div>
                                                   <div class="ms-auto w-45 fs-16 mt-2">
                                                       <div id="spark3" class="w-100"></div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="list-group-item list-group-item-action br-t-1">
                                       <div class="d-flex">
                                           <img class="avatar avatar-md rounded-circle my-auto me-3" src="../assets/images/faces/15.jpg" alt="Image description">
                                           <div class="flex-grow-1">
                                               <div class="d-flex align-items-center">
                                                   <div class="mt-1">
                                                       <h5 class="mb-1 fs-15">Manuel Labor</h5>
                                                       <p class="mb-0 fs-13 text-muted">User ID: #1234 <span class="text-success ms-2 d-inline-block">Paid</span></p>
                                                   </div>
                                                   <div class="ms-auto w-45 fs-16 mt-2">
                                                       <div id="spark4" class="w-100"></div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="list-group-item list-group-item-action br-t-1 br-be-7 br-bs-7">
                                       <div class="d-flex">
                                           <img class="avatar avatar-md rounded-circle my-auto me-3" src="../assets/images/faces/6.jpg" alt="Image description">
                                           <div class="flex-grow-1">
                                               <div class="d-flex align-items-center">
                                                   <div class="mt-1">
                                                       <h5 class="mb-1 fs-15">Sharon Needles</h5>
                                                       <p class="b-0 fs-13 text-muted mb-0">User ID: #1234 <span class="text-success ms-2 d-inline-block">Paid</span></p>
                                                   </div>
                                                   <div class="ms-auto w-45 fs-16 mt-2">
                                                       <div id="spark5" class="w-100"></div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-4 col-md-12 col-lg-6">
                       <div class="card">
                           <div class="card-header pb-1">
                               <h3 class="card-title mb-2">Sales Activity</h3>
                               <p class="fs-12 mb-0 text-muted">Sales activities are the tactics that salespeople use to achieve their goals and objective</p>
                           </div>
                           <div class="product-timeline card-body pt-2 mt-1">
                               <ul class="timeline-1 mb-0">
                                   <li class="mt-0"> <i class="fe fe-pie-chart bg-primary-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Total Products</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">3 days ago</a>
                                       <p class="mb-0 text-muted fs-12">1.3k New Products</p>
                                   </li>
                                   <li class="mt-0"> <i class="fe fe-shopping-cart bg-danger-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Total Sales</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">35 mins ago</a>
                                       <p class="mb-0 text-muted fs-12">1k New Sales</p>
                                   </li>
                                   <li class="mt-0"> <i class="fe fe-bar-chart bg-success-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Total Revenue</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">50 mins ago</a>
                                       <p class="mb-0 text-muted fs-12">23.5K New Revenue</p>
                                   </li>
                                   <li class="mt-0"> <i class="fe fe-box bg-warning-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Total Profit</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">1 hour ago</a>
                                       <p class="mb-0 text-muted fs-12">3k New profit</p>
                                   </li>
                                   <li class="mt-0"> <i class="fe fe-eye bg-purple-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Customer Visits</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">1 day ago</a>
                                       <p class="mb-0 text-muted fs-12">15% increased</p>
                                   </li>
                                   <li class="mt-0 mb-0"> <i class="fe fe-edit bg-primary-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Customer Reviews</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">1 day ago</a>
                                       <p class="mb-0 text-muted fs-12">1.5k reviews</p>
                                   </li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-4 col-md-12 col-lg-6">
                       <div class="card">
                           <div class="card-header pb-0">
                               <h3 class="card-title mb-2">Recent Orders</h3>
                               <p class="fs-12 mb-0 text-muted">An order is an investor's instructions to a broker or brokerage firm to purchase or sell</p>
                           </div>
                           <div class="card-body sales-info pb-0 pt-0">
                               <div id="chart" class="ht-150"></div>
                               <div class="row sales-infomation pb-0 mb-0 mx-auto w-100">
                                   <div class="col-md-6 col">
                                       <p class="mb-0 d-flex"><span class="legend bg-primary brround"></span>Delivered</p>
                                       <h3 class="mb-1">5238</h3>
                                       <div class="d-flex">
                                           <p class="text-muted ">Last 6 months</p>
                                       </div>
                                   </div>
                                   <div class="col-md-6 col">
                                       <p class="mb-0 d-flex"><span class="legend bg-info brround"></span>Cancelled</p>
                                           <h3 class="mb-1">3467</h3>
                                       <div class="d-flex">
                                           <p class="text-muted">Last 6 months</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="card ">
                           <div class="card-body">
                               <div class="row">
                                   <div class="col-md-6">
                                       <div class="d-flex align-items-center pb-2">
                                           <p class="mb-0">Total Sales</p>
                                       </div>
                                       <h4 class="fw-bold mb-2">$7,590</h4>
                                       <div class="progress progress-style progress-sm">
                                           <div class="progress-bar bg-primary-gradient" style="width: 80%" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                                       </div>
                                   </div>
                                   <div class="col-md-6 mt-4 mt-md-0">
                                       <div class="d-flex align-items-center pb-2">
                                           <p class="mb-0">Active Users</p>
                                       </div>
                                       <h4 class="fw-bold mb-2">$5,460</h4>
                                       <div class="progress progress-style progress-sm">
                                           <div class="progress-bar bg-danger-gradient" style="width: 45%" role="progressbar"  aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- row close -->

               <!-- row opened -->
               <div class="row">
                   <div class="col-md-12 col-lg-4 col-xl-4">
                       <div class="card top-countries-card">
                           <div class="card-header p-0">
                               <h6 class="card-title fs-13 mb-2">Your Top Countries</h6><span class="d-block mg-b-10 text-muted fs-12 mb-2">Sales performance revenue based by country</span>
                           </div>
                           <div class="list-group border">
                               <div class="list-group-item border-top-0" id="br-t-0">
                                   <p>United States</p><span>$1,671.10</span>
                               </div>
                               <div class="list-group-item">
                                   <p>Netherlands</p><span>$1,064.75</span>
                               </div>
                               <div class="list-group-item">
                                   <p>United Kingdom</p><span>$1,055.98</span>
                               </div>
                               <div class="list-group-item">
                                   <p>Canada</p><span>$1,045.49</span>
                               </div>
                               <div class="list-group-item">
                                   <p>India</p><span>$1,930.12</span>
                               </div>
                               <div class="list-group-item border-bottom-0 mb-0">
                                   <p>Australia</p><span>$1,042.00</span>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-12 col-lg-8 col-xl-8">
                       <div class="card card-table">
                           <div class=" card-header p-0 d-flex justify-content-between">
                               <h4 class="card-title mb-1">Your Most Recent Earnings</h4>
                               <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light bg-transparent rounded-pill" data-bs-toggle="dropdown"><i
                                   class="fe fe-more-horizontal"></i></a>
                               <div class="dropdown-menu">
                                   <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                   <a class="dropdown-item" href="javascript:void(0);">Another
                                       Action</a>
                                   <a class="dropdown-item" href="javascript:void(0);">Something Else
                                       Here</a>
                               </div>
                           </div>
                           <span class="fs-12 text-muted mb-3 ">This is your most recent earnings for today's date.</span>
                           <div class="table-responsive country-table">
                               <table class="table table-striped table-bordered mb-0 text-nowrap">
                                   <thead>
                                       <tr>
                                           <th class="wd-lg-25p">Date</th>
                                           <th class="wd-lg-25p">Sales Count</th>
                                           <th class="wd-lg-25p">Earnings</th>
                                           <th class="wd-lg-25p">Tax Witheld</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td>05 Dec 2019</td>
                                           <td class="fw-medium">34</td>
                                           <td class="fw-medium">$658.20</td>
                                           <td class="text-danger fw-medium">-$45.10</td>
                                       </tr>
                                       <tr>
                                           <td>06 Dec 2019</td>
                                           <td class="fw-medium">26</td>
                                           <td class="fw-medium">$453.25</td>
                                           <td class="text-danger fw-medium">-$15.02</td>
                                       </tr>
                                       <tr>
                                           <td>07 Dec 2019</td>
                                           <td class="fw-medium">34</td>
                                           <td class="fw-medium">$653.12</td>
                                           <td class="text-danger fw-medium">-$13.45</td>
                                       </tr>
                                       <tr>
                                           <td>08 Dec 2019</td>
                                           <td class="fw-medium">45</td>
                                           <td class="fw-medium">$546.47</td>
                                           <td class="text-danger fw-medium">-$24.22</td>
                                       </tr>
                                       <tr>
                                           <td>09 Dec 2019</td>
                                           <td class="fw-medium">31</td>
                                           <td class="fw-medium">$425.72</td>
                                           <td class="text-danger fw-medium">-$25.01</td>
                                       </tr>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- /row -->

           </div>
       </div>
       <!-- End::app-content -->

       <!-- Footer Start -->
       @include('footer')
       <!-- Footer End -->

   </div>

    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="las la-angle-double-up"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    <!-- Popper JS -->
    <script src="{{ asset('libs/@popperjs/core/umd/popper.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Defaultmenu JS -->
    <script src="{{ asset('js/defaultmenu.min.js') }}"></script>

    <!-- Node Waves JS-->
    <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>

    <!-- Sticky JS -->
    <script src="{{ asset('js/sticky.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('js/simplebar.js') }}"></script>

    <!-- Color Picker JS -->
    <script src="{{ asset('libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>


    <!-- Apex Charts JS -->
    <script src="{{ asset('libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- JSVector Maps JS -->
    <script src="{{ asset('libs/jsvectormap/js/jsvectormap.min.js') }}"></script>

    <!-- JSVector Maps MapsJS -->
    <script src="{{ asset('libs/jsvectormap/maps/world-merc.js') }}"></script>
    <script src="{{ asset('js/us-merc-en.js') }}"></script>

    <!-- Chartjs Chart JS -->
    <script src="{{ asset('js/index.js') }}"></script>


    <!-- Custom-Switcher JS -->
    <script src="{{ asset('js/custom-switcher.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
