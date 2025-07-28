<?php

namespace App\Controllers;

class Dashboard extends BaseController {

    public function index() {
           return view('layout/view_home_dashboard');
    }
}
