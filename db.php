<?php
class User {
	private $dbHost     = "localhost";
	private $dbUsername = "root";
	private $dbPassword = "rockdesdem21";
	private $dbName     = "id5152188_tfast";
	private $infoTable    = 'info';
	private $userTbl = 'users';
    
    function __construct(){
        if(!isset($this->db)){
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
		echo "Hecho!!!";
                $this->db = $conn;
            }
        }
    }
    
    function checkUser($userData = array()){
        if(!empty($userData)){
            echo 'SONRIENTE: '.$userData['first_name'];
            //Check whether user data already exists in database
            $prevQuery = "SELECT * FROM ".$this->userTbl." WHERE oauth_provider = '".$userData['oauth_provider']."' AND oauth_uid = '".$userData['oauth_uid']."'";
            $prevResult = $this->db->query($prevQuery);
 

            if($prevResult->num_rows > 0){
                //Update user data if already exists
                $query = "UPDATE ".$this->userTbl." SET first_name = '".$userData['first_name']."', email = '".$userData['email']."', locale = '".$userData['locale']."', picture = '".$userData['picture']."', link = '".$userData['link']."', modified = '".date("Y-m-d H:i:s")."' WHERE oauth_provider = '".$userData['oauth_provider']."' AND oauth_uid = '".$userData['oauth_uid']."'";
		echo $query; 
                $update = $this->db->query($query);
            }else{
                //Insert user data
                $query = "INSERT INTO ".$this->userTbl." SET oauth_provider = '".$userData['oauth_provider']."', oauth_uid = '".$userData['oauth_uid']."', first_name = '".$userData['first_name']."', email = '".$userData['email']."', locale = '".$userData['locale']."', picture = '".$userData['picture']."', link = '".$userData['link']."', created = '".date("Y-m-d H:i:s")."', modified = '".date("Y-m-d H:i:s")."'";
		echo $query; 
                if(!$this->db->query($query)){ printf("Error : %s\n",$this->db->error); exit(-1);}
		
            }

           
            //Get user data from the database
            $result = $this->db->query($prevQuery);
            $userData = $result->fetch_assoc();
        }
        return $userData;
    }

    function getData($user){
      // Vulnerable to SQLi attacks.
      $prevQuery = "SELECT * FROM ".$this->infoTable." WHERE user = '".$user."'"; 
      $prevResult = $this->db->query($prevQuery);

      $user_Data = $prevResult->fetch_assoc();
      return $user_Data;

    }

}
?>
