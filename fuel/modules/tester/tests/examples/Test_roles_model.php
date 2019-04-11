<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

require_once(BASEPATH.'core/Model.php');
require_once(APPPATH.'core/MY_Model.php');

class Test_roles_model extends MY_Model {


	public $friendly_name = 'Roles';
	public $singular_name = 'Role';
//	public $has_many = array('roles' => array(FUEL_FOLDER => 'categories'));
	
	function __construct()
	{
		parent::__construct('roles');
	}
	
	function _common_query()
	{
		$this->db->select('roles.*, CONCAT(name, " ", slug) as name_and_slug', FALSE);
	}
}


class Test_role_model extends Data_record {
	public $name_and_slug;
	
	function get_name_and_slug()
	{
		$name_and_slug = $this->name.' '.$this->slug;
		return $name_and_slug;
	}
     
}

