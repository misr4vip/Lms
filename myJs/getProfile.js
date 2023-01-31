$(document).ready(function () {
    var request;
 
       getProfile();
   
    ///////////////////////// get profile/////////////////////////////
    function getProfile(){
        request = $.ajax({
            url: "../lms/pl/account/getProfile.php",
            type: "GET",
            data:null
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


      
});