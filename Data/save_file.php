<?php
    $jsonOutput = $_POST['jsonOutput'];
    $subject = $_POST['subject'];
    $chapter = $_POST['chapter'];
    $level = $_POST['level'];
    $filename = $_POST['filename'];

    if (file_exists($filename) && !isset($_POST['overwrite'])) {
        echo "file_exists";
        exit;
    }

    file_put_contents($filename, $jsonOutput);
    echo "File saved successfully!";
?>