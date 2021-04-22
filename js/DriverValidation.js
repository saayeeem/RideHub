function validateUserForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var dlicense = document.getElementById("dlicense").value;
    var pass = document.getElementById("pass").value;
    var cpass = document.getElementById("cpass").value;
    var birthday = document.getElementById("birthday");
    var error = document.getElementById("error");
    var address = document.getElementById("address");
    var pattem = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var pattdl = /^([0-9])*$/;
    var resem = pattem.test(email);
    var resdl = pattdl.test(dlicense);
    if (name == "" || email == "" || phone == "" || pass == "" || cpass == "" || birthday == "" || address == "") {
        error.innerHTML = "All fields are required js";
        return false;
    }
    else if (!isNaN(name)) {
        error.innerHTML = "User Name should be string";
        return false;
    }
    else if (name.length < 5) {
        error.innerHTML = "Driver Name should be 5 characters long";
        return false;
    }
    else if (phone.length == 11) {
        error.innerHTML = "Invalid Phone Number should be 11 number";
        return false;
    }
    else if (!resem) {
        error.innerHTML = "Email format is not correct";
        return false;
    }
    else if (!resdl) {
        error.innerHTML = "drivinglicense format is not correct";
        return false;
    }
    else if (pass.length < 6) {
        error.innerHTML = "Password should be 6 characters long";
        return false;
    }
    else if (pass.value != cpass.value) {
        error.innerHTML = "Password should be same";
        return false;
    }

}
