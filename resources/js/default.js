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
