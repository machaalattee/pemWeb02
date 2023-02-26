<?php
$profileArray = [
    "nama" => "Alsya",
    "semester" => 2
];
echo $profileArray['nama'] . "<br>";
echo $profileArray['semester'] . "<br>";
echo "<br>";
$profileMultiArray = [
    [
        "nama" => "Alsya",
        "semester" => 2
    ], [
        "nama" => "bintang",
        "semester" => 4
    ]
];
foreach($profileMultiArray as $profile) {
    echo $profile['nama'] . "<br>";
    echo $profile['semester'] . "<br>";
}
