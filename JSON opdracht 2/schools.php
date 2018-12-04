<?php

$file = 'school3.json';
if(file_exists($file)){
    $filedata = file_get_contents($file);
    $objson = json_decode($filedata, true);

    $school = $_POST["school"];

    $objson["school"][$school]["category"] = $_POST["category"];
    $objson["school"][$school]["nr_students"] = $_POST["nr_students"];
    $objson["school"][$school]["courses"]["Course1"] = $_POST["course1"];
    $objson["school"][$school]["courses"]["Course2"] = $_POST["course2"];

    writeJson($objson, "my_file.json");

    echo"<hr><code><pre>";
    print_r($objson);
    echo"</pre></code></hr>";
}
else echo $file .' not exists';

function writeJson($objson, $fileOutput){
    $saveJson = json_encode($objson);
    $file = fopen($fileOutput, "w") or die ("can't open file");
    fwrite($file, $saveJson);
    fclose($file);
}
