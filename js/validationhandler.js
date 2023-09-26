class ValidationHandler {
  static checkVarIsNull(variable) {
    if (variable == null || variable === "undefined" || variable == "") {
      return true;
    } else {
      return false;
    }
  }
  static hasNumber(myString) {
    return /^\d+$/.test(myString);
  }
  static hasSpecialCharater(str) {
    var format = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
    return format.test(str);
  }
  static isValidEmail(str) {
    var validRegex =
      /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    return validRegex.test(str);
  }

  static isValidIndianMoblieNumber(str) {
    var validRegex = /^[6-9]\d{9}$/;
    return validRegex.test(str);
    //^[6-9]\d{9}$
  }

  static isAlphabetOnly(input) {
    var validRegex = /^[A-Za-z]+$/;
    return validRegex.test(input);
  }
}
