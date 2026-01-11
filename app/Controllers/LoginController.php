<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{
    public function index()
    {
        return view('/admin/login');
    }

    public function login()
    {


        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if (!$email || !$password) {
            return redirect()->back()->with('error', 'Data tidak lengkap'. $email);
        }

        $model = new UserModel();

        $admin = $model->where('email', value: $email)
            ->where('role', 'super_admin')
            ->first();

        if (!$admin) {
            return  redirect()->back()->with('error', 'email tidak ditemukan');
        }

        $check = password_verify($password, $admin['password']);

        if (!$check) {
            return redirect()->back()->with('error', 'Password salah');
        }

        session()->set([
            'admin_id' => $admin['id'],
            'admin_username' => $admin['username'],
            'is_admin_login' => true,
        ]);

        return redirect()->to('/admin/dashboard');
    }


    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login');
    }
}
