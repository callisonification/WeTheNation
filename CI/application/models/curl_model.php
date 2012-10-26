<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Curl_model extends CI_Model {
	
	function get_gt_bills($inc) {
		
		$offset = ($inc * 1000);
		$result = $this->curl->simple_get('http://www.govtrack.us/api/v1/bill/?limit=1000&congress=112&offset='.$offset.'&order_by=current_status_date');
		$xml = json_decode($result, true);
		
		//echo $result;
		
		foreach($xml['objects'] as $obj){
			
			$br = $obj['bill_resolution_type'];
			$bt = $obj['bill_type'];
			$btl = $obj['bill_type_label'];
			$con = $obj['congress'];
			$cs = $obj['current_status'];
			$csd = $obj['current_status_date'];
			$csds = $obj['current_status_description'];
			$csl = $obj['current_status_label'];
			$dn = $obj['display_number'];
			$idt = $obj['introduced_date'];
			$alive = $obj['is_alive'];
			$current = $obj['is_current'];
			$num = $obj['number'];
			
			$data = array(
				'bill_res_type' => $br,
				'bill_type' => $bt,
				'bill_type_label' => $btl,
				'congress_num' => $con,
				'current_status' => $cs,
				'status_date' => $csd,
				'status_detail' => $csds,
				'status_label' => $csl,
				'display_num' => $dn,
				'intro_date' => $idt,
				'alive' => $alive,
				'current' => $current,
				'bill_num' => $num
			);
			
			$this->db->insert('gt_bills', $data);
		}
		
	}//end get Govtrack bills function
	
	function get_gt_members($inc) {
		
		$offset = ($inc * 1000);
		$result = $this->curl->simple_get('http://www.govtrack.us/api/v1/person/?limit=1000&offset='.$offset);
		$xml = json_decode($result, true);
				
		foreach($xml['objects'] as $obj){
			
			if($obj['current_role']['congress_numbers'][0]){
				
				$bid = $obj['bioguideid'];
				$fn = $obj['firstname'];
				$mn = $obj['middlename'];
				$ln = $obj['lastname'];
				$dn = $obj['name']; //provides members full name with party and district info
				$con = $obj['current_role']['congress_numbers'][0];
				$ds = $obj['current_role']['description'];
				$dis = $obj['current_role']['district'];
				$par = $obj['current_role']['party'];
				$rt = $obj['current_role']['role_type_label'];
				$state = $obj['current_role']['state'];
				$site = $obj['current_role']['website'];
				$tw = $obj['twitterid'];
				$yt = $obj['youtubeid'];
				
				$data = array(
					'bioguide_id' => $bid,
					'firstname' => $fn,
					'middlename' => $mn,
					'lastname' => $ln,
					'display_name' => $dn,
					'congress_num' => $con,
					'description' => $ds,
					'district' => $dis,
					'party' => $par,
					'role_type' => $rt,
					'state' => $state,
					'website' => $site,
					'twitter_id' => $tw,
					'youtube_id' => $yt
				);
				
				$this->db->insert('members_master', $data);

			}//end conditional check - makes sure member has a congress number (current)
			
		}//end foreach loop
		
	}//end get Govtrack Members function
		
}