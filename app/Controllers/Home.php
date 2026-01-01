<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function testDB()
    {
        $db = \Config\Database::connect();
        return $db->connect() ? 'Koneksi OK' : 'Gagal';
    }
}
