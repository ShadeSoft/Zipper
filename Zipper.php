<?php

namespace ShadeSoft\Zipper;

class Zipper {

    /**
     * @param string $dir
     * @param string $path
     * @param null|string $encoding
     * @return bool
     */
    public static function zip($dir, $path, $encoding = null) {
        if(!file_exists($dir)) {
            return false;
        }

        $files = array();
        foreach(scandir($dir) as $file) {
            if($file != '.' && $file != '..') {
                $files[] = $file;
            }
        }

        $zip = new \ZipArchive;
        $zip->open($path, \ZipArchive::CREATE);

        foreach($files as $file) {
            $name = $encoding
                ? iconv(mb_detect_encoding($file), "{$encoding}//IGNORE", $file)
                : $file;
            $zip->addFile("{$dir}/{$file}", $name);
        }

        $zip->close();

        return true;
    }
}