<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function showLogin()
    {
        // Tampilkan halaman login
        return view('login');
    }

    public function studentLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $this->userModel->where('username', $username)
                                ->where('role', 'student')
                                ->first();

        if ($user && $pass = $userModel->where('password', $password)->first()) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = 'student';
            return redirect()->to('/student/dashboard');
        } else {
            return redirect()->to('/login')->with('error', 'Login failed for student');
        }
    }

    // Fungsi login untuk guru (teacher) dan admin akan serupa
}
