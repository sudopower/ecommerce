<?php

 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
        function temp()
        {
            return $this->db->query("INSERT INTO test.sensor (value) VALUES ('".$_GET["value"]."')");
        }

     function gettop10users()
     {
        return $this->db->query("SELECT username,COUNT(username) as value_occurrence FROM users GROUP by username order by value_occurrence DESC LIMIT 5;")->result_array();
        
     }
     function gettop10mostsold()
     {
        return $this->db->query("SELECT products.name,COUNT(orders.id) AS `value_occurrence` FROM products,orders GROUP BY name ORDER BY `value_occurrence` DESC LIMIT 5;")->result_array();

     }
    

    function gettop10products()
    {
        return $this->db->query("SELECT name,category FROM products LIMIT 5;" )->result_array();
       
     }
    }

