<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $db = \Config\Database::connect();

        $query   = $db->query('SELECT 1=1 as res');
        $results = $query->getRow();

        return view('welcome_message', ['title' => 'Home', 'res' => $results]);
    }
}
