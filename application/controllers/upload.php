<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	 * Controller  : Home, Landing Page
	 * Created on  : 21-Nov-2011
	 * Created By  : Vijayaragavan S
	 * Modified On :
	 * Modified By :	  
	 * Project     : FourTask
	 */

class Upload extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();        			
        // load the necessary libraries
        $this->load->library('form_validation');
        $this->load->library('parser');
        $this->load->library('core/constants');
        $this->load->library('core/sh_users');
        $this->load->helper(array('form', 'url', 'cookie'));
        
        error_reporting(0);
        
        $this->start = '';
        $this->perPage = 1;
        $this->current_date = date("Y-m-d H:i:s");
        
    }
	/*
	 * Function: Index 
	 * Purpose : Loading the landing page
	 */	
	public function index()
	{
	
        $userdata = $this->session->userdata('user');
        
        if($userdata == '')
        {
		    redirect(SITE_URL."home/index/");      
        }
	
	    $filename = 'site/'.SITE_LANG.'/upload.html' ;

	    $this->mysmarty->assign('filename', $filename);
	    $this->mysmarty->display('site/home.html'); 
		
	}
	
	
	public function login()
	{
	
       $res = $this->sh_users->processLogin( $this->security->xss_clean( $this->input->post("l_username")), md5($this->security->xss_clean( $this->input->post("l_password")))); 
	
 		if($res != 'ER' && $res != 0){
 						
			$sessionUserdata['user_id'] = $res['user_id']; 
			$sessionUserdata['user_name'] = $res['user_name'];
			$sessionUserdata['user_email'] = $res['user_email'];
			            
			$this->session->unset_userdata('user');    
		    $this->session->set_userdata(array('user'=>$sessionUserdata));
		           				           		
			// clear user lang cookie
			$cookie = array(
				'name'   => 'ss_auth_lang',
				'value'  => '',
				'expire' => '0',
				'prefix' => '',
				'path'   => '/'
			);
			delete_cookie($cookie);
			// set user lang cookie
			$cookie = array(
				'name'   => 'ss_auth_lang',
				'value'  => $res->user_id,
				'expire' => time()+60*60*24*30,
				'path'   => '/',
				'prefix' => '',
			);
			$this->input->set_cookie($cookie);

		    redirect(SITE_URL."home/welcome/");      

 			}else if($res == 'ER'){

		    redirect(SITE_URL."home/index/");      

			}
					
	}
	
	
	public function welcome()
	{
	
        $userdata = $this->session->userdata('user');
        
        if($userdata == '')
        {
		    redirect(SITE_URL."home/index/");      
        }
	
	    $filename = 'site/'.SITE_LANG.'/dashboard.html' ;

	    $this->mysmarty->assign('user', $userdata);
	    $this->mysmarty->assign('filename', $filename);
	    $this->mysmarty->display('site/home.html'); 
	}

}

/* End of file home.php */
?>