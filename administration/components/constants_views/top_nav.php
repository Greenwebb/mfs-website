<?php include "components/preloader.php" ?>
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper align-items-center">
        <a class="navbar-brand brand-logo" href="index.php"><img src="images/01-ft-logo.png" alt="logo"></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/iiimages-logo-mini.svg" alt="logo"></a>
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
        </button>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
            <li class="nav-item d-none d-sm-block dropdown arrow-none">
                <button type="button" class="btn btn-success btn-icon-text dropdown-toggle" data-toggle="dropdown" id="profileDropdown6">
                    <i class="mdi mdi-plus-circle btn-icon-prepend"></i>
                    Add Schedule
                </button>
                <div class="dropdown-menu dropdown-menu-left navbar-dropdown" aria-labelledby="profileDropdown6">
                    <a class="dropdown-item text-primary" href="vertical-default-light.html">
                        <i class="mdi mdi-google-analytics"></i> Product Analysis
                    </a>
                    <a class="dropdown-item text-primary" href="vertical-default-light.html">
                        <i class="mdi mdi-sale"></i> Territory sales
                    </a>
                    <a class="dropdown-item text-primary" href="vertical-default-light.html">
                        <i class="mdi mdi-account-card-details"></i> laons order details
                    </a>
                    <a class="dropdown-item text-primary" href="vertical-default-light.html">
                        <i class="mdi mdi-counter"></i> Product Line sales
                    </a>
                </div>
            </li>
            <li class="nav-item nav-search d-none d-sm-block">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="search">
                            <i class="mdi mdi-magnify"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
                </div>
            </li>
        </ul>
        <ul class="navbar-nav mr-lg-2"><div class="btn btn-secondary btn-outline-secondary">
                            <i class="mdi mdi-clock"></i>&nbsp;
                         <span id="span">
        <li class="nav-item d-none d-sm-block btn-info dropdown arrow-none">
        </span></li> </div>
            <script>
                var span = document.getElementById('span');

                function time() {
                    var d = new Date();
                    var s = d.getSeconds();
                    var m = d.getMinutes();
                    var h = d.getHours();
                    span.textContent =
                        ("0" + h).substr(-2) + ":" + ("0" + m).substr(-2) + ":" + ("0" + s).substr(-2);
                }

                setInterval(time, 1000);
            </script>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item count-indicator nav-profile dropdown">
                <span class="count">3</span>
                <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name">Hi, <?= $userfname ?? "" ?></span>
                    <img src="<?=$profile?>" alt="profile"></a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item text-primary" href="settings.php">
                        <i class="mdi mdi-brightness-7"></i> Settings
                    </a>
                    <a class="dropdown-item text-primary" href="/">
                        <i class="mdi mdi-blur-radial"></i> go to website
                    </a>

                    <a class="dropdown-item text-primary" href="includes/logic/logout.php">
                        <i class="mdi mdi-logout text-primary"></i> Logout
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown count-indicator arrow-none">
                <span class="count bg-success">3</span>
                <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                    <i class="mdi mdi-bell-outline mx-0"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                    <a class="dropdown-item preview-item" href="vertical-default-light.html">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-success">
                                <i class="mdi mdi-information mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-normal">Application Error</h6>
                            <p class="font-weight-light small-text mb-0">
                                Just now
                            </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item" href="vertical-default-light.html">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-warning">
                                <i class="mdi mdi-settings mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-normal">Settings</h6>
                            <p class="font-weight-light small-text mb-0">
                                Private message
                            </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item" href="vertical-default-light.html">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-info">
                                <i class="mdi mdi-account-box mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-normal">New user registration</h6>
                            <p class="font-weight-light small-text mb-0">
                                2 days ago
                            </p>
                        </div>
                    </a>
                </div>
            </li>
        </ul><button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>