<?php

namespace App\Controllers;

use App\Models\heroPicture;
use App\Models\homeIkhtisar;
use App\Models\homepic;

class heroAdmin extends BaseController
{
    public function index()
    {
        $homepic = new heroPicture();
        $data = $homepic->findAll();
        $dataUmum = [
            'title' => 'Admin'
        ];
        echo view('templateAdmin/header', $dataUmum);
        return view('admin/heroSection', compact('data'));
    }
    public function create()
    {
        $homepic = new heroPicture();

        $image = $this->request->getFile('image'); // Ambil file gambar dari input
        $fileName = null;


        if ($image && $image->isValid() && !$image->hasMoved()) {
            $fileName = $image->getRandomName();
            $image->move(WRITEPATH . '../public/home', $fileName);
        }

        $data =
            [
                'content' => $fileName ? 'home/' . $fileName : null,
                'created' => date('Y-m-d H:i:s'),
            ];

        if ($homepic->insert($data)) {
            return redirect()->to('/adminhero')->with('success', 'Data laporan berhasil disimpan!');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan data.');
        }
    }

    public function drop($id)
    {
        $homepic = new heroPicture();

        // Cari data berdasarkan ID
        $record = $homepic->find($id);

        if ($record) {
            // Hapus file dari direktori jika ada
            if (!empty($record['content']) && file_exists(WRITEPATH . '../public/' . $record['content'])) {
                unlink(WRITEPATH . '../public/' . $record['content']);
            }

            // Hapus data dari database
            if ($homepic->delete($id)) {
                return redirect()->to('/adminhero')->with('success', 'Data berhasil dihapus!');
            } else {
                return redirect()->back()->with('error', 'Gagal menghapus data.');
            }
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }
    }

    public function update($id)
    {
        $homepic = new heroPicture();

        // Cari data berdasarkan ID
        $record = $homepic->find($id);

        if (!$record) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        $image = $this->request->getFile('image'); // Ambil file gambar dari input
        $fileName = $record['content']; // Ambil nama file lama sebagai default

        if ($image && $image->isValid() && !$image->hasMoved()) {
            // Hapus file lama jika ada
            if (!empty($record['content']) && file_exists(WRITEPATH . '../public/' . $record['content'])) {
                unlink(WRITEPATH . '../public/' . $record['content']);
            }

            // Upload file baru
            $fileName = $image->getRandomName();
            $image->move(WRITEPATH . '../public/home', $fileName);
            $fileName = 'home/' . $fileName;
        }

        // Data yang akan diperbarui
        $data = [
            'content' => $fileName,
            'created' => date('Y-m-d H:i:s'),
        ];

        if ($homepic->update($id, $data)) {
            return redirect()->to('/adminhero')->with('success', 'Data berhasil diperbarui!');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data.');
        }
    }

    public function logout()
    {
        // Hancurkan semua session
        session()->destroy();

        // Redirect ke halaman login atau homepage
        return redirect()->to('/login')->with('success', 'Anda telah logout.');
    }

}