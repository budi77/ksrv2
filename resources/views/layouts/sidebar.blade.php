<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    

    <div id="scrollbar">
        <div class="container-fluid">

            {{-- <div id="two-column-menu">
            </div> --}}
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span>@lang('translation.menu')</span></li>

                 <li class="nav-item">
                    <a class="nav-link menu-link" href="/index">
                        <i class="ri-dashboard-2-line"></i> <span>@lang('translation.dashboards')</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('members') }}">
                        <i class="ri-team-line"></i> <span>Keahlian</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-currency-line"></i> <span>Yuran</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('fees.departments') }}"  class="nav-link">Ibu Pejabat</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('fees.federations.show') }}"  class="nav-link">Gabungan</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('resit') }}"  class="nav-link">Resit Pembayaran</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('fees.edit') }}"  class="nav-link">Kemaskini Yuran</a>
                            </li>
                            
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class=" ri-pie-chart-line"></i> <span>Laporan</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('fees.departments') }}"  class="nav-link">Ibu Pejabat</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('fees.federations.show') }}"  class="nav-link">Gabungan</a>
                            </li>
                           
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('mesyuarat') }}">
                        <i class=" ri-calendar-todo-fill"></i> <span>Mesyuarat</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('dokumen') }}">
                        <i class=" ri-contacts-book-2-line"></i> <span>Dokumen</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-lock-2-line"></i> <span>Loker</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('locker.dashboard') }}"  class="nav-link">Tempahan</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('locker') }}"  class="nav-link">Kemaskini</a>
                            </li>
                           
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('settings') }}">
                        <i class="ri-settings-5-line"></i> <span>Tetapan</span>
                    </a>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class=" ri-pie-chart-line"></i> <span>KSRArena</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('ksrarena.teams') }}"  class="nav-link">Pasukan</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('ksrarena.groups') }}"  class="nav-link">Kumpulan</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('ksrarena.netball.games') }}"  class="nav-link">Bola Jaring</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('ksrarena.volleyball.games') }}"  class="nav-link">Bola Tampar</a>
                            </li>
                           
                        </ul>
                    </div>
                </li> -->

                {{-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class=" ri-pie-chart-line"></i> <span>KSRGames24</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('ksrgames24.parameter') }}"  class="nav-link">Parameters</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('ksrgames24.fixtures') }}"  class="nav-link">Fixtures</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('ksrgames24.standings') }}"  class="nav-link">Standings</a>
                            </li>
                            
                           
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu --> --}}


               
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('patriotik.lihat') }}">
                        <i class="ri-store-3-line"></i> <span>Patriotik 2025</span>
                    </a>
                </li>

               
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
        <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
