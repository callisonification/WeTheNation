<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Curl_model extends CI_Model {
	
	function get_gt_bills($inc) {
		
		//makes API call to Govtrack bill data API
		$offset = ($inc * 1000);
		$result = $this->curl->simple_get('http://www.govtrack.us/api/v1/bill/?limit=1000&congress=112&offset='.$offset.'&order_by=current_status_date');
		$xml = json_decode($result, TRUE);
		
		//loops thru results after they have been coverted to an array		
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
			
			//create array and assign variable results to fields in database
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
			
			//insert records into database
			$this->db->insert('bills_master', $data);
			
		}//end foreach loop
		
	}//end get Govtrack bills function
	
	function get_gt_members($inc) {
		
		//makes API call to Govtrack persons API and returns results
		$offset = ($inc * 1000);
		$result = $this->curl->simple_get('http://www.govtrack.us/api/v1/person/?limit=1000&offset='.$offset);
		$xml = json_decode($result, TRUE);
		
		//loop thru results after they have been converted to an XML array		
		foreach($xml['objects'] as $obj){
			
			//check the make sure results has a current congress number : numbers start at 110
			//so if the bill is an older record then it wont be stored into database
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
				
				//assign variables values to database fields
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
				
				//insert records into members table
				$this->db->insert('members_master', $data);

			}//end conditional check - makes sure member has a congress number (current)
			
		}//end foreach loop
		
	}//end get Govtrack Members function
	
	function get_oc_bills($inc) {
		
		//makes API call to OpenCongress bill data API
		$result = $this->curl->simple_get('http://api.opencongress.org/bills?congress=112&format=json&page='.$inc);
		$xml = json_decode($result, TRUE);
		
		//loops thru results after they have been converted to an xml array				
		foreach($xml['bills'] as $obj){
						
			$billnum = $obj['bill']['number'];
			$billtype = $obj['bill']['bill_type'];
			$tfc = $obj['bill']['title_full_common'];
			$sum = $obj['bill']['summary'];
			$tc = $obj['bill']['title_common'];
			
			//check the bill type and change it accordingly to match my database
			if($billtype === 's'){
				$billtype = 'S.';	
			}elseif($billtype === 'sr'){
				$billtype = 'S.Res.';
			}elseif($billtype === 'sj'){
				$billtype = 'S.J.Res.';
			}elseif($billtype === 'sc'){
				$billtype = 'S.Con.Res.';
			}elseif($billtype === 'h'){
				$billtype = 'H.R.';	
			}elseif($billtype === 'hr'){
				$billtype = 'H.Res.';
			}elseif($billtype === 'hj'){
				$billtype = 'H.J.Res.';
			}elseif($billtype === 'hc'){
				$billtype = 'H.Con.Res.';
			}
			
//			echo '<pre>';
//			echo $billtype . $billnum;
//			echo '</pre>';
			
			//assign values from variables into an array
			$data = array(
				'title_common' => $tc,
				'title_full' => $tfc,
				'bill_summary' => $sum
			);
			
//			var_dump($data);
			
			//find the record in database by bill type and number and update record accordingly
			$this->db->where('display_num', $billtype . ' ' . $billnum);
			$this->db->update('bills_master', $data);
			
		}//end foreach
			
	}//end get_oc_bills function
		
	function get_oc_members($inc) {

		$this->db->select('person_id, phone');
		$q = $this->db->get('members_master');
		
		foreach($q->result() as $row){
						
				$result = $this->curl->simple_get('http://api.opencongress.org/people?person_id='.$row->person_id.'&format=json');
				$xml = json_decode($result, TRUE);
				
				echo '<pre>';
				echo $row->person_id;
				echo '</pre>';				
				
			
			foreach($xml['people'] as $obj){
									
				$pid = $obj['person']['person_id'];
				$phone = $obj['person']['phone'];
				$wpp = $obj['person']['with_party_percentage'];
				$abp = $obj['person']['person_stats']['abstains_percentage'];
				$vmw = $obj['person']['person_stats']['votes_most_often_with_id'];
				$vlw = $obj['person']['person_stats']['votes_least_often_with_id'];
				$tsv = $obj['person']['total_session_votes'];
				
				$data = array(
					'with_party_percentage' => round($wpp),
					'abstains_percentage' => round($abp),
					'votes_most_with' => $vmw,
					'votes_least_with' => $vlw,
					'total_session_votes' => $tsv,
					'phone' => $phone
				);
				
				$this->db->where('person_id', $pid);
				$this->db->update('members_master', $data);
											
			}//end inner foreach loop
			
		}//end outer foreach loop
			
	}//end get_oc_members_d function	
		
}