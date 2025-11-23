<?php
$link = $_SERVER[ 'PHP_SELF' ];
$link_array = explode( '/', $link );
$page = end( $link_array );
?>
    <!-- jQuery -->
    <script src = 'assets/js/jquery-3.7.1.min.js'></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Feather Icon JS -->
    <script src="assets/js/feather.min.js"></script>

<?php if($page !== 'under-maintenance.php' && $page !== 'under-construction.php' && $page !== 'coming-soon.php' && $page !== 'error-404.php' && $page !== 'error-500.php' && $page !== 'two-step-verification-3.php' && $page !== 'two-step-verification-2.php' && $page !== 'two-step-verification.php' && $page !== 'email-verification-3.php' && $page !== 'email-verification-2.php' && $page !== 'email-verification.php' && $page !== 'reset-password-3.php' && $page !== 'reset-password-2.php' && $page !== 'reset-password.php' && $page !== 'forgot-password-3.php' && $page !== 'forgot-password-2.php' && $page !== 'forgot-password.php' && $page !== 'register-3.php' && $page !== 'register-2.php' && $page !== 'register.php' && $page !== 'login-3.php' && $page !== 'login-2.php' && $page !== 'login.php' && $page !== 'success.php' && $page !== 'success-2.php' && $page !== 'success-3.php' && $page !== 'lock-screen.php') {?>
    <!-- Slimscroll JS -->
    <script src="assets/js/jquery.slimscroll.min.js"></script>

    <!-- Summernote JS -->
    <script src="assets/plugins/summernote/summernote-lite.min.js"></script>    

    <!-- Daterangepikcer JS -->
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>    
<?php } ?>

<?php if($page === 'add-invoices.php' || $page === 'edit-invoices.php' || $page === 'file-manager.php' || $page === 'group-video-call.php' || $page === 'invoice-details.php' || $page === 'invoices.php' || $page === 'manage-jobs.php' || $page === 'maps-leaflet.php' || $page === 'maps-vector.php' || $page === 'payslip.php' || $page === 'promotion.php' || $page === 'resignation.php' || $page === 'termination.php') {?>
    <!-- Player JS -->
    <script src="assets/js/plyr-js.js"></script>
<?php } ?>    

<?php if($page !== 'under-maintenance.php' && $page !== 'under-construction.php' && $page !== 'coming-soon.php' && $page !== 'error-404.php' && $page !== 'error-500.php' && $page !== 'two-step-verification-3.php' && $page !== 'two-step-verification-2.php' && $page !== 'two-step-verification.php' && $page !== 'email-verification-3.php' && $page !== 'email-verification-2.php' && $page !== 'email-verification.php' && $page !== 'reset-password-3.php' && $page !== 'reset-password-2.php' && $page !== 'reset-password.php' && $page !== 'forgot-password-3.php' && $page !== 'forgot-password-2.php' && $page !== 'forgot-password.php' && $page !== 'register-3.php' && $page !== 'register-2.php' && $page !== 'register.php' && $page !== 'login-3.php' && $page !== 'login-2.php' && $page !== 'login.php' && $page !== 'success.php' && $page !== 'success-2.php' && $page !== 'success-3.php' && $page !== 'lock-screen.php') {?>
    <!-- Color Picker JS -->
    <script src="assets/plugins/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Datatable JS -->
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap5.min.js"></script>	
  
    <!-- Bootstrap Tagsinput JS -->
    <script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<?php } ?>

<?php if($page === 'add-invoices.php' || $page === 'edit-invoices.php' || $page === 'file-manager.php' || $page === 'group-video-call.php' || $page === 'invoice-details.php' || $page === 'invoices.php' || $page === 'manage-jobs.php' || $page === 'maps-leaflet.php' || $page === 'maps-vector.php' || $page === 'payslip.php' || $page === 'promotion.php' || $page === 'resignation.php' || $page === 'termination.php') {?>    
    <!-- Owl Carousel -->
    <script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>
<?php } ?>

<?php if($page === 'job-grid-2.php' || $page === 'job-list-2.php' || $page === 'plugin.php' || $page === 'ui-rangeslider.php' || $page === 'ui-rating.php') {?>
    <!-- Rangeslider JS -->
    <script src="assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="assets/plugins/ion-rangeslider/js/custom-rangeslider.js"></script>
<?php } ?>

<?php if($page === 'calendar.php' || $page === 'incoming-call.php' || $page === 'outgoing-call.php' || $page === 'video-call.php' || $page === 'voice-call.php') {?>
    <!-- Fullcalendar JS -->
    <script src="assets/plugins/fullcalendar/index.global.min.js"></script>
    <script src="assets/plugins/fullcalendar/calendar-data.js"></script>
<?php } ?>

<?php if($page !== 'under-maintenance.php' && $page !== 'under-construction.php' && $page !== 'coming-soon.php' && $page !== 'error-404.php' && $page !== 'error-500.php' && $page !== 'two-step-verification-3.php' && $page !== 'two-step-verification-2.php' && $page !== 'two-step-verification.php' && $page !== 'email-verification-3.php' && $page !== 'email-verification-2.php' && $page !== 'email-verification.php' && $page !== 'reset-password-3.php' && $page !== 'reset-password-2.php' && $page !== 'reset-password.php' && $page !== 'forgot-password-3.php' && $page !== 'forgot-password-2.php' && $page !== 'forgot-password.php' && $page !== 'register-3.php' && $page !== 'register-2.php' && $page !== 'register.php' && $page !== 'login-3.php' && $page !== 'login-2.php' && $page !== 'login.php' && $page !== 'success.php' && $page !== 'success-2.php' && $page !== 'success-3.php' && $page !== 'lock-screen.php') {?>    
    <!-- Datetimepicker JS -->
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Select2 JS -->
    <script src="assets/plugins/select2/js/select2.min.js"></script>
<?php } ?>

<?php if($page === 'calendar.php' || $page === 'file-manager.php' || $page === 'incoming-call.php' || $page === 'outgoing-call.php' || $page === 'plugin.php' || $page === 'video-call.php') {?>    
    <!-- Theiastickysidebar JS -->
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.min.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.min.js"></script>
<?php } ?>

<?php if($page === 'email-reply.php' || $page === 'email.php' || $page === 'notes.php' || $page === 'plugin.php' || $page === 'project-details.php' || $page === 'social-feed.php' || $page === 'task-details.php') {?>
    <!-- Owl Carousel JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
<?php } ?>

<?php if($page === 'ui-clipboard.php') {?>
    <!-- Clipboard JS -->
    <script src="assets/plugins/clipboard/clipboard.min.js"></script>
<?php } ?>

<?php if($page === 'maps-vector.php') {?>
    <script src="assets/plugins/jsvectormap/js/jsvectormap.min.js"></script>
    <!-- JSVector Maps MapsJS -->
    <script src="assets/plugins/jsvectormap/maps/world-merc.js"></script>
    <script src="assets/js/us-merc-en.js"></script>
    <script src="assets/js/russia.js"></script>
    <script src="assets/js/spain.js"></script>
    <script src="assets/js/canada.js"></script>
    <script src="assets/js/jsvectormap.js"></script>
    <script src="assets/plugins/@simonwep/pickr/pickr.min.js"></script>
<?php } ?>

<?php if($page === 'maps-leaflet.php') {?>
    <script src="assets/plugins/leaflet/leaflet.js"></script>
    <script src="assets/js/leaflet.js"></script>
<?php } ?>

<?php if($page === 'ui-drag-drop.php') {?>
    <!-- Dragula JS -->
    <script src="assets/plugins/dragula/js/dragula.min.js"></script>
    <script src="assets/plugins/dragula/js/drag-drop.min.js"></script>
    <script src="assets/plugins/dragula/js/draggable-cards.js"></script>
<?php } ?>

<?php if($page === 'ui-sweetalerts.php' || $page === 'ui-ribbon.php') {?>
    <!-- Sweetalert 2 -->
    <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>
<?php } ?>

<?php if($page === 'ui-stickynote.php' || $page === 'kanban-view.php' || $page === 'task-board.php' || $page === 'deals-grid.php' || $page === 'leads-grid.php' || $page === 'candidates-kanban.php') {?>
    <!-- Stickynote JS -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>    
<?php } ?>

<?php if($page === 'plugin.php' || $page === 'ui-stickynote.php') {?>
    <script src="assets/plugins/stickynote/sticky.js"></script>
<?php } ?>

<?php if($page === 'chart-apex.php' || $page === 'index.php' || $page === 'employee-dashboard.php' || $page === 'deals-dashboard.php' || $page === 'leads-dashboard.php' || $page === 'file-manager.php' || $page === 'dashboard.php' || $page === 'companies.php' || $page === 'packages.php' || $page === 'layout-horizontal.php' || $page === 'layout-detached.php' || $page === 'layout-modern.php' || $page === 'layout-horizontal-overlay.php' || $page === 'layout-two-column.php' || $page === 'layout-hovered.php' || $page === 'layout-box.php' || $page === 'layout-horizontal-single.php' || $page === 'layout-horizontal-box.php' || $page === 'layout-horizontal-fullwidth.php' || $page === 'layout-horizontal-sidemenu.php' || $page === 'layout-vertical-transparent.php' || $page === 'layout-without-header.php' || $page === 'layout-rtl.php' || $page === 'layout-stacked.php' || $page === 'layout-dark.php' || $page === 'analytics.php' || $page === 'expenses-report.php' || $page === 'invoice-report.php' || $page === 'payment-report.php' || $page === 'project-report.php' || $page === 'task-report.php' || $page === 'user-report.php' || $page === 'employee-report.php' || $page === 'payslip-report.php' || $page === 'attendance-report.php' || $page === 'leave-report.php' || $page === 'daily-report.php') {?>
    <!-- Chart JS -->
    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>
<?php } ?>

<?php if($page === 'chart-c3.php') {?>
    <!-- Chart JS -->
    <script src="assets/plugins/c3-chart/d3.v5.min.js"></script>
    <script src="assets/plugins/c3-chart/c3.min.js"></script>
    <script src="assets/plugins/c3-chart/chart-data.js"></script>
<?php } ?>

<?php if($page === 'chart-js.php' || $page === 'index.php' || $page === 'deals-dashboard.php' || $page === 'dashboard.php' || $page === 'companies.php' || $page === 'layout-horizontal.php' || $page === 'layout-detached.php' || $page === 'layout-modern.php' || $page === 'layout-horizontal-overlay.php' || $page === 'layout-two-column.php' || $page === 'layout-hovered.php' || $page === 'layout-box.php' || $page === 'layout-horizontal-single.php' || $page === 'layout-horizontal-box.php' || $page === 'layout-horizontal-fullwidth.php' || $page === 'layout-horizontal-sidemenu.php' || $page === 'layout-vertical-transparent.php' || $page === 'layout-without-header.php' || $page === 'layout-rtl.php' || $page === 'layout-stacked.php' || $page === 'layout-dark.php' || $page === 'analytics.php') {?>
    <!-- Chart JS -->
    <script src="assets/plugins/chartjs/chart.min.js"></script>
    <script src="assets/plugins/chartjs/chart-data.js"></script>
<?php } ?>

<?php if($page === 'chart-morris.php') {?>
    <!-- Chart JS -->
    <script src="assets/plugins/morris/raphael-min.js"></script>
    <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/plugins/morris/chart-data.js"></script>
<?php } ?>

<?php if($page === 'chart-peity.php' || $page === 'deals-dashboard.php' || $page === 'leads-dashboard.php' || $page === 'dashboard.php' || $page === 'companies.php' || $page === 'subscription.php' || $page === 'tickets-grid.php' || $page === 'tickets.php' || $page === 'task-report.php') {?>
    <!-- Chart JS -->
    <script src="assets/plugins/peity/jquery.peity.min.js"></script>
    <script src="assets/plugins/peity/chart-data.js"></script>
<?php } ?>

<?php if($page === 'chart-flot.php') {?>
    <!-- Chart JS -->
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot/jquery.flot.fillbetween.js"></script>
    <script src="assets/plugins/flot/jquery.flot.pie.js"></script>
    <script src="assets/plugins/flot/chart-data.js"></script>
<?php } ?>

<?php if($page === 'ui-rating.php') {?>
    <!-- Rater JS -->
    <script src="assets/plugins/rater-js/index.js"></script>

    <!-- Internal Ratings JS -->
    <script src="assets/js/ratings.js"></script>
<?php } ?>

<?php if($page === 'ui-toasts.php') {?>
    <!-- Chart JS -->
    <script src="assets/plugins/toastr/toastr.min.js"></script>
    <script src="assets/plugins/toastr/toastr.js"></script>
<?php } ?>

<?php if($page === 'ui-counter.php') {?>
    <!-- Stickynote JS -->
    <script src="assets/plugins/countup/jquery.counterup.min.js"></script>
    <script src="assets/plugins/countup/jquery.waypoints.min.js"></script>
    <script src="assets/plugins/countup/jquery.missofis-countdown.js"></script>

	<script src="assets/js/counter.js"></script>
<?php } ?>

<?php if($page === 'ui-lightbox.php') {?>
    <!-- Alertify JS -->
    <script src="assets/plugins/lightbox/glightbox.min.js"></script>
    <script src="assets/plugins/lightbox/lightbox.js"></script>
<?php } ?>

<?php if($page === 'ui-swiperjs.php') {?>
    <!-- Swiper JS -->
    <script src="assets/plugins/swiper/swiper-bundle.min.js"></script>
	<script src="assets/plugins/@simonwep/pickr/pickr.min.js"></script>

    <!-- Internal Swiper JS -->
    <script src="assets/js/swiper.js"></script>
<?php } ?>

<?php if($page === 'form-wizard.php') {?>
    <!-- Wizard JS -->
    <script src="assets/plugins/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="assets/plugins/twitter-bootstrap-wizard/prettify.js"></script>
    <script src="assets/plugins/twitter-bootstrap-wizard/form-wizard.js"></script>
<?php } ?>

<?php if($page === 'form-mask.php') {?>
    <!-- Mask JS -->
    <script src="assets/js/jquery.maskedinput.min.js"></script>
    <script src="assets/js/mask.js"></script>
<?php } ?>

<?php if($page !== 'under-maintenance.php' && $page !== 'under-construction.php' && $page !== 'coming-soon.php' && $page !== 'error-404.php' && $page !== 'error-500.php' && $page !== 'two-step-verification-3.php' && $page !== 'two-step-verification-2.php' && $page !== 'two-step-verification.php' && $page !== 'email-verification-3.php' && $page !== 'email-verification-2.php' && $page !== 'email-verification.php' && $page !== 'reset-password-3.php' && $page !== 'reset-password-2.php' && $page !== 'reset-password.php' && $page !== 'forgot-password-3.php' && $page !== 'forgot-password-2.php' && $page !== 'forgot-password.php' && $page !== 'register-3.php' && $page !== 'register-2.php' && $page !== 'register.php' && $page !== 'login-3.php' && $page !== 'login-2.php' && $page !== 'login.php' && $page !== 'success.php' && $page !== 'success-2.php' && $page !== 'success-3.php' && $page !== 'lock-screen.php') {?>
    <!-- Sticky Sidebar JS -->
    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
<?php } ?>

<?php if($page === 'reset-password.php' || $page === 'reset-password-2.php' || $page === 'reset-password-3.php') {?>
    <!-- Validation-->
    <script src="assets/js/validation.js"></script>
<?php } ?>

<?php if($page === 'email-verification.php' || $page === 'email-verification-2.php' || $page === 'email-verification-3.php' || $page === 'two-step-verification.php' || $page === 'two-step-verification-2.php' || $page === 'two-step-verification-3.php') {?>
    <script src="assets/js/otp.js"></script>
<?php } ?>

<?php if($page === 'form-fileupload.php') {?>
    <!-- Fileupload JS -->
    <script src="assets/plugins/fileupload/fileupload.min.js"></script>

    <script src="assets/js/file-upload.js"></script>
<?php } ?>

<?php if($page === 'employee-salary.php') {?>
    <script src="assets/js/employee-salary.js"></script>
<?php } ?>

<?php if($page === 'employee-salary.php' || $page === 'project-details.php' || $page === 'gallery.php' || $page === 'plugins.php' || $page === 'search-result.php' || $page === 'social-feed.php') {?>
    <!-- Fancybox JS -->
    <script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>
<?php } ?>

<?php if($page === 'form-pickers.php') {?>
    <script src="assets/plugins/flatpickr/flatpickr.js"></script>
    <script src="assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script src="assets/plugins/jquery-timepicker/jquery-timepicker.js"></script>
    <script src="assets/plugins/pickr/pickr.js"></script>

    <!-- Page JS -->
    <script src="assets/js/forms-pickers.js"></script>
<?php } ?>

<?php if($page === 'coming-soon.php') {?>
    <script src="assets/js/coming-soon.js"></script>
<?php } ?>

<?php if($page === 'email-reply.php'|| $page === 'email.php' || $page === 'social-feed.php') {?>
    <script src="assets/js/email.js"></script>
<?php } ?>

<?php if($page === 'candidates-kanban.php' || $page === 'kanban-view.php' || $page === 'delas-grid.php' || $page === 'leads-grid.php' || $page === 'task-board.php') {?>
    <script src="assets/js/kanban.js"></script>
<?php } ?>

<?php if($page === 'add-invoices.php' || $page === 'edit-invoices.php') {?>
    <script src="assets/js/invoice.js"></script>
<?php } ?>

<?php if($page === 'project-details.php') {?>
    <script src="assets/js/projects.js"></script>
<?php } ?>

<?php if($page === 'leave-settings.php') {?>
	<!-- Multiselect JS -->
	<script src="assets/js/multiselect.min.js"></script>
<?php } ?>

<?php if($page === 'ui-popovers.php' || $page === 'ui-tooltips.php') {?>
	<script src="assets/js/popover.js"></script>
<?php } ?>

<?php if($page === 'company-details.php' || $page === 'contact-details.php' || $page === 'delas-details.php' || $page === 'leads-details.php') {?>
    <script src="assets/js/add-comments.js"></script>
<?php } ?>

<?php if($page === 'file-manager.php' || $page === 'project-details.php' || $page === 'task-details.php') {?>
    <script src="assets/js/file-manager.js"></script>
<?php } ?>

<?php if($page === 'client-details.php' || $page === 'employee-dashboard.php' || $page === 'index.php' || $page === 'layout-box.php' || $page === 'layout-dark.php' || $page === 'layout-detached.php' || $page === 'layout-horizontal-box.php' || $page === 'layout-horizontal-fullwidth.php' || $page === 'layout-horizontal-overlay.php' || $page === 'layout-horizontal-single.php' || $page === 'layout-horizontal-sidemenu.php' || $page === 'layout-horizontal.php' || $page === 'layout-modern.php' || $page === 'layout-two-column.php' || $page === 'layout-hovered.php' || $page === 'layout-vertical-transparent.php' || $page === 'layout-without-header.php' || $page === 'layout-rtl.php' || $page === 'layout-stacked.php' || $page === 'project-details.php' || $page === 'task-details.php' || $page === 'tasks.php' || $page === 'todo-list.php' || $page === 'todo.php') {?>
    <!-- Todo JS -->
    <script src="assets/js/todo.js"></script>
<?php } ?>

<?php if($page !== 'under-maintenance.php' && $page !== 'under-construction.php' && $page !== 'coming-soon.php' && $page !== 'error-404.php' && $page !== 'error-500.php' && $page !== 'two-step-verification-3.php' && $page !== 'two-step-verification-2.php' && $page !== 'two-step-verification.php' && $page !== 'email-verification-3.php' && $page !== 'email-verification-2.php' && $page !== 'email-verification.php' && $page !== 'reset-password-3.php' && $page !== 'reset-password-2.php' && $page !== 'reset-password.php' && $page !== 'forgot-password-3.php' && $page !== 'forgot-password-2.php' && $page !== 'forgot-password.php' && $page !== 'register-3.php' && $page !== 'register-2.php' && $page !== 'register.php' && $page !== 'login-3.php' && $page !== 'login-2.php' && $page !== 'login.php' && $page !== 'success.php' && $page !== 'success-2.php' && $page !== 'success-3.php' && $page !== 'lock-screen.php') {?>
    <!-- Theme Color JS -->
    <script src="assets/js/theme-colorpicker.js"></script>
<?php } ?>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
