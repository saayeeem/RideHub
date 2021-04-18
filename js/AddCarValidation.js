function validateUserForm() {
    var name = document.getElementById("carname").value;
    var model = document.getElementById("carm").value;
    var SitCount = document.getElementById("scount").value;
    var uploadcar = document.getElementById("carphptp").value;
    
    if (name == "" || model == "" || SitCount == "" || uploadcar =="") {
        error.innerHTML = "All fields are required js ";
        return false;
    }
    else if (!isNaN(name)) {
        error.innerHTML = "User Name should be string";
        return false;
    }
    else if (name.length < 7) {
        error.innerHTML = "car Name should be 7 characters long";
        return false;
    }
    else if (model < 8) {
        error.innerHTML = "Invalid model Number";
        return false;

    }
    
    else if (SitCount.length < 5) {
        error.innerHTML = "Password should be 5 characters long";
        return false;
    }

}