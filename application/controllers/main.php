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
    
   
    public function map_feeds(){
        
        
        $this->load->view('template/header');
        $this->load->view('map/feeds');
        $this->load->view('template/footer');
        
        
        
    }
    
    
    public function fund_project(){
        
        $this->load->view('template/header');
        $this->load->view('fund_project');
        $this->load->view('template/footer');
        
        
        
        
    }
    
    
    
    
    
}