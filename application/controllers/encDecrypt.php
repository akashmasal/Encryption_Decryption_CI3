<?php

class encDecrypt extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Encdec_Model");
    }

    public function index(){
        $data['users_data'] = $this->Encdec_Model->fetch_data();
        $this->load->view("enc_dec",$data);
    }

    public function insert()
    {
        $this->load->view("insert_data");
    }

    public function insert_validation()
    {
        $this->form_validation->set_rules("first_name","first name","required");
        $this->form_validation->set_rules("last_name","last name","required");
        $this->form_validation->set_rules("age","Age","required");
        $this->form_validation->set_rules("gender","gender","required");

        if($this->form_validation->run() == false)
        {
            $this->insert();
        }
        else
        {
            $data = array(
                "first_name" => $this->encrypt->encode($_POST['first_name']),
                "last_name" => $this->encrypt->encode($_POST['last_name']),
                "age" => $this->encrypt->encode($_POST['age']),
                "gender" => $this->encrypt->encode($_POST['gender'])
            );
            $this->Encdec_Model->insert($data);
            $this->session->set_flashdata("success","data inserted");
            redirect(base_url("encDecrypt"));

        }
        
    }
}



?>