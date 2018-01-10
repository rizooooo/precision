 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RegistrationModel extends CI_Model{

	public $SecurityQuestion = 'SecurityQuestionMaster';


    function __construct() {
        parent::__construct();
    }

    public function getUserSecurityQuestion(){
		$query = $this->db->get($this->SecurityQuestion);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else
		{
			return false;
		}
	}    
}