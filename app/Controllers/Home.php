<?php

namespace App\Controllers;

use App\Models\heroPicture;
use App\Models\homeIkhtisar;

class Home extends BaseController
{
    public function debug(): string
    {
        return view('welcome_message');
    }
    public function index(): string
    {
        $homeIkhtisar = new homeIkhtisar();
        $text = $homeIkhtisar->findAll();

        $heroPic = new heroPicture();
        $picture = $heroPic->findAll();

        $data = [
            'ikhtisar' => $text,
            'dataset' => $picture,
            'title' => 'Home Page'
        ];
        echo view('templateUser/header', $data);
        echo view('users/home', $data);
        echo view('templateUser/cardHorizontal');
        echo view('templateUser/aftercard');
        echo view('templateUser/footer');
        return 0;
    }
}
