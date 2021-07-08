$(document).ready(function() {
    $('#form-submit').submit(function(event) {
        var ajaxFormSubmit,
            form           = $(this),
            url            = form.attr('action'),
            btnSubmit      = form.find('button[type=submit]'),
            btnSubmitHtml  = btnSubmit.html(),
            serializedData = form.serialize();

            console.log(serializedData);

        ajaxFormSubmit = $.ajax({
            url: url,
            type: "POST",
            beforeSend: function() {
                // Show loading indicator
                btnSubmit.html('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Submiting...')
                btnSubmit.attr('disabled', 'disabled');
            },
            data: serializedData,
            cache: false,
        });
        ajaxFormSubmit.done(function (data) {
            setTimeout(() => {
                // View the result in browser console
                console.log(data);
                
                // Better to use json
                var json     = $.parseJSON(data),
                    status   = json.status,
                    message  = json.message,
                    error    = json.error;
                
                // if success
                if (status == 'ok') {
                    btnSubmit.removeAttr('disabled', 'disabled');
                    btnSubmit.html(btnSubmitHtml);
                    $('#form-result').html(message)
                    $('#submit-email').val('');
                    $('#submit-password').val('');
                }
                // if error
                else {
                    btnSubmit.html(btnSubmitHtml);
                    btnSubmit.removeAttr('disabled', 'disabled');
                    alert(error) 
                }
            }, 2000);
        });
        ajaxFormSubmit.fail(function(jqXHR, textStatus) {
            btnSubmit.html(btnSubmitHtml);
            btnSubmit.removeAttr('disabled', 'disabled');
            alert(jqXHR.statusText)
        });
        event.preventDefault();
    })

    // Check button is exist or not
    if ($('#button-send').length > 0) {
        // Button click
        $("#button-send").on("click", function() {
            var btn      = $(this),
                btnHtml  = btn.html(),
                email    = $('#click-email').val(),
                pass     = $('#click-password').val(),
                url      = btn.data('url'),
                data     = { email, pass };

                $.ajax({
                    type: "POST",
                    url:  url,
                    data: data,
                    cache: false,
                    beforeSend: function() {
                        // Show loading indicator
                        btn.html('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Sending...')
                        btn.attr('disabled', 'disabled');
                    },
                    success: function(data) {
                        setTimeout(() => {
                            // View the result in browser console
                            console.log(data);
                            
                            // Better to use json
                            var json     = $.parseJSON(data),
                            status   = json.status,
                            message  = json.message,
                            error    = json.error;
                            
                            // if success
                            if (status == 'ok') {
                                btn.removeAttr('disabled', 'disabled');
                                btn.html(btnHtml);
                                $('#click-result').html(message)
                                $('#click-email').val('');
                                $('#click-password').val('');
                            }
                            // if error
                            else {
                                btn.html(btnHtml);
                                btn.removeAttr('disabled', 'disabled');
                                alert(error) 
                            }
                        }, 2000);
                    }
                })

            return false;
        })
    }
})