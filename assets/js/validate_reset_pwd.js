var pwd = document.getElementById("pwd");
var cnfrmpwd = document.getElementById("cnfrmpwd");

function resetPwd(){
    var form = document.formPwd;
    if(form.pwdOld.value==""){
        alert("Please enter the old password!");
        form.pwdOld.focus();
        //return 0;
    }
    else if(form.pwdNew.value==""){
        alert("Please enter the new password");
        form.pwdNew.focus();
         //return 0;
    }
    else if(form.pwdCom.value==""){
        alert("Please confirm the password");
        form.pwdCom.focus();
         //return 0;
    }
    else if(form.pwdOld.value == form.pwdNew.value){
        alert("New password can not be same as old passowrd");
         //return 0;
    }
    else if(form.pwdNew.value != form.pwdCom.value){
        alert("Passwords do not match");
         //return 0;
    }
    else{
        alert("Password changed succesfully!");
    }
}