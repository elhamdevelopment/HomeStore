$(document).ready(function () {


    // var e = document.getElementById("range");
    // noUiSlider.create(e,
    //     {
    //         start: [1],
    //         connect: [true, false],
    //         step: 1,
    //         tooltips: true,
    //         direction: 'rtl',
    //         range: {
    //             'min': [0],
    //             'max': [5]
    //         }
    //     }
    // );

    //////////////////////////////////////////////////////////////
    //izitoast
    iziToast.settings({
        imageWidth: 50,
        maxWidth: null,
        zindex: 9999,
        layout: 1,
        balloon: false,
        close: true,
        closeOnEscape: false,
        closeOnClick: false,
        displayMode: 0, // once, replace
        position: 'topRight', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
        target: '',
        targetFirst: true,
        timeout: 3000,
        rtl: true,
        animateInside: true,
        drag: true,
        pauseOnHover: true,
        resetOnHover: true,
        progressBar: true,
        progressBarColor: '',
        progressBarEasing: 'linear',
        overlay: false,
        overlayClose: false,
        overlayColor: 'rgba(0, 0, 0, 0.6)',
        transitionIn: 'flipInX',
        transitionOut: 'flipOutX',
        // transitionIn: 'fadeInUp',
        // transitionOut: 'fadeOut',
        transitionInMobile: 'fadeInUp',
        transitionOutMobile: 'fadeOutDown',
    });
    //form validation config
    $('form').validate();
    //jalali plugin config
    moment.loadPersian({usePersianDigits: true, dialect: 'persian-modern'});
    //Tochspain plugin config
    $("input[name='quantity']").TouchSpin();
    //bootstrap tooltip config
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
    //data table jquery plugin config
    $('#sales_table,#productList').dataTable({
        // pagingType: "full_numbers",
        info: false,
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
    //loading function local
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

    // $('.btn').on('click', function () {
//     var $this = this;
//     loading($this, true);
//     setTimeout(function () {
//         loading($this, false);
//     }, 8000);
// });
});
