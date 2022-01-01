<div class="modal fade" tabindex="-1" role="dialog" id="vehicleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formVehicleModal" action="" method="">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nomor Polisi</label>
                        <input type="text" class="form-control police_number" name="police_number" autofocus>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Jenis Kendaraan</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input type" name="type" id="type_1" value="2">
                            <label class="form-check-label" for="type_1">Roda 2
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input type" name="type" id="type_2" value="4">
                            <label class="form-check-label" for="type_2">Roda 4
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Bayar Pajak</label>
                        <input type="date" class="form-control date_tax" name="date_tax">
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <input type="hidden" name="id_vehicle" class="id_vehicle">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>