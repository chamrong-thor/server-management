<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link mt-3" href="{{ route('home') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Catalog</div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Users
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseUsers" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('user.create') }}"><i
                                class="fas fa-angle-double-right"></i>&nbsp;Add User</a>
                        <a class="nav-link" href="{{ route('user.index') }}"><i
                                class="fas fa-angle-double-right"></i>&nbsp;Users</a>
                        <a class="nav-link" href="{{ route('user.trash') }}"><i
                                class="fas fa-angle-double-right"></i>&nbsp;Trash</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCustomers"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-tag"></i></div>
                    Customers
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseCustomers" aria-labelledby="headingOne"
                    data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('customer.create') }}"><i
                                class="fas fa-angle-double-right"></i>&nbsp;Add
                            Customer</a>
                        <a class="nav-link" href="{{ route('customer.index') }}"><i
                                class="fas fa-angle-double-right"></i>&nbsp;Customers</a>
                        <a class="nav-link" href="{{ route('customer.trash') }}"><i
                                class="fas fa-angle-double-right"></i>&nbsp;Trash</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDevices"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-desktop"></i></div>
                    Devices
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseDevices" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('device.create') }}"><i
                                class="fas fa-angle-double-right"></i>&nbsp;Add Device</a>
                        <a class="nav-link" href="{{ route('device.index') }}"><i
                                class="fas fa-angle-double-right"></i>&nbsp;Devices</a>
                        <a class="nav-link" href="{{ route('device.trash') }}"><i
                                class="fas fa-angle-double-right"></i>&nbsp;Trash</a>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Settings</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Languages
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Localizations
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>
