function myChangePassValidation() 
{
    let currPass = document.getElementById("curr_pass").value;
    let newPass = document.getElementById("new_pass").value;
    let confPass = document.getElementById("conff_pass").value;

    if (currPass === "" || newPass === "" || confPass === "") {
        alert("All fields must be filled out");
        return false;
    }

    if (newPass !== confPass) {
        alert("New Password and Confirm Password do not match");
        return false;
    }

    if (newPass.length < 8) {
        alert("New Password must be at least 8 characters long");
        return false;
    }

    if (!/[A-Z]/.test(newPass)) {
        alert("New Password must contain at least one uppercase letter");
        return false;
    }

    if (!/[a-z]/.test(newPass)) {
        alert("New Password must contain at least one lowercase letter");
        return false;
    }

    if (!/\d/.test(newPass)) {
        alert("New Password must contain at least one digit");
        return false;
    }

    if (!/[! @ # $ % & *]/.test(newPass)) {
        alert("New Password must contain at least one special character");
        return false;
    }
    
    alert("Password changed successfully!");
    return true;
}
