<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "Database.php";

$dbObject = new Database;

$result = $dbObject->execQuery("
	Select doctors.id, doctors.name as doc_name, hospitals.id, hospitals.name, max_time.repeatCount as repeatCount from doctors 
		inner join (Select *, COUNT( practices.id ) AS repeatCount from practices Group by practices.doctor_id, practices.hospital_id ) as max_time on (max_time.doctor_id = doctors.id )
		inner join hospitals on hospitals.id = max_time.hospital_id
		where max_time.repeatCount > 1
		
		
	");

$arr = array();
while ($row = $result->fetch_assoc()) {
        
        $arr[] = ( $row);
    }

include "Views/doctor_hosp_mulvisit_view.php";
