<!DOCTYPE html>
<html lang="en">
    <!--begin::Head-->
    <head>
        <?php
        $this->bodo->Check_login();
        $uname = $this->session->userdata('uname');
        $fullname = $this->session->userdata('fullname');
        $tot_notif = $this->bodo->Count_notif();
        $menu_dir = $this->M_default->Menu()->result_array();
        $group_menu = $this->M_default->Group_menu();
        echo meta('Content-type', 'text/html; charset=utf-8', 'http-equiv', false);
        echo meta('og:image', base_url('assets/images/systems/' . $this->bodo->Sys('logo')), 'property', false);
        echo meta('og:title', '{siteTitle}', 'property', false);
        echo meta('og:description', '{description}', 'property', false);
        echo meta('og:type', '{article}', 'property', false);
        echo meta('og:url', base_url('Signin'), 'property', false);
        echo meta('og:locale', 'en_US', 'property', false);
        echo meta('og:site_name', '' . $this->bodo->Sys('company_name') . '', 'property', false);
        echo meta('X-UA-Compatible', 'IE=edge', 'http-equiv', false);
        echo meta('description', '{description}', 'name', false);
        echo meta('keywords', '{description}', 'name', false);
        echo meta('viewport', 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no', 'name', false);
        echo '<base href="' . base_url('Dashboard') . '"/>';
        echo '<title>{siteTitle}</title>';
        echo link_tag(base_url('assets/images/systems/' . $this->bodo->Sys('favico')), 'shortcut icon', 'image/*', 'Company logo');
        echo '<link rel="canonical" href="' . base_url() . '"/>';
        echo link_tag(base_url('assets/fonts_googleapis/fonts.googleapis.css'), 'stylesheet', 'text/css', 'fonts family from googleapis');
        echo link_tag(base_url('assets/metronic_8/plugins/custom/fullcalendar/fullcalendar.bundle.css'), 'stylesheet', 'text/css');
        echo link_tag(base_url('assets/plugins/global/plugins.bundle.css'), 'stylesheet', 'text/css');
        echo link_tag(base_url('assets/plugins/custom/prismjs/prismjs.bundle.css'), 'stylesheet', 'text/css');
        echo link_tag(base_url('assets/css/style.bundle.css'), 'stylesheet', 'text/css');
        echo link_tag(base_url('assets/css/themes/layout/header/base/dark.css'), 'stylesheet', 'text/css');
        echo link_tag(base_url('assets/css/themes/layout/header/menu/dark.css'), 'stylesheet', 'text/css');
        echo link_tag(base_url('assets/css/themes/layout/brand/dark.css'), 'stylesheet', 'text/css');
        echo link_tag(base_url('assets/css/themes/layout/aside/dark.css'), 'stylesheet', 'text/css');
        echo link_tag(base_url('assets/@fortawesome/fontawesome-free/css/all.min.css'), 'stylesheet', 'text/css');
        echo link_tag(base_url('assets/datatables/datatables.min.css'), 'stylesheet', 'text/css');
        ?>
        <!--begin::Global Stylesheets Bundle(used by all pages)-->
        <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" class="page-loading-enabled page-loading header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

        <!--layout-partial:partials/_loader.html-->


        <!--layout-partial:layout/master.html-->


        <!--layout-partial:partials/engage/_main.html-->


        <!--layout-partial:partials/_scrolltop.html-->

        <!--begin::Modals-->

        <!--layout-partial:partials/modals/_upgrade-plan.html-->


        <!--layout-partial:partials/modals/create-app/_main.html-->


        <!--layout-partial:partials/modals/_invite-friends.html-->


        <!--layout-partial:partials/modals/users-search/_main.html-->

        <!--end::Modals-->
        <!--begin::Javascript-->
        <script>var hostUrl = "assets/";</script>
        <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="assets/plugins/global/plugins.bundle.js"></script>
        <script src="assets/js/scripts.bundle.js"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Page Vendors Javascript(used by this page)-->
        <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
        <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
        <!--end::Page Vendors Javascript-->
        <!--begin::Page Custom Javascript(used by this page)-->
        <script src="assets/js/widgets.bundle.js"></script>
        <script src="assets/js/custom/widgets.js"></script>
        <script src="assets/js/custom/apps/chat/chat.js"></script>
        <script src="assets/js/custom/intro.js"></script>
        <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
        <script src="assets/js/custom/utilities/modals/create-app.js"></script>
        <script src="assets/js/custom/utilities/modals/users-search.js"></script>
        <!--end::Page Custom Javascript-->
        <!--end::Javascript-->
    </body>
    <!--end::Body-->
</html>