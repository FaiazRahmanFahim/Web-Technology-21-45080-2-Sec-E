<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = $_FILES["picture"];
    $fileName = $file["name"];
    $fileSize = $file["size"];
    $fileType = $file["type"];
    
    $allowedExtensions = array("image/jpg", "image/jpeg", "image/png");
    $maxFileSize = 4 * 1024 * 1024; // 4MB in bytes

    if (in_array($fileType, $allowedExtensions) && $fileSize <= $maxFileSize)
    {
        echo "Picture Uploaded successfully!";

    } else 
    {
        echo "Invalid picture format or size. Please upload a JPEG or PNG image that is 4MB or less.";
    }
}
?>
