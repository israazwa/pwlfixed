<?php
namespace App\Controllers;

use App\Models\laporanFasilitas;
use CodeIgniter\Controller;

class userFasilitas extends BaseController
{

    // HALAMAN UTAMA JIKA KLIK 
    public function index()
    {
        $bakso = new laporanFasilitas();
        $miayam = $bakso->findAll();

        $data =
            [
                'title' => 'Aduan Fasilitas',
                'record' => $miayam
            ];

        echo view('templateUser/header', $data);
        echo view('users/laporanFasilitas', $data);
        echo view('templateUser/footer', $data);
        return 0;
    }


    public function store()
    {
        $laporanUser = new laporanFasilitas();

        $image = $this->request->getFile('image');
        $fileName = null;


        if ($image && $image->isValid() && !$image->hasMoved()) {
            $fileName = $image->getRandomName();
            $image->move(WRITEPATH . '../public/laporan/fasilitas', $fileName);
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
            return redirect()->to('/laporfasilitas')->with('success', 'Data laporan berhasil disimpan!');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan data.');
        }
    }


} ?>