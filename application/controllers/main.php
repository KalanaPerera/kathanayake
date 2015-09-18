<?php

/*
 * kalana
 */

class main extends CI_CONTROLLER{
    
    public function index(){
       
        $this->load->view('template/header');
        $this->load->view('main');
        $this->load->view('template/footer');
                
    }
    
   
    
    
    
    
    
    
}