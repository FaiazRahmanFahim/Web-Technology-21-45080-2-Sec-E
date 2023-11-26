function myJobSearchValidation()
{
    let category = document.getElementById("category").value;
    let type = document.getElementById("type").value;
    let salary = document.getElementById("salary").value;
    let experience = document.getElementById("experience").value;
    let location = document.getElementById("location").value;
    console.log("Validation function called");

    let info = 'category=' + category +
        '&type=' + type +
        '&salary=' + salary +
        '&experience=' + experience +
        '&location=' + location; 
     
    console.log("Sending AJAX request...");
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() 
    {
        console.log("Ready state: " + xhttp.readyState + ", Status: " + xhttp.status);
        if (xhttp.readyState == 4 && xhttp.status == 200) 
        {
            console.log("Response received");    
            document.getElementById("searchResults").innerHTML = xhttp.responseText;
        }
    };

    xhttp.open("POST", "../../controller/myJobSearchControl.php", true);
    xhttp.send(info);

}