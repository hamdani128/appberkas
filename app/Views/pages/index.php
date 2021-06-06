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
                <!-- <div class="ml-lg-5 d-lg-flex d-none">
                    <button type="button" class="btn bg-white btn-icon">
                        <i class="mdi mdi-view-grid text-success"></i>
                    </button>
                    <button type="button" class="btn bg-white btn-icon ml-2">
                        <i class="mdi mdi-format-list-bulleted font-weight-bold text-primary"></i>
                    </button>
                </div> -->
            </div>
        </div>
        <!-- <div class="col-sm-6">
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
        </div> -->
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
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="card-title text-center">Sistem informasi pengelolaan arsip fungsi procurement
                                berbasis web pada PT.Pertamina Marketing Operation Region I</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-md-offset-2">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100 img-fluid" src="/assets/images/image1.jpeg"
                                            alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 img-fluid" src="/assets/images/image2.jpeg"
                                            alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 img-fluid" src="/assets/images/image1.jpeg"
                                            alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-12 text-center">
                            <p>Jl.KL.Yos Sudarso No.8 - 10 Kec.Silalas Kec.Medan Barat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-lg-4 mb-3 mb-lg-0">
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
        </div> -->
    </div>

</div>


<!-- /.carousel -->
<!-- /.container -->


<?= $this->endsection(); ?>