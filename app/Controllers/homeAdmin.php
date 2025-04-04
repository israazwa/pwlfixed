<?php

namespace App\Controllers;

use App\Models\homeIkhtisar;
use App\Models\homepic;

class homeAdmin extends BaseController
{
    public function index()
    {
        $Ikhtisar = new homeIkhtisar();
        $record = $Ikhtisar->findAll();

        $data = [
            'content' => $record,
            'title' => 'Admin || Labu'
        ];
        echo view('templateAdmin/header', $data);
        echo view('admin/home', $data);
        echo view('templateAdmin/footer');
    }
    public function updateIkhtisar($id)
    {
        $homeIkhtisar = new homeIkhtisar();
        $record = $homeIkhtisar->find($id);

        if (!$record) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        // Data yang akan diperbarui
        $data = [
            'content' => $this->request->getPost('content'),
            'created' => date('Y-m-d H:i:s'),
        ];

        if ($homeIkhtisar->update($id, $data)) {
            return redirect()->to('/adminDjawaateeth')->with('success', 'Data berhasil diperbarui!');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data.');
        }
    }
}