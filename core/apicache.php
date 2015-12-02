<?php
function getJson($url) {
// cache files are created like cache/abcdef123456...
    $cacheFile = $_SERVER["DOCUMENT_ROOT"] .'/core/cache/'. md5($url) . '.json';
    if (file_exists($cacheFile)) {
        $fh = fopen($cacheFile, 'r');
        $cacheTime = trim(fgets($fh));
        // if data was cached recently, return cached data
        if ($cacheTime > strtotime('-60 minutes')) {
            return fread($fh, filesize($cacheFile));
        }

        // else delete cache file
        fclose($fh);
        unlink($cacheFile);
    }
    $json = file_get_contents($url);
    $fh = fopen($cacheFile, 'w');
    fwrite($fh, time() . "\n");
    fwrite($fh, $json);
    fclose($fh);

    return $json;
}