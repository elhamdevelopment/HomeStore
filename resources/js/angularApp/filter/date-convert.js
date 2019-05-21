adminApp.filter('jalaliDate', function () {
    return function (inputDate, format) {
        moment.loadPersian({usePersianDigits: true, dialect: 'persian-modern'});
        var date = moment(inputDate).format(format);
        return date;
    }
});