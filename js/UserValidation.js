function validateUserForm() {
    var name = document.getElementById("name").value;
    var pass = document.getElementById("pass").value;
    var cpass = document.getElementById("cpass").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var error = document.getElementById("error");
    var birthday = document.getElementById("birthday");
    var address = document.getElementById("address");
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    if (name == "" ||email == "" || phone == "" || pass == "" || cpass == "" ||  birthday == ""||address== "") {
        error.innerHTML = "ALL fields required js";
        return false;
    }
    else if (name.length < 5) {
    error.innerHTML = "User Name should be 5 characters long";
        return false;
    }
   else if(!res)
  {
    error.innerHTML="Email format is not correct";
    return false; 
  }
    else if (pass.length < 8) {
    error.innerHTML = "Password should be 8 characters long";
    return false;
}
else if (pass.value != cpass.value) {
error.innerHTML = "Password should be same";
return false;
}

}

function validateLoginForm() {
    var pass = document.getElementById("pass").value;
    var email = document.getElementById("email").value;
    var error = document.getElementById("error");
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    if (email == "" || pass == "") {
        error.innerHTML = "ALL fields required js";
        return false;
    }
   else if(!res)
  {
    error.innerHTML="Email format is not correct";
    return false; 
  }
    else if (pass.length < 8) {
    error.innerHTML = "Password should be 8 characters long";
    return false;
}

}