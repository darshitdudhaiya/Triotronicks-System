function createContacts() {
    $('#btn-submit').attr('disabled', '');

    $('#btn-submit-text').hide();
    $('#btn-submit-text-saved').hide();
    $('#btn-submit-spinner').show();

    let formData = new FormData();
    formData.append('class-id', $('#service').val());
    formData.append('name', $('#contact-name').val());
    formData.append('email', $('#contact-email').val());
    formData.append('address', $('#contact-address').val());
    formData.append('mobile', $('#contact-mobile').val());


    // let files = $('#images')[0].files;
    // for (let i = 0; i < files.length; i++) {
    //     formData.append('images[]', files[i]);
    // }
    $.ajax(
        {
            method: 'POST',
            url: '../Contacts/create.php',
            contentType: false,
            processData: false,
            data: formData,
            success: (response) => {
                if (response.status) {
                    $('#btn-submit-text').hide();
                    $('#btn-submit-text-saved').show();
                    $('#btn-submit-spinner').hide();

                    setTimeout(() => window.location.href = '../contacts', 1000);
                }
            }
        });

    return false;
}

function editContact(id) {
    $('#btn-submit').attr('disabled', '');

    $('#btn-submit-text').hide();
    $('#btn-submit-text-saved').hide();
    $('#btn-submit-spinner').show();

    let formData = new FormData();
    formData.append('id', id);
    formData.append('contact-id', $('#contacts').val());
    formData.append('contact-name', $('#contact-name').val());
    formData.append('contact-email', $('#contact-email').val());
    formData.append('contact-address', $('#contact-address').val());
    formData.append('contact-mobile', $('#contact-mobile').val());
    // formData.append('service-description', $('#service-description').val());

    $.ajax(
        {
            method: 'POST',
            url: '../contacts/edit.php',
            contentType: false,
            processData: false,
            data: formData,
            success: (response) => {
                if (response.status) {
                    $('#btn-submit-text').hide();
                    $('#btn-submit-text-saved').show();
                    $('#btn-submit-spinner').hide();

                    setTimeout(() => window.location.href = '../contacts', 1000);
                }
            }
        });

    return false;
}

function showDeleteServiceConfirmation(id) {
    $('#btn-yes').attr('data-id', id);
    $('#modal-delete').modal('show');
}

function deleteClass() {
    let id = $('#btn-yes').attr('data-id');
    if (id == null)
        return;

    window.location.href = '../contacts/delete.php?id=' + id;
}