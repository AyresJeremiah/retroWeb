function uploadFile(){
    $(this).children(".spinner-border").show();
    let fd = new FormData();
    let files = $('#gameFile')[0].files[0];
    fd.append('file', files);
    fd.append('console', $('#gameSystemType').val());
    $.ajax({
        url: 'fileUpload.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data != 0) {
                alert("success");
            } else {
                alert('Error Uploading!');
                pdfUploadLocation=0;
            }
        },
    });
    // $.ajax({
    //     url: 'fileUpload.php',
    //     method: "POST",
    //     data: {file: fd, system: $('#gameSystemType').val()},
    //     success: function (data) {
    //         if (data != 0) {
    //             alert ("success");

    //         } else {
    //             alert('File not uploaded!');
    //         }
    //     },
    // });
}

$('#fileUploadModalCloseBtn').click(function(){
    $('#fileUploadModal').modal('hide');
});

$('#uploadFileBtn').click(function(){
    $('#fileUploadModal').modal('hide');
    if ($('#gameSystemType').val()!=0 && $('#gameFile').val()){
        uploadFile();
    }
});

$("#uploadBtn").click(function(){
    $('#fileUploadModal').modal('show');
});

$('#uploadPdfBtn').click(function(){
    
});