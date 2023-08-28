$(document).ready(function () {

    $('.ColorsTable').dataTable();

    $('.ColorsTable').on('change', '.color_status', function () {
        var Data = {
            id: $(this).attr('id'),
            status: $(this).val() === '1' ? '0' : '1'
        };
        $.blockUI({message: '<h5><img src="' + base_url + 'assets/images/loader/loader.gif" alt="Please wait..." width="20%" /> Please wait...</h5>'});
        $.ajax({
            type: 'POST',
            url: base_url + 'color/status',
            data: Data,
            success: function (data) {
                if (data === '1') {
                    swal('Congratulations!', 'Your color status successfully updated!', 'success');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    swal('Error', 'Problem to On / Off *', 'error');
                }
            },
            error: function (data2) {
                alert(JSON.stringify(data2));
            },
            complete: function () {
                $.unblockUI();
            }
        });
    });
});