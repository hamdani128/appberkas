<?= $this->extend('layout/template'); ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-6 mb-4 mb-xl-0">
            <div class="d-lg-flex align-items-center">
                <div>
                    <h3 class="text-dark font-weight-bold mb-2">Hi, welcome back!</h3>
                    <h6 class="font-weight-normal mb-2">Last login was 23 hours ago. View details</h6>
                </div>
                <div class="ml-lg-5 d-lg-flex d-none">
                    <button type="button" class="btn bg-white btn-icon">
                        <i class="mdi mdi-view-grid text-success"></i>
                    </button>
                    <button type="button" class="btn bg-white btn-icon ml-2">
                        <i class="mdi mdi-format-list-bulleted font-weight-bold text-primary"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="d-flex align-items-center justify-content-md-end">
                <div class="pr-1 mb-3 mb-xl-0">
                    <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                        Feedback
                        <i class="mdi mdi-message-outline btn-icon-append"></i>
                    </button>
                </div>
                <div class="pr-1 mb-3 mb-xl-0">
                    <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                        Help
                        <i class="mdi mdi-help-circle-outline btn-icon-append"></i>
                    </button>
                </div>
                <div class="pr-1 mb-3 mb-xl-0">
                    <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                        Print
                        <i class="mdi mdi-printer btn-icon-append"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <h2 class="text-success font-weight-bold"><?= $administrasi; ?></h2>
                        <i class="mdi mdi-file-document-outline mdi-18px text-darkk"></i>
                    </div>
                </div>
                <canvas id="newClient"></canvas>
                <div class="line-chart-row-title">DOCUMENT ADMINISTRASI & TEKNIS</div>
            </div>
        </div>
        <div class="col-lg-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <h2 class="text-danger font-weight-bold"><?= $contract; ?></h2>
                        <i class="mdi mdi-file-document-outline mdi-18px text-dark"></i>
                    </div>
                </div>
                <canvas id="allProducts"></canvas>
                <div class="line-chart-row-title">DOCUMENT CONTRACT</div>
            </div>
        </div>
        <div class="col-lg-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <h2 class="text-info font-weight-bold"><?= $lelang; ?></h2>
                        <i class="mdi mdi-file-document-outline mdi-18px text-dark"></i>
                    </div>
                </div>
                <canvas id="invoices"></canvas>
                <div class="line-chart-row-title">DOCUKEMT LELANG</div>
            </div>
        </div>
        <div class="col-lg-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <h2 class="text-warning font-weight-bold"><?= $hse; ?></h2>
                        <i class="mdi mdi-file-document-outline mdi-18px text-dark"></i>
                    </div>
                </div>
                <canvas id="projects"></canvas>
                <div class="line-chart-row-title">DOCUMENT HSE</div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="card-title text-center">Sistem informasi pengelolaan arsip fungsi procurement berbasis web pada PT.Pertamina Marketing Operation Region I</h4>
                            <!-- <canvas id="salesDifference"></canvas>
                            <p class="mt-3 mb-4 mb-lg-0">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit.
                            </p> -->
                        </div>
                        <!-- <div class="col-lg-5">
                            <h4 class="card-title">Best Sellers</h4>
                            <div class="row">
                                <div class="col-sm-4">
                                    <ul class="graphl-legend-rectangle">
                                        <li><span class="bg-danger"></span>Automotive</li>
                                        <li><span class="bg-warning"></span>Books</li>
                                        <li><span class="bg-info"></span>Software</li>
                                        <li><span class="bg-success"></span>Video games</li>
                                    </ul>
                                </div>
                                <div class="col-sm-8 grid-margin">
                                    <canvas id="bestSellers"></canvas>
                                </div>
                            </div>
                            <p class="mt-3 mb-4 mb-lg-0">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit.
                            </p>
                        </div>
                        <div class="col-lg-3">
                            <h4 class="card-title">Social Media Statistics</h4>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="progress progress-lg grouped mb-2">
                                        <div class="progress-bar  bg-danger" role="progressbar" style="width: 40%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 10%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <ul class="graphl-legend-rectangle">
                                        <li><span class="bg-danger"></span>Instagram (15%)</li>
                                        <li><span class="bg-warning"></span>Facebook (20%)</li>
                                        <li><span class="bg-info"></span>Website (25%)</li>
                                        <li><span class="bg-success"></span>Youtube (40%)</li>
                                    </ul>
                                </div>
                            </div>
                            <p class="mb-0 mt-2">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit.
                            </p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3 mb-lg-0">
            <div class="card congratulation-bg text-center">
                <div class="card-body pb-0">
                    <img src="/assets/images/faces/face21.jpg" alt="">
                    <h2 class="mt-3 text-white mb-3 font-weight-bold">Congratulations
                        Johnson
                    </h2>
                    <p>You have done 57.6% more sales today.
                        Check your new badge in your profile.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
</div>
<?= $this->endsection(); ?>