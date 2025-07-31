<?php

namespace App\Controllers\dashboard;

use App\Controllers\BaseController;
use App\Models\FonmoneyModel;
use App\Models\OceancardModel;
use App\Models\CuballamaModel;

class Dashboard extends BaseController {

    protected $FonmoneyModel;
    protected $OceancardModel;
    protected $CuballamaModel;

    public function __construct() {
        $this->FonmoneyModel = new FonmoneyModel();
        $this->OceancardModel = new OceancardModel();
        $this->CuballamaModel = new CuballamaModel();
    }

    public function index() {

        $query = 'SELECT * FROM transaction WHERE trans_status = 200';
        
        $data['TransFM'] = $this->FonmoneyModel->numRows($query);
        $data['TransOC'] = $this->OceancardModel->numRows($query);
        $data['TransCU'] = $this->CuballamaModel->numRows($query);

        return view('layout/view_home_dashboard', $data);
    }
}
