<?php
class Cliente extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('cliente_model');
        $this->load->helper('url_helper');
    }
    
    public function index()
    {
        $this->load->view('cliente_view');
    }
    
    public function criar()
    {
        
    }
}