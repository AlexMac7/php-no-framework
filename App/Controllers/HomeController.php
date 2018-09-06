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
    	// $name = ! empty($_GET['name']) ? $_GET['name'] : 'Bobbeh';
    	print_r($this->db);

    	// echo '<h1>Hello!</h1>' . '<h2>' . $name . '</h2>';
    }
}
