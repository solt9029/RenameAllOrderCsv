<?php 
$files = array();

foreach(glob('./*.csv') as $filename){
    if (!is_file($filename)) {
        continue;
    }
    $files[] = $filename;
}

usort($files, function($a, $b) {
    return strlen($a) - strlen($b);
});

for ($i = 0; $i < count($files); $i++) {
    rename($files[$i], './' . $i . '.csv');
}