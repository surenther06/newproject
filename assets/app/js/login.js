$(document).ready(function () {

    $(".username, .password").keypress(function (e) {
        if (e.keyCode === 13) {
            $('.login-btn').click();
        }
    });

    var base_url = $('.base_url').val();

    $('.login-btn').click(function () {
        var Error = [];
        var classname = ['username', 'password'];
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
                username: $('.username').val(),
                password: $('.password').val()
            };
            $.blockUI({message: '<h5><img src="' + base_url + 'admin_assets/images/loader/loader.gif" alt="Please wait..." width="20%" /> Please wait...</h5>'});
            $.ajax({
                type: "POST",
                url: base_url + '/admin/user_login',
                data: Data,
                success: function (data) {
                    if (data === '1') {
                        window.location.href = base_url + '/admin/dashboard';
                        $('.login_error').css("display", "none");
                    } else {
                        $('.login_error').css("display", "block");
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