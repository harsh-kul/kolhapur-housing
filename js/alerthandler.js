class AlertHandler {
  static getsuccessAlert(msg) {
    swal({
      title: __ALERT_TITLE__,
      text: msg,
      icon: "success",
    });
  }
  static getErrorAlert(msg) {
    swal({
      title: __ALERT_TITLE__,
      text: msg,
      icon: "error",
    });
  }
  static getInfoAlert(msg) {
    swal({
      title: __ALERT_TITLE__,
      text: msg,
      icon: "info",
    });
  }
  static doYouWantAlert(title, text, yes, no) {
    swal({
      title: title,
      text: text,
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {
        yes();
      } else {
        no();
      }
    });
  }

  static loginAlert(msg, url,yes) {
    // Assuming you have a SweetAlert dialog with the id "myAlert"

    // Display the SweetAlert dialog
    swal({
      title: "Login Success",
      text: "Login Successful",
      icon: "success",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "OK",
    }).then((result) => {
      if (result.isConfirmed) {
        // If the "OK" button is clicked, redirect to another page
        // window.location.href = url;
        // console.log('The Ok Button was clicked.');
        yes();
      }
    });
  }
}
