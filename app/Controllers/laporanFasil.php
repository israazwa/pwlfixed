<?php
namespace App\Controllers;

use App\Models\laporanFasilitas;
use CodeIgniter\Controller;

class laporanFasil extends Controller
{
    public function index()
    {
        $mieayam = new laporanFasilitas();
        $bakso = $mieayam->findAll();

        $data =
            [
                'title' => 'Laporan Fasilitas',
                'data' => $bakso,
            ];

        echo view('templateAdmin/header', $data);
        echo view('/admin/laporan/fasilitas', $data);
        return 0;
    }


    public function delete($id = null)
    {
        $laporanUser = new laporanFasilitas();

        $data = $laporanUser->find($id);

        if ($data) {
            if (isset($data['foto']) && $data['foto'] != null) {
                $filePath = WRITEPATH . '../public/laporan/fasilitas/' . $data['foto'];
                if (is_file($filePath)) {
                    unlink($filePath);
                }
            }
            $laporanUser->delete($id);
            return redirect()->to('/adminlprr')->with('success', 'Data berhasil dihapus!');
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }
    }


    public function update($id)
    {
        $laporanUser = new laporanFasilitas();

        $bakso = $laporanUser->find($id);

        if (!$bakso) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        $image = $this->request->getFile('image'); // Ambil file gambar dari input
        $fileName = $bakso['foto']; // Default gunakan foto lama

        if ($image && $image->isValid() && !$image->hasMoved()) {
            $fileName = $image->getRandomName();
            $image->move(WRITEPATH . '../public/laporan/fasilitas', $fileName);

            // Hapus foto lama jika ada
            if (!empty($existingData['foto'])) {
                $oldFilePath = WRITEPATH . '../public/' . $bakso['foto'];
                if (is_file($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }
        }

        $updateData = [
            'email' => $this->request->getPost('email'),
            'nama' => $this->request->getPost('nama'),
            'content' => $this->request->getPost('buku'),
            'jenis' => $this->request->getPost('jenis'),
            'masalah' => $this->request->getPost('masalah'),
            'foto' => $fileName ? 'uploads/' . $fileName : null,
            'updated' => date('Y-m-d H:i:s'), // Tambahkan kolom `updated` jika ada
        ];

        if ($laporanUser->update($id, $updateData)) {
            return redirect()->to('/adminlprr')->with('success', 'Data berhasil diperbarui!');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data.');
        }
    }
} ?>