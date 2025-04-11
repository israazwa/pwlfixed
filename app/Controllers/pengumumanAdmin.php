<?php
namespace App\Controllers;

use App\Models\Pengumuman;
use CodeIgniter\Controller;

class pengumumanAdmin extends BaseController
{
    public function index()
    {
        $model = new Pengumuman();
        $data = [
            'title' => 'List Pengumuman',
            'pengumuman' => $model->findAll(),
        ];

        echo view('templateAdmin/header', $data);
        echo view('admin/merah', $data);
        return 0;
    }

    public function create()
    {
        $model = new Pengumuman();
        $data = [
            'tgl' => $this->request->getPost('tgl'),
            'content' => $this->request->getPost('content'),
            'cp' => $this->request->getPost('cp'),
            'pj' => $this->request->getPost('pj'),
            'created' => date('Y-m-d H:i:s'),
            'link' => $this->request->getPost('link'),
        ];

        if ($model->insert($data)) {
            session()->setFlashdata('success', 'Pengumuman berhasil ditambahkan!');
        } else {
            session()->setFlashdata('error', 'Pengumuman gagal ditambahkan!');
        }

        return redirect()->to('/admin/pengumuman');
    }

    public function edit($id)
    {
        $model = new Pengumuman();
        $data = $model->find($id);

        return view('/admin/pengumuman', ['pengumuman' => $data]);
    }

    public function update($id)
    {
        $model = new Pengumuman();
        $data = [
            'tgl' => $this->request->getPost('tgl'),
            'content' => $this->request->getPost('content'),
            'cp' => $this->request->getPost('cp'),
            'pj' => $this->request->getPost('pj'),
            'link' => $this->request->getPost('link'),
        ];

        $model->update($id, $data);
        return redirect()->to('/admin/pengumuman');
    }

    public function delete($id)
    {
        $model = new Pengumuman();
        $model->delete($id);

        return redirect()->to('/admin/pengumuman');
    }
}