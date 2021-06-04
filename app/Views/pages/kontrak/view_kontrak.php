<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <?php if(in_groups('Admin')) : ?>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                    <?php endif; ?>
                    <h4 class="card-title">Form Input Berkas Kontrak</h4>
                    <p class="card-description">
                        Form Input Berkas Kontrak
                    </p>
                    <form class="forms-sample" method="post" action="/contract/save" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label for="exampleInputName1">Nomor Kearsipan</label>
                            <input type="text" name="nomor" class="form-control" id="exampleInputName1"
                                placeholder="Masukkan Nomor Kearsipan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Judul Pekerjaan</label>
                            <input type="text" name="judul" class="form-control" id="exampleInputName1"
                                placeholder="Masukkan Judul Pekerjeaan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Tahun Dokumen</label>
                            <input type="text" name="tahun" class="form-control" id="exampleInputName1"
                                placeholder="Masukkan Tahun Dokumen">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Perusahan Pemenang</label>
                            <input type="text" name="pemenang" class="form-control" id="exampleInputName1"
                                placeholder="Masukkan Perusahaan Pemenang">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Retensi Musnah</label>
                            <input type="text" name="retensi" class="form-control" id="exampleInputName1"
                                placeholder="Masukkan Retensi Msunah">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Upload File </label>
                            <input type="File" name="berkas" id="berkas" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2" value="Upload">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Informasi Data Berkas Kontrak</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered" id="contract-table">
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
                                    <?php if(in_groups('Admin')) : ?>
                                    <th>
                                        Aksi
                                    </th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($berkas) > 0) {
                                    $no  = 1;
                                    foreach ($berkas as $row) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $row->nomor; ?></td>
                                    <td><?= $row->judul; ?></td>
                                    <td><?= $row->tahun; ?></td>
                                    <td><?= $row->pemenang; ?></td>
                                    <td><?= $row->retensi; ?></td>
                                    <td><a href="/contract/download/<?= $row->id; ?>"><?= $row->file_name ?></a></td>

                                    <?php if(in_groups('Admin')) : ?>
                                    <td class="template-demo">
                                        <a href="/contract/delete/<?= $row->id; ?>"
                                            class="btn btn-md btn-danger btn-rounded"><i
                                                class="mdi mdi-delete-sweep"></i></a>
                                    </td>
                                    <?php endif; ?>
                                </tr>
                                <?php endforeach; ?>
                                <?php } else {  ?>
                                <tr>
                                    <td colspan="7" class="text-center">Tidak Ada Data</td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>