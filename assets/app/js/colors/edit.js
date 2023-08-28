$(document).ready(function () {

    $('.edit-color-btn').click(function () {
        var Error = [];
        var classname = ['name'];
        for (var i = 0; i < classname.length; i++) {
            if (!$.trim($('.' + classname[i]).val())) {
                Error.push('');
                $('.' + classname[i] + '_error').css("display", "block");
            } else {
                $('.' + classname[i] + '_error').css("display", "none");
            }
        }
        if (Error.length === 0) {
            var Data = {
                id: $(this).val(),
                name: $('.name').val()
            };
            $.blockUI({message: '<h5><img src="' + base_url + 'assets/images/loader/loader.gif" alt="Please wait..." width="20%" /> Please wait...</h5>'});
            $.ajax({
                type: 'POST',
                url: base_url + 'color/update',
                data: Data,
                success: function (data) {
                    if (data === '1') {
                        swal('Congratulations!', 'Your color successfully updated!', 'success');
                        setTimeout(function () {
                            window.location.href = base_url + 'colors';
                        }, 2000);
                    } else {
                        swal('Error', 'Problem to add color *', 'error');
                    }
                },
                error: function (data2) {
                    alert(JSON.stringify(data2));
                },
                complete: function () {
                    $.unblockUI();
                }
            });
        }
    });
});