<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a href="{{ route('profile.show') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                <i class="nav-icon fas fa-circle nav-icon"></i>
                    <p>
                        {{ __('Dashboard') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('employees.index') }}" class="nav-link">
                <i class="nav-icon fas fa-circle nav-icon"></i>
                    <p>
                        {{ __('Employee Management') }}
                    </p>
                </a>
            </li>
            

            <li class="nav-item">
                <a href="{{ route('about') }}" class="nav-link">
                <i class="nav-icon fas fa-circle nav-icon"></i>
                    <p>
                        {{ __('BSIT 3A Examiners') }}
                    </p>
                </a>
            </li>

            