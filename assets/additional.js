// excel upload
/*$(document).on("submit", "#bulk_contact_form", function() {
    const $this = $(this);
    const fd = new FormData();
    fd.append('token', token);
    fd.append('file', $(this).find('input[name="file"]')[0].files[0]);
    fd.append('name', $(this).find('input[name="name"]').val());
    $.ajax({
        url: 'bulk_contact/upload_files',
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
        }
    })
    return false;
});
*/
