<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Laporan Bulan Perkara</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">LBP</a>
        </div>
        <ul class="sidebar-menu">

            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li>
                        {{-- <a class="nav-link" href="{{ route('user.index') }}">User List</a> --}}
                    </li>

                </ul>
            </li>

            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>PERKARA MASUK</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('perkara-masuk.index') }}">HSU</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('perkara-masuk-blg.index') }}">BALANGAN</a>
                    </li>

                </ul>
            </li>

            {{-- <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Schedules</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('schedule.index') }}">Schedule List</a>
                    </li>

                </ul> --}}

    </aside>
</div>
