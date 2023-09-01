$(document).ready(function () {

    $('.ColorsTable').on('click', '.remove-color-btn', function () {
        var Data = {
            id: $(this).val()
        };
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this data!",
            icon: "warning",
            buttons: true,
            dangerMode: true
        }).then((willDelete) => {
            if (willDelete) {
                $.blockUI({message: '<h5><img src="' + base_url + 'assets/images/loader/loader.gif" alt="Please wait..." width="20%" /> Please wait...</h5>'});
                $.ajax({
                    type: "POST",
                    url: base_url + 'admin/course/remove',
                    data: Data,
                    success: function (data) {
                        if (data === '1') {
                            swal('Poof!', 'Your color has been deleted!', 'success');
                            setTimeout(function () {
                                location.reload();
                            }, 2000);
                        } else {
                            swal('Error', 'Problem to remove color *', 'error');
                        }
                    },
                    error: function (data2) {
                        alert(JSON.stringify(data2));
                    },
                    complete: function () {
                        $.unblockUI();
                    }
                });
            } else {
                swal('Information!', 'Your color is safe!', 'info');
            }
        });
    });
});