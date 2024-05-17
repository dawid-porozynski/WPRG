<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    
    if ($_FILES['file']['error'] == UPLOAD_ERR_OK && is_uploaded_file($_FILES['file']['tmp_name'])) {
        
        $filename = $_FILES['file']['tmp_name'];
        $fileContent = file($filename, FILE_IGNORE_NEW_LINES);

        $reversedContent = array_reverse($fileContent);

        $reversedFilename = 'reversed_' . $_FILES['file']['name'];
        file_put_contents($reversedFilename, implode(PHP_EOL, $reversedContent));
  
        echo "<h2>File has been reversed successfully!</h2>";
        echo "<p><a href='$reversedFilename'>Download reversed file</a></p>";
    } else {
        echo "Error uploading the file.";
    }
} else {
    echo "Invalid request.";
}
?>
