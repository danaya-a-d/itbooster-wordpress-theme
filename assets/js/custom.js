/*AJAX*/


$('.main-form').on('submit', (e) => {

    let action = $(e.currentTarget).attr('action');
    let th = $(e.currentTarget);
    let valid = true;

    let message = th.find($('.modal--success'));

    $(this).find($('input')).each(function () {
        let value;
        if ($(this).val() !== '') {
            value = 1;
        } else value = 0;
        valid *= value;
    });

    if (valid) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: action,
            data: th.serialize(),
            error: function (request, txtstatus, errorthrown) {
                console.log(request);
                console.log(txtstatus);
                console.log(errorthrown);
            },
            success: function () {
                message.removeClass('hide');
                th.find('input').val('');
                th.find('textarea').val('');
            }
        })
    }
});



















/*AJAX*/