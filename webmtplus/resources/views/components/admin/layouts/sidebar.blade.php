<!-- Start Sidebar Area -->
<div class="sidebar-area" id="sidebar-area">
    <div class="logo position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('dashboard') }}" class="d-block text-decoration-none position-relative">
            <img width="40px" src="/uploads/logo-o-l.png" alt="logo-icon">
            <span class="logo-text text-secondary fw-semibold">{{ config('app.name') }}</span>
        </a>
        <button
            class="sidebar-burger-menu-close bg-transparent py-3 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y"
            id="sidebar-burger-menu-close">
            <span class="border-1 d-block for-dark-burger"
                style="border-bottom: 1px solid #475569; height: 1px; width: 25px; transform: rotate(45deg);"></span>
            <span class="border-1 d-block for-dark-burger"
                style="border-bottom: 1px solid #475569; height: 1px; width: 25px; transform: rotate(-45deg);"></span>
        </button>
        <button class="sidebar-burger-menu bg-transparent p-0 border-0" id="sidebar-burger-menu">
            <span class="border-1 d-block for-dark-burger"
                style="border-bottom: 1px solid #475569; height: 1px; width: 25px;"></span>
            <span class="border-1 d-block for-dark-burger"
                style="border-bottom: 1px solid #475569; height: 1px; width: 25px; margin: 6px 0;"></span>
            <span class="border-1 d-block for-dark-burger"
                style="border-bottom: 1px solid #475569; height: 1px; width: 25px;"></span>
        </button>
    </div>

    <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
        <ul class="menu-inner">
            <li class="menu-title small text-uppercase">
                <span class="menu-title-text">MAIN</span>
            </li>
            {{-- <li class="menu-item open">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">dashboard</span>
                    <span class="title">Dashboard</span>
                    <span class="count">11</span>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="index.html" class="menu-link active">
                            E-Commerce
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="crm.html" class="menu-link">
                            CRM
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="project-management.html" class="menu-link">
                            Project Management
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="lms.html" class="menu-link">
                            LMS
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="help-desk.html" class="menu-link">
                            Help Desk
                            <span class="new tag">Hot</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="hr-management.html" class="menu-link">
                            HR Management
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="school.html" class="menu-link">
                            School
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="marketing.html" class="menu-link">
                            Marketing
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="analytics.html" class="menu-link">
                            Analytics
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="hospital.html" class="menu-link">
                            Hospital
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="finance.html" class="menu-link">
                            Finance
                        </a>
                    </li>
                </ul>
            </li> --}}
            <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">dashboard</span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="menu-title small text-uppercase">
                <span class="menu-title-text">PAGES</span>
            </li>
            <li class="text-capitalize menu-item {{ request()->routeIs('content-setup.*') ? 'open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle {{ request()->routeIs('content-setup.*') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">dashboard</span>
                    <span class="title">{{ __('admin.content-setup.title') }}</span>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item {{ request()->routeIs('content-setup.home') ? 'active' : '' }}">
                        <a href="{{ route('content-setup.home') }}" class="menu-link {{ request()->routeIs('content-setup.home') ? 'active' : '' }}">
                            {{ __('admin.content-setup.home') }}
                        </a>
                    </li>
                </ul>
            </li>


            <li class="menu-item {{ request()->routeIs('admin.areas-operation.*') || request()->routeIs('admin.mission.*') || request()->routeIs('admin.vision.*') || request()->routeIs('admin.core-values.*') || request()->routeIs('admin.capabilities.*') || request()->routeIs('admin.team.*') ? 'open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle {{ request()->routeIs('admin.areas-operation.*') || request()->routeIs('admin.mission.*') || request()->routeIs('admin.vision.*') || request()->routeIs('admin.core-values.*') || request()->routeIs('admin.capabilities.*') || request()->routeIs('admin.team.*') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">business</span>
                    <span class="title">{{ __('admin.introduction') }}</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item after-sub-menu menu-level {{ request()->routeIs('admin.areas-operation.*') || request()->routeIs('admin.mission.*') || request()->routeIs('admin.vision.*') || request()->routeIs('admin.core-values.*') || request()->routeIs('admin.capabilities.*') ? 'open' : '' }}">
                        <a href="javascript:void(0);" class="menu-link menu-toggle {{ request()->routeIs('admin.areas-operation.*') || request()->routeIs('admin.mission.*') || request()->routeIs('admin.vision.*') || request()->routeIs('admin.core-values.*') || request()->routeIs('admin.capabilities.*') ? 'active' : '' }}">
                            <span class="title">{{ __('admin.company_overview') }}</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item {{ request()->routeIs('admin.areas-operation.*') ? 'active' : '' }}">
                                <a href="{{ route('admin.areas-operation.index') }}" class="menu-link {{ request()->routeIs('admin.areas-operation.*') ? 'active' : '' }}">
                                    {{ __('admin.about.operation') }}
                                </a>
                            </li>
                            <li class="menu-item {{ request()->routeIs('admin.mission.*') ? 'active' : '' }}">
                                <a href="{{ route('admin.mission.index') }}" class="menu-link {{ request()->routeIs('admin.mission.*') ? 'active' : '' }}">
                                    {{ __('admin.about.mission') }}
                                </a>
                            </li>
                            <li class="menu-item {{ request()->routeIs('admin.vision.*') ? 'active' : '' }}">
                                <a href="{{ route('admin.vision.index') }}" class="menu-link {{ request()->routeIs('admin.vision.*') ? 'active' : '' }}">

                                    {{ __('admin.about.vision') }}
                                </a>
                            </li>
                            <li class="menu-item {{ request()->routeIs('admin.core-values.*') ? 'active' : '' }}">
                                <a href="{{ route('admin.core-values.index') }}" class="menu-link {{ request()->routeIs('admin.core-values.*') ? 'active' : '' }}">

                                    {{ __('admin.about.core_values') }}
                                </a>
                            </li>
                            <li class="menu-item {{ request()->routeIs('admin.capabilities.*') ? 'active' : '' }}">
                                <a href="{{ route('admin.capabilities.index') }}" class="menu-link {{ request()->routeIs('admin.capabilities.*') ? 'active' : '' }}">

                                    {{ __('admin.about.capabilities') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item {{ request()->routeIs('admin.team.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.team.index') }}" class="menu-link {{ request()->routeIs('admin.team.*') ? 'active' : '' }}">
                            {{ __('admin.team.members') }}
                        </a>
                    </li>
                </ul>
            </li>
              <li class="menu-item {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
                <a href="{{ route('admin.services.index') }}" class="menu-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">design_services</span>
                    <span class="title">{{ __('admin.services.all_services') }}</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">
                <a href="{{ route('admin.projects.index') }}" class="menu-link {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">apartment</span>
                    <span class="title">{{ __('admin.projects.all_projects') }}</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
<!-- End Sidebar Area -->
