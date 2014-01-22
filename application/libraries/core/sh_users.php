<?php
/**
 * The Users class file.
 *
 * @category Users
 * @package  None
 * @author   Vijayaragavan Sivagurusamy
 * @license  http://www.fourtask.com 
 * @link     models/users_model.php
 * 
 */
 
class Sh_Users
{
    private $_CI;    
    // present for all users
    public $userId = '';
    public $userName = '';
    public $password = '';
    public $lastLogin = '';    
    public $status = '';    
    public $createDate = '';
    public $emailId = '';  
    public $firstName = '';
    public $lastName = '';
    public $privilage = '';  
    public $loggedIn = false;
    public $corpID = '';

    /**
     * Constructor.
     * Loads the CI instance, the users_model and some useful helpers.
     * Creates a users_lib object, populated if passed a valid $init.    
     * @param string/int $init - user id or email of user to load   
     * @access public   
     * @return none
     */
    public function __construct($init = false)
    {
        // take advantage of codeigniter libraries
        // use $this->_CI in place of normal codeigniter $this
        $this->_CI = & get_instance();
        // load users model
        $this->_CI->load->model('users_model');         
        $this->_CI->load->config('account');  
        $this->perPage = 2;
		$this->current_date = date('Y-m-d H:i:s');
        //$this->_CI->load->helper(array('form', 'url', 'cookie'));         
    }
    
    /**
     * @method login
     * @param  string  $username      email of user to login
     * @param  string  $password   password of the user to login
     * @access public 
     * @return boolean true: success, false: failure
     */
    public function processLogin($username, $password)
    {
         
    	return $this->_CI->users_model->processLogin($username,$password); 
    	
    }
    
    
}