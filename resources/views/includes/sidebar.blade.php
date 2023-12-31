<header class="main-nav">
    <div class="sidebar-user text-center"><img class="img-90 rounded-circle" src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
        <div class="badge-bottom">
            <span class="badge badge-primary">New</span>
        </div>
        <a href="user-profile.html">
            <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6>
        </a>
        <p class="mb-0 font-roboto">LKSA Panti Asuhan Keluarga Yatim Aisyiyah Bekonang</p>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{ route('dashboard') }}"><i data-feather="home"></i><span>Dashboard</span></a></li>
                    <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{ route('pendaftaran.index') }}"><i data-feather="list"></i><span>Pendaftaran</span></a></li>

                    @role('admin')
                        <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{ route('diterima.index') }}"><i data-feather="list"></i><span>Diterima</span></a></li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>Sistem</h6>
                            </div>
                        </li>
                        <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{ route('pengguna.index') }}"><i data-feather="list"></i><span>Pengguna</span></a></li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>Laporan PDF</h6>
                            </div>
                        </li>
                        <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{ route('laporan.semua-data') }}"><i data-feather="list"></i><span>Laporan Data Pendaftar</span></a></li>
                        <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{ route('laporan.diterima-pdf') }}"><i data-feather="list"></i><span>Laporan Yang Diterima</span></a></li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>Laporan Excel</h6>
                            </div>
                        </li>
                        <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{ route('laporan.diterima-excel') }}"><i data-feather="list"></i><span>Laporan Yang Diterima</span></a></li>
                    @endrole
                </ul>
            </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
