
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | @yield("title")</title>

 @include("admin.includes.css")
 <style>
   /* Mobile responsive improvements */
   @media (max-width: 768px) {
     body {
       font-size: 14px;
     }
     .app-wrapper {
       flex-direction: column;
     }
     .app-main {
       margin-left: 0 !important;
     }
     .app-content {
       padding: 0.5rem !important;
     }
   }

   /* Eye-catching UI enhancements */
   .card {
     border: none;
     border-radius: 0.5rem;
     box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
     transition: all 0.3s ease;
   }

   .card:hover {
     box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
     transform: translateY(-2px);
   }

   .btn {
     border-radius: 0.375rem;
     font-weight: 500;
     transition: all 0.3s ease;
   }

   .btn:hover {
     transform: translateY(-1px);
   }

   .nav-link {
     transition: all 0.3s ease;
   }

   .nav-link:hover {
     color: var(--bs-primary) !important;
     padding-left: calc(1rem + 2px);
   }

   .badge {
     animation: pulse 2s infinite;
   }

   @keyframes pulse {
     0%, 100% { opacity: 1; }
     50% { opacity: 0.7; }
   }
 </style>
</head>
@php
    // $permissions = auth("admin")->user()->getAllPermissions()->pluck("name")->toArray();
@endphp
<body class="layout-fixed sidebar-expand-lg sidebar-mini bg-body-tertiary">
<div class="app-wrapper">

  <!-- Navbar -->
@include("admin.includes.navbar")
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include("admin.includes.sidebar")
  <!-- Content Wrapper. Contains page content -->
  <main class="app-main">

    <!-- Main content -->
    <div class="app-content pt-3">
      <div class="container-fluid">
        @yield("master_content")
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </main>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
{{-- @include("admin.includes.rightbar") --}}
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include("admin.includes.footer")
</div>
<!-- ./app-wrapper -->

<!-- REQUIRED SCRIPTS -->

@include("admin.includes.script")
</body>
</html>
