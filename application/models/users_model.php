<?php
/**
 * The users model
 *
 * @category Users
 * @package  None
 * @author   Vijayaragavan Sivagurusamy
 * @license  http://www.fourtask.com
 * @link     libraries/core/users.php
 *
 */
 
class Users_Model extends CI_Model
{
 
	 public $_dataMap = ''; 
	 
    function processLogin($username, $password)
    {
    	
		$sqls = 'CALL Login( "'.$username.'", "'.$password.'")';
		
		$qresult = $this->db->query($sqls);
    	
		$db_results = $qresult->result_array();
		
		if (count($db_results) > 0 )
        {
        	return $db_results[0];
            
        }else{
        	 return 'ER';
        } 
            
    }
    
}
/* End of file users_model.php */
?>