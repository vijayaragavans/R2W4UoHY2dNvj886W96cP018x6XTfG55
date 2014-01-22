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

    
    function Get_All_Categories( )
    {
    
        $this->db->select("*");
        $this->db->from(TOOL_DB_NAME.'.main_category');
        $query = $this->db->get();
        
        $db_results = $query->result_array();		 
		
		if (count($db_results) > 0 )
        { 
            return $db_results;
            
        } else {            
        
            return FALSE;
        } 		
    }
    
    
    function Insert_Baby( $response )
    {
	 	$this->db->insert(TOOL_DB_NAME.'.products', $response);
	 	return $this->db->insert_id(); 	
    
    }
}
/* End of file users_model.php */
?>