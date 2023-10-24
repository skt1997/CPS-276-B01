<?php

class Directories {
    public function createDirAndFile($dirName, $content) {
        $path = "./directories/" . $dirName;

        if (is_dir($path)) {
            return "A directory already exists with that name.";
        }

        if (mkdir($path, 0777)) {
            $filePath = $path . "/readme.txt";
            if (file_put_contents($filePath, $content)) {
                return true;
            } else {
                return "Error creating the file.";
            }
        } else {
            return "Error creating the directory.";
        }
    }
}

?>

