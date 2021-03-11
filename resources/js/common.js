$(document).ready(function () {
    var token = $('[name="csrf-token"]').attr('content');
    var logoContainer = $("#prevLogo");

    $("#companyInputFile").change(function () {
        var files = $(this)[0].files;

        if (files.length > 0) {
            $('.custom-file-label[for="companyInputFile"]').text(files[0].name)

            var reader = new FileReader();
            reader.onload = function(e) {
                logoContainer.attr('src', e.target.result);
                logoContainer.removeClass('d-none')
            };
            reader.readAsDataURL(this.files[0]);

        } else {
            alert("Please select a file.");
        }
    });

    $('.delete').click(function (){
        var Confirm = confirm($('[name="confirm"]').val());
        if(!Confirm) return;

        var $this = $(this);
        var parents = $this.parents('tr');

        $.ajax({
            url: $this.data('action'),
            type: 'DELETE',
            data: {
                "id": $this.attr('id'),
                "_method": 'DELETE',
                "_token": token,
            },
            success: function (resp){
                if(resp.status == 'error'){
                    alert(resp.message);
                    return;
                }
                parents.remove();
            }
        })
    })
});
