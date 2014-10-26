<?php
	class pickup{
	
		public function addPickUp($serviceAddress, $city, $state, $pickup_qty, $pickup_type, $comment, $cat_type){
			$db = phpdb::GetInstance();
			$result = $db->insertRecords("tk_pickdetails", array(
				'serviceAddress' => $db->sanitizeData($serviceAddress), 
				'city' => $db->sanitizeData($city),
				'state' => $db->sanitizeData($state),
				'pickup_qty' => $db->sanitizeData($pickup_qty),
				'pickup_type' => $db->sanitizeData($pickup_type),
				'comment' => $db->sanitizeData($comment),
				'cat_type' => $db->sanitizeData($cat_type)
			 ));
			if($result){
				$id = $db->lastInsertID();
				return array(true, $id);
			}else{
				return array(false,0);
			}
		}
	}
?>