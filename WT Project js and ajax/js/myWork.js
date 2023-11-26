function myWorkValidation()
{
    var designation = document.getElementById("designation").value;
    var year1 = document.getElementById("year1").value;
    var year2 = document.getElementById("year2").value;
    var comp_name = document.getElementById("comp_name").value;

    if (designation === "" || year1 === "" || year2 === "" || comp_name === "") {
        alert("All fields must be filled out.");
        return false;
    }

    if (/[^a-zA-Z\s]/.test(designation)) 
    {
        alert("Designation should only contain letters and spaces!");
        return false;
    }

    if (year1 > year2) 
    {
        alert("Please make sure the start year is less than the end year.");
        return false;
    }

    return true;
}