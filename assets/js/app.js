//script for contact page
$(document).ready(function(){

    $("#contact").click(function(){
        $('#spinner').show();
        $('#success-message').hide(400);
        $('#error-message').hide(400);
        var x=$.ajax({
            type: "POST",
            url: './controllers/contact.php',
            contentType: false,
            data: new FormData($('#contact-form').get(0)),
            dataType: "text",
            processData: false,
            cache:false,
            success: function(data){
                if (data == "success"){
                    setTimeout(function() {
                        document.location.reload()
                    }, 5000);
                }
            }
        });

        x.done(function(serverResponse) {
            var x = serverResponse.trim();
            if (x == 'success'){
                $('#success-message').show(400);
            }else {
                $('#error-message').show(400);
            }$('#spinner').hide();
        });

        x.fail(function(){

        });

        x.always(function(){
            $('#spinner').hide();
        });
    });
});


//Copy to clipboard
function clipboardCopy() {
    var copyText = document.getElementById("myInput");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");

    /* Alert the copied text */
    alert("Copied Account: " + copyText.value);
}


//Datatables
$(function() {
    // Datatables basic
    $('#datatables-basic').DataTable({
        responsive: true
    });
    // Datatables with Buttons
    var datatablesButtons = $('#datatables-buttons').DataTable({
        lengthChange: !1,
        buttons: ["copy", "print"],
        responsive: true
    });
    datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)")
});
