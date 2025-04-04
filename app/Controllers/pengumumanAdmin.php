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

        return view('pengumuman/index', $data);
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

        $model->insert($data);
        return redirect()->to('/pengumuman');
    }

    public function edit($id)
    {
        $model = new Pengumuman();
        $data = $model->find($id);

        return view('pengumuman/edit', ['pengumuman' => $data]);
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
        return redirect()->to('/pengumuman');
    }

    public function delete($id)
    {
        $model = new Pengumuman();
        $model->delete($id);

        return redirect()->to('/pengumuman');
    }
}