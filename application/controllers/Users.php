<?php 

    class Users extends CI_Controller {

        public function contactRealtor(){ 
			header('Content-Type: application/json');
			$result = $this->user_model->contactRealtor(); 
			echo json_encode($result);  
		}

		public function getOtherPics(){ 
			$id = $this->input->post('id');
			header('Content-Type: application/json');
			$result = $this->user_model->getOtherPics($id);  
			echo json_encode($result);  
		}

    }
?>