<?php

class FileUploat
{
    function  uploatFile($filename, $filetmp, $filesize)
    {
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($filename);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



        if (file_exists($target_file)) {
            $uploadOk = 0;
        }

        if ($filesize > 500000) {
            $uploadOk = 0;
        }

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {

            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";

        } else {
            if (move_uploaded_file($filetmp, $target_file)) {
                echo "The file ". htmlspecialchars( basename( $filename)). " je uplounuty.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        return $uploadOk;
    }
}