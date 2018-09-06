<?php
declare(strict_types = 1);

namespace App\Controllers;

use App\DatabaseRelated\Database;

class HomeController
{
	private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function show()
    {
    	$this->db->query('SELECT * FROM Test');
    	print_r($this->db->execute());
    }
}
