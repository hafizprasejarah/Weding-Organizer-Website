<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminDashboardController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }
}
