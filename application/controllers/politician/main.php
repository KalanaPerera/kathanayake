<?php
class main extends CI_CONTROLLER{
    
    public function index(){
       
        $this->load->view('template/header');
        $this->load->view('politician/dashboard');
        $this->load->view('template/footer');    
    }
    
    public function viewProblems()
    {
		$this->load->view('template/header');
        $this->load->view('politician/viewProblems');
        $this->load->view('template/footer');    
	}
	
	public function newPost()
	{
		$this->load->view('template/header');
        $this->load->view('politician/newPost');
        $this->load->view('template/footer');   
	}
	
	public function viewQandA()
	{
		$this->load->view('template/header');
        $this->load->view('politician/viewQandA');
        $this->load->view('template/footer');
	}
	
	public function rankings()
	{
		$this->load->view('template/header');
        $this->load->view('politician/rankings');
        $this->load->view('template/footer');
	}
}