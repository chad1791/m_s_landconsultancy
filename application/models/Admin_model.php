<?php 

    class Admin_model extends CI_Model{
        
        public function __construct(){
            $this->load->database();
        }

		public function login($email, $password){

			//echo $email;
			//echo $password;

			$this->db->where('email',$email);
			$this->db->where('password',$password);

			$result = $this->db->get('auth');
			
			if($result->num_rows() == 1){
				if($result->row(0)->status == '1'){
					//echo $result->row(0)->accountType;
					return array('id'=>$result->row(0)->id, 'accountType'=>$result->row(0)->accountType);
				}
				else{
					$this->session->set_flashdata('acc_inactive','Your account is inactive, please contact your Web Master for account activation!');
					return 0;
				}
			}
			else{
				$this->session->set_flashdata('unk_account','Incorrect username or password, please try to login again!');
				return 0;
			}
		}   
		
		public function getAllPackages(){

			$allPackages = array();
			// Get cURL resource
			$curl = curl_init();
			// Set some options - we are passing in a useragent too here
			curl_setopt_array($curl, array(
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => 'https://deliveries-app.herokuapp.com/getAllPackages',
				//CURLOPT_USERAGENT => 'Codular Sample cURL Request'
			));
			// Send the request & save response to $resp
			$resp = curl_exec($curl);
			// Close request to clear up some resources
			curl_close($curl);

			$resp = json_decode($resp, true); 

			//echo '<pre>';
			//print_r($resp);
			//echo '</pre>';

			if(count($resp) > 0){
				$allPackages['allPackages'] = $resp;
			}
			
			return $allPackages;
		}	
		
		public function getProfile($id){

			$profile = array();

			$this->db->select('a.id, a.email, a.status, a.accountType, p.first, p.last, p.dob, p.phone, p.auth_id');
			$this->db->from('auth as a');
			$this->db->join('profile as p', 'a.email=p.email', 'left');
			$this->db->where('a.id', $id);
			$result = $this->db->get();			

			if($result->num_rows() >= 1){
				$profile['profile'] = $result->result_array();
			}

			return $profile;			
			
		}

		public function getAllProfiles(){

			$allProfiles = array();

			$this->db->select('a.id, a.email, a.status, a.accountType, p.first, p.last, p.dob, p.phone, p.auth_id');
			$this->db->from('auth as a');
			$this->db->join('profile as p', 'a.email=p.email', 'left');
			//$this->db->where('a.id', $id);
			$result = $this->db->get();			

			if($result->num_rows() >= 1){
				$allProfiles['allProfiles'] = $result->result_array();
			}

			return $allProfiles;			
			
		}		

		public function getAllUsers(){

			$allUsers = array();

			$this->db->select('id, email, status, accountType');
			$result = $this->db->get_where('auth', array('deleted'=>'0'));				

			if($result->num_rows() >= 1){
				$allUsers['allUsers'] = $result->result_array();
			}

			return $allUsers;			
		}

		public function updateProfile(){

			$data = array(
				'email' 		=> $this->input->post('email'),
				'first' 		=> $this->input->post('first'),
				'last' 			=> $this->input->post('last'),
				'dob' 			=> $this->input->post('dob'),
				'phone'   		=> $this->input->post('phone'),
				'auth_id'		=> $this->input->post('auth_id')
			);
			
			$updt_str = '';
		    foreach ($data as $k => $v) {
		        $updt_str = $updt_str.' '.$k.' = "'.$v.'",';
		    }

		    $updt_str = substr_replace($updt_str,";", -1);

		    $this->db->query($this->db->insert_string('profile', $data).' ON DUPLICATE KEY UPDATE '.$updt_str);

		}	
		
		public function addUser(){

			$data = array(
				'email'			=> $this->input->post('email'),
				'password'		=> $this->input->post('password'),
				'accountType'	=> $this->input->post('type'),
				'status'		=> '1'
			);

			$this->db->insert('auth', $data);
			$this->session->set_flashdata('studentAdded_success','Account was successfully created!');

			return $this->db->insert_id();
		}
		
		public function addCollection(){

			$timezone = new \DateTimeZone('America/Belize');
	        $date = new \DateTime('@' . time(), $timezone);
	        $date->setTimezone($timezone);
	        $today = $date->format('Y-m-d H:i:s');

			echo 'package id:';
			echo $this->input->post('id');


			$data = array(
				'package_id'	=> $this->input->post('id'),
				'sender'		=> $this->input->post('sender'),
				'fromAdd'		=> $this->input->post('fromAdd'),
				'receiver'		=> $this->input->post('receiver'),
				'toAdd'			=> $this->input->post('toAdd'),
				'phone'			=> $this->input->post('phone'),
				'noOfPacks'		=> $this->input->post('noOfPacks'),
				'amount_paid'	=> $this->input->post('amount_paid'),
				'collector_id'	=> $this->input->post('collector_id'),	
				's_Token'		=> $this->input->post('s_Token'),
				'r_Token'		=> $this->input->post('r_Token'),
				'qrcode'		=> $this->input->post('qrcode'),
				'date'          => $today,		
				'deleted'		=> '0'
			);

			$this->db->insert('collections', $data);

			return $this->db->insert_id();
		}
		
		public function getAllCollections(){

			$allCollections = array();

			$result = $this->db->get_where('collections',array('deleted'=>'0')); 			

			if($result->num_rows() >= 1){
				$allCollections['allCollections'] = $result->result_array();
			}

			return $allCollections;			
		}	
		
		public function updateUser(){

			$data = array(
				'id'	 		=> $this->input->post('id'),
				'email'  		=> $this->input->post('email'),
				'status' 		=> $this->input->post('status'),
				'accountType'	=> $this->input->post('accountType')
			);
			
			$updt_str = '';
		    foreach ($data as $k => $v) {
		        $updt_str = $updt_str.' '.$k.' = "'.$v.'",';
		    }

		    $updt_str = substr_replace($updt_str,";", -1);
		    $result = $this->db->query($this->db->insert_string('auth', $data).' ON DUPLICATE KEY UPDATE '.$updt_str);
			
			return $result;

		}

		public function delUserByIdAjax(){

			$id = $this->input->post('id');

			$data = array(
				'deleted' => '1'
			);
				
			$this->db->where('id', $id);
			$deleted = $this->db->update('auth', $data);

			return $deleted;			
		}

		public function getScannerTypes(){

			$scannerType = array();

			$result = $this->db->get_where('scanners',array('status'=>'1')); 			

			if($result->num_rows() >= 1){
				$scannerType['scannerType'] = $result->result_array();
			}

			return $scannerType;				
		}

		public function toggleScanner(){

			//deactivate all scanners first, 

			$d_data = array(
				'status' => '0',
			);

			$this->db->where('id>', '0');
			$deactivate = $this->db->update('scanners', $d_data);

			/// run the toggle scanner code...

			if($deactivate){

				$scanner = array();

				$id = $this->input->post('id');

				$data = array(
					'status' => '1'
				);
					
				$this->db->where('id', $id);
				$scanner = $this->db->update('scanners', $data);
	
				return $scanner;

			}
			else{
				return 0;
			}

		}

    }
?>