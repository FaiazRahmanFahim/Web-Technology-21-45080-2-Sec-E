function sekregValidation() 
{

    var name = document.getElementById("sek_name").value;
    var username = document.getElementById("user_name").value;
    var password = document.getElementById("sek_pass").value;
    var confirmPassword = document.getElementById("scp").value;
    var email = document.getElementById("email").value;

    //Empty Check.
    if (name == "" || username == "" || password == "" || confirmPassword == "" || email == "") 
    {
        alert("All fields must be filled out.");
        return false;
    }

    //Name Check
    if (/[^a-zA-Z\s]/.test(name)) 
    {
        alert("Name should only contain letters and spaces!");
        return false;
    }
    else if (name.split(" ").length<2) 
    {
        alert("Name must contain at least two words!")
        return false;
    }

    //Username Check
    if (username.length > 8) 
    {
        alert("Username maximum 8 characters.");
        return false;
    }
    
    //Password Check
    if (password.length < 8) 
    {
        alert("New Password must be at least 8 characters long");
        return false;
    }
    else if (!/[A-Z]/.test(password) || !/[a-z]/.test(password)) 
    {
        alert("Password must contain at least one uppercase and one lowercase letter!");
        return false;
    }
    else if (!/[! @ # $ % & *]/.test(password)) 
    {
        alert("New Password must contain at least one special character");
        return false;
    }
    if (password !== confirmPassword) 
    {
        alert("Password and Confirm Password must be same!");
        return false;
    }

    //Email Check
    if (!email.includes('@') || !email.includes('.')) 
    {
        alert("Please enter a valid email address");
        return false;
    }

    alert("Seeker Registration Successfull.");
    return true;
   
}


