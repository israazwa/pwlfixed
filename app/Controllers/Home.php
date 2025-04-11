<?php

namespace App\Controllers;

use App\Models\heroPicture;
use App\Models\homeIkhtisar;
use App\Models\pengumuman;

class Home extends BaseController
{
    public function debug(): string
    {
        return view('welcome_message');
    }
    public function index(): int
    {
        $pengumuman = new pengumuman();
        $alert = $pengumuman->find();

        $homeIkhtisar = new homeIkhtisar();
        $text = $homeIkhtisar->findAll();

        $heroPic = new heroPicture();
        $picture = $heroPic->findAll();

        $data = [
            'pengumuman' => $alert,
            'ikhtisar' => $text,
            'dataset' => $picture,
            'title' => 'Home Page'
        ];
        echo view('templateUser/header', $data);
        echo view('users/home', $data);
        echo view('templateUser/cardHorizontal');
        echo view('templateUser/aftercard', $data);
        echo view('templateUser/footer');
        return 0;
    }
}
