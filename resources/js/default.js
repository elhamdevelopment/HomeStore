// $(document).ready(function () {
// $("#quantity").TouchSpin();
// });
$("input[name='quantity']").TouchSpin();

$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});
iziToast.settings({
    // icon: '', // icon class
    theme: 'light', // dark
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

$('#searchBtn').click(function () {
    window.location = '/restaurant-list'
});
