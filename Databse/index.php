<?php


// Hasin sir er json to essociative string & assoc to json... client browser**


$person = [
    "name"=> "Shaharair",
    "age"=> 24,
    "address"=> [
        "parmaner"=> "London",
        "present"=> "Dhaka"
    ]
];

$json = json_encode($person);
file_put_contents("data.txt", $json);

$data = file_get_contents("data.txt");
$daraArray = json_decode($data, true); //true na dile ata object hoye jabe mane er output object hobe.
print_r($daraArray);

echo"<br />";

echo $daraArray['name']; //Object hole tokhon $dataArray->name hoito.