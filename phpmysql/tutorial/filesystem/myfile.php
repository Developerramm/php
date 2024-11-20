<?php

echo "<h4>File system in PHP </h4>";

$file =  "readme.txt";

// echo filesize($file);
// echo filetype($file);

// echo filetype("config");

// echo realpath($file);

echo "<pre>";
print_r(pathinfo($file));
echo "</pre>"
// if(file_exists($file)){
//     // echo readfile($file);

//     // copy($file,"newfile.txt");

//     // rename("newfile.txt",'oldfile.txt');

//     unlink('oldfile.txt');
// }else{
//     echo "File does not exist <br>";
// }

// if(file_exists("config")){
//     echo "Folder already exist <br>";
// }else{
//     mkdir("config");
// }

// if(file_exists("config")){
//     rmdir("config");
//     echo "Folder deleted successfully";
// }else{
//     mkdir("config");
// }

?>