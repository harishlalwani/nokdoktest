<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "Database.php";

$dbObject = new Database;

$result = $dbObject->execQuery("
	Select hospitals.id, hospitals.name, COUNT(Distinct practices.doctor_id)  as no_of_doctors from hospitals 
			left join practices on hospitals.id = practices.hospital_id
			
			Group by practices.hospital_id

	");

$arr = array();
//echo "<pre>";
while ($row = $result->fetch_assoc()) {
        $arr[] = ( $row);
    }
$heading = "Hospital List with no of Doctors " ; 
include "Views/hospital_list_view.php";
