<?php

function export_env($from='.env', $to='.env.example')
{
    if(!file_exists($from)) {
        throw new \Exception("File [$from] not found");
    }
    $files = file($from);
    $newFile = $to;
    file_put_contents($newFile, '');
    foreach ($files as $file) {
        $key = explode("=", $file)[0];
        if (empty(trim($key))) continue;
        file_put_contents($newFile, "$key=" . PHP_EOL, FILE_APPEND);
    }
    return true;
}
