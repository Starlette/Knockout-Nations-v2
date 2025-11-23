<?php
$link = $_SERVER[ 'PHP_SELF' ];
$link_array = explode( '/', $link );
$page = end( $link_array );
?>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

	<!-- Apple Touch Icon -->
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">

<?php if($page !== 'login.php' && $page !== 'layout-horizontal.php' && $page !== 'layout-detached.php' && $page !== 'layout-modern.php' && $page !== 'layout-horizontal-overlay.php' && $page !== 'layout-two-column.php' && $page !== 'layout-hovered.php' && $page !== 'layout-box.php' && $page !== 'layout-horizontal-single.php' && $page !== 'layout-horizontal-box.php' && $page !== 'layout-horizontal-fullwidth.php' && $page !== 'layout-stacked.php' && $page !== 'layout-horizontal-sidemenu.php' && $page !== 'layout-vertical-transparent.php' && $page !== 'layout-without-header.php' && $page !== 'login-2.php' && $page !== 'login-3.php' && $page !== 'register.php' && $page !== 'register-2.php' && $page !== 'register-3.php' && $page !== 'forgot-password.php' && $page !== 'forgot-password-2.php' && $page !== 'forgot-password-3.php' && $page !== 'reset-password.php' && $page !== 'reset-password-2.php' && $page !== 'reset-password-3.php' && $page !== 'email-verification.php' && $page !== 'email-verification-2.php' && $page !== 'email-verification-3.php' && $page !== 'lock-screen.php' && $page !== 'error-404.php' && $page !== 'error-500.php' && $page !== 'coming-soon.php' && $page !== 'under-maintenance.php' && $page !== 'under-construction.php' && $page !== 'success.php' && $page !== 'success-2.php' && $page !== 'success-3.php' && $page !== 'two-step-verification.php' && $page !== 'two-step-verification-2.php' && $page !== 'two-step-verification-3.php' && $page !== 'layout-rtl.php' && $page !== 'layout-dark.php' && $page !== 'job-grid-2.php' && $page !== 'job-list-2.php' && $page !== 'job-details.php') {?>
    <!-- Theme Script js -->
    <script src="assets/js/theme-script.js"></script>
<?php } ?>

<?php if($page !== 'layout-rtl.php') {?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
<?php } ?>

<?php if($page === 'layout-rtl.php') {?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.rtl.min.css">
<?php } ?>

<?php if($page === 'employee-salary.php' || $page === 'project-details.php' || $page === 'gallery.php' || $page === 'plugins.php' || $page === 'search-result.php' || $page === 'social-feed.php') {?>
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">
<?php } ?>

    <!-- Feather CSS -->
    <link rel="stylesheet" href="assets/plugins/icons/feather/feather.css">

<?php if($page === 'icon-bootstrap.php') {?>
    <!-- Bootstrap Icon CSS -->
    <link rel="stylesheet" href="assets/plugins/icons/bootstrap/bootstrap-icons.min.css">
<?php } ?>

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="assets/plugins/tabler-icons/tabler-icons.css">

<?php if($page === 'icon-remix.php') {?>
    <!-- Remix Icon CSS -->
    <link rel="stylesheet" href="assets/plugins/remix/fonts/remixicon.css">
<?php } ?>

<?php if($page !== 'under-maintenance.php' && $page !== 'under-construction.php' && $page !== 'coming-soon.php' && $page !== 'error-404.php' && $page !== 'error-500.php' && $page !== 'two-step-verification-3.php' && $page !== 'two-step-verification-2.php' && $page !== 'two-step-verification.php' && $page !== 'email-verification-3.php' && $page !== 'email-verification-2.php' && $page !== 'email-verification.php' && $page !== 'reset-password-3.php' && $page !== 'reset-password-2.php' && $page !== 'reset-password.php' && $page !== 'forgot-password-3.php' && $page !== 'forgot-password-2.php' && $page !== 'forgot-password.php' && $page !== 'register-3.php' && $page !== 'register-2.php' && $page !== 'register.php' && $page !== 'login-3.php' && $page !== 'login-2.php' && $page !== 'login.php' && $page !== 'success.php' && $page !== 'success-2.php' && $page !== 'success-3.php' && $page !== 'lock-screen.php') {?>
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
<?php } ?>

<?php if($page === 'maps-leaflet.php') {?>
    <!-- Leaflet Maps CSS -->
    <link rel="stylesheet" href="assets/plugins/leaflet/leaflet.css">
<?php } ?>

<?php if($page === 'maps-vector.php') {?>
    <!-- Jsvector Maps -->
    <link rel="stylesheet" href="assets/plugins/jsvectormap/css/jsvectormap.min.css">
<?php } ?>

<?php if($page === 'ui-scrollbar.php') {?>
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/plugins/scrollbar/scroll.min.css">
<?php } ?>

<?php if($page === 'ui-stickynote.php') {?>
    <!-- Sticky CSS -->
    <link rel="stylesheet" href="assets/plugins/stickynote/sticky.css">
<?php } ?>

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<?php if($page !== 'under-maintenance.php' && $page !== 'under-construction.php' && $page !== 'coming-soon.php' && $page !== 'error-404.php' && $page !== 'error-500.php' && $page !== 'two-step-verification-3.php' && $page !== 'two-step-verification-2.php' && $page !== 'two-step-verification.php' && $page !== 'email-verification-3.php' && $page !== 'email-verification-2.php' && $page !== 'email-verification.php' && $page !== 'reset-password-3.php' && $page !== 'reset-password-2.php' && $page !== 'reset-password.php' && $page !== 'forgot-password-3.php' && $page !== 'forgot-password-2.php' && $page !== 'forgot-password.php' && $page !== 'register-3.php' && $page !== 'register-2.php' && $page !== 'register.php' && $page !== 'login-3.php' && $page !== 'login-2.php' && $page !== 'login.php' && $page !== 'success.php' && $page !== 'success-2.php' && $page !== 'success-3.php' && $page !== 'lock-screen.php') {?>
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="assets/plugins/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="assets/plugins/@simonwep/pickr/themes/nano.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
<?php } ?>

<?php if($page === 'email-reply.php' || $page === 'email.php' || $page === 'notes.php' || $page === 'plugin.php' || $page === 'project-details.php' || $page === 'social-feed.php' || $page === 'task-details.php') {?>
    <!-- Owl carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<?php } ?>

<?php if($page !== 'under-maintenance.php' && $page !== 'under-construction.php' && $page !== 'coming-soon.php' && $page !== 'error-404.php' && $page !== 'error-500.php' && $page !== 'two-step-verification-3.php' && $page !== 'two-step-verification-2.php' && $page !== 'two-step-verification.php' && $page !== 'email-verification-3.php' && $page !== 'email-verification-2.php' && $page !== 'email-verification.php' && $page !== 'reset-password-3.php' && $page !== 'reset-password-2.php' && $page !== 'reset-password.php' && $page !== 'forgot-password-3.php' && $page !== 'forgot-password-2.php' && $page !== 'forgot-password.php' && $page !== 'register-3.php' && $page !== 'register-2.php' && $page !== 'register.php' && $page !== 'login-3.php' && $page !== 'login-2.php' && $page !== 'login.php' && $page !== 'success.php' && $page !== 'success-2.php' && $page !== 'success-3.php' && $page !== 'lock-screen.php') {?>
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">
<?php } ?>

<?php if($page === 'add-invoices.php' || $page === 'edit-invoices.php' || $page === 'file-manager.php' || $page === 'group-video-call.php' || $page === 'invoice-details.php' || $page === 'invoices.php' || $page === 'manage-jobs.php'  || $page === 'maps-vector.php' || $page === 'payslip.php' || $page === 'promotion.php' || $page === 'resignation.php' || $page === 'termination.php') {?>
    <!-- Player CSS -->
    <link rel="stylesheet" href="assets/css/plyr.css">
<?php } ?>

<?php if($page === 'add-invoices.php' || $page === 'edit-invoices.php' || $page === 'file-manager.php' || $page === 'group-video-call.php' || $page === 'invoice-details.php' || $page === 'invoices.php' || $page === 'manage-jobs.php'  || $page === 'maps-vector.php' || $page === 'payslip.php' || $page === 'promotion.php' || $page === 'resignation.php' || $page === 'termination.php') {?>
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">
<?php } ?>


<?php if($page !== 'under-maintenance.php' && $page !== 'under-construction.php' && $page !== 'coming-soon.php' && $page !== 'error-404.php' && $page !== 'error-500.php' && $page !== 'two-step-verification-3.php' && $page !== 'two-step-verification-2.php' && $page !== 'two-step-verification.php' && $page !== 'email-verification-3.php' && $page !== 'email-verification-2.php' && $page !== 'email-verification.php' && $page !== 'reset-password-3.php' && $page !== 'reset-password-2.php' && $page !== 'reset-password.php' && $page !== 'forgot-password-3.php' && $page !== 'forgot-password-2.php' && $page !== 'forgot-password.php' && $page !== 'register-3.php' && $page !== 'register-2.php' && $page !== 'register.php' && $page !== 'login-3.php' && $page !== 'login-2.php' && $page !== 'login.php' && $page !== 'success.php' && $page !== 'success-2.php' && $page !== 'success-3.php' && $page !== 'lock-screen.php') {?>
    <!-- Summernote CSS -->
    <link rel="stylesheet" href="assets/plugins/summernote/summernote-lite.min.css">
    
    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
<?php } ?>

<?php if($page === 'ui-drag-drop.php' || $page === 'form-pickers.php' || $page === 'icon-bootstrap.php' || $page === 'icon-remix.php' || $page === 'icon-tabler.php' || $page === 'maps-leaflet.php' || $page === 'maps-vector.php' || $page === 'plugin.php' || $page === 'ui-clipboard.php' || $page === 'ui-sortable.php' || $page === 'ui-swiperjs.php') {?>
    <!-- Dragula CSS -->
    <link rel="stylesheet" href="assets/plugins/dragula/css/dragula.min.css">
<?php } ?>

<?php if($page === 'ui-swiperjs.php' || $page === 'maps-google.php' || $page === 'ui-sortable.php') {?>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="assets/plugins/swiper/swiper-bundle.min.css">
<?php } ?>

<?php if($page === 'chart-c3.php' || $page === 'plugin.php') {?>
    <!-- ChartC3 CSS -->
    <link rel="stylesheet" href="assets/plugins/c3-chart/c3.min.css">
<?php } ?>

<?php if($page !== 'under-maintenance.php' && $page !== 'under-construction.php' && $page !== 'coming-soon.php' && $page !== 'error-404.php' && $page !== 'error-500.php' && $page !== 'two-step-verification-3.php' && $page !== 'two-step-verification-2.php' && $page !== 'two-step-verification.php' && $page !== 'email-verification-3.php' && $page !== 'email-verification-2.php' && $page !== 'email-verification.php' && $page !== 'reset-password-3.php' && $page !== 'reset-password-2.php' && $page !== 'reset-password.php' && $page !== 'forgot-password-3.php' && $page !== 'forgot-password-2.php' && $page !== 'forgot-password.php' && $page !== 'register-3.php' && $page !== 'register-2.php' && $page !== 'register.php' && $page !== 'login-3.php' && $page !== 'login-2.php' && $page !== 'login.php' && $page !== 'success.php' && $page !== 'success-2.php' && $page !== 'success-3.php' && $page !== 'lock-screen.php') {?>
    <!-- Bootstrap Tagsinput CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
<?php } ?>

<?php if($page === 'job-grid-2.php' || $page === 'job-list-2.php' || $page === 'plugin.php' || $page === 'ui-rangeslider.php' || $page === 'ui-rating.php') {?>
    <!-- Rangeslider CSS -->
    <link rel="stylesheet" href="assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css">
<?php } ?>

<?php if($page === 'ui-lightbox.php') {?>
    <!-- Lightbox CSS -->
	<link rel="stylesheet" href="assets/plugins/lightbox/glightbox.min.css">
<?php } ?>

<?php if($page === 'icon-ionic.php' || $page === 'plugin.php') {?>
    <!-- Ionic CSS -->
    <link rel="stylesheet" href="assets/plugins/icons/ionic/ionicons.css">
<?php } ?>

<?php if($page === 'chart-morris.php') {?>
    <!-- Morris CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">
<?php } ?>

<?php if($page === 'icon-material.php') {?>
    <!-- Material CSS -->
    <link rel="stylesheet" href="assets/plugins/material/materialdesignicons.css">
<?php } ?>

<?php if($page === 'icon-pe7.php') {?>
    <!-- Pe7 CSS -->
    <link rel="stylesheet" href="assets/plugins/icons/pe7/pe-icon-7.css">
<?php } ?>

<?php if($page === 'icon-simpleline.php' || $page === 'plugin.php') {?>
    <!-- Material CSS -->
    <link rel="stylesheet" href="assets/plugins/simpleline/simple-line-icons.css">
<?php } ?>

<?php if($page === 'icon-themify.php') {?>
    <!-- Pe7 CSS -->
    <link rel="stylesheet" href="assets/plugins/icons/themify/themify.css">
<?php } ?>

<?php if($page === 'icon-typicon.php') {?>
    <!-- Typicons CSS -->
    <link rel="stylesheet" href="assets/plugins/icons/typicons/typicons.css">
<?php } ?>

<?php if($page === 'icon-flag.php') {?>
    <!-- Flags CSS -->
    <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">
<?php } ?>

<?php if($page === 'icon-weather.php') {?>
    <!-- Weather CSS -->
    <link rel="stylesheet" href="assets/plugins/icons/weather/weathericons.css">
<?php } ?>

<?php if($page === 'form-pickers.php') {?>
    <link rel="stylesheet" href="assets/plugins/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="assets/plugins/jquery-timepicker/jquery-timepicker.css" />
    <link rel="stylesheet" href="assets/plugins/pickr/pickr-themes.css" />
<?php } ?>

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
	
