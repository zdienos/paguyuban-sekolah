            <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="html/index.html" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x"
                                alt="logo">
                            <img class="logo-dark logo-img" src="./images/logo-dark.png"
                                srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                            <img class="logo-small logo-img logo-img-small" src="./images/logo-small.png"
                                srcset="./images/logo-small2x.png 2x" alt="logo-small">
                        </a>
                    </div>
                    <div class="nk-menu-trigger me-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                                class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                            data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="<?=base_url('dashboard')?>" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Master</h6>
                                </li><!-- .nk-menu-heading -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb-fill"></em></span>
                                        <span class="nk-menu-text">Office</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="<?= base_url('master/branch')?>" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-cc"></em></span>
                                                <span class="nk-menu-text">Department</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?= base_url('master/strukturunit')?>" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-network"></em></span>
                                                <span class="nk-menu-text">Struktur Unit</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?= base_url('master/location')?>" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-building"></em></span>
                                                <span class="nk-menu-text">Lokasi</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?= base_url('master/employee')?>" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em
                                                        class="icon ni ni-users-fill"></em></span>
                                                <span class="nk-menu-text">Employee</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?= base_url('master/vendor')?>" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-briefcase"></em></span>
                                                <span class="nk-menu-text">Vendor</span>
                                            </a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->

                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-menu-circled"></em></span>
                                        <span class="nk-menu-text">Items</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="<?= base_url('master/satuan')?>" class="nk-menu-link"><span
                                                    class="nk-menu-text">Satuan</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?= base_url('master/brand')?>" class="nk-menu-link"><span
                                                    class="nk-menu-text">Brand</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?= base_url('master/itemgroup')?>" class="nk-menu-link"><span
                                                    class="nk-menu-text">Group</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?= base_url('master/itemcategory')?>" class="nk-menu-link"><span
                                                    class="nk-menu-text">Category</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?= base_url('master/status')?>" class="nk-menu-link"><span
                                                    class="nk-menu-text">Status</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?= base_url('master/itemasset')?>" class="nk-menu-link"><span
                                                    class="nk-menu-text">Assets</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->

                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Transactions</h6>
                                </li><!-- .nk-menu-heading -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-light-fill"></em></span>
                                        <span class="nk-menu-text">Asset Management</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="<?= base_url('management/pctasset')?>" class="nk-menu-link"><span
                                                    class="nk-menu-text">Asset Data Entry</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link" target="_blank"><span
                                                    class="nk-menu-text">Asset Verify</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link" target="_blank"><span
                                                    class="nk-menu-text">Print Label</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link" target="_blank"><span
                                                    class="nk-menu-text">Tracking Asset</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link" target="_blank"><span
                                                    class="nk-menu-text">Write Off</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link" target="_blank"><span
                                                    class="nk-menu-text">Mutasi</span></a>
                                        </li>
                                        <!-- <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link nk-menu-toggle"><span
                                                    class="nk-menu-text">Classic Version - v2</span></a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="html/pages/auths/auth-login-v2.html" class="nk-menu-link"
                                                        target="_blank"><span class="nk-menu-text">Login /
                                                            Signin</span></a>
                                                </li>                                                
                                            </ul>
                                        </li>                                        -->
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-files-fill"></em></span>
                                        <span class="nk-menu-text">Work Order</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="#" target="_blank" class="nk-menu-link"><span
                                                    class="nk-menu-text">Request</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" target="_blank" class="nk-menu-link"><span
                                                    class="nk-menu-text">Maintenance</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" target="_blank" class="nk-menu-link"><span
                                                    class="nk-menu-text">Approval</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" target="_blank" class="nk-menu-link"><span
                                                    class="nk-menu-text">Log</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->

                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt"></h6>
                                </li><!-- .nk-menu-heading -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-reports-alt"></em></span>
                                        <span class="nk-menu-text">Reports</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-task"></em></span>
                                                <span class="nk-menu-text">Data Asset</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-task"></em></span>
                                                <span class="nk-menu-text">Penyusutan Asset</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-task"></em></span>
                                                <span class="nk-menu-text">Work Order</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-task"></em></span>
                                                <span class="nk-menu-text">Maintenance Asset</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->

                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>


            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                                        class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img" src="./images/logo.png"
                                        srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="./images/logo-dark.png"
                                        srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-search ms-3 ms-xl-0">
                                <em class="icon ni ni-search"></em>
                                <input type="text" class="form-control border-transparent form-focus-none"
                                    placeholder="Search anything">
                            </div><!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown notification-dropdown">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                                <a href="#">Mark All as Read</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to
                                                                <span>Widthdrawl</span>
                                                            </div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to
                                                                <span>Widthdrawl</span>
                                                            </div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to
                                                                <span>Widthdrawl</span>
                                                            </div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-notification -->
                                            </div><!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <!-- <em class="icon ni ni-user-alt"></em> -->
                                                    <span>UL</span>
                                                </div>
                                                <div class="user-info d-none d-xl-block">
                                                    <div class="user-status user-stadtus-unverified">
                                                        <?=$this->session->userdata('email')?></div>
                                                    <div class="user-name dropdown-indicator">
                                                        <?=$this->session->userdata('full_name')?></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <!-- <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>UL</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                                        <span class="sub-text">info@softnio.com</span>
                                                    </div> 
                                                </div>
                                            </div> -->
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="html/user-profile-regular.html"><em
                                                                class="icon ni ni-user-alt"></em><span>View
                                                                Profile</span></a></li>
                                                    <li><a href="html/user-profile-setting.html"><em
                                                                class="icon ni ni-setting-alt"></em><span>Account
                                                                Setting</span></a></li>
                                                    <li><a href="html/user-profile-activity.html"><em
                                                                class="icon ni ni-activity-alt"></em><span>Login
                                                                Activity</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em
                                                                class="icon ni ni-moon"></em><span>Dark Mode</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="<?=base_url('auth/logout')?>"><em
                                                                class="icon ni ni-signout"></em><span>Log out</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->


                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">