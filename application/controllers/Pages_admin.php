<?php 

    class Pages_admin extends CI_Controller {
        public function page($page = 'login'){
            if(!file_exists(APPPATH.'views/admin/'.$page.'.php')){
                show_404();
            }

            $data['title'] = ucfirst($page);

            if($this->session->userdata('admin_id')){
                switch($page){
                    case 'dashboard':
                        //$this->session->unset_userdata('allPackages');
                        //$allPackages = $this->admin_model->getAllPackages();		        			
                        //$this->session->set_userdata($allPackages);
                        $this->session->unset_userdata('scannerType');
                        $scannerType = $this->admin_model->getScannerTypes();		        			
                        $this->session->set_userdata($scannerType);  
                    break;
                    case 'allPackages':
                        $this->session->unset_userdata('allPackages');
                        $allPackages = $this->admin_model->getAllPackages();		        			
                        $this->session->set_userdata($allPackages);                        
                    break;
                    case 'collections':
                        $this->session->unset_userdata('allCollections');
                        $allCollections = $this->admin_model->getAllCollections();		        			
                        $this->session->set_userdata($allCollections); 
                        
                        $this->session->unset_userdata('allProfiles');
                        $allProfiles = $this->admin_model->getAllProfiles($this->session->userdata('admin_id'));		        			
                        $this->session->set_userdata($allProfiles);                        
                    break;                    
                    case 'profile':
                        $this->session->unset_userdata('profile');
                        $profile = $this->admin_model->getProfile($this->session->userdata('admin_id'));		        			
                        $this->session->set_userdata($profile);
                    break;
                    case 'createUser':
                        $this->session->unset_userdata('allUsers');
                        $allUsers = $this->admin_model->getAllUsers();		        			
                        $this->session->set_userdata($allUsers);                         
                    break; 
                    case 'scanners':
                        $this->session->unset_userdata('scannerType');
                        $scannerType = $this->admin_model->getScannerTypes();		        			
                        $this->session->set_userdata($scannerType);                         
                    break;                                              
                    default:
                    break;
                }
            }

            $this->load->view('admin/'.$page,$data);
        }
    }


?>