function ValidateEmail(input) {

    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  
    if (input.value.match(validRegex)) {
      return true;
    } else {
      alert("بريد الكتروني غير صحيح");
      return false;
  
    }
  
  }


  function verifyPassword(input) {  
    var pass = input.value; 
    //check empty password field  
    if(pass == "") {  
       document.getElementById("message").innerHTML = "**Fill the password please!";  
       return false;  
    }  
     
   //minimum password length validation  
    if(pass.length < 8) {  
       document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
       return false;  
    }  
    
  //maximum length of password validation  
    if(pass.length > 15) {  
       document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
       return false;  
    } 
  }  