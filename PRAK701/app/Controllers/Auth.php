<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        return view('auth/login'); 
    }

    public function doLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Login sederhana
        if ($username === 'admin' && $password === 'admin123') {
            session()->set('logged_in', true);
            return redirect()->to('/utama'); 
        } else {
            return redirect()->back()->withInput()->with('error', 'Username atau password salah!');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
