function myProfileValidation()
{
    let name = document.getElementById("u_name").value;
    let prof_title = document.getElementById("prof_title").value;
    let gender = document.getElementById("gender").value;
    let age = document.getElementById("age").value;
    let cgpa = document.getElementById("cgpa").value;
    let expt_salary = document.getElementById("expt_salary").value;
    let work_exp = document.getElementById("work_exp").value;
    let wesite = document.getElementById("wesite").value;
    let aboutyou = document.getElementById("about_u").value
    let phn_num = document.getElementById("phn_num").value;
    let email = document.getElementById("email").value;
    let address = document.getElementById("address").value;
    let city = document.getElementById("city").value;
    let google = document.getElementById("google").value;
    let twitter = document.getElementById("twitter").value;
    let facebook = document.getElementById("facebook").value;
    let linkedin = document.getElementById("linkedin").value;

    if (name === '' || prof_title === '' || gender === '' || age === '' || cgpa === '' || expt_salary === '' ||
        work_exp === '' || wesite === '' || aboutyou === '' || phn_num === '' || email === '' || address === '' ||
        city === '') {
        alert('Please fill in all the required fields.');
        return false; // Prevent form submission
    }

    //Name check.
    if (/[^a-zA-Z\s]/.test(name)) 
    {
        alert("Name should only contain letters and spaces!");
        return false;

    }else if (name.split(" ").length<2) 
    {
        alert("Name must contain at least two words!")
        return false;
    }

    // Profession title check
    if (/[^a-zA-Z\s]/.test(prof_title)) 
    {
        alert("Profession title only contain letters and spaces!");
        return false;

    }else if (prof_title.length > 50) 
    {
        alert('Profession title should be less than 50 characters.');
        return false; 
    }

    // age check
    if (!(age >= 18 && age <= 45)) 
    {
        alert("Invalid age.");
        return false;
    }

    //CGPA check
    let cgpaFloat = parseFloat(cgpa);
    if (isNaN(cgpaFloat) || cgpaFloat < 0 || cgpaFloat > 4.0) 
    {
        alert('Please enter a valid CGPA between 0 and 4.0.');
        return false;
    }

    //salary check
    let salaryFloat = parseFloat(expt_salary);
    if (isNaN(salaryFloat) || salaryFloat < 0) 
    {
        alert('Please enter a valid positive number for expected salary.');
        return false;
    }

    //phn_num check
    // if (phn_num.length == 11) 
    // {
    //     alert('Please enter a valid phone number.');
    //     return false; 
    // }

    //Email Check
    if (!email.includes('@') || !email.includes('.')) 
    {
        alert("Please enter a valid email address");
        return false;
    }

    // social media check
    if (google.length > 0 && !isValidURL(google)) 
    {
        alert('Please enter a valid Google profile URL or leave it blank.');
        return false;
    }

    if (twitter.length > 0 && !isValidURL(twitter)) 
    {
        alert('Please enter a valid Twitter profile URL or leave it blank.');
        return false;
    }

    if (facebook.length > 0 && !isValidURL(facebook)) 
    {
        alert('Please enter a valid Facebook profile URL or leave it blank.');
        return false;
    }

    if (linkedin.length > 0 && !isValidURL(linkedin))
    {
        alert('Please enter a valid LinkedIn profile URL or leave it blank.');
        return false;
    }

   
    return true;
}

//Helper function to check if a string is a valid URL
function isValidURL(url) 
{
    try 
    {
        new URL(url);
        return true;

    } catch (error) 
    {
        return false;
    }

}