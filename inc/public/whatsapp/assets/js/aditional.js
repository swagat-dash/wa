// chatbot import
$(document).on("submit", "#chatbot_import", function() {
    const $this = $(this);
    const fd = new FormData();
    fd.append('token', token);
    fd.append('file', $(this).find('input[name="file"]')[0].files[0]);
    fd.append('instance_id', $(this).find('input[name="instance_id"]').val());

    $.ajax({
        url: 'whatsapp/import_bots',
        type: 'post',
        data: fd,
        processData: false,
        contentType: false,
        beforeSend: function() {
            Core.overplay();
        },
        complete: function() {
            Core.overplay(false);
        },
        success: function(res) {
            res = JSON.parse(res);
            if(res.status == 'error') {
                return Core.notify(res.message, 'error');
            }
            
            Core.notify(res.message, 'success');
            $this[0].reset();
            $('#pills-bot-tab').click();
        }
    })
    return false;
});