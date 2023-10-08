<?php

namespace App\Controllers;

use App\Controllers\MainController;
use App\Models\BiodataModel;
use App\Models\CarouselModel;
use App\Models\MakeupModel;
use App\Models\PaketCategoryModel;
use App\Models\PaketModel;
use App\Models\PortofolioModel;
use App\Models\TeknologiModel;
use App\Models\TransaksiModel;
use Exception;

class LandingController extends MainController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->countVisitor();
        $biodata = new BiodataModel();
        $portofolio = new PortofolioModel();
        $teknologiModel = new TeknologiModel();

        $carousel = new CarouselModel();
        $data = $biodata->getBiodata();
        $data['teknologi'] = $teknologiModel->findAll();
        $data['carousel'] = $carousel->findAll();
        $data['title'] = 'Home';
        $data['nav_active'] = 'home';
        $data['porto'] = $portofolio->where('is_active', 1)->findAll();
        return $this->templateLanding('landingpage/home', $data);
    }

    public function countVisitor()
    {
        $ip    = $this->request->getIPAddress(); // Mendapatkan IP user
        $date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
        $waktu = time(); //
        $timeinsert = date("Y-m-d H:i:s");

        // Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
        $s = $this->visitor->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->getNumRows();
        $ss = isset($s) ? ($s) : 0;


        // Kalau belum ada, simpan data user tersebut ke database
        if ($ss == 0) {
            $this->visitor->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        }

        // Jika sudah ada, update
        else {
            $this->visitor->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }
    }
}
