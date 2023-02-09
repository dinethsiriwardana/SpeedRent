var txtemail = document.getElementById('txtemail');
var txtpass = document.getElementById('txtpass');


function validation(){
    
    if (txtemail.value.length == 0) {
        txtemail.classList.add('is-invalid');
        return false;
    }else{
         txtemail.classList.remove('is-invalid');
    }
    if (txtpass.value.length < 8) {
        txtpass.classList.add('is-invalid');
        return false;
    }else{
         txtpass.classList.remove('is-invalid');
          txtpass.classList.add('is-valid');

    }
       
       

}
