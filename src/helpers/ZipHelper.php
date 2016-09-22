<?php

namespace walkskyer\util\helpers;

/**
 * Class ZipHelper
 * @package walkskyer\util\helpers
 */
class ZipHelper{

    /**
     * add file or dir to a zip file
     * @param $path
     * @param \ZipArchive $zip ZipArchive file
     * @param string $root
     */
    public static function addFileToZip($path,  &$zip, $root = ''){
        !$root && $root = $path;

        $dirsStack = [$path];
        while ($path = array_pop($dirsStack)) {
            $handler = opendir($path);
            while (($filename = readdir($handler)) !== false) {
                if ($filename != "." && $filename != "..") {
                    if (is_dir($path . "/" . $filename)) {
                        array_push($dirsStack, $path . "/" . $filename);
                    } else {
                        $pathFilename = $path . "/" . $filename;
                        $zip->addFile($pathFilename, str_replace($root . '/', '', $pathFilename));
                    }
                }
            }
            @closedir($path);
        }
    }
}