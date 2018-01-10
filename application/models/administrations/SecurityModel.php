<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SecurityModel extends CI_Model{
	
	public $users = 'users';

    function __construct() {
        parent::__construct();
    }

    public function showUserMaster(){
		$this->db->order_by('id', 'desc');
		$query = $this->db->get($this->users);
		if($query->num_rows() > 0){
			return $query->result();
		}
		else
		{
			return false;
		}
	}
    
    
}