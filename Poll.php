
<?php
/**
 * Counting system
 * @author developer
 * 
 */
class Poll
{
    private $dbHost  = 'localhost';
    private $dbUser  = 'root';
    private $dbPwd   = '';
    private $dbName  = 'votes';            
    
    public function __construct(){
        if(!$this->db){ 
            // Connect to the database
            // DB sturcture is vote_id | user_id | cand_id | vote_date_time
            $conn = new mysqli($this->dbHost, $this->dbUser, $this->dbPwd, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }
    
    /** Gets user_id row limit 3
     * Here only first 3 entries of a user is taken into consideration.
     * @param type $user_id
     * @return type
     */
    public function getVotes($user_id)
    {
        $select = $this->select()
            ->from(array('votes' => $this->_name))
            ->where('user_id = ?', $orgId)
            ->order('user_id desc')
            ->limit(3)
            ;
        return $this->fetchRow($select);
    }

    
    /** Gets user_id row limit 3
     * Here only first 3 entries of a user is taken into consideration.
     * @param type $user_id
     * @return type
     */
    
    
    public function countVotes()
             
    {
        $sql = "SELECT user_id, cand_id, count(*) FROM votes group by user_id";
        $result = $this->_db->fetchRow($sql);

        return $result;
         
    }
     
    /** Gets results in percent
     * 
     * @param type $user_id
     * @return type
     */
    
     public function resultVotes()
             
    {    
        set_time_limit(60); //Set time to 60 seconds. 
        $percent = 10000000;
        $votepercent = ($total*$percent)/100;
        $data = array(
                'cand_id' => $cand_id,
                'total' => $total,
                'percent' => $percent
            );
         $resultvotes->insert($data);       
    }        

         
}              
           
     
        
    
    
    
    
    
    



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

