<?php

/*
 * Kalana
 */

class user extends CI_CONTROLLER{
    
    
    
     public function login_page(){
        
        
        $this->load->view('template/header');
        $this->load->view('user/login');
        $this->load->view('template/footer');
        
    }
    
    public function profile_management(){
        
        
        $this->load->view('template/header');
        $this->load->view('user/profile_management');
        $this->load->view('template/footer');
        
        
        
    }
    
    
    
}