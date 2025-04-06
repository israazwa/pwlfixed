<?php

namespace App\Controllers;
use App\Models\heroPicture;
use CodeIgniter\Controller;

class aboutUs extends Controller
{
    public function index()
    {
        $jawa = new heroPicture();
        $key = $jawa->findAll();
        $data =
            [
                'dataset' => $key,
                'title' => 'About Us',
            ];
        echo view('templateUser/header', $data);
        echo view('users/about', $data);
        echo view('templateUser/aboutVisi');
        echo view('templateUser/footer');
        return 0;
    }
}
?>