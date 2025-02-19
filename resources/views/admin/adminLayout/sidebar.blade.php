<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-dark.png')}}" alt="" height="22">
            </span>
        </a>
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-light.png')}}" alt="" height="22">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover shadow-none" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link " href="{{ route('admin.index')}}" >
                        <i class="ti ti-brand-google-home"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                   
                </li>

                

                <li class="menu-title"><i class="ti ti-dots"></i> <span data-key="t-apps">Content</span></li>

                <li class="nav-item">
                    <a href="{{ route('admin.portfolio.index') }}" class="nav-link menu-link">
                        <i class="ti ti-file-invoice"></i> <span data-key="t-invoices">Portfolio</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.service.index') }}" class="nav-link menu-link">
                        <i class="ti ti-file-invoice"></i> <span data-key="t-invoices">Service</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.tyneprint.index') }}" class="nav-link menu-link">
                        <i class="ti ti-file-invoice"></i> <span data-key="t-invoices">TynePrint</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.blog.index') }}" class="nav-link menu-link">
                        <i class="ti ti-file-invoice"></i> <span data-key="t-invoices">Blog</span>
                    </a>
                </li>

                <li class="menu-title"><i class="ti ti-settings"></i> <span data-key="t-pages">Settings</span></li>

                
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarUI2" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI2">
                        <i class="ti ti-brand-adobe"></i> <span data-key="t-pages">Meun</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarUI2">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.menu.index')}}" class="nav-link" data-key="t-faqs"> Navigation Meun </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.slider.index') }}" class="nav-link" data-key="t-faqs">Slider </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.faq.index') }}" class="nav-link" data-key="t-faqs"> FAQs </a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="{{ route('admin.privacyPolicy.index') }}" class="nav-link" data-key="t-privacy-policy"> @lang('translation.privacy-policy') </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.termsCondition.index') }}" class="nav-link" data-key="t-term-conditions">  @lang('translation.term-condition')</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.visionMission.index') }}" class="nav-link" data-key="t-term-conditions"> Vision / Mission</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarUI2" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI2">
                        <i class="ti ti-brand-adobe"></i> <span data-key="t-pages">Meun</span>
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