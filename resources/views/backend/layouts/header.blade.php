<!--
************************************************************************************************
                        Book for Fix
                        Development Date : 14-03-2024
                        Development Date   : 16-03-2024
************************************************************************************************
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/image/thumbnail.svg') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/image/thumbnail.svg') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/image/thumbnail.svg') }}">
    <link rel="manifest" href="{{ url('backend/images/favicon/site.webmanifest') }}">
    <link href="{{ url('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ url('backend/css/admin.min.css') }}" rel="stylesheet">
    <script src="{{ url('backend/vendor/sweetalert/sweetalert.min.js') }}"></script>
    <link href="{{ url('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow" id="mainNav">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{url('/admin')}}">
                <img src="{{ url('assets/image/ethics-logo-dark.svg') }}" alt="logo" height="50px" style="background-color:#ffffff; padding:5px; border-radius:5px;" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('admin') ? 'active':''}}">
                        <a class="nav-link" href="{{url('/admin')}}">
                            <i class="fas fa-fw fa-tachometer-alt"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item dropdown {{ Request::is('admin/register', 'admin/admins-list', 'admin/password-reset') ? 'active':''}}">
                        <a class="nav-link dropdown-toggle" href="#" id="authDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-fw fa-fingerprint"></i> Authentication
                        </a>
                        <div class="dropdown-menu" aria-labelledby="authDropdown">
                            <a class="dropdown-item" href="{{url('/admin/register')}}">Add an Admin</a>
                            <a class="dropdown-item" href="{{url('/admin/admins-list')}}">Admin List</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown {{ Request::is('admin/projects', 'admin/project-add') ? 'active':''}}">
                        <a class="nav-link dropdown-toggle" href="#" id="projectDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-fw fa-file"></i> Projects Management
                        </a>
                        <div class="dropdown-menu" aria-labelledby="projectDropdown">
                            <a class="dropdown-item" href="{{url('/admin/projects')}}">Projects</a>
                            <a class="dropdown-item" href="{{url('/admin/project-add')}}">Add Project</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown {{ Request::is('admin/team', 'admin/team-add') ? 'active':''}}">
                        <a class="nav-link dropdown-toggle" href="#" id="teamDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-fw fa-id-card"></i> Team Management
                        </a>
                        <div class="dropdown-menu" aria-labelledby="teamDropdown">
                            <a class="dropdown-item" href="{{url('/admin/team')}}">Team</a>
                            <a class="dropdown-item" href="{{url('/admin/team-add')}}">Add a Team Member</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown {{ Request::is('admin/faqs', 'admin/faq-add') ? 'active':''}}">
                        <a class="nav-link dropdown-toggle" href="#" id="faqDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-fw fa-comments"></i> FAQs Management
                        </a>
                        <div class="dropdown-menu" aria-labelledby="faqDropdown">
                            <a class="dropdown-item" href="{{url('/admin/faqs')}}">FAQs</a>
                            <a class="dropdown-item" href="{{url('/admin/faq-add')}}">Add FAQ</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-light small">{{ $Name }}</span>
                            <img class="img-profile rounded-circle" src="{{ url('backend/images/profile.svg')}}" alt="{{config('app.name')}}" height="32px">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="admins.php">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                            </a>
                            <a class="dropdown-item" href="admin-update-password.php">
                                <i class="fas fa-fingerprint fa-sm fa-fw mr-2 text-gray-400"></i> Change Password
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('/admin/logout')}}">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="wrapper" style="margin-top: 70px;">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
