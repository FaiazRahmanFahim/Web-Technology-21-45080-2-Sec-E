function mySkillsValidation()
{
    let skill_name = document.getElementById("skill_name").value;
    let skill_percent = document.getElementById("skill_percent").value;


    // Perform validation checks
    if (skill_name == "" || skill_percent == "") 
    {
        alert("All fields must be filled out.");
        return false;
    }

    // Validate skill_percent
    let percentFloat = parseFloat(skill_percent);

    if (isNaN(percentFloat) || percentFloat < 0 || percentFloat > 100) {
        alert("Please enter a valid percentage between 0 and 100 for skill percent.");
        return false;
    }

    //alert("Update successful.");
    return true;
}