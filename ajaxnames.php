<?php

try{
    $servername="localhost";
    $user="root";
    $password="";
    $database="project1";
    
    // Create connection
    $conn = new mysqli($servername, $user, $password, $database);
    }
    catch(Exception $e) {
        echo $e->errorMessage();
    }
        $sql="Select firstname from data";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($result)){
            $a[] = $row['firstname'];

        }

$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
	$q = strtolower($q);
	$len = strlen($q);
	foreach ($a as $name) {
		if (stristr($q, substr($name, 0, $len))) {
			if ($hint === "") {
				$hint = $name;
			}
			else{
				$hint .= ", $name";
            }
		}
	}
}
echo $hint === "" ? "no suggestion" : $hint;

 ?>