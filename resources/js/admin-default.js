// $(document).ready(function () {
// $("#quantity").TouchSpin();
// });
$("input[name='quantity']").TouchSpin();

$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});
iziToast.settings({
    timeout: 3000, // default timeout
    resetOnHover: true,
    // icon: '', // icon class
    transitionIn: 'flipInX',
    transitionOut: 'flipOutX',
    position: 'topRight', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
    onOpen: function () {
        console.log('callback abriu!');
    },
    onClose: function () {
        console.log("callback fechou!");
    }
});
iziToast.show({
    title: 'Hey',
    message: 'What would you like to add?'
});
$(function () {

    // $("#commentForm").validate({
    // rules: {
    //     // simple rule, converted to {required:true}
    //     name: "required",
    //     // compound rule
    //     email: {
    //         required: true,
    //         email: true
    //     }
    // }
    // });
});
//loading function
var oldValue = '';

function loading($this, $enable) {
    if ($enable === true) {
        oldValue = $($this).html();
        $($this).html('<span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span>' +
            '<span class="d-inline-block pr-2 align-middle">صبر کنید...</span>');
        $($this).attr("disabled", true);
    } else {
        $($this).removeAttr("disabled");
        $($this).html(oldValue);
    }
}

$('.btn').on('click', function () {
    var $this = this;
    loading($this, true);
    setTimeout(function () {
        loading($this, false);
    }, 8000);
});
$('#sales_table,#productList').dataTable({
    // pagingType: "full_numbers",
    info:  false,
    language: {
        lengthMenu: " تعداد رکورد در صفحه :  _MENU_ ",
        zeroRecords: "چیزی یافت نشد - متاسفم",
        info: "",
        infoEmpty: "هیچ رکوردی موجود نیست",
        infoFiltered: "(فیلتر شده از _MAX_ تعداد کل رکوردها)",
        search: "جستجو: ",
        emptyTable: "No data available in table",
        "paginate": {
            "first": "اولین",
            "last": "آخرین",
            "next": "بعدی",
            "previous": "قبلی"
        },
    }

});

// 'use strict';
// // var jalaali = require('jalaali-js');
// alert(toJalaali(2016, 4, 11)); // { jy: 1395, jm: 1, jd: 23 }