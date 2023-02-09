$(document).ready(function () {
    var request;
    var path = window.location.pathname;
    var page = path.split("/").pop();
   // alert(page);
   init();
   function init()
   {
    if(page == "profile.php")
    {
       
       getProfile();
    }

   }
    /// login form 
    $('#loginForm').submit(function (e) {
         e.preventDefault();
        if (request) {
            request.abort();
        }
        var $form = $(this);

        // Let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");
        console.log($inputs);
        // Serialize the data in the form
        var serializedData = $form.serialize();
            serializedData  +="&loginSubmit=loginSubmit";
           
        console.log(serializedData);
        // Let's disable the inputs for the duration of the Ajax request.
        // Note: we disable elements AFTER the form data has been serialized.
        // Disabled form elements will not be serialized.
        $inputs.prop("disabled", true);
        // Fire off the request to /form.php
        request = $.ajax({
            url: "../lms/pl/account.php",
            type: "post",
            data: serializedData
        });

        // Callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR) {
            // Log a message to the console
           
            console.log("response :" + response);
            console.log("textStatus :" + textStatus);
            console.log("jqXHR :" + jqXHR);
            if(response == 1)
            {
                window.location="index.php";
            }else{

                alert(response);
            }
        });

        // Callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown) {
            // Log the error to the console
            console.error(
                "The following error occurred: " +
                textStatus, errorThrown
            );
        });

        // Callback handler that will be called regardless
        // if the request failed or succeeded
        request.always(function () {
            // Reenable the inputs
            $inputs.prop("disabled", false);
        });

    });
   
    /// forget password form 
    $('#forgetPasswordForm').submit(function (e) {
        e.preventDefault();
        if (request) {
            request.abort();
        }
        var $form = $(this);

        // Let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");

        // Serialize the data in the form
        var serializedData = $form.serialize();
        serializedData  +="&forgetPasswordsubmit=forgetPasswordsubmit";
        // Let's disable the inputs for the duration of the Ajax request.
        // Note: we disable elements AFTER the form data has been serialized.
        // Disabled form elements will not be serialized.
        $inputs.prop("disabled", true);
        // Fire off the request to /form.php
        request = $.ajax({
            url: "../lms/pl/account.php",
            type: "post",
            data: serializedData
        });

        // Callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR) {
            // Log a message to the console
           
            console.log("response :" + response);
            console.log("textStatus :" + textStatus);
            console.log("jqXHR :" + jqXHR);
            if(response == 1)
            {
                window.location="login.php";
            }else{

                alert(response);
            }
        });

        // Callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown) {
            // Log the error to the console
            console.error(
                "The following error occurred: " +
                textStatus, errorThrown
            );
        });

        // Callback handler that will be called regardless
        // if the request failed or succeeded
        request.always(function () {
            // Reenable the inputs
            $inputs.prop("disabled", false);
        });

    });
   
    
    function getProfile(){
 console.log("call getProfile start");
        var data = {
            profileSubmit : "profileSubmit"
        };
        request = $.ajax({
            url: "../lms/pl/account.php",
            type: "GET",
            data:data 
        });

        // Callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR) {
            // Log a message to the console
           $('#arabic_name').val(response['arabic_name']);
           $('#english_name').val(response['english_name']);
           $('#email').val(response['email']);
           $('#mobile').val(response['mobile']);
            console.log("response :" + response);
            console.log("textStatus :" + textStatus);
            console.log("jqXHR :" + jqXHR);
           
        });

        // Callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown) {
            // Log the error to the console
            console.error(
                "The following error occurred: " +
                textStatus, errorThrown
            );
        });


    }

    $('#formProfile').submit(function (e) {
        e.preventDefault();
        if (request) {
            request.abort();
        }
        var $form = $(this);

        // Let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");

        // Serialize the data in the form
        var serializedData = $form.serialize();
        serializedData  +="&profilesubmit=profilesubmit";
        // Let's disable the inputs for the duration of the Ajax request.
        // Note: we disable elements AFTER the form data has been serialized.
        // Disabled form elements will not be serialized.
        $inputs.prop("disabled", true);
        // Fire off the request to /form.php
        request = $.ajax({
            url: "../lms/pl/account.php",
            type: "post",
            data: serializedData
        });

        // Callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR) {
            // Log a message to the console
           
            console.log("response :" + response);
            console.log("textStatus :" + textStatus);
            console.log("jqXHR :" + jqXHR);
          
           
                alert(response);
           
        });

        // Callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown) {
            // Log the error to the console
            console.error(
                "The following error occurred: " +
                textStatus, errorThrown
            );
        });

        // Callback handler that will be called regardless
        // if the request failed or succeeded
        // request.always(function () {
        //     // Reenable the inputs
        //     $inputs.prop("disabled", false);
        // });

    });
   
});