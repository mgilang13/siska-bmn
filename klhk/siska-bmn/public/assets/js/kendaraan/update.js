$('.update-vehicle').on('click', function() {
    $('.modal-title').text('Ubah Data Kendaraan');
    $('#formVehicleModal').attr('action', '/kendaraan/update');
    $('#formVehicleModal').attr('method', 'POST');

    let id = $(this).data('id');
    let police_number = $(this).data('police_number');
    let type_vehicle = $(this).data('type');
    let date_tax = $(this).data('date_tax');

    $('.id_vehicle').val(id);
    $('.police_number').val(police_number);
    // if ($('.type').val() === type_vehicle) {
    $("input[name=type][value=" + type_vehicle + "]").attr("checked", 'checked');


    $('.date_tax').val(date_tax);

    $('#vehicleModal').modal('show');
})