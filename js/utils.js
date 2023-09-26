class Utils{
    static localGetUserId() {
        var rg_id = localStorage.getItem("registrationid");
        return rg_id;
     }
     static  generateOTP() {
        var digits = '0123456789';
        let OTP = '';
        for (let i = 0; i < 6; i++ ) {
            OTP += digits[Math.floor(Math.random() * 10)];
        }
        return OTP;
      }
      
   
  
}