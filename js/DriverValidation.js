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
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    console.log("print...")
    if (name == "" || email == "" || phone == "" || pass == "" || cpass == "" || birthday == "" || address == "") {
        error.innerHTML = "ALL fields required js";
        return false;
    }
    else if (name.length < 5) {
        error.innerHTML = "Driver Name should be 5 characters long";
        return false;
    }
    else if (!res) {
        error.innerHTML = "Email format is not correct";
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