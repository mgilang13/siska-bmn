<?php

namespace App\Controllers;

use App\Models\KendaraanModel;

class Kendaraan extends BaseController
{
    protected $kendaraanModel;

    public function  __construct()
    {
        $this->kendaraanModel = new KendaraanModel();
    }

    public function index()
    {
        $kendaraans = $this->kendaraanModel->findALl();
        $data = [
            'active'        => "active",
            'kendaraans'    => $kendaraans
        ];

        return view('dashboard/kendaraan', $data);
    }

    public function setReminder()
    {
        $data_kendaraan = $this->kendaraanModel->set_reminder();
        return $data_kendaraan;
    }

    public function save()
    {
        $police_number = $this->request->getPost('police_number');

        $data = array(
            'police_number' => $police_number,
            'slug'          => url_title($police_number, '-', true),
            'type'          => $this->request->getPost('type'),
            'date_tax'      => $this->request->getPost('date_tax'),
            'status'        => 'aman',
        );
        $this->kendaraanModel->insert($data);
        return redirect()->to('/kendaraan');
    }

    public function update()
    {
        $police_number  = $this->request->getPost('police_number');
        $id             = $this->request->getPost('id_vehicle');

        $data = array(
            'police_number' => $police_number,
            'slug'          => url_title($police_number, '-', true),
            'type'          => $this->request->getPost('type'),
            'date_tax'      => $this->request->getPost('date_tax')
        );
        $this->kendaraanModel->update($id, $data);
        return redirect()->to('/kendaraan');
    }

    public function delete()
    {
        $id             = $this->request->getPost('id_vehicle');
        $this->kendaraanModel->delete($id);
        return redirect()->to('/kendaraan');
    }
}
