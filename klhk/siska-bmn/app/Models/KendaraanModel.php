<?php

namespace App\Models;

use CodeIgniter\Model;

class KendaraanModel extends Model
{
    protected $table = 'vehicles';
    protected $allowedFields = ['police_number', 'slug', 'type', 'date_tax', 'status'];
    // protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    public function set_reminder()
    {
        // kendaraan < 1 bulan 
        $sql1 = "select * from vehicles where date_tax between date_add(now(), interval 1 month) and date_add(now(), interval 2 month);";
        $query1 = $this->db->query($sql1);
        $kendaraan1 = $query1->getResult();

        // kendaraan < 2 bulan
        $sql2 = "select * from vehicles where date_tax between date_add(now(), interval 2 month) and date_add(now(), interval 3 month);";
        $query2 = $this->db->query($sql2);
        $kendaraan2 = $query2->getResult();

        // kendaraan > 2 bulan
        $sql3 = "select * from vehicles where date_tax > date_add(now(), interval 2 month);";
        $query3 = $this->db->query($sql3);
        $kendaraan3 = $query3->getResult();
        
        // kendaraan terlewat 
        $sql4 = "select * from vehicles where date_tax <= now();";
        $query4 = $this->db->query($sql4);
        $kendaraan4 = $query4->getResult();

        $data['kendaraan1'] = $kendaraan1;
        $data['kendaraan2'] = $kendaraan2;
        $data['kendaraan3'] = $kendaraan3;
        $data['kendaraan4'] = $kendaraan4;
        return $data;
    }
}
