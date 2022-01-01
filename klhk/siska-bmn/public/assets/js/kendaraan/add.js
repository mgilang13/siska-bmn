$('.add-vehicle').on('click', function() {
    $('#formVehicleModal')[0].reset();

    $('.modal-title').text('Tambah Data Kendaraan');
    $('#formVehicleModal').attr('action', '/kendaraan/save');
    $('#formVehicleModal').attr('method', 'POST');

    $('#vehicleModal').modal('show');
});