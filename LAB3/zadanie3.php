<?php
function handleDirectoryOperation($path, $directory_name, $operation = 'read') {
    if (!file_exists($path) || !is_dir($path)) {
        return "Invalid path or directory does not exist.";
    }

    $full_path = rtrim($path, '/') . '/' . $directory_name;

    switch ($operation) {
        case 'read':
            if (!is_dir($full_path)) {
                return "Directory does not exist.";
            }
            $contents = scandir($full_path);
            return "Directory contents: " . implode(', ', $contents);
        
        case 'delete':
            if (!is_dir($full_path)) {
                return "Directory does not exist.";
            }
            if (!is_writable($full_path)) {
                return "Directory is not writable.";
            }
            if (count(scandir($full_path)) > 2) {
                return "Directory is not empty.";
            }
            if (!rmdir($full_path)) {
                return "Failed to delete directory.";
            }
            return "Directory deleted successfully.";
        
        case 'create':
            if (file_exists($full_path) && is_dir($full_path)) {
                return "Directory already exists.";
            }
            if (!mkdir($full_path, 0755, true)) {
                return "Failed to create directory.";
            }
            return "Directory created successfully.";
        
        default:
            return "Invalid operation.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $path = $_POST['path'];
    $directory_name = $_POST['directory_name'];
    $operation = $_POST['operation'];

    $result = handleDirectoryOperation($path, $directory_name, $operation);
    echo $result;
}
?>
