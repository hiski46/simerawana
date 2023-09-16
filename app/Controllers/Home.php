<?php

namespace App\Controllers;

use App\Models\PaketModel;
use App\Models\TransaksiModel;
use App\Controllers\MainController;
use App\Models\MakeupModel;

class Home extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {


        $pengunjunghariini  = $this->visitor->db->query("SELECT * FROM visitor WHERE date='" . date("Y-m-d") . "' GROUP BY ip")->getNumRows(); // Hitung jumlah pengunjung

        $dbpengunjung = $this->visitor->db->query("SELECT COUNT(hits) as hits FROM visitor")->getRow();

        $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0; // hitung total pengunjung

        $bataswaktu = time() - 300;

        $pengunjungonline  = $this->visitor->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->getNumRows(); // hitung pengunjung online


        $batas_waktu = date("Y-m-d H:i:s", strtotime("-10 minutes"));
        $data = [
            'title' => "Home",
        ];
        $data['pengunjunghariini'] = $pengunjunghariini;
        $data['totalpengunjung'] = $totalpengunjung;
        $data['pengunjungonline'] = $pengunjungonline;
        return $this->template('dashboard/home', $data);
    }
}
