$(function () {
    $('#summernote').summernote({
        minHeight: 300,
        tabDisable: true,
        toolbar: [
            ['style', ['style']],
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['para', ['ul', 'ol', 'paragraph', 'height']],
            ['fontstyle', ['fontname', 'fontsize', 'fontsizeunit']],
            ['fontstyle', ['color', 'forecolor', 'backcolor']],
            ['insert', ['picture', 'link', 'video', 'table', 'hr']],
            ['misc', ['fullscreen', 'undo', 'redo', 'help']]
        ],
        fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '24', '36', '48', '64', '82', '150']
    });

    $('#summernote').summernote('fontName', 'Calibri');
    $('#summernote').summernote('fontSize', '18');

    $('#blog-post-title').focus();
    window.scrollTo(0, 0);
});

function createServices() {
    $('#btn-submit').attr('disabled', '');

    $('#btn-submit-text').hide();
    $('#btn-submit-text-saved').hide();
    $('#btn-submit-spinner').show();

    let formData = new FormData();
    formData.append('service-id', $('#service').val());
    formData.append('serviceName', $('#service-name').val());
    formData.append('serviceDescription', $('#service-description').val());

    let files = $('#images')[0].files;
    for (let i = 0; i < files.length; i++) {
        formData.append('images[]', files[i]);
    }

    formData.append("blogPostMarkup", $('#summernote').summernote('code'));
    $.ajax(
        {
            method: 'POST',
            url: '../Services/create.php',
            contentType: false,
            processData: false,
            data: formData,
            success: (response) => {
                if (response.status) {
                    $('#btn-submit-text').hide();
                    $('#btn-submit-text-saved').show();
                    $('#btn-submit-spinner').hide();

                    setTimeout(() => window.location.href = '../services', 1000);
                }
            }
        });

    return false;
}

function editService(id) {
    $('#btn-submit').attr('disabled', '');

    $('#btn-submit-text').hide();
    $('#btn-submit-text-saved').hide();
    $('#btn-submit-spinner').show();

    let formData = new FormData();
    formData.append('id', id);
    formData.append('service-id', $('#service').val());
    formData.append('service-name', $('#service-name').val());
    formData.append('service-description', $('#service-description').val());
    formData.append("blogPostMarkup", $('#summernote').summernote('code'));

    let files = $('#images')[0].files;
    for (let i = 0; i < files.length; i++) {
        formData.append('images[]', files[i]);
    }
    $.ajax(
        {
            method: 'POST',
            url: '../services/edit.php',
            contentType: false,
            processData: false,
            data: formData,
            success: (response) => {
                if (response.status) {
                    $('#btn-submit-text').hide();
                    $('#btn-submit-text-saved').show();
                    $('#btn-submit-spinner').hide();

                    setTimeout(() => window.location.href = '../services', 1000);
                }
            }
        });

    return false;
}
function serviceImagesSelected() {
    
    let files = $('#images')[0].files;
    let html = '';

    for (let i = 0; i < files.length; i++) {
        let image = URL.createObjectURL(files[i]);
        html += `<img src="${image}" class="img-preview" />`;
    }
    
    $('.custom-file-label').text(`${files.length} files selected.`);
    $('#img-preview-list').html(html);
}

function clearServiceImages() {
    $('#images').val('');
    $('.custom-file-label').text(`Select images...`);
    $('#img-preview-list').html('');
}
function showDeleteServiceConfirmation(id) {
    $('#btn-yes').attr('data-id', id);
    $('#modal-delete').modal('show');
}

function deleteService() {
    let id = $('#btn-yes').attr('data-id');
    if (id == null)
        return;

    window.location.href = '../services/delete.php?id=' + id;
}