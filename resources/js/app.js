const { default: axios } = require('axios');

require('./bootstrap');

$(document).on('submit', '.form-ajax', function () {
    let form = $(this);
    let data = form.serialize();

    axios.post(form.attr('action'), data)
        .then(function (response) {
            response = response.data;

            if (response.error) {

            } else {
                $(".response-ajax").prepend(response.result);                
                new ClipboardJS('.btn-copy');
            }
        });

    return false;
});

$(document).on('click', '.option', function(){
    let element = $(this);

    $('.option').removeClass('active');
    element.addClass('active');
});

$(document).on('click', '.btn-copy', function(){
    let element = $(this);

    element.addClass('copied');
    setTimeout(() => {
        element.removeClass('copied');
    }, 500);
});