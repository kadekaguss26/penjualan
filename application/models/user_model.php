<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
    
    protected $_table = 'user';
    protected $primary = 'id';

    public function getAll()
    {
        return $this->db->where('is_active',1)->get($this->_table)->result();
    }
}