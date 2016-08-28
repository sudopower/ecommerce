<?php

 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    
     function gettop10users()
     {
        return $this->db->query("SELECT fname,lname,order_history FROM users order by count(order_history); ")->result_array();
     }
    

    function gettop10products()
    {
        return $this->db->query("SELECT name,category_id FROM products;" )->result_array();
     }
    }

