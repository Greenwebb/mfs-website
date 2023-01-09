<div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close mdi mdi-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
                    <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles primary"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <div class="dropdown sidebar-profile-dropdown">
                    <a class="dropdown-toggle d-flex align-items-center justify-content-between" href="#" data-toggle="dropdown" id="profileDropdown1">
                        <img src="<?=$profile?>" alt="profile" class="sidebar-profile-icon">
                        <div>
                            <div class="nav-profile-name"><?=$userfname.' '.$userlname?></div>
                            <div class="nav-profile-designation">my account</div>
                        </div>
                    </a>
                    <div class="dropdown-menu navbar-dropdown dropdown-menu-left" aria-labelledby="profileDropdown1">
                        <a class="dropdown-item" href="vertical-default-light.html">
                            <i class="mdi mdi-account"></i> Profile
                        </a>
                        <a href="includes/logic/logout.php" class="dropdown-item" href="vertical-default-light.html">
                            <i class="mdi mdi-logout"></i> Logout
                        </a>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <div class="sidebar-title">Main</div>
                        <a class="nav-link" href="index.php">
                            <i class="mdi mdi-cards-variant menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <div class="sidebar-title">Loans</div>
                        <a class="nav-link" href="loan_history.php">
                            <i class="mdi mdi-calendar-blank menu-icon"></i>
                            <span class="menu-title">Loan History</span>
                        </a>
                    </li>
                                        
                    <li class="nav-item">
                        <a class="nav-link" href="pending.php">
                            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                            <span class="menu-title">Pending</span>
                        </a>
</li>

                    <li class="nav-item">
                        <div class="sidebar-title">User </div>                        
                        <a href="settings.php"  class="nav-link" href="vertical-default-light.html">
                        <i class="mdi mdi mdi-brightness-7  menu-icon"></i>
                             <span class="menu-title">settings</span>
                           
                        </a>                                              
                    </li>
                        
                    </li>
                    <li class="nav-item">
                    <a href="includes/logic/logout.php"  class="nav-link" href="vertical-default-light.html">
                    <i class="mdi mdi-logout menu-icon"></i>
                            <span class="menu-title">Logout</span>
                           
                        </a>                                              
                    </li>
                    <li class="nav-item">
                        <div class="sidebar-title">Help</div>
                        <a class="nav-link" href="tel:+26097828382" target="_blank">
                            <i class="mdi mdi-file-document menu-icon"></i>
                            <span class="menu-title">Get Help!</span>
                        </a>
                    </li>
                </ul>
                <div class="designer-info">
                    Designed by: <a href="www.bootstrapdash.html" target="_blank">Greenwebb</a>
                </div>
            </nav>