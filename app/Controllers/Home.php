<?php

namespace App\Controllers;

class Home extends BaseController {

    public function index(): string {
        return view('layout/view_home_page');
    }
}
