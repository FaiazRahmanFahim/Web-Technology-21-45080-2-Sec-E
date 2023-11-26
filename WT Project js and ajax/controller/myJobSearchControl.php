<?php

    include_once("../model/userModel.php");

    $category = isset($_POST['category']) ? $_POST['category'] : '';
    $type = isset($_POST['type']) ? $_POST['type'] : '';
    $salary = isset($_POST['salary']) ? $_POST['salary'] : '';
    $experience = isset($_POST['experience']) ? $_POST['experience'] : '';
    $location = isset($_POST['location']) ? $_POST['location'] : '';

    
    $searchResults = myJobSearchDB($category, $type, $salary, $experience, $location);

    
    $searchResults = myJobSearchDB($category, $type, $salary, $experience, $location);

    if (!empty($searchResults)) 
    {
        echo '<table border="1" width="100%" style="border-collapse: collapse;">
                <tr>
                    <th style="text-align: left;">Company Name</th>
                    <th style="text-align: left;">Title</th>
                    <th style="text-align: left;">Type</th>
                    <th style="text-align: left;">Category</th>
                    <th style="text-align: left;">Wrok Experience</th>
                    <th style="text-align: left;">Salary</th>
                    <th style="text-align: left;">Location</th>
                </tr>';
        foreach ($searchResults as $row) 
        {
            echo '<tr>
                    <td>' . $row["comp_name"] . '</td>
                    <td>' . $row["title"] . '</td>
                    <td>' . $row["type"] . '</td>
                    <td>' . $row["category"] . '</td>
                    <td>' . $row["experience"] . '</td>
                    <td>' . $row["salary"] . '</td>
                    <td>' . $row["location"] . '</td>
                  </tr>';
        }
        echo '</table>';
    } 
    else 
    {
        echo "No matching Jobs found.";
    }
?>
