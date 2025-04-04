<?php
namespace App\Controllers;


class LaporanAdmin extends BaseController
{

    public function index()
    {


        $data = [
            'title' => 'Laporan || Admin'
        ];
        echo view('templateAdmin/dashboardLaporan', $data);
        return 0;
    }
}

?>