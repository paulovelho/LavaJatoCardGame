$(function() {

    $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#name").val();
            var email = $("input#email").val();
            var assunto = $("input#assunto").val();
            var message = $("textarea#message").val();
            var data = {
                name: name,
                assunto: assunto,
                email: email,
                message: message
            };
            var errorMessage = function() {
                $('#success').html("<div class='alert alert-danger'>");
                $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                    .append("</button>");
                $('#success > .alert-danger').append("<strong>Houve algum erro no servidor de e-mail. Você ainda pode entrar em contato através de nossas redes sociais!");
                $('#success > .alert-danger').append('</div>');
                //clear all fields
                $('#contactForm').trigger("reset");                
            }

            $.ajax({
                url: "././mail/contact_me.php",
                type: "POST",
                data: data,
                success: function( data ) {
                    console.info(data);
                    if(data.success) {
                        // Success message
                        $('#success').html("<div class='alert alert-success'>");
                        $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        $('#success > .alert-success')
                            .append("<strong>"+data.message+"</strong>");
                        $('#success > .alert-success')
                            .append('</div>');
                    } else {
                        errorMessage();
                    }

                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    errorMessage();
                },
            });
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
