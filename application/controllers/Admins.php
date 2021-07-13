<?php 

    class Admins extends CI_Controller {

		public function login(){

			$email 	  = $this->input->post('email');
			$password = $this->input->post('password');
			//$password = md5($this->input->post('password'));

			
			//$user_id = $this->admin_model->login($email, $password);
			$userData = $this->admin_model->login($email, $password);

			//print_r($userData);

			if($userData){
				//create session
				$admin_data = array(
					'admin_id' => $userData['id'],
					'accountType' => $userData['accountType'],
					'email' => $email,
					'logged_in' => true,
					'uData' => $userData
				);

				$this->session->set_userdata($admin_data);

				//redirect to dashboard

				redirect('dashboard');
			}
			else {
				redirect('/'); 
			}
		}

		public function logout(){
			$this->session->unset_userdata('admin_id');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('logged_in');

			$this->session->set_flashdata('admin_loggedout','You have been successfully logged out!');
			redirect('/');
		}

		public function updateProfile(){ 
			//$class = $this->input->post('classId');
			$this->admin_model->updateProfile();
			redirect('profile'); 
		}	
		
		public function addUser(){ 
			//header('Content-Type: application/json');
			$this->admin_model->addUser(); 
			//echo json_encode($result); 
			redirect('createUser');
		}
		
		public function addCollection(){ 
			header('Content-Type: application/json');
			$result = $this->admin_model->addCollection(); 
			echo json_encode($result);  
		}
		
		public function updateUser(){
			header('Content-Type: application/json');
			$result = $this->admin_model->updateUser(); 
			echo json_encode($result);  
		}
		
		public function delUserById(){
			header('Content-Type: application/json');
			$result = $this->admin_model->delUserByIdAjax();
			echo json_encode($result);
		}
		
		public function toggleScanner(){
			header('Content-Type: application/json');
			$result = $this->admin_model->toggleScanner();
			echo json_encode($result);	
		}

    }

?>