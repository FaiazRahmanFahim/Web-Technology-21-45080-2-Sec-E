function myEducationValidation()
{
    let degreeName = document.getElementById("deg_name").value;
    let year = document.getElementById("year").value;
    let instName = document.getElementById("inst_name").value;

    // Perform validation checks
    if (degreeName == "" || year == "" || instName == "") 
    {
        alert("All fields must be filled out.");
        return false;
    }

    if (/[^a-zA-Z\s]/.test(degreeName)) 
    {
        alert("Degree Name only contain letters and spaces!");
        return false;
    }

    if (!(year >= 1900 && year <= 2025)) 
    {
        alert("Invalid year.");
        return false;
    }

    if (/[^a-zA-Z\s]/.test(instName)) 
    {
        alert("Institution Name only contain letters and spaces!");
        return false;
    }

    //alert("Update successful.");
    return true;
}
