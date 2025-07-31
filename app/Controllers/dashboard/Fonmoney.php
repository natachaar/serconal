<?php

namespace App\Controllers\dashboard;

use App\Controllers\BaseController;
use App\Models\FonmoneyModel;

class Fonmoney extends BaseController {

    protected $FonmoneyModel;
   
    public function __construct() {
        $this->FonmoneyModel = new FonmoneyModel();
    }

    public function index() {

        echo 'aqui estoy';
    }
}


