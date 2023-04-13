<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">
                    <!-- Sidenav Menu Heading (Account)-->
                    <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                    <div class="sidenav-menu-heading d-sm-none">Account</div>
                    <!-- Sidenav Link (Alerts)-->
                    <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                    <a class="nav-link d-sm-none" href="#!">
                        <div class="nav-link-icon"><i data-feather="bell"></i></div>
                        Alerts
                        <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
                    </a>
                    <!-- Sidenav Link (Messages)-->
                    <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                    <a class="nav-link d-sm-none" href="#!">
                        <div class="nav-link-icon"><i data-feather="mail"></i></div>
                        Messages
                        <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
                    </a>
                    <!-- Sidenav Menu Heading (Core)-->
                    <div class="sidenav-menu-heading">Dergi Management</div>
                    <!-- Sidenav Accordion (Dashboard)-->
                    <a class="nav-link collapsed" href="{{ route('admin.index') }}" aria-expanded="false"
                        aria-controls="collapseDashboards">
                        <div class="nav-link-icon"><i class="fas fa-newspaper"></i></div>
                        Dergiler
                    </a>
                    <a class="nav-link collapsed" href="{{ route('AdminFirma.index') }}"
                        aria-controls="collapseDashboards">
                        <div class="nav-link-icon"><i class="fa-solid fa-landmark"></i></div>
                        Firmalar
                    </a>
                    <a class="nav-link collapsed" href="{{ route('AdminCategories.index') }}" aria-expanded="false"
                        aria-controls="collapseDashboards">
                        <div class="nav-link-icon"><i class="fas fa-list-alt"></i></div>
                        Categories
                    </a>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                        data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                        <div class="nav-link-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                        Kullanıcılar
                    </a>

        </nav>
    </div>
