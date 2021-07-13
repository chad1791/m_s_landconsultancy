<?php 

    class Pages_user extends CI_Controller {
        public function page($page = 'home'){
            if(!file_exists(APPPATH.'views/user/'.$page.'.php')){
                show_404();
            }

            $data['title'] = ucfirst($page);

            //if($this->session->userdata('admin_id')){
                switch($page){
                    case 'home':
                        $this->session->unset_userdata('popularListings');
                        $popularListings = $this->user_model->getPopularListings();	 	        			
                        $this->session->set_userdata($popularListings); 
                    break;
                    case 'services':
                        $this->session->unset_userdata('services');
                        $services = $this->user_model->getServices();		        			
                        $this->session->set_userdata($services);                         
                    break; 
                    case 'properties':
                        $this->session->unset_userdata('allListings');
                        $allListings = $this->user_model->getAllListings();		        			
                        $this->session->set_userdata($allListings);                         
                    break;
                    case 'about-us':
                        $this->session->unset_userdata('popularListings');
                        $popularListings = $this->user_model->getPopularListings();	 	        			
                        $this->session->set_userdata($popularListings); 
                    break;
                    case 'faq':
                        $this->session->unset_userdata('faqs');
                        $faqs = $this->user_model->getFaqs();	 	        			
                        $this->session->set_userdata($faqs);                         
                    break;                                                                                      
                    default:
                    break;
                } 
            //}

            $this->load->view('user/'.$page,$data);
        }

        public function property($id = '0'){
            
            if($id == 0){
                $this->load->view('user/properties.php');
            }

            $this->session->unset_userdata('propertyData');
            $propertyData = $this->user_model->getPropertyById($id);	  	        			
            $this->session->set_userdata($propertyData); 

            $this->session->unset_userdata('otherPics');
            $otherPics = $this->user_model->getOtherPics($id);	  	        			
            $this->session->set_userdata($otherPics); 
            
            $this->load->view('user/property.php');
        }
    }


?>