$(document).ready(function () {

    $('.add-btn').click(function () {
        var Error = [];
        var classname = ['fname', 'lname', 'gender','phone_number','dob','email','address','pincode'];
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
                fname: $('.fname').val(),
                lname: $('.lname').val(),
                gender: $('.gender').val(),
                phone_number: $('.phone_number').val(),
                dob: $('.dob').val(),
                email: $('.email').val(),
                address: $('.address').val(),
                pincode: $('.pincode').val(),
    
            };
            $.blockUI({ message: '<h5><img src="' + base_url + 'assets/images/loader/loader.gif" alt="Please wait..." width="20%" /> Please wait...</h5>' });
            $.ajax({
                type: 'POST',
                url: base_url + 'admin/member_register/create',
                contentType: false,
                processData: false,
                data: Data,
                success: function (data) {
                    console.log(data);
                    if (data === '1') {
                        swal('Congratulations!', 'Your customer successfully added!', 'success');
                        setTimeout(function () {
                            window.location.href = base_url + 'admin/jobs';
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