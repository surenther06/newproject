$(document).ready(function () {

    $('.add-btn').click(function () {
        var Error = [];
        var formData = new FormData();
        var classname = ['course_name', 'short_notes', 'course_image'];
        for (var i = 0; i < classname.length; i++) {
            if (!$.trim($('.' + classname[i]).val())) {
                Error.push('');
                $('.' + classname[i] + '_error').css("display", "block");
            } else {
                $('.' + classname[i] + '_error').css("display", "none");
            }
        }

        if (!$('.course_image').val()) {
            Error.push('');
            $('.course_image_error').css("display", "block");
        } else {
            $('.course_image_error').css("display", "none");
            var file = document.getElementById('course_image').files[0];
            var filename = file.name;
            var extSplit = filename.split('.');
            var extReverse = extSplit.reverse();
            var ext = extReverse[0];
            if (ext === 'jpg' || ext === 'jpeg' || ext === 'png') {
                $('.course_image_invalid_format').css("display", "none");
            } else {
                Error.push('');
                $('.course_image_invalid_format').css("display", "block");
            }
            formData.append('file', file, file.name);
        }

        var Data = {
            course_name: $('.course_name').val(),
            short_note: $('.short_notes').val()
        };

        formData.append('Data', JSON.stringify(Data));

        if (Error.length === 0) {
            $.blockUI({message: '<h5><img src="' + base_url + 'assets/images/loader/loader.gif" alt="Please wait..." width="20%" /> Please wait...</h5>'});
            $.ajax({
                type: 'POST',
                url: base_url + 'admin/upcoming/create',
                contentType: false,
                processData: false,
                data: formData,
                success: function (data) {
                    console.log(data);
                    if (data === '1') {
                        swal('Congratulations!', 'Your customer successfully added!', 'success');
                        setTimeout(function () {
                            window.location.href = base_url + 'admin/upcoming';
                        }, 2000);
                    } else {
                        swal('Error', 'Problem to add customer *', 'error');
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