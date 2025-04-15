<?php

namespace App\Controllers;

use App\Models\laprBuku;
use CodeIgniter\Controller;

class userBuku extends BaseController
{

    public function index()
    {
        $laporanUser = new laprBuku();
        $buku = $laporanUser->getdata();

        $data = [
            'title' => 'lapor buku',
            'buku' => $buku
        ];

        echo view('templateUser/header', $data);
        echo view('users/laporanBukku', $data);
        echo view('templateuser/footer', $data);
        return 0;
    }

    public function create()
    {
        $laporanUser = new laprBuku();

        $image = $this->request->getFile('image');
        $fileName = null;


        if ($image && $image->isValid() && !$image->hasMoved()) {
            $fileName = $image->getRandomName();
            $image->move(WRITEPATH . '../public/laporan/buku', $fileName);
        }


        $data = [
            'email' => $this->request->getPost('email'),
            'nama' => $this->request->getPost('nama'),
            'content' => $this->request->getPost('buku'),
            'jenis' => $this->request->getPost('jenis'),
            'masalah' => $this->request->getPost('masalah'),
            'foto' => $fileName ? 'uploads/' . $fileName : null,
            'created' => date('Y-m-d H:i:s'),
        ];


        if ($laporanUser->insert($data)) {
            return redirect()->to('/laporbuku')->with('success', 'Data laporan berhasil disimpan!');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan data.');
        }
    }


} ?>