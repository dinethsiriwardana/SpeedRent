function checkpwds(){
    var pwd = document.getElementById("pwd").value;
    var cnfrmpwd = document.getElementById("cnfrmpwd").value;
    
    if(pwd != cnfrmpwd)
    {
        window.alert("Passwords do not match...!!!");
        return false;
    }
    else{
        window.alert("Registered succesfully...!!!");
       
    }
}