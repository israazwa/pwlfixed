<?php

namespace App\Controllers;

use App\Models\loginAdmin;
use CodeIgniter\Controller;

class formLoginAdmin extends Controller
{
    public function login()
    {
        $data = [
            'title' => 'Login Admin'
        ];

        // Menampilkan halaman login
        return view('admin/loginAdmin', $data);
    }

    public function doLogin()
    {
        $session = session();
        $model = new loginAdmin();

        // Mendapatkan input dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Memeriksa kredensial
        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Simpan data user ke session
            $session->set('user', $user);
            return redirect()->to('/adminDjawaateeth'); // Redirect ke halaman dashboard
        } else {
            // Jika gagal login
            $session->setFlashdata('error', 'Username atau password salah!');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        // Menghapus session
        $session = session();
        $session->destroy();
        return redirect()->to('/login'); // Redirect ke halaman login
    }
}