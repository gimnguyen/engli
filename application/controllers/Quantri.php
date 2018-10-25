<?php
class Quantri extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['flag'] = 'Yes';
        $this->load->view('login.php', $data);
    }

    public function hethong()
    {
        $password = $this->input->post('password');
        if($password == '12345678x@X'){
            $adminURI = base_url(). 'YiZSzkTGaa';
            redirect($adminURI);
        }else{
            $data['flag'] = 'Error';
            $this->load->view('login.php', $data);
        }

    }
}