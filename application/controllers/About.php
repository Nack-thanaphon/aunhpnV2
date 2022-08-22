<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('includes/script');
        $this->load->view('about/index.php');
        $this->load->view('includes/footer');
    }

   
    public function contactus()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('includes/script');
        $this->load->view('about/contact_us.php');
        $this->load->view('includes/footer');
    }
    public function hur()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('includes/script');
        $this->load->view('about/hur.php');
        $this->load->view('includes/footer');
    }
    public function hur_detail()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('includes/script');
        $this->load->view('about/hur_detail.php');
        $this->load->view('includes/footer');
    }
    public function iac()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('includes/script');
        $this->load->view('about/iac.php');
        $this->load->view('includes/footer');
    }



    public function sendmail()
    {

        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $title = $this->input->post('title');
        $detail = $this->input->post('detail');

        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp3.netcore.co.in',
            'smtp_port' => 25,
            'smtp_user' => 'AUN-HPN.mahidol@gmail.com',
            'smtp_pass' => 'f6e64gq6',
            'charset' => 'utf-8',
            'wordwrap' => TRUE
        );

        $this->load->library('email', $config);
        $this->email->from($email);
        $this->email->to('AUN-HPN.mahidol@gmail.com');
        $this->email->cc($email);
        $this->email->bcc('');

        $this->email->subject($title);
        $this->email->message($detail);

        if (!$this->email->send()) {
            // Generate error
            echo "Email is not sent!!";
        } else {
            redirect(base_url('/'));
        }
        // echo $this->email->print_debugger();
    }
}
