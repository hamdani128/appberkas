<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Filter Informasi Arsip</h4>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">Jenis Arsip</label>
                            <select class="form-control form-control-lg" name="arsip" id="berkas">
                                <option value="Kontrak">Kontrak</option>
                                <option value="Lelang">Lelang</option>
                                <option value="Administrasi">Administrasi</option>
                                <option value="HSE">HSE Plan</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-primary mr-2" id="btn-filter">Filter</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Informasi Data Berkas</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered" id="alldoc-table">
                            <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        No.Arsip
                                    </th>
                                    <th>
                                        Judul Pekerjaan
                                    </th>
                                    <th>
                                        Tahun
                                    </th>
                                    <th>
                                        Perusahaan Pemnenang
                                    </th>
                                    <th>
                                        Retensi Musnah
                                    </th>
                                    <th>
                                        Keterangan File
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="show_data">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>