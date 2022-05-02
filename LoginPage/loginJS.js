
/*
<!-- Author : Mohammed Awwal -->
<!-- Title: Login Page -->
<!-- Finalized on : Wednesday, 10 April, 2019 -->
<!-- Course : Web Tech -->
*/


  function showErrors(){
    // to display the errors right next to the input fields

    var emailfield = document.getElementById("emailfield").value
      var passfield = document.getElementById("passfield").value

      var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/
    if (  (emailfield.includes("@") == true) && (emailfield.includes(".") == true) && (re.test(passfield))  ) {
    } // do nothing and proceed as usual
    else{
      document.getElementById("error-message-usnm").style.display = "block";
      document.getElementById("error-message-pass").style.display = "block";
    }
  }



  function checkpass(){
     var passfield = document.getElementById("passfield").value

    // at least one number, one lowercase and one uppercase letter
    // at least eight characters
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/
    if (re.test(passfield)) {
      window.open(".///infoPage.html")
    }
    else {

      showErrors();
      alert("Access Denied! Incorrect Password Format");

        about:blank;  //NO NONSENSE - don't trust the user.
                      //Redirect to blank page if user tries tricks.
    }
   }

  
  function check(form){

    var emailfield = document.getElementById("emailfield").value
    var passfield = document.getElementById("passfield").value

    if ((emailfield.includes("@") == true) && (emailfield.includes(".") == true) ) {

        /*if the format of the email is ok call the
        previously declared function and validate the password*/
        return checkpass();
    }
      
    else {

      showErrors();
        alert("Access Denied!");
        about:blank;
      
    }
  };



  function mouseover(){
    document.getElementById("footer").style.opacity = "1";
  };

  function mouseout() {
    document.getElementById("footer").style.opacity = "0.1";
  };

