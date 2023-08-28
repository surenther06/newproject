$(document).ready(function () {

    $('.job_date, .job_complete_date').datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        dateFormat: 'dd-mm-yy'
    }).datepicker("setDate", 'now');

    $('.customer_id, .color_id').select2({
        minimumResultsForSearch: '',
        width: '100%'
    });

    $('.job_qty').inputmask('integer');

    $('.add-job-size-btn').click(function () {
        var t_r_count = $('.job-sizes-table').find('tbody tr').length - 1;
        var Data = {
            t_r_count: (t_r_count + 2)
        };
        $.blockUI({message: '<h5><img src="' + base_url + 'assets/images/loader/loader.gif" alt="Please wait..." width="20%" /> Please wait...</h5>'});
        $.ajax({
            type: 'POST',
            url: base_url + 'job/size/add',
            data: Data,
            success: function (data) {
                $('.job-sizes-table > tbody > tr').eq(t_r_count).after(data);
            },
            complete: function () {
                $.unblockUI();
            }
        });
    });

    $('.job-sizes-table').on('click', 'tbody .remove-job-size-btn', function () {
        if (confirm('Are you sure want to remove this product?')) {
            $(this).closest('tr').remove();
            $('.job-sizes-table:eq(0) tbody').find('tr').each(function (i, items) {
                $(items).find('.serial_number').text((i + 1));
            });
        }
    });

    $('.job_qty').keyup(function () {
        var row = $(this).closest('tr');
        var total_pairs = 0;
        row.find('.job_qty').each(function (i) {
            if ($(this).val()) {
                total_pairs += parseInt($(this).val());
            } else {
                total_pairs += 0;
            }
        });
        row.find('.total_pairs').val(total_pairs);

        var final_total_pairs = 0;
        $('.job-sizes-table:eq(0) tbody').find('tr').each(function (j, items) {
            var total_pairs = $(items).find('.total_pairs').val();
            if (total_pairs) {
                final_total_pairs += parseInt(total_pairs);
            } else {
                final_total_pairs += 0;
            }
        });
        $('.final_total_pairs').val(final_total_pairs);
    });

    $('.add-job-btn').click(function () {
        var Error = [];
        var formData = new FormData();
        var classname = ['customer_id', 'job_date', 'job_complete_date', 'style_number', 'strip_size', 'remarks'];

        for (var i = 0; i < classname.length; i++) {
            if (!$.trim($('.' + classname[i]).val())) {
                Error.push('');
                $('.' + classname[i] + '_error').css("display", "block");
            } else {
                $('.' + classname[i] + '_error').css("display", "none");
            }
        }

        if (!$('.job_image').val()) {
            Error.push('');
            $('.job_image_error').css("display", "block");
        } else {
            $('.job_image_error').css("display", "none");
            var file = document.getElementById('job_image').files[0];
            var filename = file.name;
            var extSplit = filename.split('.');
            var extReverse = extSplit.reverse();
            var ext = extReverse[0];
            if (ext === 'jpg' || ext === 'jpeg' || ext === 'png') {
                $('.job_image_invalid_format').css("display", "none");
            } else {
                Error.push('');
                $('.job_image_invalid_format').css("display", "block");
            }
            formData.append('file', file, file.name);
        }

        var items = [];
        $('.job-sizes-table').find('tbody tr').each(function (i) {
            var item0 = [];
            $(this).find('.job_qty').each(function (i) {
                if ($(this).val()) {
                    item0.push($(this).val());
                } else {
                    item0.push(0);
                }
            });
            var item1 = {
                art_number: $(this).find('.art_number').val(),
                color_id: $(this).find('.color_id').val(),
                items: item0,
                total_pairs: $(this).find('.total_pairs').val()
            };
            items.push(item1);
        });

        var Data = {
            customer_id: $('.customer_id').val(),
            job_date: $('.job_date').val(),
            job_complete_date: $('.job_complete_date').val(),
            style_number: $('.style_number').val(),
            strip_size: $('.strip_size').val(),
            notes: $('.notes').val(),
            items: items,
            remarks: $('.remarks').val()
        };

        formData.append('Data', JSON.stringify(Data));

        if (Error.length === 0) {
            $.blockUI({message: '<h5><img src="' + base_url + 'assets/images/loader/loader.gif" alt="Please wait..." width="20%" /> Please wait...</h5>'});
            $.ajax({
                type: "POST",
                url: base_url + 'job/create',
                contentType: false,
                processData: false,
                data: formData,
                success: function (data) {
                    if (data === '1') {
                        swal('Congratulations!', 'Your job successfully added!', 'success');
                        setTimeout(function () {
                            window.location.href = base_url + 'jobs';
                        }, 2000);
                    } else {
                        swal('Error', 'Problem to add job *', 'error');
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