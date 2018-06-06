<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$this->load->view('welcome_message');
	}
	
	/**
	 * Signup method.
	 * runs the form validation of the registration form.
	 */
	public function signup() {
	    /**
	     * set_rules($fieldname, $humanname, $rule, [$custom_errors])
	     * $humanname- name which will be inserted into error message.
	     * $custom_errors - set of custom error messages on any rules givern for current field.
	     */
	    #set form validation rules.
	    $this->form_validation->set_rules('username', 'Username', 'required');
	    $this->form_validation->set_rules('email', 'Email', 'required');
	    $this->form_validation->set_rules('password', 'Password', 'required');
	    $this->form_validation->set_rules('mobile', 'Phone_number', 'required');
	    
	    #check if form validation runs successfully.
	    if ($this->form_validation->run()) {
	        $this->load->model('queries'); #load the model
	        
	        $data = $this->input->post(); #store form input user values in $data.
	        unset($data['submit']); #unset so as to remove $data['submit'] from $data values.
	        
	        if ($this->queries->register($data)) {
	            /*
	             * set_flashdata($data, [$value]) === $_SESSION['data'] = 'value'
	             * eg: set_flashdata('username', 'ian') === $_SESSION['username'] = 'ian';
	             */
	            $this->session->set_flashdata('response', 'Registered Successfully');
	        } else {
	            $this->session->set_flashdata('response', 'Registration Failed!!');
	        }
	        return redirect('welcome');
	    } else { #show error if form validation fails.
	        return $this->index();
	    }
	}
	
	public function signin() {
	    #set form validation rules.
	    $this->form_validation->set_rules('email', 'Email', 'required');
	    $this->form_validation->set_rules('password', 'Password', 'required');
	    
	    if ($this->form_validation->run()) {
	        $this->load->model('queries'); #load the model
	        
	        #grab the email & password user vals in sign in form.
	        $email = $this->input->post('email');
	        $password = $this->input->post('password');
	        
	        $user = $this->queries->login($email, $password);
	        
	        if ($user) {
	           $session_data = [
	               'user_id' => $user->user_id,
	               'username' => $user->username,
	               'email' => $user->email,
	               'user_role_id' => $user->user_role_id,
	               'mobile' => $user->mobile
	           ];  
	           $this->session->set_userdata($session_data);
	           return redirect('dashboard');
	        } else {
	            return redirect('welcome');
	        }
	    } else {
	        $this->load->view('welcome_message.php');
	    }
	}
}
