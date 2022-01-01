<?= $this->extend('layout/template') ?>

<?= $this->section('mainContent'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Semua Kendaraan</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <button class="btn btn-primary mb-3 add-vehicle" data-toggle="modal" data-target="#vehicleModal">
                    Tambah Data
                </button>
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    #
                                </th>
                                <th>Nomor Polisi</th>
                                <th>Jenis Kendaraan</th>
                                <th>Tanggal Bayar Pajak</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($kendaraans as $k) : ?>
                                <tr>
                                    <td>
                                        <?= $i++ ?>
                                    </td>
                                    <td><?= $k['police_number']; ?></td>
                                    <td>Roda <?= $k['type']; ?></td>
                                    <td><?= $k['date_tax'] ?></td>
                                    <td>
                                        <div class="badge badge-success"><?= $k['status']; ?></div>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-action mr-1 update-vehicle" data-toggle="tooltip" title="Edit" data-id="<?= $k['id']; ?>" data-police_number="<?= $k['police_number']; ?>" data-type="<?= $k['type']; ?>" data-date_tax="<?= $k['date_tax']; ?>">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-danger btn-action delete-vehicle" data-toggle="tooltip" title="Delete" data-id="<?= $k['id']; ?>" data-police_number="<?= $k['police_number']; ?>">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
</section>
</div>
<div class="col-12">
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">

        </div>
    </div>
</div>
<!-- List Modal -->
<?= $this->include('modal/vehicleModal'); ?>
<?= $this->include('modal/deleteModal'); ?>
<!-- End Modal  -->

<?= $this->endSection(); ?>


<?= $this->section('spesific-js'); ?>
<!-- Page Specific JS File -->
<script src="/assets/js/page/bootstrap-modal.js"></script>

<!-- JQUERY to call modal -->
<script src='/assets/js/kendaraan/add.js'></script>
<script src="/assets/js/kendaraan/update.js"></script>
<script>
    $(document).ready(function() {
        $('.delete-vehicle').on('click', function() {
            $('.modal-title').text('Hapus Data Kendaraan');
            $('#formDeleteModal').attr('action', '/kendaraan/delete');
            $('#formDeleteModal').attr('method', 'POST');

            let id = $(this).data('id');
            let police_number = $(this).data('police_number');

            $('.id_vehicle').val(id);
            $('.police_number').text(police_number);
            $('.kata-kata').html("Apakah yakin akan menghapus data kendaraan ini ? <br> <span class='font-weight-bold text-uppercase'>" + police_number + "</span>");

            $('#deleteModal').modal('show');
        });
    });
</script>
<?= $this->endSection(); ?>