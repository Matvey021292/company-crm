$(document).ready(function () {
    var token = $('[name="csrf-token"]').attr('content');

    $("#companyInputFile").change(function () {
        var files = $(this)[0].files;

        if (files.length > 0) {
            $('.custom-file-label[for="companyInputFile"]').text(files[0].name)

            var reader = new FileReader();
            reader.onload = function(e) {
                $("#prevLogo").attr('src', e.target.result);
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        } else {
            alert("Please select a file.");
        }
    });

    $('.delete').click(function (){
        var $this = $(this);

        $.ajax({
            url: $this.data('action'),
            type: 'DELETE',
            data: {
                "id": $this.attr('id'),
                "_method": 'DELETE',
                "_token": token,
            },
            success: function (){
                $this.parents('tr').remove();
            }
        })
    })
});
