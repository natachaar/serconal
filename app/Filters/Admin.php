<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Admin implements FilterInterface {

    public function before(RequestInterface $request, $arguments = null) {
         helper('functions_helper');
        if (!validUserAdmin()) {
            return redirect()->to('/');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {
        // No necesitas nada aquí
    }
}
