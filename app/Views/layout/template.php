<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kapella Bootstrap Admin Dashboard Template</title>
    <!-- base:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/favicon.png" />
</head>

<body>

    <!-- partial:partials/_horizontal-navbar.html -->
    <?= $this->include('layout/topbar'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <?= $this->renderSection('content'); ?>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <?= $this->include('layout/footer'); ?>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="<?= base_url(); ?>/assets/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="<?= base_url(); ?>/assets/js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <script src="<?= base_url(); ?>/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
    <script src="<?= base_url(); ?>/assets/vendors/justgage/raphael-2.1.4.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendors/justgage/justgage.js"></script>
    <!-- Custom js for this page-->
    <script src="<?= base_url(); ?>/assets/js/dashboard.js"></script>
    <!-- End custom js for this page-->
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="<?= base_url(); ?>/assets/js/file-upload.js"></script>
    <script src="<?= base_url(); ?>/assets/js/typeahead.js"></script>
    <script src="<?= base_url(); ?>/assets/js/select2.js"></script>
    <!-- End custom js for this page-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://malsup.github.com/jquery.media.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'/assets/js/jquery.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'/assets/js/bootstrap.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'/assets/js/jquery.dataTables.js'?>"></script>
    <script>
        $(document).ready(function () {
            $('#contract-table').DataTable();
            $('#lelang-table').DataTable();
            $('#HSE-table').DataTable();
            $('#alldoc-table').DataTable();
        });
        $(document).on('click', '#btn-filter', function () {
            var berkas = $("#berkas").val();
            console.log(berkas);
            $.ajax({
                url: "/docall/data",
                data: "berkas="+ berkas,
                success:function(data){
                    $("#show_data").html(data);
                }
            });
        })
    </script>
</body>

</html>