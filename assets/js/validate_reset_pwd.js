function checkpwds() {
  var pwd = document.getElementById("pwd");
  var cnfrmpwd = document.getElementById("cnfrmpwd");
  var txtpassagnlbl = document.getElementById("txtpassagnlbl");

  if (pwd.value != cnfrmpwd.value) {
    cnfrmpwd.classList.add("is-invalid");
    return false;
} else {
      if (pwd.value.length < 8) {
        txtpassagnlbl.innerHTML = " Must be at least 8 characters";
        cnfrmpwd.classList.add("is-invalid");
        return false;
      }
    return true;
  }
}

function checkL() {
    var cnfrmpwd = document.getElementById("cnfrmpwd");
    if (cnfrmpwd.value.length >= 8) {
        cnfrmpwd.classList.remove('is-invalid');
        cnfrmpwd.classList.add('is-valid');
      }
}

// if (txtemail.value.length == 0) {
//     txtemail.classList.add('is-invalid');
//     return false;
// }else{
//      txtemail.classList.remove('is-invalid');
// }
// if (txtpass.value.length < 8) {
//     txtpass.classList.add('is-invalid');
//     return false;
// }else{
//      txtpass.classList.remove('is-invalid');
//       txtpass.classList.add('is-valid');
// }
