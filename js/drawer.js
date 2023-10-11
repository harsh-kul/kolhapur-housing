
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.getElementById('main').style.visibility = 'hidden';

  $(".container-background-image").css("z-index","0");
  $(".header-banner-search-container").css("z-index","0");
  }

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById('main').style.visibility = 'visible';

  $(".container-background-image").css("z-index","2");
  $(".header-banner-search-container").css("z-index","1");


}

function logout(){
  var yes =function yes(){
    $(document).ready(function () {
      $.ajax({
        url: __URL_include_registration_,
        type: "POST",
        // headers: {token : token},
        dataType: "json",
        data: {
          key: "logout",
          password: _AUTH_PASSWORD_,
          username: _AUTH_USERNAME_,
          
        },
        success: function(data, status, xhr) {
          console.log("registration id data Save  :success " + data);
          console.log(data);
          if(data['status']==true){
            window.location.href = __URL_INDEX_;
            // alert(__URL_INDEX_);
          }
          else{
            AlertHandler.getErrorAlert(StringHandler.USER_CANT_LOGOUT);
          }
        },
        error: function (data, status, xhr) {
          // alert(data.responseText);
          console.log("registration id data error  :error " + data);
        },
        complete: function () {
          console.log("registration id data complte  :complete ");
        
        },
      });
     });
  };
  var no =function no(){closeNav();};
  AlertHandler.doYouWantAlert(__ALERT_TITLE__,StringHandler.DO_YOU_WANT_TO_LOGOUT,yes,no);

  
}