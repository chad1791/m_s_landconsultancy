<?php 

    class User_model extends CI_Model{
        
        public function __construct(){
            $this->load->database();
        }

		public function getPopularListings(){

			$popularListings = array();

			//$this->db->select('id, email, status, accountType');
			$result = $this->db->get_where('properties', array('deleted'=>'0'));				

			if($result->num_rows() >= 1){
				$popularListings['popularListings'] = $result->result_array();
			}

			return $popularListings;			
		}

		public function getAllListings(){

			$allListings = array();
			$result = $this->db->get_where('properties', array('deleted'=>'0'));				

			if($result->num_rows() >= 1){
				$allListings['allListings'] = $result->result_array();
			}

			return $allListings;			
		}	
		
		public function getPropertyById($id){

			$propertyData = array();
			$result = $this->db->get_where('properties', array('deleted'=>'0', 'id' => $id));				

			if($result->num_rows() >= 1){
				$propertyData['propertyData'] = $result->result_array();
			}

			return $propertyData;			
		}
		
		public function getOtherPics($id){

			$otherPics = array();
			$result = $this->db->get_where('otherpics', array('deleted'=>'0', 'property_id' => $id));				

			if($result->num_rows() >= 1){
				$otherPics['otherPics'] = $result->result_array();
			}

			return $otherPics;			
		}		

		public function getServices(){

			$services = array();
			$result = $this->db->get_where('services', array('deleted'=>'0'));				

			if($result->num_rows() >= 1){
				$services['services'] = $result->result_array();
			}

			return $services;			
		}

		public function getFaqs(){

			$faqs = array();
			$result = $this->db->get_where('faqs', array('deleted'=>'0'));				

			if($result->num_rows() >= 1){
				$faqs['faqs'] = $result->result_array();
			}

			return $faqs;			
		}

		public function contactRealtor(){

			$msg = '';
			$name = '';
			
			$name = $this->input->post('name');
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$tempMsg = $this->input->post('msg');

			$msg .= 'Name: ' .$name. '\r\n';
			$msg .= 'Email: ' .$email. '\r\n';
			$msg .= 'Phone: ' . $phone . ' \r\n';
			$msg .= 'Content: ' . $tempMsg . ' \r\n';

			//$to      = 'mrngongora@yahoo.com';
			$to      = 'andreiedgar1791@gmail.com';
			$subject = 'Contact Realtor';
			$message = $msg;
			$header  = "From: M&S Land Consultancy"; 
			//$headers = 'From: webmaster@example.com'       . "\r\n" .
						 //'Reply-To: webmaster@example.com' . "\r\n" .
						 //'X-Mailer: PHP/' . phpversion();
		
			if(mail($to, $subject, $message, $header)){
				return 1;
			}
			else {
				return 0;
			}
		}

    }
?>