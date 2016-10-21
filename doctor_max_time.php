<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "Database.php";

$dbObject = new Database;

$result = $dbObject->execQuery("
	Select max_time.doctor_id  , doctors.name as doc_name, hospitals.id, hospitals.name, max_time.timeSum as time_max from doctors 
		inner join (Select *, SEC_TO_TIME( SUM( TIME_TO_SEC(practices.end_time) - TIME_TO_SEC(practices.start_time)  ) ) AS timeSum from practices Group by practices.doctor_id, practices.hospital_id ) as max_time on (max_time.doctor_id = doctors.id )
		inner join hospitals on hospitals.id = max_time.hospital_id
		order by doctor_id 
		
		
	");

$arr = array();
while ($row = $result->fetch_assoc()) {
		if(isset($arr[$row['doctor_id']]))
		{
			if($arr[$row['doctor_id']]['time_max'] < $row['time_max'])
    			$arr[$row['doctor_id']] = ( $row);

		}	
        else
    	{
    		$arr[$row['doctor_id']] = ( $row);
    	}	
    		
    }
/*echo "<pre>";
print_r($arr); 
exit;*/   

include "Views/doctor_max_time_view.php";
