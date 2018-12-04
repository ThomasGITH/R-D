<?php

$file = 'school3.json';
if(file_exists($file)){
    $filedata = file_get_contents($file);
    $objson = json_decode($filedata, true);

    $school = $_POST["school"];
    $category = $_POST["category"];
    $nr_students = $_POST["nr_students"];
    $course1 = $_POST["course1"];
    $course2 = $_POST["course2"];

    $objson["school"][$school]["category"] = $category;
    $objson["school"][$school]["nr_students"] = $nr_students;
    $objson["school"][$school]["courses"]["Course1"] = $course1;
    $objson["school"][$school]["courses"]["Course2"] = $course2;

    echo"<hr><code><pre>";
    print_r($objson);
    echo"</pre></code></hr>";
}
else echo $file .' not exists';