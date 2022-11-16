<?=
$this->extend('Layout/Teacher/templates');
$this->section('content');
?>

<div class="main-content">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Presensi Siswa</h5>
                        <button class="btn btn-santri btn-hover-santri" onclick="history.go(-1)">Back</button>
                    </div>
                    <hr>
                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="col-12">
                            <div class="alert alert-success alert-dismissible fade show">
                                <?= session()->getFlashdata('success'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="col-12">
                            <div class="alert alert-danger alert-dismissible fade show">
                                <?= session()->getFlashdata('fail'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty(session()->getFlashdata('modalSuccess'))) : ?>
                        <div class="modal fade" id="infaq-santri">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content" style="border-radius: 12px; overflow:hidden;">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                            <span class="sr-only"></span>
                                        </div>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img src="<?= base_url('/assets/img/success-image.svg') ?>" class="mb-5">
                                        <h5>Data berhasil di proses</h5>
                                        <p><?= session()->getFlashdata('modalSuccess') ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="m-t-10">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-between">
                                    <h6>Jumlah Siswa : <?= $siswaCount[0]['id_kelas'] ?></h6>
                                </div>
                                <hr>
                                <table id="data-table" class="table table-hover table-borderless">
                                    <thead style="background: #CDECE1;">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1 ?>
                                        <?php foreach ($siswa as $data) : ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td>
                                                    <p><?= $data['nama_siswa'] ?></p>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!--  -->
                            <div class="col-12 mt-4">
                                <div class="d-flex justify-content-between">
                                    <h6>Total Absen : <?= $absen[0]['id_absen'] ?> Siswa</h6>
                                </div>
                                <hr>
                                <table id="data-table" class="table table-hover table-borderless">
                                    <thead style="background: #CDECE1;">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Waktu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1 ?>
                                        <?php foreach ($namaAbsen as $data) : ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td>
                                                    <p><?= $data['nama_siswa'] ?></p>
                                                </td>
                                                <?php if ($data['status'] == 1) : ?>
                                                    <td>Telat</td>
                                                <?php elseif ($data['status'] == 2) : ?>
                                                    <td>Hadir</td>
                                                <?php endif; ?>
                                                <td><?= $data['create'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>