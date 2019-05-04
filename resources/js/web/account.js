$(document).ready(function () {
    $('form').validate();
    var serialize_form = form => JSON.stringify(
        Array.from(new FormData(form).entries())
            .reduce((m, [key, value]) => Object.assign(m, {[key]: value}), {})
    );
    $("#loginForm").submit(function (e) {
        e.preventDefault(e);
        var $form = $(this);
        var data = serialize_form(this);
        if ($form.valid()) {
            $.ajax({
                method: "Post",
                url: "/api/login",
                contentType: "application/json ; charset=utf-8",
                type: 'json',
                data: data,
                success: function (response) {
                    console.log(response);
                    localStorage.setItem('token', response.data.token);
                    // window.location.href =response.data.redirectPath;
                    iziToast.success({title: 'ورود', message: 'ورود با موفقیت انجام شد'});
                }, error: function (response) {
                    var msg = response;
                    console.log(msg);
                    if (msg !== undefined)
                        iziToast.error({title: 'عملیات نا موفق', message: response.message});
                    else
                        iziToast.error({title: 'عملیات نا موفق', message: 'بروز خطا در سیستم.لطفا مجدد سعی نمایید.'});
                },
            });
        }
    });

    $("#registerForm").submit(function (e) {
        e.preventDefault(e);
        var $form = $(this);
        var data = serialize_form(this);
        if ($form.valid()) {
            $.ajax({
                method: "Post",
                url: "/api/register",
                contentType: "application/json ; charset=utf-8",
                type: 'json',
                data: data,
                success: function (response) {
                    localStorage.setItem('token', response.data.token);
                    iziToast.success({title: 'ورود', message: 'ثبت نام با موفقیت انجام شد'});
                }, error: function (response) {
                    var msg = response.message;
                    if (msg !== undefined)
                        iziToast.error({title: 'عملیات نا موفق', message: msg});
                    else
                        iziToast.error({title: 'عملیات نا موفق', message: 'بروز خطا در سیستم.لطفا مجدد سعی نمایید.'});
                },
            });
        }
    });
});


