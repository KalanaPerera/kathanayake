<?php
class main extends CI_CONTROLLER{
    
    public function index(){
       
        $this->load->view('template/header');
        $this->load->view('staff/staffMainView');
        $this->load->view('template/footer');
        
        
        
    }
    
    public function newPost()
    {
		$this->load->view('template/header');
        $this->load->view('staff/newPost');
        $this->load->view('template/footer');
	}
	
	public function postQulityCheck()
	{
		$this->load->view('template/header');
        $this->load->view('staff/postQulityCheck');
        $this->load->view('template/footer');
	}
    
    public function communityProjects()
    {
		$this->load->view('template/header');
        $this->load->view('staff/communityProject');
        $this->load->view('template/footer');
	}
	
	public function politician()
	{
		$this->load->view('template/header');
        $this->load->view('staff/politician');
        $this->load->view('template/footer');
	}
	
	public function politicianOverview()
	{
		$this->load->view('template/header');
        $this->load->view('staff/politicianOverview');
        $this->load->view('template/footer');
	}
    
    public function login()
    {
		$this->load->view('template/header');
        $this->load->view('staff/staffLogin');
        $this->load->view('template/footer');
	}
}
?>