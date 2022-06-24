<!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #171010">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" target="/" href="{{ url('/') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="far fa-grin-stars"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Rizki F</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-window-restore"></i>
                    <span>Home</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded-0">
                        <h6 class="collapse-header">Custom Home:</h6>
                        <a class="collapse-item" href="{{ route('home-dashboard.index') }}">Home</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1"
                    aria-expanded="true" aria-controls="collapse1">
                    <i class="fas fa-fw fa-window-restore"></i>
                    <span>Resume</span>
                </a>
                <div id="collapse1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded-0">
                        <h6 class="collapse-header">Custom Resume:</h6>
                        <a class="collapse-item" href="{{ route('profile.index') }}">Profile</a>
                        <a class="collapse-item" href="{{ route('services.index') }}">Services</a>
                        <a class="collapse-item" href="{{ route('experience.index') }}">Experience</a>
                        <a class="collapse-item" href="{{ route('education.index') }}">Education</a>
                        <a class="collapse-item" href="{{ route('knowledge.index') }}">Knowledge</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2"
                    aria-expanded="true" aria-controls="collapse2">
                    <i class="fas fa-fw fa-window-restore"></i>
                    <span>Portfolio</span>
                </a>
                <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded-0">
                        <h6 class="collapse-header">Custom Portfolio:</h6>
                        <a class="collapse-item" href="{{ route('portfolioAdmin.index') }}">Portfolio</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3"
                    aria-expanded="true" aria-controls="collapse3">
                    <i class="fas fa-fw fa-window-restore"></i>
                    <span>Contact</span>
                </a>
                <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded-0">
                        <h6 class="collapse-header">Custom Contact:</h6>
                        <a class="collapse-item" href="{{ route('contactAdmin.index') }}">Contact</a>
                        <a class="collapse-item" href="{{ route('contactForm.index') }}">Mail</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            
        </ul>
        <!-- End of Sidebar -->