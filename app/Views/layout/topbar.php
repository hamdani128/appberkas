<div class="horizontal-menu">
    <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                <ul class="navbar-nav navbar-nav-left">
                    <li class="nav-item ml-0 mr-5 d-lg-flex d-none">
                        <a href="#" class="nav-link horizontal-nav-left-menu"><i
                                class="mdi mdi-format-list-bulleted"></i></a>
                    </li>
                    <li class="nav-item nav-search d-none d-lg-block ml-5">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="search">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="search" aria-label="search"
                                aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="index.html"><img src="/assets/images/pertamina.png"
                            alt="logo"/></a>
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/assets/images/pertamina.png"
                            alt="logo" /></a>
                </div>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown  d-lg-flex d-none">
                        <button type="button" class="btn btn-inverse-primary btn-sm">Product </button>
                    </li>
                    <li class="nav-item dropdown d-lg-flex d-none">
                        <a class="dropdown-toggle show-dropdown-arrow btn btn-inverse-primary btn-sm"
                            id="nreportDropdown" href="#" data-toggle="dropdown">
                            Reports
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="nreportDropdown">
                            <p class="mb-0 font-weight-medium float-left dropdown-header">Reports</p>
                            <a class="dropdown-item">
                                <i class="mdi mdi-file-pdf text-primary"></i>
                                Pdf
                            </a>
                            <a class="dropdown-item">
                                <i class="mdi mdi-file-excel text-primary"></i>
                                Exel
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-lg-flex d-none">
                        <button type="button" class="btn btn-inverse-primary btn-sm">Settings</button>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <span class="nav-profile-name"><?= user()->fullname; ?></span>
                            <span class="online-status"></span>
                            <img src="/assets/images/dashboard/<?= user()->user_image; ?>" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="mdi mdi-settings text-primary"></i>
                                Settings
                            </a>
                            <a href="<?= base_url('/logout'); ?>" class="dropdown-item">
                                <i class="mdi mdi-logout text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="horizontal-menu-toggle">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </div>
    </nav>
    <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="mdi mdi-file-document-box menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/contract" class="nav-link">
                        <i class="mdi mdi-grid menu-icon"></i>
                        <span class="menu-title">Kontrak</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/lelang" class="nav-link">
                        <i class="mdi mdi-grid menu-icon"></i>
                        <span class="menu-title">Lelang</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/administration" class="nav-link">
                        <i class="mdi mdi-grid menu-icon"></i>
                        <span class="menu-title">Administrasi</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/hse" class="nav-link">
                        <i class="mdi mdi-grid menu-icon"></i>
                        <span class="menu-title">HSE PLAN</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/docall" class="nav-link">
                        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                        <span class="menu-title">Document All</span></a>
                </li>
            </ul>
        </div>
    </nav>
</div>