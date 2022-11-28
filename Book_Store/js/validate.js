function validate() {
    let email = document.getElementById("Email");
    let password = document.getElementById("Password");
    let inputValid = false;

    if (email.length == 0) {
        document.getElementById("emailValid").innerHTML = "An email must be entered.";
        document.getElementById("emailValid").style.color = "red";
        if (password.length == 0) {
            document.getElementById("passwordValid").innerHTML = "A password must be entered.";
            document.getElementById("passwordValid").style.color = "red";
        }
        else {
            document.getElementById("passwordValid").innerHTML = "A password has been entered.";
            document.getElementById("passwordValid").style.color = "green";
        }
    }
    else {
        let inputVaild = true;
        document.getElementById("emailValid").innerHTML = "An email has been entered.";
        document.getElementById("emailValid").style.color = "green";
    }

    if (inputValid = true) {
        alert("An email and password have been entered.");
    }
    else {
        alert("Either an email or password have not been entered.");
    }

    return inputValid;
}