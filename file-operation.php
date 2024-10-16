<?php

$newName = "Bil Gets";
file_put_contents("./data.txt",$newName."<br />",FILE_APPEND);

$data = file_get_contents("./data.txt");

echo nl2br($data);