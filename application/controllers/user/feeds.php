<?php

/*
 * kalana
 */


class feeds extends CI_CONTROLLER{
    
    
    public function index(){
        
        
         $this->load->view('template/header');
        $this->load->view('user/feeds/feeds');
        $this->load->view('template/footer');
        
        
        
        
        
        
    }
    
    
    public function feeds_by_id(){
        
        
         $this->load->view('template/header');
        $this->load->view('user/feeds/feeds_details');
        $this->load->view('template/footer');
        
        
    }
    
    
    
    
}
