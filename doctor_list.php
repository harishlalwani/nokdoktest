<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "Database.php";

$dbObject = new Database;

$result = $dbObject->execQuery("
	Select doctors.id, doctors.name as doc_name,  practices.*, hospitals.*  from doctors 
		inner join practices on practices.doctor_id = doctors.id 
		inner join hospitals on hospitals.id = practices.hospital_id group by practices.id order by doctors.id, practices.start_time
		
	");


$arr = array();
$r   = array();
$repeatArr = array();
while ($row = $result->fetch_assoc()) {
		
		if(isset($r[$row['doctor_id']]))
		{
			$r[$row['doctor_id']]++; 
		}	
		else
		{
			$r[$row['doctor_id']] = 0;
		}

		
		if(isset($repeatArr[$row['doctor_id']]["rep".$row['doctor_id'].$row['hospital_id']]))
		{
			$repeatArr[$row['doctor_id']]["rep".$row['doctor_id'].$row['hospital_id']] = 1;
		}	
		else
		{
			$repeatArr[$row['doctor_id']]["rep".$row['doctor_id'].$row['hospital_id']] = 0;
		}
        $arr[] = ( $row);
    }   
    /*echo "<pre>";
    print_r($arr);
    print_r($repeatArr);
    exit;*/

include "Views/doctor_list_view.php";
