
var btnnext = document.getElementById('btn-next');
var btnprev = document.getElementById('btnprev');

var txtemail = document.getElementById('txtemail');
var txtpass = document.getElementById('txtpass');
var txtpassagn = document.getElementById('txtpassagn');


btnnext.addEventListener("click", nextbtn);
btnprev.addEventListener("click", prevbtn);

function validation(){
   
}
function nextbtn() {
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
     if (txtpass.value != txtpassagn.value) {
        txtpassagn.classList.add('is-invalid');
        return false;
    }else{
         txtpassagn.classList.remove('is-invalid');
          txtpass.classList.add('is-valid');

    } 

  document.getElementById('single-form-1').className = "multisteps-form__panel p-4 rounded bg-white";
  document.getElementById('btnuserinfo').className = "btn multisteps-form__progress-btn";
  document.getElementById('single-form-next-prev').className = "multisteps-form__panel p-4 rounded bg-white js-active";
  document.getElementById('btnabout').className = "btn multisteps-form__progress-btn js-active";
}
function prevbtn() {
  document.getElementById('single-form-next-prev').className = "multisteps-form__panel p-4 rounded bg-white";
  document.getElementById('btnabout').className = "btn multisteps-form__progress-btn";
  document.getElementById('single-form-1').className = "multisteps-form__panel p-4 rounded bg-white js-active";
  document.getElementById('btnuserinfo').className = "btn multisteps-form__progress-btn js-active";
}