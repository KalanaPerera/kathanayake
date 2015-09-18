<?php
class main extends CI_CONTROLLER{
    
    public function index(){
       
        $this->load->view('template/header');
        $this->load->view('staff/staffMainView');
        $this->load->view('template/footer');
        
        
        
    }
    
    
    
}
?>