function validateVendorForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var tradel = document.getElementById("tradel").value;
    var pass = document.getElementById("pass").value;
    var cpass = document.getElementById("cpass").value;
    var verror = document.getElementById("verror");
    var address = document.getElementById("address");
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);

    if (name == "" || email == "" || phone == "" || pass == "" || cpass == "" || birthday == "" || address == "") {
        verror.innerHTML = "ALL fields required js";
        return false;
    }
    else if (!isNaN(name)) {
        verror.innerHTML = "User Name should be start with string";
        return false;
    }
    else if (name.length < 1) {
        verror.innerHTML = "Company Name should be at least one character long";
        return false;
    }
    else if (phone.length > 11) {
        verror.innerHTML = "Invalid Phone Number";
        return false;
    }
    else if (!res) {
        verror.innerHTML = "Email format is not correct";
        return false;
    }
    else if (pass.length < 6) {
        verror.innerHTML = "Password should be 6 characters long";
        return false;
    }
    else if (pass.value != cpass.value) {
        verror.innerHTML = "Password should be same";
        return false;
    }

}