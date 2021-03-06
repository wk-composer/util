<?php
/**
 * Zip test.
 * User: walkskyer
 * Date: 2016/9/21
 * Time: 11:04
 */

use walkskyer\util\helpers\ZipHelper;

use PHPUnit\Framework\TestCase;


class HelperZipTest extends TestCase{

    public function testAddFileToZip(){
        $path = __DIR__.'/test_env/zip/test_files';

        $this->assertTrue(is_dir($path),'Target path:'.$path."\nCurrent Path:".__DIR__);

        $file =  __DIR__.'/test_env/zip/zip.zip';
        $zip = new \ZipArchive();
        if ($zip->open($file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === TRUE) {
            if (file_exists($path)) {
                ZipHelper::addFileToZip($path, $zip);
            }

            $zip->close();
        }
        $this->assertTrue(is_file($file));
    }
}
