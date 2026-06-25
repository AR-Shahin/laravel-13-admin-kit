 <!-- Fonts -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" />
 <!-- Font Awesome Icons -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <!-- OverlayScrollbars -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" />

  <!-- Select2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@1.5.2/dist/select2-bootstrap4.min.css">

 <!-- Theme style (AdminLTE v4) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/adminlte4@4.0.0-rc.7.20260519/dist/css/adminlte.min.css"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
<style>
    /* Hide user panel info when sidebar is collapsed */
    body.sidebar-collapse .sidebar-user-panel .info {
        display: none !important;
    }
    body.sidebar-collapse .sidebar-user-panel {
        padding-left: 0.8rem !important;
        justify-content: center;
    }
    /* Fix layout-fixed white space bug on collapse */
    @media (min-width: 992px) {
        body.sidebar-collapse.layout-fixed .app-main,
        body.sidebar-collapse.layout-fixed .app-header,
        body.sidebar-collapse.layout-fixed .app-footer {
            margin-left: 0 !important;
            transition: margin-left 0.3s ease-in-out;
        }
        body.sidebar-collapse.sidebar-mini.layout-fixed .app-main,
        body.sidebar-collapse.sidebar-mini.layout-fixed .app-header,
        body.sidebar-collapse.sidebar-mini.layout-fixed .app-footer {
            margin-left: 4.6rem !important;
        }
        body.layout-fixed .app-main,
        body.layout-fixed .app-header,
        body.layout-fixed .app-footer {
            transition: margin-left 0.3s ease-in-out;
        }
    }
</style>
@stack("css")
