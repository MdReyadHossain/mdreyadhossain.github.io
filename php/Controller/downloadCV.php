<?php  
    $file_url = '../Model/CV of Md Reyad Hossain.pdf';  
    header('Content-Type: application/octet-stream');  
    header("Content-Transfer-Encoding: Binary");   
    header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");  
    readfile($file_url);
?>  