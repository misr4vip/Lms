$(document).ready(function () {
    var request;
    
    $('#roleAddForm').submit(function (e) {
        e.preventDefault();
        if (request) { request.abort();}
        var $form = $(this);
        // Let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");
        // Serialize the data in the form
        var serializedData = $form.serialize();
        // Let's disable the inputs for the duration of the Ajax request.
        // Note: we disable elements AFTER the form data has been serialized.
        // Disabled form elements will not be serialized.
        $inputs.prop("disabled", true);
        // Fire off the request to /form.php
        request = $.ajax({
            url: "../../lms/pl/role/create.php",
            type: "post",
            data: serializedData
        });

        // Callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR) {
            // Log a message to the console
            // console.log("response :" + response);
            // console.log("textStatus :" + textStatus);
            // console.log("jqXHR :" + jqXHR);
            $inputs.prop("value","");
                alert(response);
        });

        // Callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown) {
            // Log the error to the console
            console.error("The following error occurred: " + textStatus, errorThrown);
        });

        // Callback handler that will be called regardless
        // if the request failed or succeeded
        request.always(function () {
            // Reenable the inputs
            $inputs.prop("disabled", false);
        });

    });
   
      
});