<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model
{
	function in($nama,$pass)
	{
		return $this->db->query("SELECT * FROM user where nama='$nama' AND pass=md5('$pass') ");
	}
}
?>