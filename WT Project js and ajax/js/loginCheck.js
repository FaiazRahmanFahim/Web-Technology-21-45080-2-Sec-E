function loginValidation() 
{
    var username = document.getElementById("user_name").value;
    var password = document.getElementById("pass").value;

    // Empty Check.
    if (username == "" || password == "") 
    {
        alert("Username and password can not be empty!");
        return false;
    }

    alert("Log In successful.");
    return true;
}
